# ProcessEvidencePaymentDisputeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\eBay\Sell\Fulfillment\Model\FileEvidence[]**](FileEvidence.md) | This array is used to specify one or more evidence files that will be added to or update the evidence set associated with a payment dispute. | [optional]
**line_items** | [**\eBay\Sell\Fulfillment\Model\OrderLineItems[]**](OrderLineItems.md) | This array identifies the order line item(s) for which the evidence file(s) will be applicable. These values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response. | [optional]
**evidence_type** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
