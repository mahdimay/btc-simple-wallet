<?PHP
include_once('config.php');
$user = $_POST['user'];
$amount = $_POST['amount'];
$receiver = $_POST['receiver'];
 $balance = 0;
 $balancedb = 0;
  $sql = "SELECT address, currency FROM address WHERE user='$user'";
  
                                $result = $con->query($sql);
                               
                                while ($row = $result->fetch_assoc()){
                                    $address = $row['address'];
                                    $currency = $row['currency'];
                                    $url = file_get_contents("https://chain.so/api/v2/get_address_balance/BTC/$address");
                                    $data = json_decode($url, TRUE);
                                    $confirmed = $data['data']['confirmed_balance'];
                                    $balance = $balance + $confirmed;
                                  
                                }
                               
                                 $sql2 = "SELECT balance, address FROM balance WHERE user='$user'";
                                $result2 = $con->query($sql2);
                                if ($result2->num_rows > 0){
                                while($row2 = $result2->fetch_assoc()){
                                    $bconfirmed = $row2['balance'];
                                    $balancedb = $balancedb + $bconfirmed;
                                    
                                }
}
$balancedb = $balancedb - 0.0005;
$balance = $balance- 0.0005;

    if ($balancedb == $balance){

        require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup('PRIVATE_KEY', 'PUBLIC_KEY');

	$result = $cps->CreateWithdrawal($amount, 'BTC', $receiver);
	if ($result['error'] == 'ok') {
	    $id = $result['result']['id'];
	    $result2 = $cps->GetTX("$id");
	$tx = $result['result']['send_txid'];
	    $sql3 = "INSERT INTO history (user, amount, id, tx, receiver) VALUES ('$user', '$amount', '$id', '$tx', '$receiver')";
	    if ($con->query($sql3) === TRUE){
	        
	    }
		print 'Withdrawal created with ID: '.$result['result']['id'];
	} else {
		echo 'Error: '.$result['error']."\n";

	}

    }
             