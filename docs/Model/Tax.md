# Tax

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | The monetary amount of the tax. The &lt;strong&gt;taxes&lt;/strong&gt; array is always returned for each line item in the order, but this &lt;strong&gt;amount&lt;/strong&gt; will only be returned when the line item is subject to any type of sales tax. | [optional]
**tax_type** | [**\eBay\Sell\Fulfillment\Model\TaxTypeEnum**](TaxTypeEnum.md) | Tax type. This field is only available when &lt;strong&gt;fieldGroups&lt;/strong&gt; is set to &lt;code&gt;TAX_BREAKDOWN&lt;/code&gt;. If the order has fees, a breakdown of the fees is also provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
