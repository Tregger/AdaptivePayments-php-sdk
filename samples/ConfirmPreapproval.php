<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Confirm Preapproval</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Common/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
		toolTips = {			
		}	
		$(document).ready( function () {
			jQuery.each(toolTips, function(id, toolTip) {
				$("#"+id).attr("title", toolTip);
			}); 
			$("input[title]").qtip(qtipConfig);
			$("select[title]").qtip(qtipConfig);
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h3>Confirm Preapproval</h3>
			<div id="apidetails">Confirms that you can use the specified preapproval to make payments.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="ConfirmPreapprovalReceipt.php">
				<div class="params">
					<div class="param_name">Preapproval key *</div>
					<div class="param_value">
						<input name="preapprovalKey" id="preapprovalKey" value="PA-0WE85365SX828863L" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Funding source Id</div>
					<div class="param_value">
						<input name="fundingSourceId" id="fundingSourceId" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">PIN</div>
					<div class="param_value">
						<input name="pin" id="pin" value="" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>