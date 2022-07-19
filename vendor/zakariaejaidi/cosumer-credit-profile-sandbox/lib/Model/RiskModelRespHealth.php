<?php
/**
 * RiskModelRespHealth
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
 * RiskModelRespHealth Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RiskModelRespHealth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'riskModelRespHealth';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'evaluation' => 'string',
        'grade' => 'string',
        'model_indicator' => 'string',
        'score' => 'string',
        'score_factors' => '\OpenAPI\Client\Model\ScoreFactor[]',
        'score_percentile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'evaluation' => null,
        'grade' => null,
        'model_indicator' => null,
        'score' => null,
        'score_factors' => null,
        'score_percentile' => null
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
        'evaluation' => 'evaluation',
        'grade' => 'grade',
        'model_indicator' => 'modelIndicator',
        'score' => 'score',
        'score_factors' => 'scoreFactors',
        'score_percentile' => 'scorePercentile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evaluation' => 'setEvaluation',
        'grade' => 'setGrade',
        'model_indicator' => 'setModelIndicator',
        'score' => 'setScore',
        'score_factors' => 'setScoreFactors',
        'score_percentile' => 'setScorePercentile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evaluation' => 'getEvaluation',
        'grade' => 'getGrade',
        'model_indicator' => 'getModelIndicator',
        'score' => 'getScore',
        'score_factors' => 'getScoreFactors',
        'score_percentile' => 'getScorePercentile'
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
        $this->container['evaluation'] = isset($data['evaluation']) ? $data['evaluation'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['model_indicator'] = isset($data['model_indicator']) ? $data['model_indicator'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['score_factors'] = isset($data['score_factors']) ? $data['score_factors'] : null;
        $this->container['score_percentile'] = isset($data['score_percentile']) ? $data['score_percentile'] : null;
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
     * Gets evaluation
     *
     * @return string|null
     */
    public function getEvaluation()
    {
        return $this->container['evaluation'];
    }

    /**
     * Sets evaluation
     *
     * @param string|null $evaluation Sign of risk score.
     *
     * @return $this
     */
    public function setEvaluation($evaluation)
    {
        $this->container['evaluation'] = $evaluation;

        return $this;
    }

    /**
     * Gets grade
     *
     * @return string|null
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     *
     * @param string|null $grade Indicates grade.
     *
     * @return $this
     */
    public function setGrade($grade)
    {
        $this->container['grade'] = $grade;

        return $this;
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
     * @param string|null $model_indicator Indicates which model is being returned.
     *
     * @return $this
     */
    public function setModelIndicator($model_indicator)
    {
        $this->container['model_indicator'] = $model_indicator;

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
     * @param string|null $score Present when RiskModels is requested on input or via subcode. 4 character score for the model requested.
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
     * @return \OpenAPI\Client\Model\ScoreFactor[]|null
     */
    public function getScoreFactors()
    {
        return $this->container['score_factors'];
    }

    /**
     * Sets score_factors
     *
     * @param \OpenAPI\Client\Model\ScoreFactor[]|null $score_factors Score Factor Codes (Upto 5 items can be returned)
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
     * @param string|null $score_percentile Present when ScorePercentile is requested on input and is available for a score. Nation Score Percentile.
     *
     * @return $this
     */
    public function setScorePercentile($score_percentile)
    {
        $this->container['score_percentile'] = $score_percentile;

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


