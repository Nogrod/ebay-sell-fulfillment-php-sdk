# DeliveryCost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discount_amount** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | The amount of any shipping discount that has been applied to the line item. This container is returned only if a shipping discount applies to the line item. | [optional]
**handling_cost** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | The amount of any handing cost that has been applied to the line item. This container is returned only if a handling cost applies to the line item. | [optional]
**import_charges** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | The amount of any import charges applied to international shipping of the line item. This container is only returned if import charges apply to the line item. | [optional]
**shipping_cost** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | The total cost of shipping all units of the line item. This container is always returned even when the shipping cost is free, in which case the &lt;strong&gt;value&lt;/strong&gt; field will show &lt;code&gt;0.0&lt;/code&gt; (dollars). | [optional]
**shipping_intermediation_fee** | [**\eBay\Sell\Fulfillment\Model\Amount**](Amount.md) | This field shows the fee due to eBay&#39;s international shipping provider for a line item that is being shipped through the Global Shipping Program.&lt;br&gt;&lt;br&gt;This container is only returned for line items being shipped internationally through the Global Shipping Program, which is currently only supported in the US and UK marketplaces.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The value returned for this field will always be &lt;code&gt;0.0&lt;/code&gt; for line items sold in the UK marketplace.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
