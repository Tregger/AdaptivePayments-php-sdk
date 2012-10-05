<?php
require_once __DIR__ . '/../vendor/autoload.php';

$logger = new PPLoggingManager('PaymentDetails');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$paymentDetailsReq = new PaymentDetailsRequest($requestEnvelope);
if($_POST['payKey'] != "") {
	$paymentDetailsReq->payKey = $_POST['payKey'];
}
if($_POST['transactionId'] != "") {
	$paymentDetailsReq->transactionId = $_POST['transactionId'];
}
if($_POST['trackingId'] != "") {
	$paymentDetailsReq->trackingId = $_POST['trackingId'];
}
$logger->log("Created paymentDetailsRequest Object");


$service = new AdaptivePaymentsService();
try {
	$response = $service->PaymentDetails($paymentDetailsReq);
	$logger->error("Received paymentDetailsResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
} catch(Exception $ex) {
	throw new Exception('Error occurred in PaymentDetails method');
}

if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	require_once 'Common/Response.php';
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payment - Payment Details</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
<?php
	require_once 'Common/menu.html';
?>
		<div id="response_form">
			<h3>Payment Details</h3>
<?php
		echo "<table>";
		echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
		echo "<tr><td>PayKey :</td><td><div id='PayKey'>$response->payKey</div> </td></tr>";
		echo "<tr><td>Status :</td><td><div id='Status'>$response->status</div> </td></tr>";
		echo "</table>";
		echo "<pre>";
		print_r($response);
		echo "</pre>";
		require_once 'Common/Response.php';
?>
		</div>
	</div>
</body>
</html>
