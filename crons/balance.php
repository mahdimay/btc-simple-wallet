<?PHP
include_once('../config.php');
$sql = "SELECT user FROM users";
$result = $con->query($sql);
$balance = 0;
while ($row = $result->fetch_assoc()){
    $user = $row['user'];
    $sql2 = "SELECT address FROM address WHERE user='$user'";
    $result2 = $con->query($sql2);
    while ($row2 = $result2->fetch_assoc()){
        $address = $row2['address'];
        $url = "https://chain.so/api/v2/get_address_balance/BTC/$address";
        $decoded = json_decode($url, TRUE);
        $confirmed = $decoded['data']['confirmed_balance'];
        $balance = $balance + $confirmed;
      
    }
      $sql3 = "UPDATE users SET total='$balance' WHERE user='$user'";
      if($con->query($sql3) === TRUE){
          
      }
}