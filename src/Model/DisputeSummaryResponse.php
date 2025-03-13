<?php
/**
 * DisputeSummaryResponse
 *
 * PHP version 8.1
 *
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.20.6
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Fulfillment\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Sell\Fulfillment\ObjectSerializer;

/**
 * DisputeSummaryResponse Class Doc Comment
 *
 * @description This type defines the base response payload of the &lt;strong&gt;getPaymentDisputeSummaries&lt;/strong&gt; method. Each payment dispute that matches the input criteria is returned under the &lt;strong&gt;paymentDisputeSummaries&lt;/strong&gt; array.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DisputeSummaryResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DisputeSummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'href' => 'string',
        'limit' => 'int',
        'next' => 'string',
        'offset' => 'int',
        'payment_dispute_summaries' => '\eBay\Sell\Fulfillment\Model\PaymentDisputeSummary[]',
        'prev' => 'string',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'href' => null,
        'limit' => 'int32',
        'next' => null,
        'offset' => 'int32',
        'payment_dispute_summaries' => null,
        'prev' => null,
        'total' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'href' => false,
        'limit' => false,
        'next' => false,
        'offset' => false,
        'payment_dispute_summaries' => false,
        'prev' => false,
        'total' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'href' => 'href',
        'limit' => 'limit',
        'next' => 'next',
        'offset' => 'offset',
        'payment_dispute_summaries' => 'paymentDisputeSummaries',
        'prev' => 'prev',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'href' => 'setHref',
        'limit' => 'setLimit',
        'next' => 'setNext',
        'offset' => 'setOffset',
        'payment_dispute_summaries' => 'setPaymentDisputeSummaries',
        'prev' => 'setPrev',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'href' => 'getHref',
        'limit' => 'getLimit',
        'next' => 'getNext',
        'offset' => 'getOffset',
        'payment_dispute_summaries' => 'getPaymentDisputeSummaries',
        'prev' => 'getPrev',
        'total' => 'getTotal'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('href', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('next', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('payment_dispute_summaries', $data ?? [], null);
        $this->setIfExists('prev', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The URI of the <strong>getPaymentDisputeSummaries</strong> call request that produced the current page of the result set.
     *
     * @return $this
     */
    public function setHref(?string $href): static
    {
        if (is_null($href)) {
            throw new InvalidArgumentException('non-nullable href cannot be null');
        }
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit This value shows the maximum number of payment disputes that will appear on one page of the result set. The <strong>limit</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>200</code>. If the value in the <strong>total</strong> field exceeds this <strong>limit</strong> value, there are multiple pages in the current result set.<br><br><b>Min</b>: 1; <b>Max</b>: 200; <b>Default</b>: 200
     *
     * @return $this
     */
    public function setLimit(?int $limit): static
    {
        if (is_null($limit)) {
            throw new InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext(): ?string
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 11 thru 20 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=10</code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     *
     * @return $this
     */
    public function setNext(?string $next): static
    {
        if (is_null($next)) {
            throw new InvalidArgumentException('non-nullable next cannot be null');
        }
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset This integer value indicates the number of payment disputes skipped before listing the first payment dispute from the result set. The <strong>offset</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>0</code> and the first payment dispute of the result set is shown at the top of the response.
     *
     * @return $this
     */
    public function setOffset(?int $offset): static
    {
        if (is_null($offset)) {
            throw new InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets payment_dispute_summaries
     *
     * @return \eBay\Sell\Fulfillment\Model\PaymentDisputeSummary[]|null
     */
    public function getPaymentDisputeSummaries(): ?array
    {
        return $this->container['payment_dispute_summaries'];
    }

    /**
     * Sets payment_dispute_summaries
     *
     * @param \eBay\Sell\Fulfillment\Model\PaymentDisputeSummary[]|null $payment_dispute_summaries Each payment dispute that matches the input criteria is returned under this array. If no payment disputes are found, an empty array is returned.
     *
     * @return $this
     */
    public function setPaymentDisputeSummaries(?array $payment_dispute_summaries): static
    {
        if (is_null($payment_dispute_summaries)) {
            throw new InvalidArgumentException('non-nullable payment_dispute_summaries cannot be null');
        }
        $this->container['payment_dispute_summaries'] = $payment_dispute_summaries;

        return $this;
    }

    /**
     * Gets prev
     *
     * @return string|null
     */
    public function getPrev(): ?string
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     *
     * @param string|null $prev The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the previous page of the result set. For example, the following URI returns records 1 thru 10 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=0</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     *
     * @return $this
     */
    public function setPrev(?string $prev): static
    {
        if (is_null($prev)) {
            throw new InvalidArgumentException('non-nullable prev cannot be null');
        }
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total This integer value is the total number of payment disputes that matched the input criteria. If the total number of entries exceeds the value that was set for <strong>limit</strong> in the request payload, you will have to make multiple API calls to see all pages of the results set. This field is returned even if it is <code>0</code>.
     *
     * @return $this
     */
    public function setTotal(?int $total): static
    {
        if (is_null($total)) {
            throw new InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


