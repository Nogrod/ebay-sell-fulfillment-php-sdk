# LineItemReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_item_id** | **string** | This is the unique identifier of the eBay order line item that is part of the shipping fulfillment.&lt;br&gt;&lt;br&gt;Line item Ids can be found in the &lt;strong&gt;lineItems.lineItemId&lt;/strong&gt; field of the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; response. | [optional]
**quantity** | **int** | This is the number of lineItems associated with the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-createshippingfulfillment.shippingfulfillmentdetails.trackingnumber\&quot; target&#x3D;\&quot;_blank\&quot;&gt;trackingNumber&lt;/a&gt; specified by the seller. This must be a whole number greater than zero (0).&lt;br&gt;&lt;br&gt;&lt;strong&gt;Default:&lt;/strong&gt; 1 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
