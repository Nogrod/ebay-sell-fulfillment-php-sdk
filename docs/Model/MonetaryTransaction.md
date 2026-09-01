# MonetaryTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions.&lt;br&gt;&lt;br&gt; The following format is used: &lt;code&gt;YYYY-MM-DDTHH:MM:SS.SSSZ&lt;/code&gt;. For example, &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt;. | [optional]
**type** | **string** | This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller. | [optional]
**reason** | **string** | This enumeration value indicates the reason for the monetary transaction. | [optional]
**amount** | [**\eBay\Sell\Fulfillment\Model\DisputeAmount**](DisputeAmount.md) | The amount involved in the monetary transaction. For active cross-border trade orders, the currency conversion and &lt;strong&gt;exchangeRate&lt;/strong&gt; fields will be displayed as well. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
