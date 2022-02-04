<?php
/**
 * Domain
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailMojo API
 *
 * v1 of the MailMojo API
 *
 * OpenAPI spec version: 1.1.0
 * Contact: hjelp@mailmojo.no
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailMojo\MailMojo\Model;

use \ArrayAccess;
use \MailMojo\ObjectSerializer;

/**
 * Domain Class Doc Comment
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Domain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'domain' => 'string',
        'has_authentication' => 'bool',
        'is_confirmed' => 'bool',
        'is_dmarc_passed' => 'bool',
        'is_dns_verified' => 'bool',
        'is_free_domain' => 'object',
        'spf_status' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_at' => 'date-time',
        'domain' => null,
        'has_authentication' => null,
        'is_confirmed' => null,
        'is_dmarc_passed' => null,
        'is_dns_verified' => null,
        'is_free_domain' => null,
        'spf_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at' => 'created_at',
        'domain' => 'domain',
        'has_authentication' => 'has_authentication',
        'is_confirmed' => 'is_confirmed',
        'is_dmarc_passed' => 'is_dmarc_passed',
        'is_dns_verified' => 'is_dns_verified',
        'is_free_domain' => 'is_free_domain',
        'spf_status' => 'spf_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'domain' => 'setDomain',
        'has_authentication' => 'setHasAuthentication',
        'is_confirmed' => 'setIsConfirmed',
        'is_dmarc_passed' => 'setIsDmarcPassed',
        'is_dns_verified' => 'setIsDnsVerified',
        'is_free_domain' => 'setIsFreeDomain',
        'spf_status' => 'setSpfStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'domain' => 'getDomain',
        'has_authentication' => 'getHasAuthentication',
        'is_confirmed' => 'getIsConfirmed',
        'is_dmarc_passed' => 'getIsDmarcPassed',
        'is_dns_verified' => 'getIsDnsVerified',
        'is_free_domain' => 'getIsFreeDomain',
        'spf_status' => 'getSpfStatus'
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
        return self::$swaggerModelName;
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['has_authentication'] = isset($data['has_authentication']) ? $data['has_authentication'] : null;
        $this->container['is_confirmed'] = isset($data['is_confirmed']) ? $data['is_confirmed'] : null;
        $this->container['is_dmarc_passed'] = isset($data['is_dmarc_passed']) ? $data['is_dmarc_passed'] : null;
        $this->container['is_dns_verified'] = isset($data['is_dns_verified']) ? $data['is_dns_verified'] : null;
        $this->container['is_free_domain'] = isset($data['is_free_domain']) ? $data['is_free_domain'] : null;
        $this->container['spf_status'] = isset($data['spf_status']) ? $data['spf_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets has_authentication
     *
     * @return bool
     */
    public function getHasAuthentication()
    {
        return $this->container['has_authentication'];
    }

    /**
     * Sets has_authentication
     *
     * @param bool $has_authentication has_authentication
     *
     * @return $this
     */
    public function setHasAuthentication($has_authentication)
    {
        $this->container['has_authentication'] = $has_authentication;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return bool
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool $is_confirmed is_confirmed
     *
     * @return $this
     */
    public function setIsConfirmed($is_confirmed)
    {
        $this->container['is_confirmed'] = $is_confirmed;

        return $this;
    }

    /**
     * Gets is_dmarc_passed
     *
     * @return bool
     */
    public function getIsDmarcPassed()
    {
        return $this->container['is_dmarc_passed'];
    }

    /**
     * Sets is_dmarc_passed
     *
     * @param bool $is_dmarc_passed is_dmarc_passed
     *
     * @return $this
     */
    public function setIsDmarcPassed($is_dmarc_passed)
    {
        $this->container['is_dmarc_passed'] = $is_dmarc_passed;

        return $this;
    }

    /**
     * Gets is_dns_verified
     *
     * @return bool
     */
    public function getIsDnsVerified()
    {
        return $this->container['is_dns_verified'];
    }

    /**
     * Sets is_dns_verified
     *
     * @param bool $is_dns_verified is_dns_verified
     *
     * @return $this
     */
    public function setIsDnsVerified($is_dns_verified)
    {
        $this->container['is_dns_verified'] = $is_dns_verified;

        return $this;
    }

    /**
     * Gets is_free_domain
     *
     * @return object
     */
    public function getIsFreeDomain()
    {
        return $this->container['is_free_domain'];
    }

    /**
     * Sets is_free_domain
     *
     * @param object $is_free_domain is_free_domain
     *
     * @return $this
     */
    public function setIsFreeDomain($is_free_domain)
    {
        $this->container['is_free_domain'] = $is_free_domain;

        return $this;
    }

    /**
     * Gets spf_status
     *
     * @return object
     */
    public function getSpfStatus()
    {
        return $this->container['spf_status'];
    }

    /**
     * Sets spf_status
     *
     * @param object $spf_status spf_status
     *
     * @return $this
     */
    public function setSpfStatus($spf_status)
    {
        $this->container['spf_status'] = $spf_status;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


