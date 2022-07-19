<?php
/**
 * EnhancedPaymentDataDaas
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
 * EnhancedPaymentDataDaas Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnhancedPaymentDataDaas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'enhancedPaymentDataDaas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actual_payment_amount' => 'string',
        'chargeoff_amount' => 'string',
        'cii_code' => 'string',
        'cii_code_text' => 'string',
        'compliance_condition' => 'string',
        'credit_limit_amount' => 'string',
        'enhanced_account_condition' => 'string',
        'enhanced_account_condition_text' => 'string',
        'enhanced_account_type' => 'string',
        'enhanced_payment_history84' => 'string',
        'enhanced_payment_status' => 'string',
        'enhanced_payment_status_text' => 'string',
        'enhanced_special_comment' => 'string',
        'enhanced_terms' => 'string',
        'enhanced_terms_text' => 'string',
        'enhanced_terms_frequency' => 'string',
        'enhanced_terms_frequency_text' => 'string',
        'first_delinquency_date' => 'string',
        'high_balance_amount' => 'string',
        'max_delinquency_code' => 'string',
        'mortgage_id' => 'string',
        'original_creditor_classification_code' => 'string',
        'original_loan_amount' => 'string',
        'payment_level_date' => 'string',
        'purchased_portfolio_from_name' => 'string',
        'second_delinquency_date' => 'string',
        'secondary_agency_code' => 'string',
        'secondary_agency_id' => 'string',
        'special_payment_amount' => 'string',
        'special_payment_code' => 'string',
        'special_payment_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'actual_payment_amount' => null,
        'chargeoff_amount' => null,
        'cii_code' => null,
        'cii_code_text' => null,
        'compliance_condition' => null,
        'credit_limit_amount' => null,
        'enhanced_account_condition' => null,
        'enhanced_account_condition_text' => null,
        'enhanced_account_type' => null,
        'enhanced_payment_history84' => null,
        'enhanced_payment_status' => null,
        'enhanced_payment_status_text' => null,
        'enhanced_special_comment' => null,
        'enhanced_terms' => null,
        'enhanced_terms_text' => null,
        'enhanced_terms_frequency' => null,
        'enhanced_terms_frequency_text' => null,
        'first_delinquency_date' => null,
        'high_balance_amount' => null,
        'max_delinquency_code' => null,
        'mortgage_id' => null,
        'original_creditor_classification_code' => null,
        'original_loan_amount' => null,
        'payment_level_date' => null,
        'purchased_portfolio_from_name' => null,
        'second_delinquency_date' => null,
        'secondary_agency_code' => null,
        'secondary_agency_id' => null,
        'special_payment_amount' => null,
        'special_payment_code' => null,
        'special_payment_date' => null
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
        'actual_payment_amount' => 'actualPaymentAmount',
        'chargeoff_amount' => 'chargeoffAmount',
        'cii_code' => 'ciiCode',
        'cii_code_text' => 'ciiCodeText',
        'compliance_condition' => 'complianceCondition',
        'credit_limit_amount' => 'creditLimitAmount',
        'enhanced_account_condition' => 'enhancedAccountCondition',
        'enhanced_account_condition_text' => 'enhancedAccountConditionText',
        'enhanced_account_type' => 'enhancedAccountType',
        'enhanced_payment_history84' => 'enhancedPaymentHistory84',
        'enhanced_payment_status' => 'enhancedPaymentStatus',
        'enhanced_payment_status_text' => 'enhancedPaymentStatusText',
        'enhanced_special_comment' => 'enhancedSpecialComment',
        'enhanced_terms' => 'enhancedTerms',
        'enhanced_terms_text' => 'enhancedTermsText',
        'enhanced_terms_frequency' => 'enhancedTermsFrequency',
        'enhanced_terms_frequency_text' => 'enhancedTermsFrequencyText',
        'first_delinquency_date' => 'firstDelinquencyDate',
        'high_balance_amount' => 'highBalanceAmount',
        'max_delinquency_code' => 'maxDelinquencyCode',
        'mortgage_id' => 'mortgageId',
        'original_creditor_classification_code' => 'originalCreditorClassificationCode',
        'original_loan_amount' => 'originalLoanAmount',
        'payment_level_date' => 'paymentLevelDate',
        'purchased_portfolio_from_name' => 'purchasedPortfolioFromName',
        'second_delinquency_date' => 'secondDelinquencyDate',
        'secondary_agency_code' => 'secondaryAgencyCode',
        'secondary_agency_id' => 'secondaryAgencyId',
        'special_payment_amount' => 'specialPaymentAmount',
        'special_payment_code' => 'specialPaymentCode',
        'special_payment_date' => 'specialPaymentDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actual_payment_amount' => 'setActualPaymentAmount',
        'chargeoff_amount' => 'setChargeoffAmount',
        'cii_code' => 'setCiiCode',
        'cii_code_text' => 'setCiiCodeText',
        'compliance_condition' => 'setComplianceCondition',
        'credit_limit_amount' => 'setCreditLimitAmount',
        'enhanced_account_condition' => 'setEnhancedAccountCondition',
        'enhanced_account_condition_text' => 'setEnhancedAccountConditionText',
        'enhanced_account_type' => 'setEnhancedAccountType',
        'enhanced_payment_history84' => 'setEnhancedPaymentHistory84',
        'enhanced_payment_status' => 'setEnhancedPaymentStatus',
        'enhanced_payment_status_text' => 'setEnhancedPaymentStatusText',
        'enhanced_special_comment' => 'setEnhancedSpecialComment',
        'enhanced_terms' => 'setEnhancedTerms',
        'enhanced_terms_text' => 'setEnhancedTermsText',
        'enhanced_terms_frequency' => 'setEnhancedTermsFrequency',
        'enhanced_terms_frequency_text' => 'setEnhancedTermsFrequencyText',
        'first_delinquency_date' => 'setFirstDelinquencyDate',
        'high_balance_amount' => 'setHighBalanceAmount',
        'max_delinquency_code' => 'setMaxDelinquencyCode',
        'mortgage_id' => 'setMortgageId',
        'original_creditor_classification_code' => 'setOriginalCreditorClassificationCode',
        'original_loan_amount' => 'setOriginalLoanAmount',
        'payment_level_date' => 'setPaymentLevelDate',
        'purchased_portfolio_from_name' => 'setPurchasedPortfolioFromName',
        'second_delinquency_date' => 'setSecondDelinquencyDate',
        'secondary_agency_code' => 'setSecondaryAgencyCode',
        'secondary_agency_id' => 'setSecondaryAgencyId',
        'special_payment_amount' => 'setSpecialPaymentAmount',
        'special_payment_code' => 'setSpecialPaymentCode',
        'special_payment_date' => 'setSpecialPaymentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actual_payment_amount' => 'getActualPaymentAmount',
        'chargeoff_amount' => 'getChargeoffAmount',
        'cii_code' => 'getCiiCode',
        'cii_code_text' => 'getCiiCodeText',
        'compliance_condition' => 'getComplianceCondition',
        'credit_limit_amount' => 'getCreditLimitAmount',
        'enhanced_account_condition' => 'getEnhancedAccountCondition',
        'enhanced_account_condition_text' => 'getEnhancedAccountConditionText',
        'enhanced_account_type' => 'getEnhancedAccountType',
        'enhanced_payment_history84' => 'getEnhancedPaymentHistory84',
        'enhanced_payment_status' => 'getEnhancedPaymentStatus',
        'enhanced_payment_status_text' => 'getEnhancedPaymentStatusText',
        'enhanced_special_comment' => 'getEnhancedSpecialComment',
        'enhanced_terms' => 'getEnhancedTerms',
        'enhanced_terms_text' => 'getEnhancedTermsText',
        'enhanced_terms_frequency' => 'getEnhancedTermsFrequency',
        'enhanced_terms_frequency_text' => 'getEnhancedTermsFrequencyText',
        'first_delinquency_date' => 'getFirstDelinquencyDate',
        'high_balance_amount' => 'getHighBalanceAmount',
        'max_delinquency_code' => 'getMaxDelinquencyCode',
        'mortgage_id' => 'getMortgageId',
        'original_creditor_classification_code' => 'getOriginalCreditorClassificationCode',
        'original_loan_amount' => 'getOriginalLoanAmount',
        'payment_level_date' => 'getPaymentLevelDate',
        'purchased_portfolio_from_name' => 'getPurchasedPortfolioFromName',
        'second_delinquency_date' => 'getSecondDelinquencyDate',
        'secondary_agency_code' => 'getSecondaryAgencyCode',
        'secondary_agency_id' => 'getSecondaryAgencyId',
        'special_payment_amount' => 'getSpecialPaymentAmount',
        'special_payment_code' => 'getSpecialPaymentCode',
        'special_payment_date' => 'getSpecialPaymentDate'
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
        $this->container['actual_payment_amount'] = isset($data['actual_payment_amount']) ? $data['actual_payment_amount'] : null;
        $this->container['chargeoff_amount'] = isset($data['chargeoff_amount']) ? $data['chargeoff_amount'] : null;
        $this->container['cii_code'] = isset($data['cii_code']) ? $data['cii_code'] : null;
        $this->container['cii_code_text'] = isset($data['cii_code_text']) ? $data['cii_code_text'] : null;
        $this->container['compliance_condition'] = isset($data['compliance_condition']) ? $data['compliance_condition'] : null;
        $this->container['credit_limit_amount'] = isset($data['credit_limit_amount']) ? $data['credit_limit_amount'] : null;
        $this->container['enhanced_account_condition'] = isset($data['enhanced_account_condition']) ? $data['enhanced_account_condition'] : null;
        $this->container['enhanced_account_condition_text'] = isset($data['enhanced_account_condition_text']) ? $data['enhanced_account_condition_text'] : null;
        $this->container['enhanced_account_type'] = isset($data['enhanced_account_type']) ? $data['enhanced_account_type'] : null;
        $this->container['enhanced_payment_history84'] = isset($data['enhanced_payment_history84']) ? $data['enhanced_payment_history84'] : null;
        $this->container['enhanced_payment_status'] = isset($data['enhanced_payment_status']) ? $data['enhanced_payment_status'] : null;
        $this->container['enhanced_payment_status_text'] = isset($data['enhanced_payment_status_text']) ? $data['enhanced_payment_status_text'] : null;
        $this->container['enhanced_special_comment'] = isset($data['enhanced_special_comment']) ? $data['enhanced_special_comment'] : null;
        $this->container['enhanced_terms'] = isset($data['enhanced_terms']) ? $data['enhanced_terms'] : null;
        $this->container['enhanced_terms_text'] = isset($data['enhanced_terms_text']) ? $data['enhanced_terms_text'] : null;
        $this->container['enhanced_terms_frequency'] = isset($data['enhanced_terms_frequency']) ? $data['enhanced_terms_frequency'] : null;
        $this->container['enhanced_terms_frequency_text'] = isset($data['enhanced_terms_frequency_text']) ? $data['enhanced_terms_frequency_text'] : null;
        $this->container['first_delinquency_date'] = isset($data['first_delinquency_date']) ? $data['first_delinquency_date'] : null;
        $this->container['high_balance_amount'] = isset($data['high_balance_amount']) ? $data['high_balance_amount'] : null;
        $this->container['max_delinquency_code'] = isset($data['max_delinquency_code']) ? $data['max_delinquency_code'] : null;
        $this->container['mortgage_id'] = isset($data['mortgage_id']) ? $data['mortgage_id'] : null;
        $this->container['original_creditor_classification_code'] = isset($data['original_creditor_classification_code']) ? $data['original_creditor_classification_code'] : null;
        $this->container['original_loan_amount'] = isset($data['original_loan_amount']) ? $data['original_loan_amount'] : null;
        $this->container['payment_level_date'] = isset($data['payment_level_date']) ? $data['payment_level_date'] : null;
        $this->container['purchased_portfolio_from_name'] = isset($data['purchased_portfolio_from_name']) ? $data['purchased_portfolio_from_name'] : null;
        $this->container['second_delinquency_date'] = isset($data['second_delinquency_date']) ? $data['second_delinquency_date'] : null;
        $this->container['secondary_agency_code'] = isset($data['secondary_agency_code']) ? $data['secondary_agency_code'] : null;
        $this->container['secondary_agency_id'] = isset($data['secondary_agency_id']) ? $data['secondary_agency_id'] : null;
        $this->container['special_payment_amount'] = isset($data['special_payment_amount']) ? $data['special_payment_amount'] : null;
        $this->container['special_payment_code'] = isset($data['special_payment_code']) ? $data['special_payment_code'] : null;
        $this->container['special_payment_date'] = isset($data['special_payment_date']) ? $data['special_payment_date'] : null;
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
     * Gets actual_payment_amount
     *
     * @return string|null
     */
    public function getActualPaymentAmount()
    {
        return $this->container['actual_payment_amount'];
    }

    /**
     * Sets actual_payment_amount
     *
     * @param string|null $actual_payment_amount Full dollar amount.
     *
     * @return $this
     */
    public function setActualPaymentAmount($actual_payment_amount)
    {
        $this->container['actual_payment_amount'] = $actual_payment_amount;

        return $this;
    }

    /**
     * Gets chargeoff_amount
     *
     * @return string|null
     */
    public function getChargeoffAmount()
    {
        return $this->container['chargeoff_amount'];
    }

    /**
     * Sets chargeoff_amount
     *
     * @param string|null $chargeoff_amount Full dollar amount.
     *
     * @return $this
     */
    public function setChargeoffAmount($chargeoff_amount)
    {
        $this->container['chargeoff_amount'] = $chargeoff_amount;

        return $this;
    }

    /**
     * Gets cii_code
     *
     * @return string|null
     */
    public function getCiiCode()
    {
        return $this->container['cii_code'];
    }

    /**
     * Sets cii_code
     *
     * @param string|null $cii_code Consumer Information Indicator.
     *
     * @return $this
     */
    public function setCiiCode($cii_code)
    {
        $this->container['cii_code'] = $cii_code;

        return $this;
    }

    /**
     * Gets cii_code_text
     *
     * @return string|null
     */
    public function getCiiCodeText()
    {
        return $this->container['cii_code_text'];
    }

    /**
     * Sets cii_code_text
     *
     * @param string|null $cii_code_text Verbose mapping for ciiCode
     *
     * @return $this
     */
    public function setCiiCodeText($cii_code_text)
    {
        $this->container['cii_code_text'] = $cii_code_text;

        return $this;
    }

    /**
     * Gets compliance_condition
     *
     * @return string|null
     */
    public function getComplianceCondition()
    {
        return $this->container['compliance_condition'];
    }

    /**
     * Sets compliance_condition
     *
     * @param string|null $compliance_condition Compliance Conditon Code.
     *
     * @return $this
     */
    public function setComplianceCondition($compliance_condition)
    {
        $this->container['compliance_condition'] = $compliance_condition;

        return $this;
    }

    /**
     * Gets credit_limit_amount
     *
     * @return string|null
     */
    public function getCreditLimitAmount()
    {
        return $this->container['credit_limit_amount'];
    }

    /**
     * Sets credit_limit_amount
     *
     * @param string|null $credit_limit_amount Full dollar amount.
     *
     * @return $this
     */
    public function setCreditLimitAmount($credit_limit_amount)
    {
        $this->container['credit_limit_amount'] = $credit_limit_amount;

        return $this;
    }

    /**
     * Gets enhanced_account_condition
     *
     * @return string|null
     */
    public function getEnhancedAccountCondition()
    {
        return $this->container['enhanced_account_condition'];
    }

    /**
     * Sets enhanced_account_condition
     *
     * @param string|null $enhanced_account_condition Account Condition Code. Codes.
     *
     * @return $this
     */
    public function setEnhancedAccountCondition($enhanced_account_condition)
    {
        $this->container['enhanced_account_condition'] = $enhanced_account_condition;

        return $this;
    }

    /**
     * Gets enhanced_account_condition_text
     *
     * @return string|null
     */
    public function getEnhancedAccountConditionText()
    {
        return $this->container['enhanced_account_condition_text'];
    }

    /**
     * Sets enhanced_account_condition_text
     *
     * @param string|null $enhanced_account_condition_text Verbose mapping for enhancedAccountCondition
     *
     * @return $this
     */
    public function setEnhancedAccountConditionText($enhanced_account_condition_text)
    {
        $this->container['enhanced_account_condition_text'] = $enhanced_account_condition_text;

        return $this;
    }

    /**
     * Gets enhanced_account_type
     *
     * @return string|null
     */
    public function getEnhancedAccountType()
    {
        return $this->container['enhanced_account_type'];
    }

    /**
     * Sets enhanced_account_type
     *
     * @param string|null $enhanced_account_type Indicates Type of Account.
     *
     * @return $this
     */
    public function setEnhancedAccountType($enhanced_account_type)
    {
        $this->container['enhanced_account_type'] = $enhanced_account_type;

        return $this;
    }

    /**
     * Gets enhanced_payment_history84
     *
     * @return string|null
     */
    public function getEnhancedPaymentHistory84()
    {
        return $this->container['enhanced_payment_history84'];
    }

    /**
     * Sets enhanced_payment_history84
     *
     * @param string|null $enhanced_payment_history84 84 Month enhanced payment history.
     *
     * @return $this
     */
    public function setEnhancedPaymentHistory84($enhanced_payment_history84)
    {
        $this->container['enhanced_payment_history84'] = $enhanced_payment_history84;

        return $this;
    }

    /**
     * Gets enhanced_payment_status
     *
     * @return string|null
     */
    public function getEnhancedPaymentStatus()
    {
        return $this->container['enhanced_payment_status'];
    }

    /**
     * Sets enhanced_payment_status
     *
     * @param string|null $enhanced_payment_status Payment Status Codes.
     *
     * @return $this
     */
    public function setEnhancedPaymentStatus($enhanced_payment_status)
    {
        $this->container['enhanced_payment_status'] = $enhanced_payment_status;

        return $this;
    }

    /**
     * Gets enhanced_payment_status_text
     *
     * @return string|null
     */
    public function getEnhancedPaymentStatusText()
    {
        return $this->container['enhanced_payment_status_text'];
    }

    /**
     * Sets enhanced_payment_status_text
     *
     * @param string|null $enhanced_payment_status_text Verbose mapping for enhancedPaymentStatus
     *
     * @return $this
     */
    public function setEnhancedPaymentStatusText($enhanced_payment_status_text)
    {
        $this->container['enhanced_payment_status_text'] = $enhanced_payment_status_text;

        return $this;
    }

    /**
     * Gets enhanced_special_comment
     *
     * @return string|null
     */
    public function getEnhancedSpecialComment()
    {
        return $this->container['enhanced_special_comment'];
    }

    /**
     * Sets enhanced_special_comment
     *
     * @param string|null $enhanced_special_comment Special Comments.
     *
     * @return $this
     */
    public function setEnhancedSpecialComment($enhanced_special_comment)
    {
        $this->container['enhanced_special_comment'] = $enhanced_special_comment;

        return $this;
    }

    /**
     * Gets enhanced_terms
     *
     * @return string|null
     */
    public function getEnhancedTerms()
    {
        return $this->container['enhanced_terms'];
    }

    /**
     * Sets enhanced_terms
     *
     * @param string|null $enhanced_terms Payment Terms.
     *
     * @return $this
     */
    public function setEnhancedTerms($enhanced_terms)
    {
        $this->container['enhanced_terms'] = $enhanced_terms;

        return $this;
    }

    /**
     * Gets enhanced_terms_text
     *
     * @return string|null
     */
    public function getEnhancedTermsText()
    {
        return $this->container['enhanced_terms_text'];
    }

    /**
     * Sets enhanced_terms_text
     *
     * @param string|null $enhanced_terms_text Verbose mapping for enhancedTerms
     *
     * @return $this
     */
    public function setEnhancedTermsText($enhanced_terms_text)
    {
        $this->container['enhanced_terms_text'] = $enhanced_terms_text;

        return $this;
    }

    /**
     * Gets enhanced_terms_frequency
     *
     * @return string|null
     */
    public function getEnhancedTermsFrequency()
    {
        return $this->container['enhanced_terms_frequency'];
    }

    /**
     * Sets enhanced_terms_frequency
     *
     * @param string|null $enhanced_terms_frequency Frequency for Payments Due.
     *
     * @return $this
     */
    public function setEnhancedTermsFrequency($enhanced_terms_frequency)
    {
        $this->container['enhanced_terms_frequency'] = $enhanced_terms_frequency;

        return $this;
    }

    /**
     * Gets enhanced_terms_frequency_text
     *
     * @return string|null
     */
    public function getEnhancedTermsFrequencyText()
    {
        return $this->container['enhanced_terms_frequency_text'];
    }

    /**
     * Sets enhanced_terms_frequency_text
     *
     * @param string|null $enhanced_terms_frequency_text Verbose mapping for enhancedTermsFrequency
     *
     * @return $this
     */
    public function setEnhancedTermsFrequencyText($enhanced_terms_frequency_text)
    {
        $this->container['enhanced_terms_frequency_text'] = $enhanced_terms_frequency_text;

        return $this;
    }

    /**
     * Gets first_delinquency_date
     *
     * @return string|null
     */
    public function getFirstDelinquencyDate()
    {
        return $this->container['first_delinquency_date'];
    }

    /**
     * Sets first_delinquency_date
     *
     * @param string|null $first_delinquency_date Most Recent Delinquency Date (MMDDCCYY)
     *
     * @return $this
     */
    public function setFirstDelinquencyDate($first_delinquency_date)
    {
        $this->container['first_delinquency_date'] = $first_delinquency_date;

        return $this;
    }

    /**
     * Gets high_balance_amount
     *
     * @return string|null
     */
    public function getHighBalanceAmount()
    {
        return $this->container['high_balance_amount'];
    }

    /**
     * Sets high_balance_amount
     *
     * @param string|null $high_balance_amount Full dollar amount.
     *
     * @return $this
     */
    public function setHighBalanceAmount($high_balance_amount)
    {
        $this->container['high_balance_amount'] = $high_balance_amount;

        return $this;
    }

    /**
     * Gets max_delinquency_code
     *
     * @return string|null
     */
    public function getMaxDelinquencyCode()
    {
        return $this->container['max_delinquency_code'];
    }

    /**
     * Sets max_delinquency_code
     *
     * @param string|null $max_delinquency_code Highest payment code for maximum delinquency date
     *
     * @return $this
     */
    public function setMaxDelinquencyCode($max_delinquency_code)
    {
        $this->container['max_delinquency_code'] = $max_delinquency_code;

        return $this;
    }

    /**
     * Gets mortgage_id
     *
     * @return string|null
     */
    public function getMortgageId()
    {
        return $this->container['mortgage_id'];
    }

    /**
     * Sets mortgage_id
     *
     * @param string|null $mortgage_id Mortgage ID.
     *
     * @return $this
     */
    public function setMortgageId($mortgage_id)
    {
        $this->container['mortgage_id'] = $mortgage_id;

        return $this;
    }

    /**
     * Gets original_creditor_classification_code
     *
     * @return string|null
     */
    public function getOriginalCreditorClassificationCode()
    {
        return $this->container['original_creditor_classification_code'];
    }

    /**
     * Sets original_creditor_classification_code
     *
     * @param string|null $original_creditor_classification_code General type of business of the Original Creditor.
     *
     * @return $this
     */
    public function setOriginalCreditorClassificationCode($original_creditor_classification_code)
    {
        $this->container['original_creditor_classification_code'] = $original_creditor_classification_code;

        return $this;
    }

    /**
     * Gets original_loan_amount
     *
     * @return string|null
     */
    public function getOriginalLoanAmount()
    {
        return $this->container['original_loan_amount'];
    }

    /**
     * Sets original_loan_amount
     *
     * @param string|null $original_loan_amount Full dollar amount.
     *
     * @return $this
     */
    public function setOriginalLoanAmount($original_loan_amount)
    {
        $this->container['original_loan_amount'] = $original_loan_amount;

        return $this;
    }

    /**
     * Gets payment_level_date
     *
     * @return string|null
     */
    public function getPaymentLevelDate()
    {
        return $this->container['payment_level_date'];
    }

    /**
     * Sets payment_level_date
     *
     * @param string|null $payment_level_date Date the account first reached present status level. Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setPaymentLevelDate($payment_level_date)
    {
        $this->container['payment_level_date'] = $payment_level_date;

        return $this;
    }

    /**
     * Gets purchased_portfolio_from_name
     *
     * @return string|null
     */
    public function getPurchasedPortfolioFromName()
    {
        return $this->container['purchased_portfolio_from_name'];
    }

    /**
     * Sets purchased_portfolio_from_name
     *
     * @param string|null $purchased_portfolio_from_name Purchased Portfolio Name.
     *
     * @return $this
     */
    public function setPurchasedPortfolioFromName($purchased_portfolio_from_name)
    {
        $this->container['purchased_portfolio_from_name'] = $purchased_portfolio_from_name;

        return $this;
    }

    /**
     * Gets second_delinquency_date
     *
     * @return string|null
     */
    public function getSecondDelinquencyDate()
    {
        return $this->container['second_delinquency_date'];
    }

    /**
     * Sets second_delinquency_date
     *
     * @param string|null $second_delinquency_date Second Most Recent Delinquency Date(MMDDCCYY)
     *
     * @return $this
     */
    public function setSecondDelinquencyDate($second_delinquency_date)
    {
        $this->container['second_delinquency_date'] = $second_delinquency_date;

        return $this;
    }

    /**
     * Gets secondary_agency_code
     *
     * @return string|null
     */
    public function getSecondaryAgencyCode()
    {
        return $this->container['secondary_agency_code'];
    }

    /**
     * Sets secondary_agency_code
     *
     * @param string|null $secondary_agency_code Secondary Agency Code.
     *
     * @return $this
     */
    public function setSecondaryAgencyCode($secondary_agency_code)
    {
        $this->container['secondary_agency_code'] = $secondary_agency_code;

        return $this;
    }

    /**
     * Gets secondary_agency_id
     *
     * @return string|null
     */
    public function getSecondaryAgencyId()
    {
        return $this->container['secondary_agency_id'];
    }

    /**
     * Sets secondary_agency_id
     *
     * @param string|null $secondary_agency_id Secondary Agency Id
     *
     * @return $this
     */
    public function setSecondaryAgencyId($secondary_agency_id)
    {
        $this->container['secondary_agency_id'] = $secondary_agency_id;

        return $this;
    }

    /**
     * Gets special_payment_amount
     *
     * @return string|null
     */
    public function getSpecialPaymentAmount()
    {
        return $this->container['special_payment_amount'];
    }

    /**
     * Sets special_payment_amount
     *
     * @param string|null $special_payment_amount Full dollar amount
     *
     * @return $this
     */
    public function setSpecialPaymentAmount($special_payment_amount)
    {
        $this->container['special_payment_amount'] = $special_payment_amount;

        return $this;
    }

    /**
     * Gets special_payment_code
     *
     * @return string|null
     */
    public function getSpecialPaymentCode()
    {
        return $this->container['special_payment_code'];
    }

    /**
     * Sets special_payment_code
     *
     * @param string|null $special_payment_code Additional Information about the Payment Amount.
     *
     * @return $this
     */
    public function setSpecialPaymentCode($special_payment_code)
    {
        $this->container['special_payment_code'] = $special_payment_code;

        return $this;
    }

    /**
     * Gets special_payment_date
     *
     * @return string|null
     */
    public function getSpecialPaymentDate()
    {
        return $this->container['special_payment_date'];
    }

    /**
     * Sets special_payment_date
     *
     * @param string|null $special_payment_date Special Payment Date Format = MMDDCCYY.
     *
     * @return $this
     */
    public function setSpecialPaymentDate($special_payment_date)
    {
        $this->container['special_payment_date'] = $special_payment_date;

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


