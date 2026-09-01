# Amount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**converted_from_currency** | [**\eBay\Sell\Fulfillment\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) | A three-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-4217-currency-codes.html\&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 4217&lt;/a&gt; code that indicates the currency of the amount in the &lt;strong&gt;convertedFromValue&lt;/strong&gt; field. This value is required or returned only if currency conversion/localization is required and represents the pre-conversion currency. | [optional]
**converted_from_value** | **string** | The monetary amount, before any conversion is performed, in the currency specified by the &lt;strong&gt;convertedFromCurrency&lt;/strong&gt; field. This value is required or returned only if currency conversion/localization is required. The &lt;strong&gt;value&lt;/strong&gt; field contains the converted amount of this value in the currency specified by the &lt;strong&gt;currency&lt;/strong&gt; field. | [optional]
**currency** | [**\eBay\Sell\Fulfillment\Model\CurrencyCodeEnum**](CurrencyCodeEnum.md) | A three-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-4217-currency-codes.html\&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 4217&lt;/a&gt; code that indicates the currency of the amount in the &lt;strong&gt;value&lt;/strong&gt; field. If currency conversion/localization is required, this is the post-conversion currency of the amount in the &lt;strong&gt;value&lt;/strong&gt; field.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Default:&lt;/strong&gt; The default currency with be that of the eBay marketplace that hosts the listing. | [optional]
**value** | **string** | The monetary amount in the currency specified by the &lt;strong&gt;currency&lt;/strong&gt; field. If currency conversion/localization is required, this value is the converted amount, and the &lt;strong&gt;convertedFromValue&lt;/strong&gt; field contains the amount in the original currency.  &lt;br&gt;&lt;br&gt;&lt;em&gt;Required&lt;/em&gt; in the &lt;strong&gt;amount&lt;/strong&gt; type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
