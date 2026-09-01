# ContestPaymentDisputeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note** | **string** | This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Max Length:&lt;/strong&gt; 1000 characters. | [optional]
**return_address** | [**\eBay\Sell\Fulfillment\Model\ReturnAddress**](ReturnAddress.md) | This container is needed if the seller is requesting that the buyer return the item. If this container is used, all relevant fields must be included, including &lt;strong&gt;fullName&lt;/strong&gt; and &lt;strong&gt;primaryPhone&lt;/strong&gt;.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If the &lt;a href &#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputereasonenum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Dispute Reason&lt;/a&gt; is &lt;code&gt;SIGNIFICANTLY_NOT_AS_DESCRIBED&lt;/code&gt;, &lt;strong&gt;returnAddress&lt;/strong&gt; is required.&lt;/span&gt; | [optional]
**revision** | **int** | This integer value indicates the revision number of the payment dispute. This field is required. The current &lt;strong&gt;revision&lt;/strong&gt; number for a payment dispute can be retrieved with the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; method. Each time an action is taken against a payment dispute, this integer value increases by 1. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
