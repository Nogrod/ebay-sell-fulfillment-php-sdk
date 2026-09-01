# ErrorDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_id** | **int** | uniquely identifying the error within its Domain. | [optional]
**domain** | **string** | The domain your service/application is in | [optional]
**subdomain** | **string** | Name of the subsystem or subdivision of the domain | [optional]
**category** | **string** | The error&#39;s type, with allowed values APPLICATION, BUSINESS, or REQUEST | [optional]
**message** | **string** | A device agnostic message that is end user and app developer friendly. It should explain what the error or warning is, and how it can be fixed (in a general sense). The value MUST be limited to 50 or fewer characters. If applicable, it must also be localized in the end user&#39;s requested locale. Refer to Section 6, Error Message Content and Localization. | [optional]
**long_message** | **string** | An expanded version of message that SHOULD be limited to about 100-200 characters. | [optional]
**input_ref_ids** | **string[]** | Identifies specific request elements associated with the error, if any. inputRefId&#39;s response is format specific. For XML, use XPath notation. For JSON, use JSONPath notation. | [optional]
**output_ref_ids** | **string[]** | Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId. | [optional]
**parameters** | [**\eBay\Sell\Fulfillment\Model\ErrorParameter[]**](ErrorParameter.md) | Used to specify information relevant to the end user/client. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
