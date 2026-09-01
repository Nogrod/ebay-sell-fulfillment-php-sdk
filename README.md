# OpenAPIClient-php

Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nogrod/ebay-sell-fulfillment-php-sdk.git"
    }
  ],
  "require": {
    "nogrod/ebay-sell-fulfillment-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order being retrieved.<br><br> Use the <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.<br><br><span class=\"tablenote\"><strong>Note:</strong> <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> can return orders up to two years old. Do not provide the <strong>orderId</strong> for an order created more than two years in the past.</span>
$field_groups = 'field_groups_example'; // string | This parameter lets you control what is returned in the response.<br><br><span class=\"tablenote\"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>

try {
    $result = $apiInstance->getOrder($order_id, $field_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/fulfillment/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{orderId} | 
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /order | 
*OrderApi* | [**issueRefund**](docs/Api/OrderApi.md#issuerefund) | **POST** /order/{order_id}/issue_refund | Issues a full or partial refund to a buyer on behalf of the seller.
*PaymentDisputeApi* | [**acceptPaymentDispute**](docs/Api/PaymentDisputeApi.md#acceptpaymentdispute) | **POST** /payment_dispute/{payment_dispute_id}/accept | Accept Payment Dispute
*PaymentDisputeApi* | [**addEvidence**](docs/Api/PaymentDisputeApi.md#addevidence) | **POST** /payment_dispute/{payment_dispute_id}/add_evidence | Add an Evidence File
*PaymentDisputeApi* | [**contestPaymentDispute**](docs/Api/PaymentDisputeApi.md#contestpaymentdispute) | **POST** /payment_dispute/{payment_dispute_id}/contest | Contest Payment Dispute
*PaymentDisputeApi* | [**fetchEvidenceContent**](docs/Api/PaymentDisputeApi.md#fetchevidencecontent) | **GET** /payment_dispute/{payment_dispute_id}/fetch_evidence_content | Get Payment Dispute Evidence File
*PaymentDisputeApi* | [**getActivities**](docs/Api/PaymentDisputeApi.md#getactivities) | **GET** /payment_dispute/{payment_dispute_id}/activity | Get Payment Dispute Activity
*PaymentDisputeApi* | [**getPaymentDispute**](docs/Api/PaymentDisputeApi.md#getpaymentdispute) | **GET** /payment_dispute/{payment_dispute_id} | Get Payment Dispute Details
*PaymentDisputeApi* | [**getPaymentDisputeSummaries**](docs/Api/PaymentDisputeApi.md#getpaymentdisputesummaries) | **GET** /payment_dispute_summary | Search Payment Dispute by Filters
*PaymentDisputeApi* | [**updateEvidence**](docs/Api/PaymentDisputeApi.md#updateevidence) | **POST** /payment_dispute/{payment_dispute_id}/update_evidence | Update evidence
*PaymentDisputeApi* | [**uploadEvidenceFile**](docs/Api/PaymentDisputeApi.md#uploadevidencefile) | **POST** /payment_dispute/{payment_dispute_id}/upload_evidence_file | Upload an Evidence File
*ShippingFulfillmentApi* | [**createShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#createshippingfulfillment) | **POST** /order/{orderId}/shipping_fulfillment | 
*ShippingFulfillmentApi* | [**getShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} | 
*ShippingFulfillmentApi* | [**getShippingFulfillments**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillments) | **GET** /order/{orderId}/shipping_fulfillment | 

## Models

- [AcceptPaymentDisputeRequest](docs/Model/AcceptPaymentDisputeRequest.md)
- [AcknowledgeStatusEnum](docs/Model/AcknowledgeStatusEnum.md)
- [ActivityEnum](docs/Model/ActivityEnum.md)
- [ActorEnum](docs/Model/ActorEnum.md)
- [AddEvidencePaymentDisputeRequest](docs/Model/AddEvidencePaymentDisputeRequest.md)
- [AddEvidencePaymentDisputeResponse](docs/Model/AddEvidencePaymentDisputeResponse.md)
- [Address](docs/Model/Address.md)
- [Amount](docs/Model/Amount.md)
- [AppliedPromotion](docs/Model/AppliedPromotion.md)
- [AppointmentDetails](docs/Model/AppointmentDetails.md)
- [AppointmentStatusEnum](docs/Model/AppointmentStatusEnum.md)
- [AppointmentTypeEnum](docs/Model/AppointmentTypeEnum.md)
- [AppointmentWindowEnum](docs/Model/AppointmentWindowEnum.md)
- [AuthenticityVerificationReasonEnum](docs/Model/AuthenticityVerificationReasonEnum.md)
- [AuthenticityVerificationStatusEnum](docs/Model/AuthenticityVerificationStatusEnum.md)
- [Buyer](docs/Model/Buyer.md)
- [CancelRequest](docs/Model/CancelRequest.md)
- [CancelRequestStateEnum](docs/Model/CancelRequestStateEnum.md)
- [CancelStateEnum](docs/Model/CancelStateEnum.md)
- [CancelStatus](docs/Model/CancelStatus.md)
- [Charge](docs/Model/Charge.md)
- [ChargeTypeEnum](docs/Model/ChargeTypeEnum.md)
- [CollectionMethodEnum](docs/Model/CollectionMethodEnum.md)
- [ContestPaymentDisputeRequest](docs/Model/ContestPaymentDisputeRequest.md)
- [CountryCodeEnum](docs/Model/CountryCodeEnum.md)
- [CurrencyCodeEnum](docs/Model/CurrencyCodeEnum.md)
- [DeliveryCost](docs/Model/DeliveryCost.md)
- [DisputeAmount](docs/Model/DisputeAmount.md)
- [DisputeEvidence](docs/Model/DisputeEvidence.md)
- [DisputeReasonEnum](docs/Model/DisputeReasonEnum.md)
- [DisputeStateEnum](docs/Model/DisputeStateEnum.md)
- [DisputeSummaryResponse](docs/Model/DisputeSummaryResponse.md)
- [EbayCollectAndRemitTax](docs/Model/EbayCollectAndRemitTax.md)
- [EbayCollectedCharges](docs/Model/EbayCollectedCharges.md)
- [EbayFulfillmentProgram](docs/Model/EbayFulfillmentProgram.md)
- [EbayInternationalShipping](docs/Model/EbayInternationalShipping.md)
- [EbayShipping](docs/Model/EbayShipping.md)
- [EbayTaxReference](docs/Model/EbayTaxReference.md)
- [EbayVaultFulfillmentTypeEnum](docs/Model/EbayVaultFulfillmentTypeEnum.md)
- [EbayVaultProgram](docs/Model/EbayVaultProgram.md)
- [Error](docs/Model/Error.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorDetailV3](docs/Model/ErrorDetailV3.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [ErrorParameterV3](docs/Model/ErrorParameterV3.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [EvidenceRequest](docs/Model/EvidenceRequest.md)
- [EvidenceTypeEnum](docs/Model/EvidenceTypeEnum.md)
- [ExtendedContact](docs/Model/ExtendedContact.md)
- [Fee](docs/Model/Fee.md)
- [FileEvidence](docs/Model/FileEvidence.md)
- [FileInfo](docs/Model/FileInfo.md)
- [FilterField](docs/Model/FilterField.md)
- [FormDataBodyPart](docs/Model/FormDataBodyPart.md)
- [FulfillmentInstructionsType](docs/Model/FulfillmentInstructionsType.md)
- [FulfillmentStartInstruction](docs/Model/FulfillmentStartInstruction.md)
- [GiftDetails](docs/Model/GiftDetails.md)
- [InfoFromBuyer](docs/Model/InfoFromBuyer.md)
- [IssueRefundRequest](docs/Model/IssueRefundRequest.md)
- [ItemLocation](docs/Model/ItemLocation.md)
- [LegacyReference](docs/Model/LegacyReference.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemFulfillmentInstructions](docs/Model/LineItemFulfillmentInstructions.md)
- [LineItemFulfillmentStatusEnum](docs/Model/LineItemFulfillmentStatusEnum.md)
- [LineItemProperties](docs/Model/LineItemProperties.md)
- [LineItemReference](docs/Model/LineItemReference.md)
- [LineItemRefund](docs/Model/LineItemRefund.md)
- [LinkedOrderLineItem](docs/Model/LinkedOrderLineItem.md)
- [MarketplaceIdEnum](docs/Model/MarketplaceIdEnum.md)
- [MonetaryTransaction](docs/Model/MonetaryTransaction.md)
- [MonetaryTransactionReasonEnum](docs/Model/MonetaryTransactionReasonEnum.md)
- [MonetaryTransactionTypeEnum](docs/Model/MonetaryTransactionTypeEnum.md)
- [NameValuePair](docs/Model/NameValuePair.md)
- [Order](docs/Model/Order.md)
- [OrderFulfillmentStatus](docs/Model/OrderFulfillmentStatus.md)
- [OrderLineItems](docs/Model/OrderLineItems.md)
- [OrderPaymentStatusEnum](docs/Model/OrderPaymentStatusEnum.md)
- [OrderRefund](docs/Model/OrderRefund.md)
- [OrderSearchPagedCollection](docs/Model/OrderSearchPagedCollection.md)
- [OutcomeEnum](docs/Model/OutcomeEnum.md)
- [Payment](docs/Model/Payment.md)
- [PaymentDispute](docs/Model/PaymentDispute.md)
- [PaymentDisputeActivity](docs/Model/PaymentDisputeActivity.md)
- [PaymentDisputeActivityHistory](docs/Model/PaymentDisputeActivityHistory.md)
- [PaymentDisputeOutcomeDetail](docs/Model/PaymentDisputeOutcomeDetail.md)
- [PaymentDisputeSummary](docs/Model/PaymentDisputeSummary.md)
- [PaymentHold](docs/Model/PaymentHold.md)
- [PaymentMethodTypeEnum](docs/Model/PaymentMethodTypeEnum.md)
- [PaymentStatusEnum](docs/Model/PaymentStatusEnum.md)
- [PaymentSummary](docs/Model/PaymentSummary.md)
- [Phone](docs/Model/Phone.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PickupStep](docs/Model/PickupStep.md)
- [PostSaleAuthenticationProgram](docs/Model/PostSaleAuthenticationProgram.md)
- [PricingSummary](docs/Model/PricingSummary.md)
- [ProcessEvidencePaymentDisputeRequest](docs/Model/ProcessEvidencePaymentDisputeRequest.md)
- [Program](docs/Model/Program.md)
- [Property](docs/Model/Property.md)
- [ProtectionStatusEnum](docs/Model/ProtectionStatusEnum.md)
- [RangeValue](docs/Model/RangeValue.md)
- [ReasonForRefundEnum](docs/Model/ReasonForRefundEnum.md)
- [Refund](docs/Model/Refund.md)
- [RefundItem](docs/Model/RefundItem.md)
- [RefundStatusEnum](docs/Model/RefundStatusEnum.md)
- [RefundTypeEnum](docs/Model/RefundTypeEnum.md)
- [ReturnAddress](docs/Model/ReturnAddress.md)
- [SellerActionsToRelease](docs/Model/SellerActionsToRelease.md)
- [SellerDecisionEnum](docs/Model/SellerDecisionEnum.md)
- [SellerResponseEnum](docs/Model/SellerResponseEnum.md)
- [ShippingFulfillment](docs/Model/ShippingFulfillment.md)
- [ShippingFulfillmentDetails](docs/Model/ShippingFulfillmentDetails.md)
- [ShippingFulfillmentPagedCollection](docs/Model/ShippingFulfillmentPagedCollection.md)
- [ShippingStep](docs/Model/ShippingStep.md)
- [SimpleAmount](docs/Model/SimpleAmount.md)
- [SoldFormatEnum](docs/Model/SoldFormatEnum.md)
- [Tax](docs/Model/Tax.md)
- [TaxAddress](docs/Model/TaxAddress.md)
- [TaxIdentifier](docs/Model/TaxIdentifier.md)
- [TaxIdentifierTypeEnum](docs/Model/TaxIdentifierTypeEnum.md)
- [TaxTypeEnum](docs/Model/TaxTypeEnum.md)
- [TrackingInfo](docs/Model/TrackingInfo.md)
- [UpdateEvidencePaymentDisputeRequest](docs/Model/UpdateEvidencePaymentDisputeRequest.md)
- [UploadEvidenceFilePaymentDisputeResponse](docs/Model/UploadEvidenceFilePaymentDisputeResponse.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.payment.dispute**: View and manage disputes and related details (including payment and order information).


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.fulfillment**: View and manage your order fulfillments
    - **https://api.ebay.com/oauth/api_scope/sell.finances**: View and manage your payment and order information to display this information to you and allow you to initiate refunds using the third party application
    - **https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly**: View your order fulfillments
    - **https://api.ebay.com/oauth/api_scope/sell.payment.dispute**: View and manage disputes and related details (including payment and order information).
    - **eBayUser**: eBay user access scope


### bearerAuth

- **Type**: Bearer authentication


### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.payment.dispute**: Access to payment dispute resources, including reading dispute details and submitting seller responses and evidence
    - **eBayUser**: eBay user access scope

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.20.6`
    - Generator version: `7.25.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
