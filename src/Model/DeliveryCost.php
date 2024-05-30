<?php
/**
 * DeliveryCost
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
 * The version of the OpenAPI document: v1.20.4
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * DeliveryCost Class Doc Comment
 *
 * @description This type contains a breakdown of all costs associated with the fulfillment of a line item.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DeliveryCost implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DeliveryCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'discount_amount' => '\eBay\Sell\Fulfillment\Model\Amount',
        'handling_cost' => '\eBay\Sell\Fulfillment\Model\Amount',
        'import_charges' => '\eBay\Sell\Fulfillment\Model\Amount',
        'shipping_cost' => '\eBay\Sell\Fulfillment\Model\Amount',
        'shipping_intermediation_fee' => '\eBay\Sell\Fulfillment\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'discount_amount' => null,
        'handling_cost' => null,
        'import_charges' => null,
        'shipping_cost' => null,
        'shipping_intermediation_fee' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'discount_amount' => false,
        'handling_cost' => false,
        'import_charges' => false,
        'shipping_cost' => false,
        'shipping_intermediation_fee' => false
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
        'discount_amount' => 'discountAmount',
        'handling_cost' => 'handlingCost',
        'import_charges' => 'importCharges',
        'shipping_cost' => 'shippingCost',
        'shipping_intermediation_fee' => 'shippingIntermediationFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'discount_amount' => 'setDiscountAmount',
        'handling_cost' => 'setHandlingCost',
        'import_charges' => 'setImportCharges',
        'shipping_cost' => 'setShippingCost',
        'shipping_intermediation_fee' => 'setShippingIntermediationFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'discount_amount' => 'getDiscountAmount',
        'handling_cost' => 'getHandlingCost',
        'import_charges' => 'getImportCharges',
        'shipping_cost' => 'getShippingCost',
        'shipping_intermediation_fee' => 'getShippingIntermediationFee'
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('handling_cost', $data ?? [], null);
        $this->setIfExists('import_charges', $data ?? [], null);
        $this->setIfExists('shipping_cost', $data ?? [], null);
        $this->setIfExists('shipping_intermediation_fee', $data ?? [], null);
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
     * Gets discount_amount
     *
     * @return \eBay\Sell\Fulfillment\Model\Amount|null
     */
    public function getDiscountAmount(): ?\eBay\Sell\Fulfillment\Model\Amount
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param \eBay\Sell\Fulfillment\Model\Amount|null $discount_amount discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount(?\eBay\Sell\Fulfillment\Model\Amount $discount_amount): static
    {
        if (is_null($discount_amount)) {
            throw new InvalidArgumentException('non-nullable discount_amount cannot be null');
        }
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets handling_cost
     *
     * @return \eBay\Sell\Fulfillment\Model\Amount|null
     */
    public function getHandlingCost(): ?\eBay\Sell\Fulfillment\Model\Amount
    {
        return $this->container['handling_cost'];
    }

    /**
     * Sets handling_cost
     *
     * @param \eBay\Sell\Fulfillment\Model\Amount|null $handling_cost handling_cost
     *
     * @return $this
     */
    public function setHandlingCost(?\eBay\Sell\Fulfillment\Model\Amount $handling_cost): static
    {
        if (is_null($handling_cost)) {
            throw new InvalidArgumentException('non-nullable handling_cost cannot be null');
        }
        $this->container['handling_cost'] = $handling_cost;

        return $this;
    }

    /**
     * Gets import_charges
     *
     * @return \eBay\Sell\Fulfillment\Model\Amount|null
     */
    public function getImportCharges(): ?\eBay\Sell\Fulfillment\Model\Amount
    {
        return $this->container['import_charges'];
    }

    /**
     * Sets import_charges
     *
     * @param \eBay\Sell\Fulfillment\Model\Amount|null $import_charges import_charges
     *
     * @return $this
     */
    public function setImportCharges(?\eBay\Sell\Fulfillment\Model\Amount $import_charges): static
    {
        if (is_null($import_charges)) {
            throw new InvalidArgumentException('non-nullable import_charges cannot be null');
        }
        $this->container['import_charges'] = $import_charges;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \eBay\Sell\Fulfillment\Model\Amount|null
     */
    public function getShippingCost(): ?\eBay\Sell\Fulfillment\Model\Amount
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \eBay\Sell\Fulfillment\Model\Amount|null $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost(?\eBay\Sell\Fulfillment\Model\Amount $shipping_cost): static
    {
        if (is_null($shipping_cost)) {
            throw new InvalidArgumentException('non-nullable shipping_cost cannot be null');
        }
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_intermediation_fee
     *
     * @return \eBay\Sell\Fulfillment\Model\Amount|null
     */
    public function getShippingIntermediationFee(): ?\eBay\Sell\Fulfillment\Model\Amount
    {
        return $this->container['shipping_intermediation_fee'];
    }

    /**
     * Sets shipping_intermediation_fee
     *
     * @param \eBay\Sell\Fulfillment\Model\Amount|null $shipping_intermediation_fee shipping_intermediation_fee
     *
     * @return $this
     */
    public function setShippingIntermediationFee(?\eBay\Sell\Fulfillment\Model\Amount $shipping_intermediation_fee): static
    {
        if (is_null($shipping_intermediation_fee)) {
            throw new InvalidArgumentException('non-nullable shipping_intermediation_fee cannot be null');
        }
        $this->container['shipping_intermediation_fee'] = $shipping_intermediation_fee;

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

