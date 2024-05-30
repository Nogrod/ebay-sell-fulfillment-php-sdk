# eBay\Sell\Fulfillment\ShippingFulfillmentApi

All URIs are relative to https://api.ebay.com/sell/fulfillment/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShippingFulfillment()**](ShippingFulfillmentApi.md#createShippingFulfillment) | **POST** /order/{orderId}/shipping_fulfillment |  |
| [**getShippingFulfillment()**](ShippingFulfillmentApi.md#getShippingFulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} |  |
| [**getShippingFulfillments()**](ShippingFulfillmentApi.md#getShippingFulfillments) | **GET** /order/{orderId}/shipping_fulfillment |  |


## `createShippingFulfillment()`

```php
createShippingFulfillment($order_id, $content_type, $shipping_fulfillment_details): object
```



When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a <i>shipping fulfillment</i>. For each package, execute this call once to generate a shipping fulfillment associated with that package. <br><br> <span class=\"tablenote\"><strong>Note:</strong> A single line item in an order can consist of multiple units of a purchased item, and one unit can consist of multiple parts or components. Although these components might be provided by the manufacturer in separate packaging, the seller must include all components of a given line item in the same package.</span> <br><br>Before using this call for a given package, you must determine which line items are in the package. If the package has been shipped, you should provide the date of shipment in the request. If not provided, it will default to the current date and time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being created.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs.
$content_type = 'content_type_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$shipping_fulfillment_details = new \eBay\Sell\Fulfillment\Model\ShippingFulfillmentDetails(); // \eBay\Sell\Fulfillment\Model\ShippingFulfillmentDetails | fulfillment payload

try {
    $result = $apiInstance->createShippingFulfillment($order_id, $content_type, $shipping_fulfillment_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->createShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being created.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. | |
| **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. | |
| **shipping_fulfillment_details** | [**\eBay\Sell\Fulfillment\Model\ShippingFulfillmentDetails**](../Model/ShippingFulfillmentDetails.md)| fulfillment payload | |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingFulfillment()`

```php
getShippingFulfillment($fulfillment_id, $order_id): \eBay\Sell\Fulfillment\Model\ShippingFulfillment
```



Use this call to retrieve the contents of a fulfillment based on its unique identifier, <b>fulfillmentId</b> (combined with the associated order's <b>orderId</b>). The <b>fulfillmentId</b> value was originally generated by the <b>createShippingFulfillment</b> call, and is returned by the <b>getShippingFulfillments</b> call in the <b>members.fulfillmentId</b> field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_id = 'fulfillment_id_example'; // string | This path parameter is used to specify the unique identifier of the shipping fulfillment being retrieved.<br><br>Use the <a href=\"/api-docs/sell/fulfillment/resources/order/shipping_fulfillment/methods/getShippingFulfillments\" target=\"_blank \">getShippingFulfillments</a> method to retrieved fulfillment IDs.
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being retrieved.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.

try {
    $result = $apiInstance->getShippingFulfillment($fulfillment_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fulfillment_id** | **string**| This path parameter is used to specify the unique identifier of the shipping fulfillment being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/shipping_fulfillment/methods/getShippingFulfillments\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getShippingFulfillments&lt;/a&gt; method to retrieved fulfillment IDs. | |
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillment being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub. | |

### Return type

[**\eBay\Sell\Fulfillment\Model\ShippingFulfillment**](../Model/ShippingFulfillment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingFulfillments()`

```php
getShippingFulfillments($order_id): \eBay\Sell\Fulfillment\Model\ShippingFulfillmentPagedCollection
```



Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <b>orderId</b>. This value is returned in the <b>getOrders</b> call's <b>members.orderId</b> field when you search for orders by creation date or shipment status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillments being retrieved.<br><br>Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.

try {
    $result = $apiInstance->getShippingFulfillments($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order associated with the shipping fulfillments being retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub. | |

### Return type

[**\eBay\Sell\Fulfillment\Model\ShippingFulfillmentPagedCollection**](../Model/ShippingFulfillmentPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
