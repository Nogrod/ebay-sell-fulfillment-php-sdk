# PaymentDisputeActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_date** | **string** | The timestamp in this field shows the date/time of the payment dispute activity.&lt;br&gt;&lt;br&gt;The timestamps returned here use the &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: &lt;em&gt;yyyy-MM-ddThh:mm.ss.sssZ&lt;/em&gt;. An example would be &lt;code&gt;2019-08-04T19:09:02.768Z&lt;/code&gt;. | [optional]
**activity_type** | [**\eBay\Sell\Fulfillment\Model\ActivityEnum**](ActivityEnum.md) | This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of &lt;code&gt;DISPUTE_OPENED&lt;/code&gt; is returned when a payment disute is first created,  a value indicating the seller&#39;s decision on the dispute, such as &lt;code&gt;SELLER_CONTEST&lt;/code&gt;, is returned when seller makes a decision to accept or contest dispute, and a value of &lt;code&gt;DISPUTE_CLOSED&lt;/code&gt; is returned when a payment disute is resolved. See &lt;strong&gt;ActivityEnum&lt;/strong&gt; for an explanation of each of the values that may be returned here. | [optional]
**actor** | [**\eBay\Sell\Fulfillment\Model\ActorEnum**](ActorEnum.md) | This enumeration value indicates the actor that performed the action. Possible values include the &lt;code&gt;BUYER&lt;/code&gt;, &lt;code&gt;SELLER&lt;/code&gt;, &lt;code&gt;CS_AGENT&lt;/code&gt; (eBay customer service), or &lt;code&gt;SYSTEM&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
