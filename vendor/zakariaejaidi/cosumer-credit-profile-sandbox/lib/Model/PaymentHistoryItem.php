<?php
/**
 * PaymentHistoryItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Credit Profile
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: OpenAPI3.2.0.52
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentHistoryItem Class Doc Comment
 *
 * @category Class
 * @description Record of Payment Histories
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentHistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentHistoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pay_date' => 'string',
        'pay_cycle' => 'string',
        'pay_period' => '\OpenAPI\Client\Model\PaymentHistoryItemPayPeriod',
        'gross_pay_amount' => '\OpenAPI\Client\Model\PaymentHistoryItemGrossPayAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pay_date' => null,
        'pay_cycle' => null,
        'pay_period' => null,
        'gross_pay_amount' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pay_date' => 'payDate',
        'pay_cycle' => 'payCycle',
        'pay_period' => 'payPeriod',
        'gross_pay_amount' => 'grossPayAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_date' => 'setPayDate',
        'pay_cycle' => 'setPayCycle',
        'pay_period' => 'setPayPeriod',
        'gross_pay_amount' => 'setGrossPayAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_date' => 'getPayDate',
        'pay_cycle' => 'getPayCycle',
        'pay_period' => 'getPayPeriod',
        'gross_pay_amount' => 'getGrossPayAmount'
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
        $this->container['pay_date'] = isset($data['pay_date']) ? $data['pay_date'] : null;
        $this->container['pay_cycle'] = isset($data['pay_cycle']) ? $data['pay_cycle'] : null;
        $this->container['pay_period'] = isset($data['pay_period']) ? $data['pay_period'] : null;
        $this->container['gross_pay_amount'] = isset($data['gross_pay_amount']) ? $data['gross_pay_amount'] : null;
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
     * Gets pay_date
     *
     * @return string|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param string|null $pay_date pay_date
     *
     * @return $this
     */
    public function setPayDate($pay_date)
    {
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets pay_cycle
     *
     * @return string|null
     */
    public function getPayCycle()
    {
        return $this->container['pay_cycle'];
    }

    /**
     * Sets pay_cycle
     *
     * @param string|null $pay_cycle pay_cycle
     *
     * @return $this
     */
    public function setPayCycle($pay_cycle)
    {
        $this->container['pay_cycle'] = $pay_cycle;

        return $this;
    }

    /**
     * Gets pay_period
     *
     * @return \OpenAPI\Client\Model\PaymentHistoryItemPayPeriod|null
     */
    public function getPayPeriod()
    {
        return $this->container['pay_period'];
    }

    /**
     * Sets pay_period
     *
     * @param \OpenAPI\Client\Model\PaymentHistoryItemPayPeriod|null $pay_period pay_period
     *
     * @return $this
     */
    public function setPayPeriod($pay_period)
    {
        $this->container['pay_period'] = $pay_period;

        return $this;
    }

    /**
     * Gets gross_pay_amount
     *
     * @return \OpenAPI\Client\Model\PaymentHistoryItemGrossPayAmount|null
     */
    public function getGrossPayAmount()
    {
        return $this->container['gross_pay_amount'];
    }

    /**
     * Sets gross_pay_amount
     *
     * @param \OpenAPI\Client\Model\PaymentHistoryItemGrossPayAmount|null $gross_pay_amount gross_pay_amount
     *
     * @return $this
     */
    public function setGrossPayAmount($gross_pay_amount)
    {
        $this->container['gross_pay_amount'] = $gross_pay_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}


