<?php


/**
 * AUTO GENERATED code for AdaptivePayments
 */
class AdaptivePaymentsService extends PPBaseService
{

	// Service Version
	private static $SERVICE_VERSION = "1.8.1";

	// Service Name
	private static $SERVICE_NAME = "AdaptivePayments";



	public function __construct(PPAPIService $api = NULL)
	{
		if ($api === NULL) {
			$api = new PPAPIService();
		}

		parent::__construct($api, 'AdaptivePayments');
	}



	/**
	 * Service Call: CancelPreapproval
	 *
	 * @param CancelPreapprovalRequest $cancelPreapprovalRequest
	 * @param null $apiUsername
	 * @return CancelPreapprovalResponse
	 */
	public function CancelPreapproval($cancelPreapprovalRequest, $apiUsername = null)
	{
		$ret = new CancelPreapprovalResponse();
		$resp = $this->call("CancelPreapproval", $cancelPreapprovalRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: ConfirmPreapproval
	 *
	 * @param ConfirmPreapprovalRequest $confirmPreapprovalRequest
	 * @param null $apiUsername
	 * @return ConfirmPreapprovalResponse
	 */
	public function ConfirmPreapproval($confirmPreapprovalRequest, $apiUsername = null)
	{
		$ret = new ConfirmPreapprovalResponse();
		$resp = $this->call("ConfirmPreapproval", $confirmPreapprovalRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: ConvertCurrency
	 *
	 * @param ConvertCurrencyRequest $convertCurrencyRequest
	 * @param null $apiUsername
	 * @return ConvertCurrencyResponse
	 */
	public function ConvertCurrency($convertCurrencyRequest, $apiUsername = null)
	{
		$ret = new ConvertCurrencyResponse();
		$resp = $this->call("ConvertCurrency", $convertCurrencyRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: ExecutePayment
	 *
	 * @param ExecutePaymentRequest $executePaymentRequest
	 * @param null $apiUsername
	 * @return ExecutePaymentResponse
	 */
	public function ExecutePayment($executePaymentRequest, $apiUsername = null)
	{
		$ret = new ExecutePaymentResponse();
		$resp = $this->call("ExecutePayment", $executePaymentRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetAllowedFundingSources
	 *
	 * @param GetAllowedFundingSourcesRequest $getAllowedFundingSourcesRequest
	 * @param null $apiUsername
	 * @return GetAllowedFundingSourcesResponse
	 */
	public function GetAllowedFundingSources($getAllowedFundingSourcesRequest, $apiUsername = null)
	{
		$ret = new GetAllowedFundingSourcesResponse();
		$resp = $this->call("GetAllowedFundingSources", $getAllowedFundingSourcesRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetPaymentOptions
	 *
	 * @param GetPaymentOptionsRequest $getPaymentOptionsRequest
	 * @param null $apiUsername
	 * @return GetPaymentOptionsResponse
	 */
	public function GetPaymentOptions($getPaymentOptionsRequest, $apiUsername = null)
	{
		$ret = new GetPaymentOptionsResponse();
		$resp = $this->call("GetPaymentOptions", $getPaymentOptionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: PaymentDetails
	 *
	 * @param PaymentDetailsRequest $paymentDetailsRequest
	 * @param null $apiUsername
	 * @return PaymentDetailsResponse
	 */
	public function PaymentDetails($paymentDetailsRequest, $apiUsername = null)
	{
		$ret = new PaymentDetailsResponse();
		$resp = $this->call("PaymentDetails", $paymentDetailsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: Pay
	 *
	 * @param PayRequest $payRequest
	 * @param null $apiUsername
	 * @return PayResponse
	 */
	public function Pay($payRequest, $apiUsername = null)
	{
		$ret = new PayResponse();
		$resp = $this->call("Pay", $payRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: PreapprovalDetails
	 *
	 * @param PreapprovalDetailsRequest $preapprovalDetailsRequest
	 * @param null $apiUsername
	 * @return PreapprovalDetailsResponse
	 */
	public function PreapprovalDetails($preapprovalDetailsRequest, $apiUsername = null)
	{
		$ret = new PreapprovalDetailsResponse();
		$resp = $this->call("PreapprovalDetails", $preapprovalDetailsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: Preapproval
	 *
	 * @param PreapprovalRequest $preapprovalRequest
	 * @param null $apiUsername
	 * @return PreapprovalResponse
	 */
	public function Preapproval($preapprovalRequest, $apiUsername = null)
	{
		$ret = new PreapprovalResponse();
		$resp = $this->call("Preapproval", $preapprovalRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: Refund
	 *
	 * @param RefundRequest $refundRequest
	 * @param null $apiUsername
	 * @return RefundResponse
	 */
	public function Refund($refundRequest, $apiUsername = null)
	{
		$ret = new RefundResponse();
		$resp = $this->call("Refund", $refundRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: SetPaymentOptions
	 *
	 * @param SetPaymentOptionsRequest $setPaymentOptionsRequest
	 * @param null $apiUsername
	 * @return SetPaymentOptionsResponse
	 */
	public function SetPaymentOptions($setPaymentOptionsRequest, $apiUsername = null)
	{
		$ret = new SetPaymentOptionsResponse();
		$resp = $this->call("SetPaymentOptions", $setPaymentOptionsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetFundingPlans
	 *
	 * @param GetFundingPlansRequest $getFundingPlansRequest
	 * @param null $apiUsername
	 * @return GetFundingPlansResponse
	 */
	public function GetFundingPlans($getFundingPlansRequest, $apiUsername = null)
	{
		$ret = new GetFundingPlansResponse();
		$resp = $this->call("GetFundingPlans", $getFundingPlansRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetAvailableShippingAddresses
	 *
	 * @param GetAvailableShippingAddressesRequest $getAvailableShippingAddressesRequest
	 * @param null $apiUsername
	 * @return GetAvailableShippingAddressesResponse
	 */
	public function GetAvailableShippingAddresses($getAvailableShippingAddressesRequest, $apiUsername = null)
	{
		$ret = new GetAvailableShippingAddressesResponse();
		$resp = $this->call("GetAvailableShippingAddresses", $getAvailableShippingAddressesRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetShippingAddresses
	 *
	 * @param GetShippingAddressesRequest $getShippingAddressesRequest
	 * @param null $apiUsername
	 * @return GetShippingAddressesResponse
	 */
	public function GetShippingAddresses($getShippingAddressesRequest, $apiUsername = null)
	{
		$ret = new GetShippingAddressesResponse();
		$resp = $this->call("GetShippingAddresses", $getShippingAddressesRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}



	/**
	 * Service Call: GetUserLimits
	 *
	 * @param GetUserLimitsRequest $getUserLimitsRequest
	 * @param null $apiUsername
	 * @return GetUserLimitsResponse
	 */
	public function GetUserLimits($getUserLimitsRequest, $apiUsername = null)
	{
		$ret = new GetUserLimitsResponse();
		$resp = $this->call("GetUserLimits", $getUserLimitsRequest, $apiUsername);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}

}
