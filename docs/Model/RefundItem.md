# RefundItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_amount** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container is used to specify the amount of the refund for the corresponding order line item. If a seller wants to issue a refund for an entire order, the seller would use the &lt;strong&gt;orderLevelRefundAmount&lt;/strong&gt; container instead. | [optional]
**line_item_id** | **string** | The unique identifier of an order line item. This identifier is created once a buyer purchases a &#39;Buy It Now&#39; item or if an auction listing ends with a winning bidder. Either this field or the legacyReference container is needed to identify an individual order line item that will receive a refund. This value is returned using the getOrders method. | [optional]
**legacy_reference** | [**\eBay\Sell\Fulfillment\Model\LegacyReference**](LegacyReference.md) | This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID/transaction ID pair to identify the order line item.&lt;br&gt;&lt;br&gt;Either this container or the &lt;strong&gt;lineItemId&lt;/strong&gt; field is needed to identify an individual order line item that will receive a refund. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This container should &lt;strong&gt;only&lt;/strong&gt; be used if a seller is using the&lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/xml/docs/reference/ebay/getorders.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; method of the &lt;strong&gt;Trading API&lt;/strong&gt;.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
