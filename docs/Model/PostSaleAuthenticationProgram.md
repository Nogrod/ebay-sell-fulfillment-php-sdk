# PostSaleAuthenticationProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**outcome_reason** | **string** | This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is &lt;code&gt;PENDING&lt;/code&gt; or &lt;code&gt;PASSED&lt;/code&gt;. The possible values returned here are &lt;code&gt;NOT_AUTHENTIC&lt;/code&gt;, &lt;code&gt;NOT_AS_DESCRIBED&lt;/code&gt;, &lt;code&gt;CUSTOMIZED&lt;/code&gt;, &lt;code&gt;MISCATEGORIZED&lt;/code&gt;, or &lt;code&gt;NOT_AUTHENTIC_NO_RETURN&lt;/code&gt;. | [optional]
**status** | **string** | The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are &lt;code&gt;PENDING&lt;/code&gt;, &lt;code&gt;PASSED&lt;/code&gt;, &lt;code&gt;FAILED&lt;/code&gt;, or &lt;code&gt;PASSED_WITH_EXCEPTION&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
