<?php
/**
 * LineItemFulfillmentInstructions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.18
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Fulfillment\Model;

use \ArrayAccess;
use \eBay\Sell\Fulfillment\ObjectSerializer;

/**
 * LineItemFulfillmentInstructions Class Doc Comment
 *
 * @category Class
 * @description This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for &lt;i&gt;eBay Guaranteed Delivery&lt;/i&gt; as well as for non-guaranteed delivery.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LineItemFulfillmentInstructions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemFulfillmentInstructions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guaranteed_delivery' => 'bool',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'ship_by_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guaranteed_delivery' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'ship_by_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'guaranteed_delivery' => false,
		'max_estimated_delivery_date' => false,
		'min_estimated_delivery_date' => false,
		'ship_by_date' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'guaranteed_delivery' => 'guaranteedDelivery',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'ship_by_date' => 'shipByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guaranteed_delivery' => 'setGuaranteedDelivery',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'ship_by_date' => 'setShipByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guaranteed_delivery' => 'getGuaranteedDelivery',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'ship_by_date' => 'getShipByDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('guaranteed_delivery', $data ?? [], null);
        $this->setIfExists('max_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('min_estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('ship_by_date', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets guaranteed_delivery
     *
     * @return bool|null
     */
    public function getGuaranteedDelivery()
    {
        return $this->container['guaranteed_delivery'];
    }

    /**
     * Sets guaranteed_delivery
     *
     * @param bool|null $guaranteed_delivery This field is returned as <code>true</code> if the order line item is qualified for eBay Guaranteed Delivery, or <code>false</code> if it is not eligible. Only domestic shipments are available for eBay Guaranteed Delivery. At this time, eBay Guaranteed Delivery is only available to a select number of sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019.<br/><br/>  There are two different eBay Guaranteed Delivery options - 'Handling time' option and 'Door-to-Door' option. With both options, the seller is commiting to getting the order delivered to the buyer within three business days after purchase. <br/><br/> With the 'Handling time' option, the seller's stated handling time for a listing must be 'same-day' or '1-day', and at least one of the available shipping service options should have a shipping time that guarantees that the buyer receives the order on time. With this option, eBay will set the 'ship-by date' and expected delivery window for the seller, and the seller should just make sure they physically ship the order by the <strong>shipToDate</strong>.<br/><br/> With the 'Door-to-door' option, the seller must create regional shipping rate tables (with shipping costs and delivery times based on destination regions), and then apply these regional shipping rates/delivery times to the listing. <br/><br/> If a 'Door-to-door' order does not arrive on time, the seller must refund the buyer the full shipping cost (if any), and the buyer also has the option of returning the item for a full refund, and the seller will also have to pay the return shipping cost. With 'Handling time' option, as long as the seller meets the stated handling time, and ships using the correct shipping service option, eBay will refund the buyer the shipping cost and pay for return shipping label (if buyer wants to return item) if the order arrives after the expected delivery time. <br/><br/> For more information on the details and requirements of eBay Guaranteed Delivery, see the <a href=\"https://www.ebay.com/help/selling/shipping-items/offering-ebay-guaranteed-delivery?id=4645 \" target=\"_blank\">Offering eBay Guaranteed Delivery</a> help topic.<br/><br/> This field will always be returned regardless of whether the listing site offers eBay Guaranteed Delivery or if the seller is opted in to the feature.
     *
     * @return self
     */
    public function setGuaranteedDelivery($guaranteed_delivery)
    {

        if (is_null($guaranteed_delivery)) {
            throw new \InvalidArgumentException('non-nullable guaranteed_delivery cannot be null');
        }

        $this->container['guaranteed_delivery'] = $guaranteed_delivery;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. If the listing is eligible for eBay Guaranteed Delivery (value of <b>guaranteedDelivery</b> field is <code>true</code>, the seller must pay extra attention to this date, as a failure to deliver by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br /><br /><span class=\"tablenote\"><strong>Note:</strong> This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code></span>
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {

        if (is_null($max_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable max_estimated_delivery_date cannot be null');
        }

        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options.<br /><br /><span class=\"tablenote\"><strong>Note:</strong> This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code></span>
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {

        if (is_null($min_estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable min_estimated_delivery_date cannot be null');
        }

        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets ship_by_date
     *
     * @return string|null
     */
    public function getShipByDate()
    {
        return $this->container['ship_by_date'];
    }

    /**
     * Sets ship_by_date
     *
     * @param string|null $ship_by_date The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. If the listing is eligible for eBay Guaranteed Delivery (value of <b>guaranteedDelivery</b> field is <code>true</code>, the seller must pay extra attention to this date, as a failure to physically ship the line item by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br /><br /><span class=\"tablenote\"><strong>Note:</strong> This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code></span>
     *
     * @return self
     */
    public function setShipByDate($ship_by_date)
    {

        if (is_null($ship_by_date)) {
            throw new \InvalidArgumentException('non-nullable ship_by_date cannot be null');
        }

        $this->container['ship_by_date'] = $ship_by_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

