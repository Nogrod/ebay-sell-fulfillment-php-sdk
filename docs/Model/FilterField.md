# FilterField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The name of a field to be used in the filter. Currently, three fields can be used: &lt;strong&gt;creationdate&lt;/strong&gt;, &lt;strong&gt;lastmodifieddate&lt;/strong&gt;, and &lt;strong&gt;orderfulfillmentstatus&lt;/strong&gt;. | [optional]
**range** | [**\eBay\Sell\Fulfillment\Model\RangeValue**](RangeValue.md) | Contains the criteria for specifying a range of values of the specified &lt;strong&gt;field&lt;/strong&gt;. | [optional]
**set** | **string[]** | An enumerated set of values of the specified &lt;strong&gt;field&lt;/strong&gt; that apply simultaneously to the filter. | [optional]
**value** | **string** | A single value of the specified &lt;strong&gt;field&lt;/strong&gt; that applies to the filter. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
