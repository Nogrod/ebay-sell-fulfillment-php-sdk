# CancelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancel_completed_date** | **string** | This string is the date and time that the order cancellation was completed, if applicable. This timestamp is in &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Format:&lt;/strong&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;strong&gt;Example:&lt;/strong&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**cancel_initiator** | **string** | This string value indicates the party who made the initial cancellation request. This is typically, either the &#39;Buyer&#39; or &#39;Seller&#39;. If a cancellation request has been made, this field should be returned. | [optional]
**cancel_reason** | **string** | This string indicates the reason why the &lt;strong&gt;cancelInitiator&lt;/strong&gt; initiated the cancellation request. Cancellation reasons for a buyer might include &#39;order placed by mistake&#39; or &#39;order won&#39;t arrive in time&#39;. For a seller, a typical cancellation reason is &#39;out of stock&#39;. If a cancellation request has been made, this field should be returned. | [optional]
**cancel_requested_date** | **string** | This string is the date and time that the order cancellation was requested. This timestamp is in &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Format:&lt;/strong&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br&gt;&lt;strong&gt;Example:&lt;/strong&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**cancel_request_id** | **string** | This string vlaue is the unique identifier of the order cancellation request. This field is returned for each cancellation request. | [optional]
**cancel_request_state** | **string** | The current stage or condition of the cancellation request. This field is returned for each cancellation request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
