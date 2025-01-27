# eBay\Sell\Fulfillment\PaymentDisputeApi

All URIs are relative to https://api.ebay.com/sell/fulfillment/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptPaymentDispute()**](PaymentDisputeApi.md#acceptPaymentDispute) | **POST** /payment_dispute/{payment_dispute_id}/accept | Accept Payment Dispute |
| [**addEvidence()**](PaymentDisputeApi.md#addEvidence) | **POST** /payment_dispute/{payment_dispute_id}/add_evidence | Add an Evidence File |
| [**contestPaymentDispute()**](PaymentDisputeApi.md#contestPaymentDispute) | **POST** /payment_dispute/{payment_dispute_id}/contest | Contest Payment Dispute |
| [**fetchEvidenceContent()**](PaymentDisputeApi.md#fetchEvidenceContent) | **GET** /payment_dispute/{payment_dispute_id}/fetch_evidence_content | Get Payment Dispute Evidence File |
| [**getActivities()**](PaymentDisputeApi.md#getActivities) | **GET** /payment_dispute/{payment_dispute_id}/activity | Get Payment Dispute Activity |
| [**getPaymentDispute()**](PaymentDisputeApi.md#getPaymentDispute) | **GET** /payment_dispute/{payment_dispute_id} | Get Payment Dispute Details |
| [**getPaymentDisputeSummaries()**](PaymentDisputeApi.md#getPaymentDisputeSummaries) | **GET** /payment_dispute_summary | Search Payment Dispute by Filters |
| [**updateEvidence()**](PaymentDisputeApi.md#updateEvidence) | **POST** /payment_dispute/{payment_dispute_id}/update_evidence | Update evidence |
| [**uploadEvidenceFile()**](PaymentDisputeApi.md#uploadEvidenceFile) | **POST** /payment_dispute/{payment_dispute_id}/upload_evidence_file | Upload an Evidence File |


## `acceptPaymentDispute()`

```php
acceptPaymentDispute($payment_dispute_id, $accept_payment_dispute_request)
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Accept Payment Dispute

This method is used if the seller wishes to accept a payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on theste fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the payment dispute being accepted. <br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$accept_payment_dispute_request = new \eBay\Sell\Fulfillment\Model\AcceptPaymentDisputeRequest(); // \eBay\Sell\Fulfillment\Model\AcceptPaymentDisputeRequest

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $apiInstance->acceptPaymentDispute($payment_dispute_id, $accept_payment_dispute_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->acceptPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the payment dispute being accepted. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **accept_payment_dispute_request** | [**\eBay\Sell\Fulfillment\Model\AcceptPaymentDisputeRequest**](../Model/AcceptPaymentDisputeRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addEvidence()`

```php
addEvidence($payment_dispute_id, $add_evidence_payment_dispute_request): \eBay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeResponse
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Add an Evidence File

This method is used by the seller to add one or more evidence files to address a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> All evidence files should be uploaded using <strong>addEvidence</strong> and <strong>updateEvidence</strong>  before the seller decides to contest the payment dispute. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong> or through My eBay), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of evidence file(s) that will be needed to contest the payment dispute.</span><br><br>The file(s) to add are identified through the <strong>files</strong> array in the request payload.  Adding one or more new evidence files for a payment dispute triggers the creation of an evidence file, and the unique identifier for the new evidence file is automatically generated and returned in the <strong>evidenceId</strong> field of the <strong>addEvidence</strong> response payload upon a successful call.<br><br>The type of evidence being added should be specified in the <strong>evidenceType</strong> field. All files being added (if more than one) should correspond to this evidence type.<br><br>Upon a successful call, an <strong>evidenceId</strong> value is returned in the response. This indicates that a new evidence set has been created for the payment dispute, and this evidence set includes the evidence file(s) that were passed in to the <strong>fileId</strong> array. The <strong>evidenceId</strong> value will be needed if the seller wishes to add to the evidence set by using the <strong>updateEvidence</strong> method, or if they want to retrieve a specific evidence file within the evidence set by using the <strong>fetchEvidenceContent</strong> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the contested payment dispute for which the seller wishes to add evidence files. <br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$add_evidence_payment_dispute_request = new \eBay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeRequest(); // \eBay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeRequest

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->addEvidence($payment_dispute_id, $add_evidence_payment_dispute_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->addEvidence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the contested payment dispute for which the seller wishes to add evidence files. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **add_evidence_payment_dispute_request** | [**\eBay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeRequest**](../Model/AddEvidencePaymentDisputeRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\AddEvidencePaymentDisputeResponse**](../Model/AddEvidencePaymentDisputeResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contestPaymentDispute()`

```php
contestPaymentDispute($payment_dispute_id, $contest_payment_dispute_request)
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Contest Payment Dispute

This method is used if the seller wishes to contest a payment dispute initiated by the buyer. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> Before contesting a payment dispute, the seller must upload all supporting files using the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong>), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of supporting file(s) that will be needed to contest the payment dispute.</span><br><br>If a seller decides to contest a payment dispute, that seller should be prepared to provide supporting documents such as proof of delivery, proof of authentication, or other documents. The type of supporting documents that the seller will provide will depend on why the buyer filed the payment dispute.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on these fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the payment dispute being contested. <br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$contest_payment_dispute_request = new \eBay\Sell\Fulfillment\Model\ContestPaymentDisputeRequest(); // \eBay\Sell\Fulfillment\Model\ContestPaymentDisputeRequest

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $apiInstance->contestPaymentDispute($payment_dispute_id, $contest_payment_dispute_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->contestPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the payment dispute being contested. &lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **contest_payment_dispute_request** | [**\eBay\Sell\Fulfillment\Model\ContestPaymentDisputeRequest**](../Model/ContestPaymentDisputeRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchEvidenceContent()`

```php
fetchEvidenceContent($payment_dispute_id, $evidence_id, $file_id): string[]
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Get Payment Dispute Evidence File

This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:<ul><li><strong>payment_dispute_id</strong>: the identifier of the payment dispute. The identifier of each payment dispute is returned in the <strong>getPaymentDisputeSummaries</strong> response.</li><li><strong>evidence_id</strong>: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <strong>getPaymentDispute</strong> response.</li><li><strong>file_id</strong>: the identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <strong>getPaymentDispute</strong> response.</li></ul><p>An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This path parameter is used to specify the unique identifier of the payment dispute associated with the evidence file being retrieved.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$evidence_id = 'evidence_id_example'; // string | This query parameter is used to specify the unique identifier of the evidential file set.<br><br>The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute\" target=\"_blank \">getPaymentDispute</a> response.
$file_id = 'file_id_example'; // string | This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter.<br><br>The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute\" target=\"_blank \">getPaymentDispute</a> response.

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->fetchEvidenceContent($payment_dispute_id, $evidence_id, $file_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->fetchEvidenceContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This path parameter is used to specify the unique identifier of the payment dispute associated with the evidence file being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **evidence_id** | **string**| This query parameter is used to specify the unique identifier of the evidential file set.&lt;br&gt;&lt;br&gt;The identifier of an evidential file set for a payment dispute is returned under the &lt;strong&gt;evidence&lt;/strong&gt; array in the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDispute&lt;/a&gt; response. | |
| **file_id** | **string**| This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identified through the &lt;strong&gt;evidence_id&lt;/strong&gt; query parameter.&lt;br&gt;&lt;br&gt;The identifier of each evidential file is returned under the &lt;strong&gt;evidence.files&lt;/strong&gt; array in the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDispute&lt;/a&gt; response. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string[]**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivities()`

```php
getActivities($payment_dispute_id): \eBay\Sell\Fulfillment\Model\PaymentDisputeActivityHistory
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Get Payment Dispute Activity

This method retrieve a log of activity for a payment dispute. The identifier of the payment dispute is passed in as a path parameter. The output includes a timestamp for each action of the payment dispute, from creation to resolution, and all steps in between.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the payment dispute associated with the activity log being retrieved.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getActivities($payment_dispute_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the payment dispute associated with the activity log being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\PaymentDisputeActivityHistory**](../Model/PaymentDisputeActivityHistory.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentDispute()`

```php
getPaymentDispute($payment_dispute_id): \eBay\Sell\Fulfillment\Model\PaymentDispute
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Get Payment Dispute Details

This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI.<br><br>Below is a summary of the information that is retrieved:<ul><li>Current status of payment dispute</li><li>Amount of the payment dispute</li><li>Reason the payment dispute was opened</li><li>Order and line items associated with the payment dispute</li><li>Seller response options if an action is currently required on the payment dispute</li><li>Details on the results of the payment dispute if it has been closed</li><li>Details on any evidence that was provided by the seller to fight the payment dispute</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the payment dispute being retrieved.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getPaymentDispute($payment_dispute_id, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the payment dispute being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\PaymentDispute**](../Model/PaymentDispute.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentDisputeSummaries()`

```php
getPaymentDisputeSummaries($order_id, $buyer_username, $open_date_from, $open_date_to, $payment_dispute_status, $limit, $offset): \eBay\Sell\Fulfillment\Model\DisputeSummaryResponse
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Search Payment Dispute by Filters

This method is used retrieve one or more payment disputes filed against the seller. These payment disputes can be open or recently closed. The following filter types are available in the request payload to control the payment disputes that are returned:<ul><li>Dispute filed against a specific order (<b>order_id</b> parameter is used)</li><li>Dispute(s) filed by a specific buyer (<b>buyer_username</b> parameter is used)</li><li>Dispute(s) filed within a specific date range (<b>open_date_from</b> and/or <b>open_date_to</b> parameters are used)</li><li>Disputes in a specific state (<b>payment_dispute_status</b> parameter is used)</li></ul>More than one of these filter types can be used together. See the request payload request fields for more information about how each filter is used.<br><br>If none of the filters are used, all open and recently closed payment disputes are returned.<br><br>Pagination is also available. See the <b>limit</b> and <b>offset</b> fields for more information on how pagination is used for this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored.<br><br>Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.
$buyer_username = 'buyer_username_example'; // string | This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific buyer. The string that is passed in to this query parameter is the eBay user ID of the buyer.
$open_date_from = 'open_date_from_example'; // string | The <b>open_date_from</b> and/or <b>open_date_to</b> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <b>open_date_from</b> and/or <b>open_date_to</b> filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <b>open_date_from</b> field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a <b>open_date_from</b> field is used, but a <b>open_date_to</b> field is not used, the <b>open_date_to</b> value will default to 90 days after the date specified in the <b>open_date_from</b> field, or to the present time if less than 90 days in the past.<br><br>The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
$open_date_to = 'open_date_to_example'; // string | The <b>open_date_from</b> and/or <b>open_date_to</b> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <b>open_date_from</b> and/or <b>open_date_to</b> filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <b>open_date_to</b> field sets the ending date of the date range, and can be set up to 90 days from the date set in the <b>open_date_from</b> field. <br><br>The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
$payment_dispute_status = 'payment_dispute_status_example'; // string | This filter is used if the seller wishes to only retrieve payment disputes in one or more specific states. To filter by more than one status value, a separate <b>payment_dispute_status</b> filter must be used for each value, as shown below:<br><br><i>https://apiz.ebay.com/sell/fulfillment/v1/payment_dispute_summary?payment_dispute_status=OPEN&payment_dispute_status=ACTION_NEEDED</i> <br><br>If no <b>payment_dispute_status</b> filter is used, payment disputes in all states are returned in the response.<br><br>See <a href=\"/api-docs/sell/fulfillment/types/api:DisputeStateEnum\" target=\"_blank \">DisputeStatusEnum</a> type for supported values.
$limit = 'limit_example'; // string | The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.<br><br><b>Min</b>: 1<br><br> <b>Max</b>: 200<br><br><b>Default</b>: 200
$offset = 'offset_example'; // string | This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the <b>offset</b> value to <code>0</code> (default value), the first payment dispute in the result set appears at the top of the response. <br><br>Combine <b>offset</b> with the <b>limit</b> parameter to control the payment disputes returned in the response. For example, if you supply an <b>offset</b> value of <code>0</code> and a <b>limit</b> value of <code>10</code>, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an <b>offset</b> value of <code>10</code> and a <b>limit</b> value of <code>20</code>, the response will contain payment disputes 11-30 from the result set that matches the input criteria.<br><br><b>Min</b>: 0 <br><br><b>Default</b>: 0

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getPaymentDisputeSummaries($order_id, $buyer_username, $open_date_from, $open_date_to, $payment_dispute_status, $limit, $offset, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->getPaymentDisputeSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub. | [optional] |
| **buyer_username** | **string**| This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific buyer. The string that is passed in to this query parameter is the eBay user ID of the buyer. | [optional] |
| **open_date_from** | **string**| The &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.&lt;br&gt;&lt;br&gt;The &lt;b&gt;open_date_from&lt;/b&gt; field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a &lt;b&gt;open_date_from&lt;/b&gt; field is used, but a &lt;b&gt;open_date_to&lt;/b&gt; field is not used, the &lt;b&gt;open_date_to&lt;/b&gt; value will default to 90 days after the date specified in the &lt;b&gt;open_date_from&lt;/b&gt; field, or to the present time if less than 90 days in the past.&lt;br&gt;&lt;br&gt;The ISO-8601 format looks like this: &lt;em&gt;yyyy-MM-ddThh:mm.ss.sssZ&lt;/em&gt;. An example would be &lt;code&gt;2019-08-04T19:09:02.768Z&lt;/code&gt;. | [optional] |
| **open_date_to** | **string**| The &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the &lt;b&gt;open_date_from&lt;/b&gt; and/or &lt;b&gt;open_date_to&lt;/b&gt; filters is 90 days. These date filters use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.&lt;br&gt;&lt;br&gt;The &lt;b&gt;open_date_to&lt;/b&gt; field sets the ending date of the date range, and can be set up to 90 days from the date set in the &lt;b&gt;open_date_from&lt;/b&gt; field. &lt;br&gt;&lt;br&gt;The ISO-8601 format looks like this: &lt;em&gt;yyyy-MM-ddThh:mm.ss.sssZ&lt;/em&gt;. An example would be &lt;code&gt;2019-08-04T19:09:02.768Z&lt;/code&gt;. | [optional] |
| **payment_dispute_status** | **string**| This filter is used if the seller wishes to only retrieve payment disputes in one or more specific states. To filter by more than one status value, a separate &lt;b&gt;payment_dispute_status&lt;/b&gt; filter must be used for each value, as shown below:&lt;br&gt;&lt;br&gt;&lt;i&gt;https://apiz.ebay.com/sell/fulfillment/v1/payment_dispute_summary?payment_dispute_status&#x3D;OPEN&amp;payment_dispute_status&#x3D;ACTION_NEEDED&lt;/i&gt; &lt;br&gt;&lt;br&gt;If no &lt;b&gt;payment_dispute_status&lt;/b&gt; filter is used, payment disputes in all states are returned in the response.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/types/api:DisputeStateEnum\&quot; target&#x3D;\&quot;_blank \&quot;&gt;DisputeStatusEnum&lt;/a&gt; type for supported values. | [optional] |
| **limit** | **string**| The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min&lt;/b&gt;: 1&lt;br&gt;&lt;br&gt; &lt;b&gt;Max&lt;/b&gt;: 200&lt;br&gt;&lt;br&gt;&lt;b&gt;Default&lt;/b&gt;: 200 | [optional] |
| **offset** | **string**| This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the &lt;b&gt;offset&lt;/b&gt; value to &lt;code&gt;0&lt;/code&gt; (default value), the first payment dispute in the result set appears at the top of the response. &lt;br&gt;&lt;br&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; parameter to control the payment disputes returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; value of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; value of &lt;code&gt;10&lt;/code&gt;, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an &lt;b&gt;offset&lt;/b&gt; value of &lt;code&gt;10&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; value of &lt;code&gt;20&lt;/code&gt;, the response will contain payment disputes 11-30 from the result set that matches the input criteria.&lt;br&gt;&lt;br&gt;&lt;b&gt;Min&lt;/b&gt;: 0 &lt;br&gt;&lt;br&gt;&lt;b&gt;Default&lt;/b&gt;: 0 | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\DisputeSummaryResponse**](../Model/DisputeSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEvidence()`

```php
updateEvidence($payment_dispute_id, $update_evidence_payment_dispute_request)
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Update evidence

This method is used by the seller to update an existing evidence set for a payment dispute with one or more evidence files. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> All evidence files should be uploaded using <strong>addEvidence</strong> and <strong>updateEvidence</strong>  before the seller decides to contest the payment dispute. Once the seller has officially contested the dispute (using <strong>contestPaymentDispute</strong> or through My eBay), the <strong>addEvidence</strong> and <strong>updateEvidence</strong> methods can no longer be used. In the <strong>evidenceRequests</strong> array of the <strong>getPaymentDispute</strong> response, eBay prompts the seller with the type of evidence file(s) that will be needed to contest the payment dispute.</span><br><br>The unique identifier of the evidence set to update is specified through the <strong>evidenceId</strong> field, and the file(s) to add are identified through the <strong>files</strong> array in the request payload. The unique identifier for an evidence file is automatically generated and returned in the <strong>fileId</strong> field of the <strong>uploadEvidence</strong> response payload upon a successful call. Sellers must make sure to capture the <strong>fileId</strong> value for each evidence file that is uploaded with the <strong>uploadEvidence</strong> method.<br><br>The type of evidence being added should be specified in the <strong>evidenceType</strong> field.  All files being added (if more than one) should correspond to this evidence type.<br><br>Upon a successful call, an http status code of <code>204 Success</code> is returned. There is no response payload unless an error occurs. To verify that a new file is a part of the evidence set, the seller can use the <strong>fetchEvidenceContent</strong> method, passing in the proper <strong>evidenceId</strong> and <strong>fileId</strong> values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the contested payment dispute for which the user plans to update the evidence set.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$update_evidence_payment_dispute_request = new \eBay\Sell\Fulfillment\Model\UpdateEvidencePaymentDisputeRequest(); // \eBay\Sell\Fulfillment\Model\UpdateEvidencePaymentDisputeRequest

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $apiInstance->updateEvidence($payment_dispute_id, $update_evidence_payment_dispute_request, $hostIndex, $variables);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->updateEvidence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the contested payment dispute for which the user plans to update the evidence set.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **update_evidence_payment_dispute_request** | [**\eBay\Sell\Fulfillment\Model\UpdateEvidencePaymentDisputeRequest**](../Model/UpdateEvidencePaymentDisputeRequest.md)|  | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadEvidenceFile()`

```php
uploadEvidenceFile($payment_dispute_id, $creation_date, $file_name, $modification_date, $name, $parameters, $read_date, $size, $type, $file): \eBay\Sell\Fulfillment\Model\FileEvidence
```
### URI(s):
- https://apiz.ebay.com{basePath} Production
    - Variables:
      - basePath:  No description provided
        - Default value: /sell/fulfillment/v1

Upload an Evidence File

This method is used to upload an evidence file for a contested payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <strong>getPaymentDisputeSummaries</strong> method.<br><br><span class=\"tablenote\"><strong>Note:</strong> The <strong>uploadEvidenceFile</strong> only uploads an encrypted, binary image file (using <strong>multipart/form-data</strong> HTTP request header), and does not have a JSON-based request payload.<br><br>Use 'file' as the name of the key that you use to upload the image file. The upload will not be successful if a different key name is used.<br><br>The three image formats supported at this time are <strong>.JPEG</strong>, <strong>.JPG</strong>, and <strong>.PNG</strong>.</span><br><br>After the file is successfully uploaded, the seller will need to grab the <strong>fileId</strong> value in the response payload to add this file to a new evidence set using the <strong>addEvidence</strong> method, or to add this file to an existing evidence set using the <strong>updateEvidence</strong> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\PaymentDisputeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_dispute_id = 'payment_dispute_id_example'; // string | This parameter is used to specify the unique identifier of the contested payment dispute for which the user intends to upload an evidence file.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\" target=\"_blank \">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
$creation_date = 'creation_date_example'; // string | The file creation date. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 8, 2019</p><p><code>2019-09-08T00:00:00.000Z</code></p>
$file_name = 'file_name_example'; // string | The name of the file including its extension (for example, xml or csv) to be uploaded.
$modification_date = 'modification_date_example'; // string | The file modified date. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 9, 2019</p><p><code>2019-09-09T00:00:00.000Z</code></p>
$name = 'name_example'; // string | A content identifier. The only presently supported name is <code>file</code>.
$parameters = NULL; // array<string,string> | The parameters you want associated with the file.
$read_date = 'read_date_example'; // string | The date you read the file. <br /><br /><b> Format: </b> UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on September 10, 2019</p><p><code>2019-09-10T00:00:00.000Z</code></p>
$size = 56; // int | The size of the file.
$type = 'type_example'; // string | The file type. The only presently supported type is <code>form-data</code>.
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload.

$hostIndex = 0;
$variables = [
    'basePath' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->uploadEvidenceFile($payment_dispute_id, $creation_date, $file_name, $modification_date, $name, $parameters, $read_date, $size, $type, $file, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDisputeApi->uploadEvidenceFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_dispute_id** | **string**| This parameter is used to specify the unique identifier of the contested payment dispute for which the user intends to upload an evidence file.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDisputeSummaries\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentDisputeSummaries&lt;/a&gt; method to retrieve payment dispute IDs. | |
| **creation_date** | **string**| The file creation date. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format: &lt;/b&gt; UTC &lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ&lt;/code&gt;&lt;p&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;p&gt;Created on September 8, 2019&lt;/p&gt;&lt;p&gt;&lt;code&gt;2019-09-08T00:00:00.000Z&lt;/code&gt;&lt;/p&gt; | [optional] |
| **file_name** | **string**| The name of the file including its extension (for example, xml or csv) to be uploaded. | [optional] |
| **modification_date** | **string**| The file modified date. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format: &lt;/b&gt; UTC &lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ&lt;/code&gt;&lt;p&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;p&gt;Created on September 9, 2019&lt;/p&gt;&lt;p&gt;&lt;code&gt;2019-09-09T00:00:00.000Z&lt;/code&gt;&lt;/p&gt; | [optional] |
| **name** | **string**| A content identifier. The only presently supported name is &lt;code&gt;file&lt;/code&gt;. | [optional] |
| **parameters** | [**array<string,string>**](../Model/array.md)| The parameters you want associated with the file. | [optional] |
| **read_date** | **string**| The date you read the file. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format: &lt;/b&gt; UTC &lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ&lt;/code&gt;&lt;p&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;p&gt;Created on September 10, 2019&lt;/p&gt;&lt;p&gt;&lt;code&gt;2019-09-10T00:00:00.000Z&lt;/code&gt;&lt;/p&gt; | [optional] |
| **size** | **int**| The size of the file. | [optional] |
| **type** | **string**| The file type. The only presently supported type is &lt;code&gt;form-data&lt;/code&gt;. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\FileEvidence**](../Model/FileEvidence.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
