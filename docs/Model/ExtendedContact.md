# ExtendedContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_name** | **string** | The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner. | [optional]
**contact_address** | [**\eBay\Sell\Fulfillment\Model\Address**](Address.md) | This container shows the shipping address of the buyer or eBay shipping partner. | [optional]
**email** | **string** | This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.&lt;br&gt;&lt;br&gt;The &lt;strong&gt;email&lt;/strong&gt; will not be returned for any order that is more than 90 days old.&lt;/span&gt; | [optional]
**full_name** | **string** | The full name of the buyer or eBay shipping partner.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The &lt;strong&gt;fullName&lt;/strong&gt; will not be returned for any order that is more than 90 days old.&lt;/span&gt; | [optional]
**primary_phone** | [**\eBay\Sell\Fulfillment\Model\PhoneNumber**](PhoneNumber.md) | The primary telephone number of the buyer or eBay shipping partner.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The &lt;strong&gt;primaryPhone&lt;/strong&gt; will not be returned for any order that is more than 90 days old.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
