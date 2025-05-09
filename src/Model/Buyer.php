<?php

/**
 * Buyer
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
 * Buyer Class Doc Comment
 *
 * @description This type contains information about the order&#39;s buyer.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Buyer implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Buyer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'buyer_registration_address' => '\eBay\Sell\Fulfillment\Model\ExtendedContact',
        'tax_address' => '\eBay\Sell\Fulfillment\Model\TaxAddress',
        'tax_identifier' => '\eBay\Sell\Fulfillment\Model\TaxIdentifier',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'buyer_registration_address' => null,
        'tax_address' => null,
        'tax_identifier' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'buyer_registration_address' => false,
        'tax_address' => false,
        'tax_identifier' => false,
        'username' => false
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
        'buyer_registration_address' => 'buyerRegistrationAddress',
        'tax_address' => 'taxAddress',
        'tax_identifier' => 'taxIdentifier',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'buyer_registration_address' => 'setBuyerRegistrationAddress',
        'tax_address' => 'setTaxAddress',
        'tax_identifier' => 'setTaxIdentifier',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'buyer_registration_address' => 'getBuyerRegistrationAddress',
        'tax_address' => 'getTaxAddress',
        'tax_identifier' => 'getTaxIdentifier',
        'username' => 'getUsername'
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
        $this->setIfExists('buyer_registration_address', $data ?? [], null);
        $this->setIfExists('tax_address', $data ?? [], null);
        $this->setIfExists('tax_identifier', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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
     * Gets buyer_registration_address
     *
     * @return \eBay\Sell\Fulfillment\Model\ExtendedContact|null
     */
    public function getBuyerRegistrationAddress(): ?\eBay\Sell\Fulfillment\Model\ExtendedContact
    {
        return $this->container['buyer_registration_address'];
    }

    /**
     * Sets buyer_registration_address
     *
     * @param \eBay\Sell\Fulfillment\Model\ExtendedContact|null $buyer_registration_address buyer_registration_address
     *
     * @return $this
     */
    public function setBuyerRegistrationAddress(?\eBay\Sell\Fulfillment\Model\ExtendedContact $buyer_registration_address): static
    {
        if (is_null($buyer_registration_address)) {
            throw new InvalidArgumentException('non-nullable buyer_registration_address cannot be null');
        }
        $this->container['buyer_registration_address'] = $buyer_registration_address;

        return $this;
    }

    /**
     * Gets tax_address
     *
     * @return \eBay\Sell\Fulfillment\Model\TaxAddress|null
     */
    public function getTaxAddress(): ?\eBay\Sell\Fulfillment\Model\TaxAddress
    {
        return $this->container['tax_address'];
    }

    /**
     * Sets tax_address
     *
     * @param \eBay\Sell\Fulfillment\Model\TaxAddress|null $tax_address tax_address
     *
     * @return $this
     */
    public function setTaxAddress(?\eBay\Sell\Fulfillment\Model\TaxAddress $tax_address): static
    {
        if (is_null($tax_address)) {
            throw new InvalidArgumentException('non-nullable tax_address cannot be null');
        }
        $this->container['tax_address'] = $tax_address;

        return $this;
    }

    /**
     * Gets tax_identifier
     *
     * @return \eBay\Sell\Fulfillment\Model\TaxIdentifier|null
     */
    public function getTaxIdentifier(): ?\eBay\Sell\Fulfillment\Model\TaxIdentifier
    {
        return $this->container['tax_identifier'];
    }

    /**
     * Sets tax_identifier
     *
     * @param \eBay\Sell\Fulfillment\Model\TaxIdentifier|null $tax_identifier tax_identifier
     *
     * @return $this
     */
    public function setTaxIdentifier(?\eBay\Sell\Fulfillment\Model\TaxIdentifier $tax_identifier): static
    {
        if (is_null($tax_identifier)) {
            throw new InvalidArgumentException('non-nullable tax_identifier cannot be null');
        }
        $this->container['tax_identifier'] = $tax_identifier;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The buyer's eBay user ID.
     *
     * @return $this
     */
    public function setUsername(?string $username): static
    {
        if (is_null($username)) {
            throw new InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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


