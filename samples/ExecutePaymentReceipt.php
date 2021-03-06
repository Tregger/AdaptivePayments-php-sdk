<?php
require_once __DIR__ . '/../vendor/autoload.php';
define("DEFAULT_SELECT", "- Select -");

$logger = new PPLoggingManager('ExecutePayment');

// create request
$executePaymentRequest = new ExecutePaymentRequest(new RequestEnvelope("en_US"),$_POST['payKey']);

$executePaymentRequest->actionType = $_POST["actionType"];
$executePaymentRequest->fundingPlanId = $_POST["fundingPlanID"];

$service = new AdaptivePaymentsService();
try {
	$response = $service->ExecutePayment($executePaymentRequest);
	$logger->error("Received ExecutePaymentResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
} catch(Exception $ex) {
	throw new Exception('Error occurred in ExecutePayment method');
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
<title>PayPal Adaptive Payment - Execute Payment</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
	<?php
	require_once 'Common/menu.html';
	?>
		<div id="response_form">
			<h3>Execute Payment</h3>
<?php

		echo "<table>";
		echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
		echo "<tr><td>PaymentExecStatus :</td><td><div id='PaymentExecStatus'>$response->paymentExecStatus</div> </td></tr>";
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
