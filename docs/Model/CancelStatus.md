# CancelStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelled_date** | **string** | The date and time the order was cancelled, if applicable. This timestamp is in &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; format, which uses the 24-hour Universal Coordinated Time (UTC) clock. &lt;br&gt;&lt;br&gt;&lt;strong&gt;Format:&lt;/strong&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;strong&gt;Example:&lt;/strong&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**cancel_requests** | [**\eBay\Sell\Fulfillment\Model\CancelRequest[]**](CancelRequest.md) | This array contains details of one or more buyer requests to cancel the order. &lt;br&gt;&lt;br&gt;&lt;strong&gt;For the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; call:&lt;/strong&gt;  This array is returned but is always empty.&lt;br&gt;&lt;br&gt;&lt;strong&gt;For the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrder&lt;/a&gt; call:&lt;/strong&gt; This array is returned fully populated with information about any cancellation requests. | [optional]
**cancel_state** | [**\eBay\Sell\Fulfillment\Model\CancelStateEnum**](CancelStateEnum.md) | The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of &lt;code&gt;NONE_REQUESTED&lt;/code&gt; is returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
