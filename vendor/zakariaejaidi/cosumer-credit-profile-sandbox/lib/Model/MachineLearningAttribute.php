<?php
/**
 * MachineLearningAttribute
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
 * MachineLearningAttribute Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MachineLearningAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'machineLearningAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model_indicator' => 'string',
        'model_type' => 'string',
        'score' => 'string',
        'score_factors' => '\OpenAPI\Client\Model\MlScoreFactor[]',
        'score_percentile' => 'string',
        'attributes' => '\OpenAPI\Client\Model\MlAttributes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'model_indicator' => null,
        'model_type' => null,
        'score' => null,
        'score_factors' => null,
        'score_percentile' => null,
        'attributes' => null
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
        'model_indicator' => 'modelIndicator',
        'model_type' => 'modelType',
        'score' => 'score',
        'score_factors' => 'scoreFactors',
        'score_percentile' => 'scorePercentile',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_indicator' => 'setModelIndicator',
        'model_type' => 'setModelType',
        'score' => 'setScore',
        'score_factors' => 'setScoreFactors',
        'score_percentile' => 'setScorePercentile',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_indicator' => 'getModelIndicator',
        'model_type' => 'getModelType',
        'score' => 'getScore',
        'score_factors' => 'getScoreFactors',
        'score_percentile' => 'getScorePercentile',
        'attributes' => 'getAttributes'
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
        $this->container['model_indicator'] = isset($data['model_indicator']) ? $data['model_indicator'] : null;
        $this->container['model_type'] = isset($data['model_type']) ? $data['model_type'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['score_factors'] = isset($data['score_factors']) ? $data['score_factors'] : null;
        $this->container['score_percentile'] = isset($data['score_percentile']) ? $data['score_percentile'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
     * Gets model_indicator
     *
     * @return string|null
     */
    public function getModelIndicator()
    {
        return $this->container['model_indicator'];
    }

    /**
     * Sets model_indicator
     *
     * @param string|null $model_indicator model_indicator
     *
     * @return $this
     */
    public function setModelIndicator($model_indicator)
    {
        $this->container['model_indicator'] = $model_indicator;

        return $this;
    }

    /**
     * Gets model_type
     *
     * @return string|null
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     *
     * @param string|null $model_type model_type
     *
     * @return $this
     */
    public function setModelType($model_type)
    {
        $this->container['model_type'] = $model_type;

        return $this;
    }

    /**
     * Gets score
     *
     * @return string|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param string|null $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets score_factors
     *
     * @return \OpenAPI\Client\Model\MlScoreFactor[]|null
     */
    public function getScoreFactors()
    {
        return $this->container['score_factors'];
    }

    /**
     * Sets score_factors
     *
     * @param \OpenAPI\Client\Model\MlScoreFactor[]|null $score_factors score_factors
     *
     * @return $this
     */
    public function setScoreFactors($score_factors)
    {
        $this->container['score_factors'] = $score_factors;

        return $this;
    }

    /**
     * Gets score_percentile
     *
     * @return string|null
     */
    public function getScorePercentile()
    {
        return $this->container['score_percentile'];
    }

    /**
     * Sets score_percentile
     *
     * @param string|null $score_percentile score_percentile
     *
     * @return $this
     */
    public function setScorePercentile($score_percentile)
    {
        $this->container['score_percentile'] = $score_percentile;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \OpenAPI\Client\Model\MlAttributes[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \OpenAPI\Client\Model\MlAttributes[]|null $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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


