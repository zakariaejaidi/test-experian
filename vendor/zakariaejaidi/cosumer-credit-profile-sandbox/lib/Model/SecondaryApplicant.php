<?php
/**
 * SecondaryApplicant
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
 * SecondaryApplicant Class Doc Comment
 *
 * @category Class
 * @description Secondary Credit Applicant Information
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SecondaryApplicant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecondaryApplicant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => '\OpenAPI\Client\Model\SAName',
        'dob' => '\OpenAPI\Client\Model\DOB',
        'ssn' => '\OpenAPI\Client\Model\SSN',
        'driverslicense' => '\OpenAPI\Client\Model\DriverLicense',
        'phone' => '\OpenAPI\Client\Model\Phone[]',
        'employment' => '\OpenAPI\Client\Model\Employment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'dob' => null,
        'ssn' => null,
        'driverslicense' => null,
        'phone' => null,
        'employment' => null
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
        'name' => 'name',
        'dob' => 'dob',
        'ssn' => 'ssn',
        'driverslicense' => 'driverslicense',
        'phone' => 'phone',
        'employment' => 'employment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dob' => 'setDob',
        'ssn' => 'setSsn',
        'driverslicense' => 'setDriverslicense',
        'phone' => 'setPhone',
        'employment' => 'setEmployment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dob' => 'getDob',
        'ssn' => 'getSsn',
        'driverslicense' => 'getDriverslicense',
        'phone' => 'getPhone',
        'employment' => 'getEmployment'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['driverslicense'] = isset($data['driverslicense']) ? $data['driverslicense'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['employment'] = isset($data['employment']) ? $data['employment'] : null;
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
     * Gets name
     *
     * @return \OpenAPI\Client\Model\SAName|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \OpenAPI\Client\Model\SAName|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return \OpenAPI\Client\Model\DOB|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param \OpenAPI\Client\Model\DOB|null $dob dob
     *
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets ssn
     *
     * @return \OpenAPI\Client\Model\SSN|null
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     *
     * @param \OpenAPI\Client\Model\SSN|null $ssn ssn
     *
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets driverslicense
     *
     * @return \OpenAPI\Client\Model\DriverLicense|null
     */
    public function getDriverslicense()
    {
        return $this->container['driverslicense'];
    }

    /**
     * Sets driverslicense
     *
     * @param \OpenAPI\Client\Model\DriverLicense|null $driverslicense driverslicense
     *
     * @return $this
     */
    public function setDriverslicense($driverslicense)
    {
        $this->container['driverslicense'] = $driverslicense;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \OpenAPI\Client\Model\Phone[]|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \OpenAPI\Client\Model\Phone[]|null $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return \OpenAPI\Client\Model\Employment|null
     */
    public function getEmployment()
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param \OpenAPI\Client\Model\Employment|null $employment employment
     *
     * @return $this
     */
    public function setEmployment($employment)
    {
        $this->container['employment'] = $employment;

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


