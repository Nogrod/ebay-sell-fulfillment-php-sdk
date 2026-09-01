# Program

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticity_verification** | [**\eBay\Sell\Fulfillment\Model\PostSaleAuthenticationProgram**](PostSaleAuthenticationProgram.md) | This field is returned when the third-party authenticator performs the authentication verification inspection on the order line item. Different values will be returned based on whether the item passed or failed the authentication verification inspection. | [optional]
**ebay_shipping** | [**\eBay\Sell\Fulfillment\Model\EbayShipping**](EbayShipping.md) | This container is returned only if the order is an eBay shipping order. It consists of a field that indicates the provider of a shipping label for this order. | [optional]
**ebay_vault** | [**\eBay\Sell\Fulfillment\Model\EbayVaultProgram**](EbayVaultProgram.md) | This field provides information about the eBay vault program that has been selected for an order. This is returned only for those items that are eligible for the eBay Vault Program. | [optional]
**ebay_international_shipping** | [**\eBay\Sell\Fulfillment\Model\EbayInternationalShipping**](EbayInternationalShipping.md) | This container is returned if the order is being fulfilled through eBay International Shipping. | [optional]
**fulfillment_program** | [**\eBay\Sell\Fulfillment\Model\EbayFulfillmentProgram**](EbayFulfillmentProgram.md) | This field provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
