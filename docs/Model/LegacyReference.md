# LegacyReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_item_id** | **string** | The unique identifier of a listing. This value can be found in the Transaction container in the response of the getOrder call of the Trading API. Note: Both legacyItemId and legacyTransactionId are needed to identify an order line item. | [optional]
**legacy_transaction_id** | **string** | The unique identifier of a sale/transaction in legacy/Trading API format. A &#39;transaction ID&#39; is created once a buyer purchases a &#39;Buy It Now&#39; item or if an auction listing ends with a winning bidder. This value can be found in the Transaction container in the response of the getOrder call of the Trading API. Note: Both legacyItemId and legacyTransactionId are needed to identify an order line item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
