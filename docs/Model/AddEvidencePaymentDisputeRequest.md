# AddEvidencePaymentDisputeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\eBay\Sell\Fulfillment\Model\FileEvidence[]**](FileEvidence.md) | This array is used to specify one or more evidence files that will become part of a new evidence set associated with a payment dispute. At least one evidence file must be specified in the &lt;strong&gt;files&lt;/strong&gt; array. |
**line_items** | [**\eBay\Sell\Fulfillment\Model\OrderLineItems[]**](OrderLineItems.md) | This array identifies the order line item(s) for which the evidence file(s) will be applicable.&lt;br&gt;&lt;Br&gt;These values are returned under the &lt;strong&gt;evidenceRequests.lineItems&lt;/strong&gt; array in the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDispute&lt;/a&gt; response. |
**evidence_type** | **string** | This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.&lt;br&gt;&lt;br&gt;See the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-addevidence.evidencetypeenum\&quot; target&#x3D;\&quot;_blank \&quot;&gt;EvidenceTypeEnum&lt;/a&gt; type for the supported evidence types. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
