<?php
include_once('config.php');
$user = $_POST['user'];
	require('./coinpayments.inc.php');
	$cps = new CoinPaymentsAPI();
	$cps->Setup('PRIVATE_KEY', 'PUBLIC-KEY');

	$result = $cps->GetCallbackAddress('BTC', 'ipn_url');
	if ($result['error'] == 'ok') {
		
		$address = $result['result']['address'];
		$date = date();
		$sql = "INSERT INTO address (user, address, currency, date) VALUES ('$user', '$address', 'BTC', '$date')";
		$sql2 = "INSERT INTO balance (user, address, balance) VALUES ('$user', '$address', '0')";
		
		if ($con->query($sql) === TRUE){
		    
		}
		if ($con->query($sql2) === TRUE){
		    
		}
	} else {
		print 'Error: '.$result['error']."\n";
	}
