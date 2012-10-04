<?php

/**
 */
class AccountIdentifier extends PPMessage
{

	/**
	 * @var string
	 */
	public $email;

	/**
	 * @var PhoneNumberType
	 */
	public $phone;

}



/**
 * Details about the end user of the application invoking this
 * service.
 */
class ClientDetailsType extends PPMessage
{

	/**
	 * @var string
	 */
	public $ipAddress;

	/**
	 * @var string
	 */
	public $deviceId;

	/**
	 * @var string
	 */
	public $applicationId;

	/**
	 * @var string
	 */
	public $model;

	/**
	 * @var string
	 */
	public $geoLocation;

	/**
	 * @var string
	 */
	public $customerType;

	/**
	 * @var string
	 */
	public $partnerName;

	/**
	 * @var string
	 */
	public $customerId;

}



/**
 */
class CurrencyType extends PPMessage
{

	/**
	 * @var string
	 */
	public $code;

	/**
	 * @var double
	 */
	public $amount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($code = null, $amount = null)
	{
		$this->code = $code;
		$this->amount = $amount;
	}

}



/**
 */
class PhoneNumberType extends PPMessage
{

	/**
	 * @var string
	 */
	public $countryCode;

	/**
	 * @var string
	 */
	public $phoneNumber;

	/**
	 * @var string
	 */
	public $extension;

	/**
	 * Constructor with arguments
	 */
	public function __construct($countryCode = null, $phoneNumber = null)
	{
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
	}

}



/**
 */
class Address extends PPMessage
{

	/**
	 * @var string
	 */
	public $addresseeName;

	/**
	 * @var BaseAddress
	 */
	public $baseAddress;

	/**
	 * @var string
	 */
	public $addressId;

}



/**
 */
class AddressList extends PPMessage
{

	/**
     * @array
	 * @var Address
	 */
	public $address;

}



/**
 * A list of ISO currency codes.
 */
class CurrencyCodeList extends PPMessage
{

	/**
     * @array
	 * @var string
	 */
	public $currencyCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currencyCode = null)
	{
		$this->currencyCode = $currencyCode;
	}

}



/**
 * A list of estimated currency conversions for a base
 * currency.
 */
class CurrencyConversionList extends PPMessage
{

	/**
	 * @var CurrencyType
	 */
	public $baseAmount;

	/**
	 * @var CurrencyList
	 */
	public $currencyList;

}



/**
 * A table that contains a list of estimated currency
 * conversions for a base currency in each row.
 */
class CurrencyConversionTable extends PPMessage
{

	/**
     * @array
	 * @var CurrencyConversionList
	 */
	public $currencyConversionList;

}



/**
 * A list of ISO currencies.
 */
class CurrencyList extends PPMessage
{

	/**
     * @array
	 * @var CurrencyType
	 */
	public $currency;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currency = null)
	{
		$this->currency = $currency;
	}

}



/**
 * Customizable options that a client application can specify
 * for display purposes.
 */
class DisplayOptions extends PPMessage
{

	/**
	 * @var string
	 */
	public $emailHeaderImageUrl;

	/**
	 * @var string
	 */
	public $emailMarketingImageUrl;

	/**
	 * @var string
	 */
	public $headerImageUrl;

	/**
	 * @var string
	 */
	public $businessName;

}



/**
 */
class ErrorList extends PPMessage
{

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 */
class FundingConstraint extends PPMessage
{

	/**
	 * @var FundingTypeList
	 */
	public $allowedFundingType;

}



/**
 * FundingTypeInfo represents one allowed funding type.
 */
class FundingTypeInfo extends PPMessage
{

	/**
	 * @var string
	 */
	public $fundingType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingType = null)
	{
		$this->fundingType = $fundingType;
	}

}



/**
 */
class FundingTypeList extends PPMessage
{

	/**
     * @array
	 * @var FundingTypeInfo
	 */
	public $fundingTypeInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingTypeInfo = null)
	{
		$this->fundingTypeInfo = $fundingTypeInfo;
	}

}



/**
 * Describes the conversion between 2 currencies.
 */
class CurrencyConversion extends PPMessage
{

	/**
	 * @var CurrencyType
	 */
	public $from;

	/**
	 * @var CurrencyType
	 */
	public $to;

	/**
	 * @var double
	 */
	public $exchangeRate;

}



/**
 * Funding source information.
 */
class FundingSource extends PPMessage
{

	/**
	 * @var string
	 */
	public $lastFourOfAccountNumber;

	/**
	 * @var string
	 */
	public $type;

	/**
	 * @var string
	 */
	public $displayName;

	/**
	 * @var string
	 */
	public $fundingSourceId;

	/**
	 * @var boolean
	 */
	public $allowed;

}



/**
 * Amount to be charged to a particular funding source.
 */
class FundingPlanCharge extends PPMessage
{

	/**
	 * @var CurrencyType
	 */
	public $charge;

	/**
	 * @var FundingSource
	 */
	public $fundingSource;

}



/**
 * FundingPlan describes the funding sources to be used for a
 * specific payment.
 */
class FundingPlan extends PPMessage
{

	/**
	 * @var string
	 */
	public $fundingPlanId;

	/**
	 * @var CurrencyType
	 */
	public $fundingAmount;

	/**
	 * @var FundingSource
	 */
	public $backupFundingSource;

	/**
	 * @var CurrencyType
	 */
	public $senderFees;

	/**
	 * @var CurrencyConversion
	 */
	public $currencyConversion;

	/**
     * @array
	 * @var FundingPlanCharge
	 */
	public $charge;

}



/**
 * Details about the party that initiated this payment. The API
 * user is making this payment on behalf of the initiator. The
 * initiator can simply be an institution or a customer of the
 * institution.
 */
class InitiatingEntity extends PPMessage
{

	/**
	 * @var InstitutionCustomer
	 */
	public $institutionCustomer;

}



/**
 * The customer of the initiating institution
 */
class InstitutionCustomer extends PPMessage
{

	/**
	 * The unique identifier as assigned to the institution.
	 * @var string
	 */
	public $institutionId;

	/**
	 * The first (given) name of the end consumer as known by the
	 * institution.
	 * @var string
	 */
	public $firstName;

	/**
	 * The last (family) name of the end consumer as known by the
	 * institution.
	 * @var string
	 */
	public $lastName;

	/**
	 * The full name of the end consumer as known by the
	 * institution.
	 * @var string
	 */
	public $displayName;

	/**
	 * The unique identifier as assigned to the end consumer by the
	 * institution.
	 * @var string
	 */
	public $institutionCustomerId;

	/**
	 * The two-character ISO country code of the home country of
	 * the end consumer
	 * @var string
	 */
	public $countryCode;

	/**
	 * @var string
	 */
	public $email;

	/**
	 * Constructor with arguments
	 */
	public function __construct($institutionId = null, $firstName = null, $lastName = null, $displayName = null, $institutionCustomerId = null, $countryCode = null)
	{
		$this->institutionId = $institutionId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->displayName = $displayName;
		$this->institutionCustomerId = $institutionCustomerId;
		$this->countryCode = $countryCode;
	}

}



/**
 * Describes an individual item for an invoice.
 */
class InvoiceItem extends PPMessage
{

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $identifier;

	/**
	 * @var double
	 */
	public $price;

	/**
	 * @var double
	 */
	public $itemPrice;

	/**
	 * @var integer
	 */
	public $itemCount;

}



/**
 * Describes a payment for a particular receiver (merchant),
 * contains list of additional per item details.
 */
class InvoiceData extends PPMessage
{

	/**
     * @array
	 * @var InvoiceItem
	 */
	public $item;

	/**
	 * @var double
	 */
	public $totalTax;

	/**
	 * @var double
	 */
	public $totalShipping;

}



/**
 * The error that resulted from an attempt to make a payment to
 * a receiver.
 */
class PayError extends PPMessage
{

	/**
	 * @var Receiver
	 */
	public $receiver;

	/**
	 * @var ErrorData
	 */
	public $error;

}



/**
 */
class PayErrorList extends PPMessage
{

	/**
     * @array
	 * @var PayError
	 */
	public $payError;

}



/**
 * PaymentInfo represents the payment attempt made to a
 * Receiver of a PayRequest. If the execution of the payment
 * has not yet completed, there will not be any transaction
 * details.
 */
class PaymentInfo extends PPMessage
{

	/**
	 * @var string
	 */
	public $transactionId;

	/**
	 * @var string
	 */
	public $transactionStatus;

	/**
	 * @var Receiver
	 */
	public $receiver;

	/**
	 * @var double
	 */
	public $refundedAmount;

	/**
	 * @var boolean
	 */
	public $pendingRefund;

	/**
	 * @var string
	 */
	public $senderTransactionId;

	/**
	 * @var string
	 */
	public $senderTransactionStatus;

	/**
	 * @var string
	 */
	public $pendingReason;

}



/**
 */
class PaymentInfoList extends PPMessage
{

	/**
     * @array
	 * @var PaymentInfo
	 */
	public $paymentInfo;

}



/**
 * Receiver is the party where funds are transferred to. A
 * primary receiver receives a payment directly from the sender
 * in a chained split payment. A primary receiver should not be
 * specified when making a single or parallel split payment.
 */
class Receiver extends PPMessage
{

	/**
	 * @var double
	 */
	public $amount;

	/**
	 * @var string
	 */
	public $email;

	/**
	 * @var PhoneNumberType
	 */
	public $phone;

	/**
	 * @var boolean
	 */
	public $primary;

	/**
	 * @var string
	 */
	public $invoiceId;

	/**
	 * @var string
	 */
	public $paymentType;

	/**
	 * @var string
	 */
	public $paymentSubType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($amount = null)
	{
		$this->amount = $amount;
	}

}



/**
 */
class ReceiverList extends PPMessage
{

	/**
     * @array
	 * @var Receiver
	 */
	public $receiver;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = null)
	{
		$this->receiver = $receiver;
	}

}



/**
 * The sender identifier type contains information to identify
 * a PayPal account.
 */
class ReceiverIdentifier extends AccountIdentifier
{

}



/**
 * Options that apply to the receiver of a payment, allows
 * setting additional details for payment using invoice.
 */
class ReceiverOptions extends PPMessage
{

	/**
	 * @var string
	 */
	public $description;

	/**
	 * @var string
	 */
	public $customId;

	/**
	 * @var InvoiceData
	 */
	public $invoiceData;

	/**
	 * @var ReceiverIdentifier
	 */
	public $receiver;

	/**
	 * @var string
	 */
	public $referrerCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = null)
	{
		$this->receiver = $receiver;
	}

}



/**
 * RefundInfo represents the refund attempt made to a Receiver
 * of a PayRequest.
 */
class RefundInfo extends PPMessage
{

	/**
	 * @var Receiver
	 */
	public $receiver;

	/**
	 * @var string
	 */
	public $refundStatus;

	/**
	 * @var double
	 */
	public $refundNetAmount;

	/**
	 * @var double
	 */
	public $refundFeeAmount;

	/**
	 * @var double
	 */
	public $refundGrossAmount;

	/**
	 * @var double
	 */
	public $totalOfAllRefunds;

	/**
	 * @var boolean
	 */
	public $refundHasBecomeFull;

	/**
	 * @var string
	 */
	public $encryptedRefundTransactionId;

	/**
	 * @var string
	 */
	public $refundTransactionStatus;

	/**
	 * @var ErrorList
	 */
	public $errorList;

}



/**
 */
class RefundInfoList extends PPMessage
{

	/**
     * @array
	 * @var RefundInfo
	 */
	public $refundInfo;

}



/**
 * Options that apply to the sender of a payment.
 */
class SenderOptions extends PPMessage
{

	/**
	 * Require the user to select a shipping address during the web flow.
	 * @var boolean
	 */
	public $requireShippingAddressSelection;

	/**
	 * @var string
	 */
	public $referrerCode;

}



/**
 * Details about the payer's tax info passed in by the merchant
 * or partner.
 */
class TaxIdDetails extends PPMessage
{

	/**
	 * Tax id of the merchant/business.
	 * @var string
	 */
	public $taxId;

	/**
	 * Tax type of the Tax Id.
	 * @var string
	 */
	public $taxIdType;

}



/**
 * The sender identifier type contains information to identify
 * a PayPal account.
 */
class SenderIdentifier extends AccountIdentifier
{

	/**
	 * @var boolean
	 */
	public $useCredentials;

	/**
	 * @var TaxIdDetails
	 */
	public $taxIdDetails;

}



/**
 */
class UserLimit extends PPMessage
{

	/**
	 * @var string
	 */
	public $limitType;

	/**
	 * @var CurrencyType
	 */
	public $limitAmount;

}



/**
 * This type contains the detailed warning information
 * resulting from the service operation.
 */
class WarningData extends PPMessage
{

	/**
	 * @var integer
	 */
	public $warningId;

	/**
	 * @var string
	 */
	public $message;

}



/**
 */
class WarningDataList extends PPMessage
{

	/**
     * @array
	 * @var WarningData
	 */
	public $warningData;

}



/**
 * The request to cancel a Preapproval.
 */
class CancelPreapprovalRequest extends PPMessage{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}

}



/**
 * The result of the CancelPreapprovalRequest.
 */
class CancelPreapprovalResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to confirm a Preapproval.
 */
class ConfirmPreapprovalRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
	 * @var string
	 */
	public $fundingSourceId;

	/**
	 * @var string
	 */
	public $pin;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}

}



/**
 * The result of the ConfirmPreapprovalRequest.
 */
class ConfirmPreapprovalResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * A request to convert one or more currencies into their
 * estimated values in other currencies.
 */
class ConvertCurrencyRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var CurrencyList
	 */
	public $baseAmountList;

	/**
	 * @var CurrencyCodeList
	 */
	public $convertToCurrencyList;

	/**
	 * The two-character ISO country code where fx suppposed to
	 * happen
	 * @var string
	 */
	public $countryCode;

	/**
	 * @var string
	 */
	public $conversionType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $baseAmountList = null, $convertToCurrencyList = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->baseAmountList = $baseAmountList;
		$this->convertToCurrencyList = $convertToCurrencyList;
	}

}



/**
 * A response that contains a table of estimated converted
 * currencies based on the Convert Currency Request.
 */
class ConvertCurrencyResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var CurrencyConversionTable
	 */
	public $estimatedAmountTable;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to execute the payment request.
 */
class ExecutePaymentRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * Describes the action that is performed by this API
	 * @var string
	 */
	public $actionType;

	/**
	 * @var string
	 */
	public $fundingPlanId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}

}



/**
 * The result of a payment execution.
 */
class ExecutePaymentResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var string
	 */
	public $paymentExecStatus;

	/**
	 * @var PayErrorList
	 */
	public $payErrorList;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the allowed funding sources available for
 * a preapproval.
 */
class GetAllowedFundingSourcesRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}

}



/**
 * The response to get the backup funding sources available for
 * a preapproval.
 */
class GetAllowedFundingSourcesResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var FundingSource
	 */
	public $fundingSource;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the options of a payment request.
 */
class GetPaymentOptionsRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}

}



/**
 * The response message for the GetPaymentOption request
 */
class GetPaymentOptionsResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var InitiatingEntity
	 */
	public $initiatingEntity;

	/**
	 * @var DisplayOptions
	 */
	public $displayOptions;

	/**
	 * @var string
	 */
	public $shippingAddressId;

	/**
	 * @var SenderOptions
	 */
	public $senderOptions;

	/**
     * @array
	 * @var ReceiverOptions
	 */
	public $receiverOptions;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to look up the details of a PayRequest. The
 * PaymentDetailsRequest can be made with either a payKey,
 * trackingId, or a transactionId of the PayRequest.
 */
class PaymentDetailsRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * @var string
	 */
	public $transactionId;

	/**
	 * @var string
	 */
	public $trackingId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null)
	{
		$this->requestEnvelope = $requestEnvelope;
	}

}



/**
 * The details of the PayRequest as specified in the Pay
 * operation.
 */
class PaymentDetailsResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var string
	 */
	public $cancelUrl;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var string
	 */
	public $ipnNotificationUrl;

	/**
	 * @var string
	 */
	public $memo;

	/**
	 * @var PaymentInfoList
	 */
	public $paymentInfoList;

	/**
	 * @var string
	 */
	public $returnUrl;

	/**
	 * @var string
	 */
	public $senderEmail;

	/**
	 * @var string
	 */
	public $status;

	/**
	 * @var string
	 */
	public $trackingId;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * @var string
	 */
	public $actionType;

	/**
	 * @var string
	 */
	public $feesPayer;

	/**
	 * @var boolean
	 */
	public $reverseAllParallelPaymentsOnError;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
	 * @var FundingConstraint
	 */
	public $fundingConstraint;

	/**
	 * @var SenderIdentifier
	 */
	public $sender;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The PayRequest contains the payment instructions to make
 * from sender to receivers.
 */
class PayRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var ClientDetailsType
	 */
	public $clientDetails;

	/**
	 * @var string
	 */
	public $actionType;

	/**
	 * @var string
	 */
	public $cancelUrl;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var string
	 */
	public $feesPayer;

	/**
	 * @var string
	 */
	public $ipnNotificationUrl;

	/**
	 * @var string
	 */
	public $memo;

	/**
	 * @var string
	 */
	public $pin;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
	 * @var ReceiverList
	 */
	public $receiverList;

	/**
	 * @var boolean
	 */
	public $reverseAllParallelPaymentsOnError;

	/**
	 * @var string
	 */
	public $senderEmail;

	/**
	 * @var string
	 */
	public $returnUrl;

	/**
	 * @var string
	 */
	public $trackingId;

	/**
	 * @var FundingConstraint
	 */
	public $fundingConstraint;

	/**
	 * @var SenderIdentifier
	 */
	public $sender;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $actionType = null, $cancelUrl = null, $currencyCode = null, $receiverList = null, $returnUrl = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->actionType = $actionType;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->receiverList = $receiverList;
		$this->returnUrl = $returnUrl;
	}

}



/**
 * The PayResponse contains the result of the Pay operation.
 * The payKey and execution status of the request should always
 * be provided.
 */
class PayResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * @var string
	 */
	public $paymentExecStatus;

	/**
	 * @var PayErrorList
	 */
	public $payErrorList;

	/**
	 * @var FundingPlan
	 */
	public $defaultFundingPlan;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to look up the details of a Preapproval.
 */
class PreapprovalDetailsRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
	 * @var boolean
	 */
	public $getBillingAddress;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}

}



/**
 * The details of the Preapproval as specified in the
 * Preapproval operation.
 */
class PreapprovalDetailsResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var boolean
	 */
	public $approved;

	/**
	 * @var string
	 */
	public $cancelUrl;

	/**
	 * @var integer
	 */
	public $curPayments;

	/**
	 * @var double
	 */
	public $curPaymentsAmount;

	/**
	 * @var integer
	 */
	public $curPeriodAttempts;

	/**
	 * @var dateTime
	 */
	public $curPeriodEndingDate;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var integer
	 */
	public $dateOfMonth;

	/**
	 * @var DayOfWeek
	 */
	public $dayOfWeek;

	/**
	 * @var dateTime
	 */
	public $endingDate;

	/**
	 * @var double
	 */
	public $maxAmountPerPayment;

	/**
	 * @var integer
	 */
	public $maxNumberOfPayments;

	/**
	 * @var integer
	 */
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * @var double
	 */
	public $maxTotalAmountOfAllPayments;

	/**
	 * @var string
	 */
	public $paymentPeriod;

	/**
	 * @var string
	 */
	public $pinType;

	/**
	 * @var string
	 */
	public $returnUrl;

	/**
	 * @var string
	 */
	public $senderEmail;

	/**
	 * @var string
	 */
	public $memo;

	/**
	 * @var dateTime
	 */
	public $startingDate;

	/**
	 * @var string
	 */
	public $status;

	/**
	 * @var string
	 */
	public $ipnNotificationUrl;

	/**
	 * @var AddressList
	 */
	public $addressList;

	/**
	 * @var string
	 */
	public $feesPayer;

	/**
	 * @var boolean
	 */
	public $displayMaxTotalAmount;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * A request to create a Preapproval. A Preapproval is an
 * agreement between a Paypal account holder (the sender) and
 * the API caller (the service invoker) to make payment(s) on
 * the the sender's behalf with various limitations defined.
 */
class PreapprovalRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var ClientDetailsType
	 */
	public $clientDetails;

	/**
	 * @var string
	 */
	public $cancelUrl;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var integer
	 */
	public $dateOfMonth;

	/**
	 * @var DayOfWeek
	 */
	public $dayOfWeek;

	/**
	 * @var dateTime
	 */
	public $endingDate;

	/**
	 * @var double
	 */
	public $maxAmountPerPayment;

	/**
	 * @var integer
	 */
	public $maxNumberOfPayments;

	/**
	 * @var integer
	 */
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * @var double
	 */
	public $maxTotalAmountOfAllPayments;

	/**
	 * @var string
	 */
	public $paymentPeriod;

	/**
	 * @var string
	 */
	public $returnUrl;

	/**
	 * @var string
	 */
	public $memo;

	/**
	 * @var string
	 */
	public $ipnNotificationUrl;

	/**
	 * @var string
	 */
	public $senderEmail;

	/**
	 * @var dateTime
	 */
	public $startingDate;

	/**
	 * @var string
	 */
	public $pinType;

	/**
	 * @var string
	 */
	public $feesPayer;

	/**
	 * @var boolean
	 */
	public $displayMaxTotalAmount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $cancelUrl = null, $currencyCode = null, $returnUrl = null, $startingDate = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->returnUrl = $returnUrl;
		$this->startingDate = $startingDate;
	}

}



/**
 * The result of the PreapprovalRequest is a preapprovalKey.
 */
class PreapprovalResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var string
	 */
	public $preapprovalKey;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * A request to make a refund based on various criteria. A
 * refund can be made against the entire payKey, an individual
 * transaction belonging to a payKey, a tracking id, or a
 * specific receiver of a payKey.
 */
class RefundRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * @var string
	 */
	public $transactionId;

	/**
	 * @var string
	 */
	public $trackingId;

	/**
	 * @var ReceiverList
	 */
	public $receiverList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null)
	{
		$this->requestEnvelope = $requestEnvelope;
	}

}



/**
 * The result of a Refund request.
 */
class RefundResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @var RefundInfoList
	 */
	public $refundInfoList;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to set the options of a payment request.
 */
class SetPaymentOptionsRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * @var InitiatingEntity
	 */
	public $initiatingEntity;

	/**
	 * @var DisplayOptions
	 */
	public $displayOptions;

	/**
	 * @var string
	 */
	public $shippingAddressId;

	/**
	 * @var SenderOptions
	 */
	public $senderOptions;

	/**
     * @array
	 * @var ReceiverOptions
	 */
	public $receiverOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}

}



/**
 * The response message for the SetPaymentOption request
 */
class SetPaymentOptionsResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the funding plans available for a
 * payment.
 */
class GetFundingPlansRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * @var string
	 */
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}

}



/**
 * The response to get the funding plans available for a
 * payment.
 */
class GetFundingPlansResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var FundingPlan
	 */
	public $fundingPlan;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the addresses available for a payment.
 */
class GetAvailableShippingAddressesRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey
	 * @var string
	 */
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}

}



/**
 * The response to get the shipping addresses available for a
 * payment.
 */
class GetAvailableShippingAddressesResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var Address
	 */
	public $availableAddress;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the addresses available for a payment.
 */
class GetShippingAddressesRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey
	 * @var string
	 */
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}

}



/**
 * The response to get the shipping addresses available for a
 * payment.
 */
class GetShippingAddressesResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
	 * @var Address
	 */
	public $selectedAddress;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}



/**
 * The request to get the remaining limits for a user
 */
class GetUserLimitsRequest extends PPMessage
{

	/**
	 * @var RequestEnvelope
	 */
	public $requestEnvelope;

	/**
	 * The account identifier for the user
	 * @var AccountIdentifier
	 */
	public $user;

	/**
	 * @var string
	 */
	public $country;

	/**
	 * @var string
	 */
	public $currencyCode;

	/**
	 * List of limit types
     * @array
	 * @var string
	 */
	public $limitType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $user = null, $country = null, $currencyCode = null, $limitType = null)
	{
		$this->requestEnvelope = $requestEnvelope;
		$this->user = $user;
		$this->country = $country;
		$this->currencyCode = $currencyCode;
		$this->limitType = $limitType;
	}

}



/**
 * A response that contains a list of remaining limits
 */
class GetUserLimitsResponse extends PPMessage
{

	/**
	 * @var ResponseEnvelope
	 */
	public $responseEnvelope;

	/**
     * @array
	 * @var UserLimit
	 */
	public $userLimit;

	/**
	 * @var WarningDataList
	 */
	public $warningDataList;

	/**
     * @array
	 * @var ErrorData
	 */
	public $error;

}




