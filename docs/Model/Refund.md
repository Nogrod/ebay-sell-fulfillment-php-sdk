# Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_id** | **string** | The unique identifier of the order refund. This value is returned unless the refund operation fails (refundStatus value shows FAILED). This identifier can be used to track the status of the refund through a getOrder or getOrders call. For order-level refunds, check the paymentSummary.refunds.refundId field in the getOrder/getOrders response, and for line item level refunds, check the lineItems.refunds.refundId field(s) in the getOrder/getOrders response. | [optional]
**refund_status** | **string** | The value returned in this field indicates the success or failure of the refund operation. A successful &lt;strong&gt;issueRefund&lt;/strong&gt; operation should result in a value of &lt;code&gt;PENDING&lt;/code&gt;. A failed &lt;strong&gt;issueRefund&lt;/strong&gt; operation should result in a value of &lt;code&gt;FAILED&lt;/code&gt;, and an HTTP status code and/or API error code may also get returned to possibly indicate the issue.&lt;br&gt;&lt;br&gt;The refunds issued through this method are processed asynchronously, so the refund will not show as &#39;Refunded&#39; right away. A seller will have to make a subsequent &lt;strong&gt;getOrder&lt;/strong&gt; call to check the status of the refund.  The status of an order refund can be found in the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder.orderrefund.refundstatus\&quot; target&#x3D;\&quot;_blank\&quot;&gt;paymentSummary.refunds.refundStatus&lt;/a&gt; field of the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrder&lt;/a&gt; response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
