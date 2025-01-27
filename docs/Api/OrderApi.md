# eBay\Sell\Fulfillment\OrderApi

All URIs are relative to https://api.ebay.com/sell/fulfillment/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrder()**](OrderApi.md#getOrder) | **GET** /order/{orderId} |  |
| [**getOrders()**](OrderApi.md#getOrders) | **GET** /order |  |
| [**issueRefund()**](OrderApi.md#issueRefund) | **POST** /order/{order_id}/issue_refund | Issue Refund |


## `getOrder()`

```php
getOrder($order_id, $field_groups): \eBay\Sell\Fulfillment\Model\Order
```



Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value was returned in the <b> getOrders</b> call's <b>orders.orderId</b> field when you searched for orders by creation date, modification date, or fulfillment status. Include the optional <b>fieldGroups</b> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <b>Order</b> object contains information you can use to create and process fulfillments, including: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees, and optionally a breakdown of each </li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order being retrieved.<br><br> Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.<br><br><span class=\"tablenote\"><strong>Note:</strong> <b>getOrders</b> can return orders up to two years old. Do not provide the <b>orderId</b> for an order created more than two years in the past.</span>
$field_groups = 'field_groups_example'; // string | This parameter lets you control what is returned in the response.<br><br><span class=\"tablenote\"><b>Note:</b> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>

try {
    $result = $apiInstance->getOrder($order_id, $field_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;b&gt;getOrders&lt;/b&gt; can return orders up to two years old. Do not provide the &lt;b&gt;orderId&lt;/b&gt; for an order created more than two years in the past.&lt;/span&gt; | |
| **field_groups** | **string**| This parameter lets you control what is returned in the response.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The only presently supported value is &lt;code&gt;TAX_BREAKDOWN&lt;/code&gt;. This field group adds addition fields to the response that return a breakdown of taxes and fees.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\Order**](../Model/Order.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($field_groups, $filter, $limit, $offset, $order_ids): \eBay\Sell\Fulfillment\Model\OrderSearchPagedCollection
```



Use this method to search for and retrieve one or more orders based on their creation date, last modification date, or fulfillment status using the <b>filter</b> parameter. You can alternatively specify a list of orders using the <b>orderIds</b> parameter. Include the optional <b>fieldGroups</b> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. By default, when no filters are used this call returns all orders created within the last 90 days. <br><br> The returned <b>Order</b> objects contain information you can use to create and process fulfillments, including: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li>The plans for packaging, addressing and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees, and optionally a breakdown of each </li></ul> <br><br> <span class=\"tablenote\"><strong>Important:</strong> In this call, the <b>cancelStatus.cancelRequests</b> array is returned but is always empty. Use the <b>getOrder</b> call instead, which returns this array fully populated with information about any cancellation requests.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_groups = 'field_groups_example'; // string | This parameter lets you control what is returned in the response.<br><br><span class=\"tablenote\"><b>Note:</b> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
$filter = 'filter_example'; // string | One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. <br><br><span class=\"tablenote\"><strong>Note:</strong> <b>getOrders</b> can return orders up to two years old. Do not set the <code>creationdate</code> filter to a date beyond two years in the past.</span><br><span class=\"tablenote\"><strong>Note:</strong> If the <b>orderIds</b> parameter is included in the request, the <b>filter</b> parameter will be ignored.</span><br>The available criteria are as follows: <dl> <dt><code><b>creationdate</b></code></dt> <dd>The time period during which qualifying orders were created (the <b>orders.creationDate</b> field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>creationdate:[2016-02-21T08:25:43.511Z..]</code> identifies orders created on or after the given timestamp.</li> <li><code>creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]</code> identifies orders created between the given timestamps, inclusive.</li> </ul> </dd> <dt><code><b>lastmodifieddate</b></code></dt> <dd>The time period during which qualifying orders were last modified (the <b>orders.modifiedDate</b> field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..]</code> identifies orders modified on or after the given timestamp.</li> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]</code> identifies orders modified between the given timestamps, inclusive.</li> </ul> <span class=\"tablenote\"><strong>Note:</strong> If <b>creationdate</b> and <b>lastmodifieddate</b> are both included, only <b>creationdate</b> is used.</span> <br><br></dd> <dt><code><b>orderfulfillmentstatus</b></code></dt> <dd>The degree to which qualifying orders have been shipped (the <b>orders.orderFulfillmentStatus</b> field). In the URI, this is expressed as one of the following value combinations: <ul> <li><code>orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}</code> specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.</li> <li><code>orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}</code> specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.</li> </ul> <span class=\"tablenote\"><strong>Note:</strong> The values <code>NOT_STARTED</code>, <code>IN_PROGRESS</code>, and <code>FULFILLED</code> can be used in various combinations, but only the combinations shown here are currently supported.</span> </dd> </dl> Here is an example of a <b>getOrders</b> call using all of these filters: <br><br> <code>GET https://api.ebay.com/sell/v1/order?<br>filter=<b>creationdate</b>:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,<br><b>lastmodifieddate</b>:%5B2016-05-15T08:25:43.511Z..%5D,<br><b>orderfulfillmentstatus</b>:%7BNOT_STARTED%7CIN_PROGRESS%7D</code> <br><br> <span class=\"tablenote\"><strong>Note:</strong> This call requires that certain special characters in the URI query string be percent-encoded: <br> &nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br> This query filter example uses these codes.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/fulfillment/types/api:FilterField
$limit = 'limit_example'; // string | The number of orders to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br>For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves orders 11 thru 20 from the result set. <br><br> If a limit is not set, the <b>limit</b> defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.<br ><br> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>. If the <b>orderIds</b> parameter is included in the request, this parameter will be ignored.</span> <br><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>50</code>
$offset = 'offset_example'; // string | Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$order_ids = 'order_ids_example'; // string | A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the <b>orderIds</b> query parameter, all other query parameters will be ignored.<br><br><span class=\"tablenote\"><strong>Note:</strong> <b>getOrders</b> can return orders up to two years old. Do not provide the <b>orderId</b> for an order created more than two years in the past.</span>

try {
    $result = $apiInstance->getOrders($field_groups, $filter, $limit, $offset, $order_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_groups** | **string**| This parameter lets you control what is returned in the response.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The only presently supported value is &lt;code&gt;TAX_BREAKDOWN&lt;/code&gt;. This field group adds addition fields to the response that return a breakdown of taxes and fees.&lt;/span&gt; | [optional] |
| **filter** | **string**| One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;b&gt;getOrders&lt;/b&gt; can return orders up to two years old. Do not set the &lt;code&gt;creationdate&lt;/code&gt; filter to a date beyond two years in the past.&lt;/span&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If the &lt;b&gt;orderIds&lt;/b&gt; parameter is included in the request, the &lt;b&gt;filter&lt;/b&gt; parameter will be ignored.&lt;/span&gt;&lt;br&gt;The available criteria are as follows: &lt;dl&gt; &lt;dt&gt;&lt;code&gt;&lt;b&gt;creationdate&lt;/b&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The time period during which qualifying orders were created (the &lt;b&gt;orders.creationDate&lt;/b&gt; field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: &lt;ul&gt; &lt;li&gt;&lt;code&gt;creationdate:[2016-02-21T08:25:43.511Z..]&lt;/code&gt; identifies orders created on or after the given timestamp.&lt;/li&gt; &lt;li&gt;&lt;code&gt;creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]&lt;/code&gt; identifies orders created between the given timestamps, inclusive.&lt;/li&gt; &lt;/ul&gt; &lt;/dd&gt; &lt;dt&gt;&lt;code&gt;&lt;b&gt;lastmodifieddate&lt;/b&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The time period during which qualifying orders were last modified (the &lt;b&gt;orders.modifiedDate&lt;/b&gt; field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: &lt;ul&gt; &lt;li&gt;&lt;code&gt;lastmodifieddate:[2016-05-15T08:25:43.511Z..]&lt;/code&gt; identifies orders modified on or after the given timestamp.&lt;/li&gt; &lt;li&gt;&lt;code&gt;lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]&lt;/code&gt; identifies orders modified between the given timestamps, inclusive.&lt;/li&gt; &lt;/ul&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If &lt;b&gt;creationdate&lt;/b&gt; and &lt;b&gt;lastmodifieddate&lt;/b&gt; are both included, only &lt;b&gt;creationdate&lt;/b&gt; is used.&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;/dd&gt; &lt;dt&gt;&lt;code&gt;&lt;b&gt;orderfulfillmentstatus&lt;/b&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The degree to which qualifying orders have been shipped (the &lt;b&gt;orders.orderFulfillmentStatus&lt;/b&gt; field). In the URI, this is expressed as one of the following value combinations: &lt;ul&gt; &lt;li&gt;&lt;code&gt;orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}&lt;/code&gt; specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.&lt;/li&gt; &lt;li&gt;&lt;code&gt;orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}&lt;/code&gt; specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.&lt;/li&gt; &lt;/ul&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The values &lt;code&gt;NOT_STARTED&lt;/code&gt;, &lt;code&gt;IN_PROGRESS&lt;/code&gt;, and &lt;code&gt;FULFILLED&lt;/code&gt; can be used in various combinations, but only the combinations shown here are currently supported.&lt;/span&gt; &lt;/dd&gt; &lt;/dl&gt; Here is an example of a &lt;b&gt;getOrders&lt;/b&gt; call using all of these filters: &lt;br&gt;&lt;br&gt; &lt;code&gt;GET https://api.ebay.com/sell/v1/order?&lt;br&gt;filter&#x3D;&lt;b&gt;creationdate&lt;/b&gt;:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,&lt;br&gt;&lt;b&gt;lastmodifieddate&lt;/b&gt;:%5B2016-05-15T08:25:43.511Z..%5D,&lt;br&gt;&lt;b&gt;orderfulfillmentstatus&lt;/b&gt;:%7BNOT_STARTED%7CIN_PROGRESS%7D&lt;/code&gt; &lt;br&gt;&lt;br&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This call requires that certain special characters in the URI query string be percent-encoded: &lt;br&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;[&lt;/code&gt; &#x3D; &lt;code&gt;%5B&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;]&lt;/code&gt; &#x3D; &lt;code&gt;%5D&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;{&lt;/code&gt; &#x3D; &lt;code&gt;%7B&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;|&lt;/code&gt; &#x3D; &lt;code&gt;%7C&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;}&lt;/code&gt; &#x3D; &lt;code&gt;%7D&lt;/code&gt; &lt;br&gt; This query filter example uses these codes.&lt;/span&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/fulfillment/types/api:FilterField | [optional] |
| **limit** | **string**| The number of orders to return per page of the result set. Use this parameter in conjunction with the &lt;b&gt;offset&lt;/b&gt; parameter to control the pagination of the output. &lt;br&gt;&lt;br&gt;For example, if &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the call retrieves orders 11 thru 20 from the result set. &lt;br&gt;&lt;br&gt; If a limit is not set, the &lt;b&gt;limit&lt;/b&gt; defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.&lt;br &gt;&lt;br&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;. If the &lt;b&gt;orderIds&lt;/b&gt; parameter is included in the request, this parameter will be ignored.&lt;/span&gt; &lt;br&gt;&lt;br&gt; &lt;b&gt;Maximum:&lt;/b&gt; &lt;code&gt;200&lt;/code&gt; &lt;br&gt; &lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;50&lt;/code&gt; | [optional] |
| **offset** | **string**| Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional] |
| **order_ids** | **string**| A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the &lt;b&gt;orderIds&lt;/b&gt; query parameter, all other query parameters will be ignored.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;b&gt;getOrders&lt;/b&gt; can return orders up to two years old. Do not provide the &lt;b&gt;orderId&lt;/b&gt; for an order created more than two years in the past.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\OrderSearchPagedCollection**](../Model/OrderSearchPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueRefund()`

```php
issueRefund($order_id, $issue_refund_request): \eBay\Sell\Fulfillment\Model\Refund
```

Issue Refund

<div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including <b>issueRefund</b>. Please refer to <a href=\"/develop/guides/digital-signatures-for-apis \" target=\"_blank\">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signatures to be included in the HTTP payload.</p></div><br> This method allows a seller to issue a full or partial refund to a buyer for an order. Full or partial refunds can be issued at the order level or line item level.<br><br>The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrder\" target=\"_blank\">getOrder</a> call to check the status of the refund.  The status of an order refund can be found in the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrder#response.paymentSummary.refunds.refundStatus\" target=\"_blank\">paymentSummary.refunds.refundStatus</a> field of the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrder\" target=\"_blank\">getOrder</a> response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order associated with a refund.<br><br>Use the <a href=\"/api-docs/sell/fulfillment/resources/order/methods/getOrders\" target=\"_blank \">getOrders</a> method to retrieve order IDs.
$issue_refund_request = new \eBay\Sell\Fulfillment\Model\IssueRefundRequest(); // \eBay\Sell\Fulfillment\Model\IssueRefundRequest

try {
    $result = $apiInstance->issueRefund($order_id, $issue_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->issueRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order associated with a refund.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/fulfillment/resources/order/methods/getOrders\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. | |
| **issue_refund_request** | [**\eBay\Sell\Fulfillment\Model\IssueRefundRequest**](../Model/IssueRefundRequest.md)|  | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\Refund**](../Model/Refund.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
