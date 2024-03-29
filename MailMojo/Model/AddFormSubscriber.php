<?php
/**
 * AddFormSubscriber
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
 * AddFormSubscriber Class Doc Comment
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddFormSubscriber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddFormSubscriber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact' => '\MailMojo\MailMojo\Model\BaseContact',
        'page_view_id' => 'int',
        'view_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact' => null,
        'page_view_id' => 'int32',
        'view_id' => 'int32'
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
        'contact' => 'contact',
        'page_view_id' => 'page_view_id',
        'view_id' => 'view_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'page_view_id' => 'setPageViewId',
        'view_id' => 'setViewId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'page_view_id' => 'getPageViewId',
        'view_id' => 'getViewId'
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['page_view_id'] = isset($data['page_view_id']) ? $data['page_view_id'] : null;
        $this->container['view_id'] = isset($data['view_id']) ? $data['view_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['view_id'] === null) {
            $invalidProperties[] = "'view_id' can't be null";
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
     * Gets contact
     *
     * @return \MailMojo\MailMojo\Model\BaseContact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \MailMojo\MailMojo\Model\BaseContact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets page_view_id
     *
     * @return int
     */
    public function getPageViewId()
    {
        return $this->container['page_view_id'];
    }

    /**
     * Sets page_view_id
     *
     * @param int $page_view_id page_view_id
     *
     * @return $this
     */
    public function setPageViewId($page_view_id)
    {
        $this->container['page_view_id'] = $page_view_id;

        return $this;
    }

    /**
     * Gets view_id
     *
     * @return int
     */
    public function getViewId()
    {
        return $this->container['view_id'];
    }

    /**
     * Sets view_id
     *
     * @param int $view_id view_id
     *
     * @return $this
     */
    public function setViewId($view_id)
    {
        $this->container['view_id'] = $view_id;

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


