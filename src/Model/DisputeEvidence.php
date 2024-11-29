<?php
/**
 * DisputeEvidence
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
 * Generator version: 7.10.0
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
 * DisputeEvidence Class Doc Comment
 *
 * @description This type is used by the &lt;strong&gt;evidence&lt;/strong&gt; array that is returned in the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; response if one or more evidential documents are associated with the payment dispute.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DisputeEvidence implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DisputeEvidence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'evidence_id' => 'string',
        'evidence_type' => 'string',
        'files' => '\eBay\Sell\Fulfillment\Model\FileInfo[]',
        'line_items' => '\eBay\Sell\Fulfillment\Model\OrderLineItems[]',
        'provided_date' => 'string',
        'request_date' => 'string',
        'respond_by_date' => 'string',
        'shipment_tracking' => '\eBay\Sell\Fulfillment\Model\TrackingInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'evidence_id' => null,
        'evidence_type' => null,
        'files' => null,
        'line_items' => null,
        'provided_date' => null,
        'request_date' => null,
        'respond_by_date' => null,
        'shipment_tracking' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'evidence_id' => false,
        'evidence_type' => false,
        'files' => false,
        'line_items' => false,
        'provided_date' => false,
        'request_date' => false,
        'respond_by_date' => false,
        'shipment_tracking' => false
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
        'evidence_id' => 'evidenceId',
        'evidence_type' => 'evidenceType',
        'files' => 'files',
        'line_items' => 'lineItems',
        'provided_date' => 'providedDate',
        'request_date' => 'requestDate',
        'respond_by_date' => 'respondByDate',
        'shipment_tracking' => 'shipmentTracking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'evidence_id' => 'setEvidenceId',
        'evidence_type' => 'setEvidenceType',
        'files' => 'setFiles',
        'line_items' => 'setLineItems',
        'provided_date' => 'setProvidedDate',
        'request_date' => 'setRequestDate',
        'respond_by_date' => 'setRespondByDate',
        'shipment_tracking' => 'setShipmentTracking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'evidence_id' => 'getEvidenceId',
        'evidence_type' => 'getEvidenceType',
        'files' => 'getFiles',
        'line_items' => 'getLineItems',
        'provided_date' => 'getProvidedDate',
        'request_date' => 'getRequestDate',
        'respond_by_date' => 'getRespondByDate',
        'shipment_tracking' => 'getShipmentTracking'
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
        $this->setIfExists('evidence_id', $data ?? [], null);
        $this->setIfExists('evidence_type', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('provided_date', $data ?? [], null);
        $this->setIfExists('request_date', $data ?? [], null);
        $this->setIfExists('respond_by_date', $data ?? [], null);
        $this->setIfExists('shipment_tracking', $data ?? [], null);
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
     * Gets evidence_id
     *
     * @return string|null
     */
    public function getEvidenceId(): ?string
    {
        return $this->container['evidence_id'];
    }

    /**
     * Sets evidence_id
     *
     * @param string|null $evidence_id Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     *
     * @return $this
     */
    public function setEvidenceId(?string $evidence_id): static
    {
        if (is_null($evidence_id)) {
            throw new InvalidArgumentException('non-nullable evidence_id cannot be null');
        }
        $this->container['evidence_id'] = $evidence_id;

        return $this;
    }

    /**
     * Gets evidence_type
     *
     * @return string|null
     */
    public function getEvidenceType(): ?string
    {
        return $this->container['evidence_type'];
    }

    /**
     * Sets evidence_type
     *
     * @param string|null $evidence_type This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setEvidenceType(?string $evidence_type): static
    {
        if (is_null($evidence_type)) {
            throw new InvalidArgumentException('non-nullable evidence_type cannot be null');
        }
        $this->container['evidence_type'] = $evidence_type;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \eBay\Sell\Fulfillment\Model\FileInfo[]|null
     */
    public function getFiles(): ?array
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \eBay\Sell\Fulfillment\Model\FileInfo[]|null $files This array shows the name, ID, file type, and upload date for each provided file.
     *
     * @return $this
     */
    public function setFiles(?array $files): static
    {
        if (is_null($files)) {
            throw new InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \eBay\Sell\Fulfillment\Model\OrderLineItems[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \eBay\Sell\Fulfillment\Model\OrderLineItems[]|null $line_items This array shows one or more order line items associated with the evidential document that has been provided.
     *
     * @return $this
     */
    public function setLineItems(?array $line_items): static
    {
        if (is_null($line_items)) {
            throw new InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets provided_date
     *
     * @return string|null
     */
    public function getProvidedDate(): ?string
    {
        return $this->container['provided_date'];
    }

    /**
     * Sets provided_date
     *
     * @param string|null $provided_date The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setProvidedDate(?string $provided_date): static
    {
        if (is_null($provided_date)) {
            throw new InvalidArgumentException('non-nullable provided_date cannot be null');
        }
        $this->container['provided_date'] = $provided_date;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return string|null
     */
    public function getRequestDate(): ?string
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param string|null $request_date The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRequestDate(?string $request_date): static
    {
        if (is_null($request_date)) {
            throw new InvalidArgumentException('non-nullable request_date cannot be null');
        }
        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets respond_by_date
     *
     * @return string|null
     */
    public function getRespondByDate(): ?string
    {
        return $this->container['respond_by_date'];
    }

    /**
     * Sets respond_by_date
     *
     * @param string|null $respond_by_date The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     *
     * @return $this
     */
    public function setRespondByDate(?string $respond_by_date): static
    {
        if (is_null($respond_by_date)) {
            throw new InvalidArgumentException('non-nullable respond_by_date cannot be null');
        }
        $this->container['respond_by_date'] = $respond_by_date;

        return $this;
    }

    /**
     * Gets shipment_tracking
     *
     * @return \eBay\Sell\Fulfillment\Model\TrackingInfo[]|null
     */
    public function getShipmentTracking(): ?array
    {
        return $this->container['shipment_tracking'];
    }

    /**
     * Sets shipment_tracking
     *
     * @param \eBay\Sell\Fulfillment\Model\TrackingInfo[]|null $shipment_tracking This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the <strong>evidence</strong> container if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code> for an INR-related payment dispute.
     *
     * @return $this
     */
    public function setShipmentTracking(?array $shipment_tracking): static
    {
        if (is_null($shipment_tracking)) {
            throw new InvalidArgumentException('non-nullable shipment_tracking cannot be null');
        }
        $this->container['shipment_tracking'] = $shipment_tracking;

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


