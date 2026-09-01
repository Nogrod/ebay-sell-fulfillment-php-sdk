# IssueRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason_for_refund** | [**\eBay\Sell\Fulfillment\Model\ReasonForRefundEnum**](ReasonForRefundEnum.md) | The enumeration value passed in this field indicates the reason for the refund. One of the defined enumeration values in the &lt;strong&gt;ReasonForRefundEnum&lt;/strong&gt; type must be used.&lt;br&gt;&lt;br&gt;This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or &#39;buyer remorse&#39; return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate &lt;strong&gt;issueRefund&lt;/strong&gt; calls, one for each refund reason. &lt;/span&gt; |
**comment** | **string** | This free-text field allows the seller to clarify why the refund is being issued to the buyer. Max Length: 1000 | [optional]
**refund_items** | [**\eBay\Sell\Fulfillment\Model\RefundItem[]**](RefundItem.md) | The refundItems array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the orderLevelRefundAmount container to specify the amount of the refund for the entire order. | [optional]
**order_level_refund_amount** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container is used to specify the amount of the refund for the entire order. If a seller wants to issue a refund for an individual line item within a multiple line item order, the seller would use the &lt;strong&gt;refundItems&lt;/strong&gt; array instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
