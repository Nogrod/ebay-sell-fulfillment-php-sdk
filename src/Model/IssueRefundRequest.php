<?php

/**
 * IssueRefundRequest
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
 * IssueRefundRequest Class Doc Comment
 *
 * @description The base type used by the request payload of the &lt;b&gt;issueRefund&lt;/b&gt; method.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class IssueRefundRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'IssueRefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reason_for_refund' => 'string',
        'comment' => 'string',
        'refund_items' => '\eBay\Sell\Fulfillment\Model\RefundItem[]',
        'order_level_refund_amount' => '\eBay\Sell\Fulfillment\Model\SimpleAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reason_for_refund' => null,
        'comment' => null,
        'refund_items' => null,
        'order_level_refund_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reason_for_refund' => false,
        'comment' => false,
        'refund_items' => false,
        'order_level_refund_amount' => false
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
        'reason_for_refund' => 'reasonForRefund',
        'comment' => 'comment',
        'refund_items' => 'refundItems',
        'order_level_refund_amount' => 'orderLevelRefundAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'reason_for_refund' => 'setReasonForRefund',
        'comment' => 'setComment',
        'refund_items' => 'setRefundItems',
        'order_level_refund_amount' => 'setOrderLevelRefundAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'reason_for_refund' => 'getReasonForRefund',
        'comment' => 'getComment',
        'refund_items' => 'getRefundItems',
        'order_level_refund_amount' => 'getOrderLevelRefundAmount'
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
        $this->setIfExists('reason_for_refund', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('refund_items', $data ?? [], null);
        $this->setIfExists('order_level_refund_amount', $data ?? [], null);
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
     * Gets reason_for_refund
     *
     * @return string|null
     */
    public function getReasonForRefund(): ?string
    {
        return $this->container['reason_for_refund'];
    }

    /**
     * Sets reason_for_refund
     *
     * @param string|null $reason_for_refund The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the <b>ReasonForRefundEnum</b> type must be used.<br><br>This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.<br><br><span class=\"tablenote\"><strong>Note:</strong> If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate <b>issueRefund</b> calls, one for each refund reason. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReasonForRefund(?string $reason_for_refund): static
    {
        if (is_null($reason_for_refund)) {
            throw new InvalidArgumentException('non-nullable reason_for_refund cannot be null');
        }
        $this->container['reason_for_refund'] = $reason_for_refund;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment This free-text field allows the seller to clarify why the refund is being issued to the buyer.<br><br><b>Max Length</b>: 100
     *
     * @return $this
     */
    public function setComment(?string $comment): static
    {
        if (is_null($comment)) {
            throw new InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets refund_items
     *
     * @return \eBay\Sell\Fulfillment\Model\RefundItem[]|null
     */
    public function getRefundItems(): ?array
    {
        return $this->container['refund_items'];
    }

    /**
     * Sets refund_items
     *
     * @param \eBay\Sell\Fulfillment\Model\RefundItem[]|null $refund_items The <b>refundItems</b> array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
     *
     * @return $this
     */
    public function setRefundItems(?array $refund_items): static
    {
        if (is_null($refund_items)) {
            throw new InvalidArgumentException('non-nullable refund_items cannot be null');
        }
        $this->container['refund_items'] = $refund_items;

        return $this;
    }

    /**
     * Gets order_level_refund_amount
     *
     * @return \eBay\Sell\Fulfillment\Model\SimpleAmount|null
     */
    public function getOrderLevelRefundAmount(): ?\eBay\Sell\Fulfillment\Model\SimpleAmount
    {
        return $this->container['order_level_refund_amount'];
    }

    /**
     * Sets order_level_refund_amount
     *
     * @param \eBay\Sell\Fulfillment\Model\SimpleAmount|null $order_level_refund_amount order_level_refund_amount
     *
     * @return $this
     */
    public function setOrderLevelRefundAmount(?\eBay\Sell\Fulfillment\Model\SimpleAmount $order_level_refund_amount): static
    {
        if (is_null($order_level_refund_amount)) {
            throw new InvalidArgumentException('non-nullable order_level_refund_amount cannot be null');
        }
        $this->container['order_level_refund_amount'] = $order_level_refund_amount;

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


