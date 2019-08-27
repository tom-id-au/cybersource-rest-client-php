<?php
/**
 * Ptsv2payoutsProcessingInformationPayoutsOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2payoutsProcessingInformationPayoutsOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2payoutsProcessingInformationPayoutsOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payouts_processingInformation_payoutsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acquirerMerchantId' => 'string',
        'acquirerBin' => 'string',
        'retrievalReferenceNumber' => 'string',
        'accountFundingReferenceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acquirerMerchantId' => null,
        'acquirerBin' => null,
        'retrievalReferenceNumber' => null,
        'accountFundingReferenceId' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'acquirerMerchantId' => 'acquirerMerchantId',
        'acquirerBin' => 'acquirerBin',
        'retrievalReferenceNumber' => 'retrievalReferenceNumber',
        'accountFundingReferenceId' => 'accountFundingReferenceId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acquirerMerchantId' => 'setAcquirerMerchantId',
        'acquirerBin' => 'setAcquirerBin',
        'retrievalReferenceNumber' => 'setRetrievalReferenceNumber',
        'accountFundingReferenceId' => 'setAccountFundingReferenceId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acquirerMerchantId' => 'getAcquirerMerchantId',
        'acquirerBin' => 'getAcquirerBin',
        'retrievalReferenceNumber' => 'getRetrievalReferenceNumber',
        'accountFundingReferenceId' => 'getAccountFundingReferenceId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['acquirerMerchantId'] = isset($data['acquirerMerchantId']) ? $data['acquirerMerchantId'] : null;
        $this->container['acquirerBin'] = isset($data['acquirerBin']) ? $data['acquirerBin'] : null;
        $this->container['retrievalReferenceNumber'] = isset($data['retrievalReferenceNumber']) ? $data['retrievalReferenceNumber'] : null;
        $this->container['accountFundingReferenceId'] = isset($data['accountFundingReferenceId']) ? $data['accountFundingReferenceId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['acquirerMerchantId']) && (strlen($this->container['acquirerMerchantId']) > 15)) {
            $invalid_properties[] = "invalid value for 'acquirerMerchantId', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['acquirerBin']) && (strlen($this->container['acquirerBin']) > 11)) {
            $invalid_properties[] = "invalid value for 'acquirerBin', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['retrievalReferenceNumber']) && (strlen($this->container['retrievalReferenceNumber']) > 12)) {
            $invalid_properties[] = "invalid value for 'retrievalReferenceNumber', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['accountFundingReferenceId']) && (strlen($this->container['accountFundingReferenceId']) > 15)) {
            $invalid_properties[] = "invalid value for 'accountFundingReferenceId', the character length must be smaller than or equal to 15.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['acquirerMerchantId']) > 15) {
            return false;
        }
        if (strlen($this->container['acquirerBin']) > 11) {
            return false;
        }
        if (strlen($this->container['retrievalReferenceNumber']) > 12) {
            return false;
        }
        if (strlen($this->container['accountFundingReferenceId']) > 15) {
            return false;
        }
        return true;
    }


    /**
     * Gets acquirerMerchantId
     * @return string
     */
    public function getAcquirerMerchantId()
    {
        return $this->container['acquirerMerchantId'];
    }

    /**
     * Sets acquirerMerchantId
     * @param string $acquirerMerchantId This field identifies the card acceptor for defining the point of service terminal in both local and interchange environments. An acquirer-assigned code identifying the card acceptor for the transaction.  Depending on the acquirer and merchant billing and reporting requirements, the code can represent a merchant, a specific merchant location, or a specific merchant location terminal. Acquiring Institution Identification Code uniquely identifies the merchant. The value from the original is required in any subsequent messages, including reversals, chargebacks, and representments. * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setAcquirerMerchantId($acquirerMerchantId)
    {
        if (!is_null($acquirerMerchantId) && (strlen($acquirerMerchantId) > 15)) {
            throw new \InvalidArgumentException('invalid length for $acquirerMerchantId when calling Ptsv2payoutsProcessingInformationPayoutsOptions., must be smaller than or equal to 15.');
        }

        $this->container['acquirerMerchantId'] = $acquirerMerchantId;

        return $this;
    }

    /**
     * Gets acquirerBin
     * @return string
     */
    public function getAcquirerBin()
    {
        return $this->container['acquirerBin'];
    }

    /**
     * Sets acquirerBin
     * @param string $acquirerBin This code identifies the financial institution acting as the acquirer of this customer transaction. The acquirer is the member or system user that signed the merchant or ADM or dispensed cash.  This number is usually Visa-assigned. * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setAcquirerBin($acquirerBin)
    {
        if (!is_null($acquirerBin) && (strlen($acquirerBin) > 11)) {
            throw new \InvalidArgumentException('invalid length for $acquirerBin when calling Ptsv2payoutsProcessingInformationPayoutsOptions., must be smaller than or equal to 11.');
        }

        $this->container['acquirerBin'] = $acquirerBin;

        return $this;
    }

    /**
     * Gets retrievalReferenceNumber
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrievalReferenceNumber'];
    }

    /**
     * Sets retrievalReferenceNumber
     * @param string $retrievalReferenceNumber This field contains a number that is used with other data elements as a key to identify and track all messages related to a given cardholder transaction; that is, to a given transaction set.  Format:   Positions 1-4: The yddd equivalent of the date, where y = 0-9 and ddd = 001 – 366.   Positions 5-12: A unique identification number generated by the merchant  * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrievalReferenceNumber)
    {
        if (!is_null($retrievalReferenceNumber) && (strlen($retrievalReferenceNumber) > 12)) {
            throw new \InvalidArgumentException('invalid length for $retrievalReferenceNumber when calling Ptsv2payoutsProcessingInformationPayoutsOptions., must be smaller than or equal to 12.');
        }

        $this->container['retrievalReferenceNumber'] = $retrievalReferenceNumber;

        return $this;
    }

    /**
     * Gets accountFundingReferenceId
     * @return string
     */
    public function getAccountFundingReferenceId()
    {
        return $this->container['accountFundingReferenceId'];
    }

    /**
     * Sets accountFundingReferenceId
     * @param string $accountFundingReferenceId Visa-generated transaction identifier (TID) that is unique for each original authorization and financial request. * Applicable only for CTV for Payouts.
     * @return $this
     */
    public function setAccountFundingReferenceId($accountFundingReferenceId)
    {
        if (!is_null($accountFundingReferenceId) && (strlen($accountFundingReferenceId) > 15)) {
            throw new \InvalidArgumentException('invalid length for $accountFundingReferenceId when calling Ptsv2payoutsProcessingInformationPayoutsOptions., must be smaller than or equal to 15.');
        }

        $this->container['accountFundingReferenceId'] = $accountFundingReferenceId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


