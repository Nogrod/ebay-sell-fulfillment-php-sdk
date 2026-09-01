# DisputeAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**converted_from_currency** | **string** | The three-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-4217-currency-codes.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 4217&lt;/a&gt; code representing the currency of the amount in the &lt;strong&gt; convertedFromValue&lt;/strong&gt; field. This value is the pre-conversion currency.&lt;br&gt;&lt;br&gt;This field is only returned if/when currency conversion was applied by eBay. | [optional]
**converted_from_value** | **string** | The monetary amount before any conversion is performed, in the currency specified by the &lt;strong&gt; convertedFromCurrency&lt;/strong&gt; field. This value is the pre-conversion amount. The &lt;strong&gt; value&lt;/strong&gt; field contains the converted amount of this value, in the currency specified by the &lt;strong&gt; currency&lt;/strong&gt; field.&lt;br&gt;&lt;br&gt;This field is only returned if/when currency conversion was applied by eBay. | [optional]
**currency** | **string** | A three-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-4217-currency-codes.html\&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 4217&lt;/a&gt; code that indicates the currency of the amount in the &lt;strong&gt;value&lt;/strong&gt; field. This field is always returned with any container using &lt;strong&gt;Amount&lt;/strong&gt; type. &lt;br&gt;&lt;br&gt;&lt;strong&gt;Default&lt;/strong&gt;: The currency of the authenticated user&#39;s country. | [optional]
**exchange_rate** | **string** | The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the &lt;strong&gt;value&lt;/strong&gt; field from the dollar value in the &lt;strong&gt;convertedFromValue&lt;/strong&gt; field.&lt;br&gt;&lt;br&gt;This field is only returned if/when currency conversion was applied by eBay. | [optional]
**value** | **string** | The monetary amount, in the currency specified by the &lt;strong&gt;currency&lt;/strong&gt; field. This field is always returned with any container using &lt;strong&gt;Amount&lt;/strong&gt; type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
