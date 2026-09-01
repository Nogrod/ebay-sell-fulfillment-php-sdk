# eBay\Sell\Fulfillment\OrderApi

All URIs are relative to https://api.ebay.com/sell/fulfillment/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrder()**](OrderApi.md#getOrder) | **GET** /order/{orderId} |  |
| [**getOrders()**](OrderApi.md#getOrders) | **GET** /order |  |
| [**issueRefund()**](OrderApi.md#issueRefund) | **POST** /order/{order_id}/issue_refund | Issues a full or partial refund to a buyer on behalf of the seller. |


## `getOrder()`

```php
getOrder($order_id, $field_groups): \eBay\Sell\Fulfillment\Model\Order
```



Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value is returned in the <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> call's <strong>orders.orderId</strong> field when you search for orders by creation date, modification date, or fulfillment status. Include the optional <strong>fieldGroups</strong> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <strong>Order</strong> object contains information you can use to create and process fulfillments, including the following: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing, and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees and, optionally, a breakdown of each </li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order being retrieved.<br><br> Use the <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.<br><br><span class=\"tablenote\"><strong>Note:</strong> <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> can return orders up to two years old. Do not provide the <strong>orderId</strong> for an order created more than two years in the past.</span>
$field_groups = 'field_groups_example'; // string | This parameter lets you control what is returned in the response.<br><br><span class=\"tablenote\"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>

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
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order being retrieved.&lt;br&gt;&lt;br&gt; Use the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; can return orders up to two years old. Do not provide the &lt;strong&gt;orderId&lt;/strong&gt; for an order created more than two years in the past.&lt;/span&gt; | |
| **field_groups** | **string**| This parameter lets you control what is returned in the response.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The only presently supported value is &lt;code&gt;TAX_BREAKDOWN&lt;/code&gt;. This field group adds addition fields to the response that return a breakdown of taxes and fees.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\Order**](../Model/Order.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

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



Use this method to search for and retrieve one or more orders based on their creation date, last modification date, or fulfillment status using the <strong>filter</strong> parameter. You can alternatively specify a list of orders using the <strong>orderIds</strong> parameter. Include the optional <strong>fieldGroups</strong> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. By default, when no filters are used this call returns all orders created within the last 90 days. <br><br> The returned <strong>Order</strong> objects contain information you can use to create and process fulfillments, including: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li>The plans for packaging, addressing and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees, and optionally a breakdown of each </li></ul> <br> <span class=\"tablenote\"><strong>Important:</strong> In this call, the <strong>cancelStatus.cancelRequests</strong> array is returned but is always empty. Use the <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder\" target=\"_blank\">getOrder</a> call instead, which returns this array fully populated with information about any cancellation requests.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_groups = 'field_groups_example'; // string | This parameter lets you control what is returned in the response.<br><br><span class=\"tablenote\"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
$filter = 'filter_example'; // string | One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. <br><br><span class=\"tablenote\"><strong>Note:</strong> <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> can return orders up to two years old. Do not set the <code>creationdate</code> filter to a date beyond two years in the past.</span><br><span class=\"tablenote\"><strong>Note:</strong> If the <strong>orderIds</strong> parameter is included in the request, the <strong>filter</strong> parameter will be ignored.</span><br>The available criteria are as follows: <dl> <dt><code><strong>creationdate</strong></code></dt> <dd>The time period during which qualifying orders were created (the <strong>orders.creationDate</strong> field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>creationdate:[2016-02-21T08:25:43.511Z..]</code> identifies orders created on or after the given timestamp.</li> <li><code>creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]</code> identifies orders created between the given timestamps, inclusive.</li> </ul> </dd> <dt><code><strong>lastmodifieddate</strong></code></dt> <dd>The time period during which qualifying orders were last modified (the <strong>orders.modifiedDate</strong> field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..]</code> identifies orders modified on or after the given timestamp.</li> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]</code> identifies orders modified between the given timestamps, inclusive.</li> </ul> <span class=\"tablenote\"><strong>Note:</strong> If <strong>creationdate</strong> and <strong>lastmodifieddate</strong> are both included, only <strong>creationdate</strong> is used.</span> <br></dd> <dt><code><strong>orderfulfillmentstatus</strong></code></dt> <dd>The degree to which qualifying orders have been shipped (the <strong>orders.orderFulfillmentStatus</strong> field). In the URI, this is expressed as one of the following value combinations: <ul> <li><code>orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}</code> specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.</li> <li><code>orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}</code> specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.</li> </ul> <span class=\"tablenote\"><strong>Note:</strong> The values <code>NOT_STARTED</code>, <code>IN_PROGRESS</code>, and <code>FULFILLED</code> can be used in various combinations, but only the combinations shown here are currently supported.</span> </dd> </dl> Here is an example of a <strong>getOrders</strong> call using all of these filters: <br> <pre>GET https://api.ebay.com/sell/v1/order?<br>filter=<strong>creationdate</strong>:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,<br><strong>lastmodifieddate</strong>:%5B2016-05-15T08:25:43.511Z..%5D,<br><strong>orderfulfillmentstatus</strong>:%7BNOT_STARTED%7CIN_PROGRESS%7D</pre> <span class=\"tablenote\"><strong>Note:</strong> This call requires that certain special characters in the URI query string be percent-encoded: <br> &nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br> This query filter example uses these codes.</span>
$limit = 'limit_example'; // string | The number of orders to return per page of the result set. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <br><br>For example, if <strong>offset</strong> is set to <code>10</code> and <strong>limit</strong> is set to <code>10</code>, the call retrieves orders 11 through 20 from the result set. <br><br> If a limit is not set, the <strong>limit</strong> defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.<br ><br> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>. If the <strong>orderIds</strong> parameter is included in the request, this parameter will be ignored.</span> <br> <strong>Maximum:</strong> <code>200</code> <br> <strong>Default:</strong> <code>50</code>
$offset = 'offset_example'; // string | Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><strong>Default:</strong> 0</p>
$order_ids = 'order_ids_example'; // string | A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the <strong>orderIds</strong> query parameter, all other query parameters will be ignored.<br><br><span class=\"tablenote\"><strong>Note:</strong> <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> can return orders up to two years old. Do not provide the <strong>orderId</strong> for an order created more than two years in the past.</span>

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
| **field_groups** | **string**| This parameter lets you control what is returned in the response.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The only presently supported value is &lt;code&gt;TAX_BREAKDOWN&lt;/code&gt;. This field group adds addition fields to the response that return a breakdown of taxes and fees.&lt;/span&gt; | [optional] |
| **filter** | **string**| One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; can return orders up to two years old. Do not set the &lt;code&gt;creationdate&lt;/code&gt; filter to a date beyond two years in the past.&lt;/span&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If the &lt;strong&gt;orderIds&lt;/strong&gt; parameter is included in the request, the &lt;strong&gt;filter&lt;/strong&gt; parameter will be ignored.&lt;/span&gt;&lt;br&gt;The available criteria are as follows: &lt;dl&gt; &lt;dt&gt;&lt;code&gt;&lt;strong&gt;creationdate&lt;/strong&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The time period during which qualifying orders were created (the &lt;strong&gt;orders.creationDate&lt;/strong&gt; field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: &lt;ul&gt; &lt;li&gt;&lt;code&gt;creationdate:[2016-02-21T08:25:43.511Z..]&lt;/code&gt; identifies orders created on or after the given timestamp.&lt;/li&gt; &lt;li&gt;&lt;code&gt;creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]&lt;/code&gt; identifies orders created between the given timestamps, inclusive.&lt;/li&gt; &lt;/ul&gt; &lt;/dd&gt; &lt;dt&gt;&lt;code&gt;&lt;strong&gt;lastmodifieddate&lt;/strong&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The time period during which qualifying orders were last modified (the &lt;strong&gt;orders.modifiedDate&lt;/strong&gt; field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO&amp;nbsp;8601&lt;/a&gt; format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: &lt;ul&gt; &lt;li&gt;&lt;code&gt;lastmodifieddate:[2016-05-15T08:25:43.511Z..]&lt;/code&gt; identifies orders modified on or after the given timestamp.&lt;/li&gt; &lt;li&gt;&lt;code&gt;lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]&lt;/code&gt; identifies orders modified between the given timestamps, inclusive.&lt;/li&gt; &lt;/ul&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If &lt;strong&gt;creationdate&lt;/strong&gt; and &lt;strong&gt;lastmodifieddate&lt;/strong&gt; are both included, only &lt;strong&gt;creationdate&lt;/strong&gt; is used.&lt;/span&gt; &lt;br&gt;&lt;/dd&gt; &lt;dt&gt;&lt;code&gt;&lt;strong&gt;orderfulfillmentstatus&lt;/strong&gt;&lt;/code&gt;&lt;/dt&gt; &lt;dd&gt;The degree to which qualifying orders have been shipped (the &lt;strong&gt;orders.orderFulfillmentStatus&lt;/strong&gt; field). In the URI, this is expressed as one of the following value combinations: &lt;ul&gt; &lt;li&gt;&lt;code&gt;orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}&lt;/code&gt; specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.&lt;/li&gt; &lt;li&gt;&lt;code&gt;orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}&lt;/code&gt; specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.&lt;/li&gt; &lt;/ul&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The values &lt;code&gt;NOT_STARTED&lt;/code&gt;, &lt;code&gt;IN_PROGRESS&lt;/code&gt;, and &lt;code&gt;FULFILLED&lt;/code&gt; can be used in various combinations, but only the combinations shown here are currently supported.&lt;/span&gt; &lt;/dd&gt; &lt;/dl&gt; Here is an example of a &lt;strong&gt;getOrders&lt;/strong&gt; call using all of these filters: &lt;br&gt; &lt;pre&gt;GET https://api.ebay.com/sell/v1/order?&lt;br&gt;filter&#x3D;&lt;strong&gt;creationdate&lt;/strong&gt;:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,&lt;br&gt;&lt;strong&gt;lastmodifieddate&lt;/strong&gt;:%5B2016-05-15T08:25:43.511Z..%5D,&lt;br&gt;&lt;strong&gt;orderfulfillmentstatus&lt;/strong&gt;:%7BNOT_STARTED%7CIN_PROGRESS%7D&lt;/pre&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This call requires that certain special characters in the URI query string be percent-encoded: &lt;br&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;[&lt;/code&gt; &#x3D; &lt;code&gt;%5B&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;]&lt;/code&gt; &#x3D; &lt;code&gt;%5D&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;{&lt;/code&gt; &#x3D; &lt;code&gt;%7B&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;|&lt;/code&gt; &#x3D; &lt;code&gt;%7C&lt;/code&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;}&lt;/code&gt; &#x3D; &lt;code&gt;%7D&lt;/code&gt; &lt;br&gt; This query filter example uses these codes.&lt;/span&gt; | [optional] |
| **limit** | **string**| The number of orders to return per page of the result set. Use this parameter in conjunction with the &lt;strong&gt;offset&lt;/strong&gt; parameter to control the pagination of the output. &lt;br&gt;&lt;br&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is set to &lt;code&gt;10&lt;/code&gt;, the call retrieves orders 11 through 20 from the result set. &lt;br&gt;&lt;br&gt; If a limit is not set, the &lt;strong&gt;limit&lt;/strong&gt; defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.&lt;br &gt;&lt;br&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;. If the &lt;strong&gt;orderIds&lt;/strong&gt; parameter is included in the request, this parameter will be ignored.&lt;/span&gt; &lt;br&gt; &lt;strong&gt;Maximum:&lt;/strong&gt; &lt;code&gt;200&lt;/code&gt; &lt;br&gt; &lt;strong&gt;Default:&lt;/strong&gt; &lt;code&gt;50&lt;/code&gt; | [optional] |
| **offset** | **string**| Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;strong&gt;Default:&lt;/strong&gt; 0&lt;/p&gt; | [optional] |
| **order_ids** | **string**| A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the &lt;strong&gt;orderIds&lt;/strong&gt; query parameter, all other query parameters will be ignored.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; can return orders up to two years old. Do not provide the &lt;strong&gt;orderId&lt;/strong&gt; for an order created more than two years in the past.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\OrderSearchPagedCollection**](../Model/OrderSearchPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

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

Issues a full or partial refund to a buyer on behalf of the seller.

This method allows a seller to issue a full or partial refund to a buyer for an order. Full or partial refunds can be issued at the order level or line item level. The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent getOrder call to check the status of the refund. The status of an order refund can be found in the paymentSummary.refunds.refundStatus field of the getOrder response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Fulfillment\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Fulfillment\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | This path parameter is used to specify the unique identifier of the order associated with a refund.<br><br>Use the <a href=\"/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\" target=\"_blank\">getOrders</a> method to retrieve order IDs.
$issue_refund_request = new \eBay\Sell\Fulfillment\Model\IssueRefundRequest(); // \eBay\Sell\Fulfillment\Model\IssueRefundRequest | The request payload for issuing a refund

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
| **order_id** | **string**| This path parameter is used to specify the unique identifier of the order associated with a refund.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getOrders&lt;/a&gt; method to retrieve order IDs. | |
| **issue_refund_request** | [**\eBay\Sell\Fulfillment\Model\IssueRefundRequest**](../Model/IssueRefundRequest.md)| The request payload for issuing a refund | [optional] |

### Return type

[**\eBay\Sell\Fulfillment\Model\Refund**](../Model/Refund.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
