<?php
/**
 * EmbedOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailMojo
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MailMojo API
 *
 * v1 of the MailMojo API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: hjelp@mailmojo.no
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailMojo\Model;

use \ArrayAccess;

/**
 * EmbedOptions Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MailMojo
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmbedOptions implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Embed_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'enable_dev_features' => 'bool',
        'enable_newsletters_index' => 'bool',
        'enable_subscription_management' => 'bool',
        'enable_theme' => 'bool',
        'locale' => 'string',
        'media_url' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'enable_dev_features' => 'enable_dev_features',
        'enable_newsletters_index' => 'enable_newsletters_index',
        'enable_subscription_management' => 'enable_subscription_management',
        'enable_theme' => 'enable_theme',
        'locale' => 'locale',
        'media_url' => 'media_url'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'enable_dev_features' => 'setEnableDevFeatures',
        'enable_newsletters_index' => 'setEnableNewslettersIndex',
        'enable_subscription_management' => 'setEnableSubscriptionManagement',
        'enable_theme' => 'setEnableTheme',
        'locale' => 'setLocale',
        'media_url' => 'setMediaUrl'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'enable_dev_features' => 'getEnableDevFeatures',
        'enable_newsletters_index' => 'getEnableNewslettersIndex',
        'enable_subscription_management' => 'getEnableSubscriptionManagement',
        'enable_theme' => 'getEnableTheme',
        'locale' => 'getLocale',
        'media_url' => 'getMediaUrl'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LOCALE_SV_SE = 'sv_SE';
    const LOCALE_EN_US = 'en_US';
    const LOCALE_NB_NO = 'nb_NO';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_SV_SE,
            self::LOCALE_EN_US,
            self::LOCALE_NB_NO,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['enable_dev_features'] = isset($data['enable_dev_features']) ? $data['enable_dev_features'] : null;
        $this->container['enable_newsletters_index'] = isset($data['enable_newsletters_index']) ? $data['enable_newsletters_index'] : null;
        $this->container['enable_subscription_management'] = isset($data['enable_subscription_management']) ? $data['enable_subscription_management'] : null;
        $this->container['enable_theme'] = isset($data['enable_theme']) ? $data['enable_theme'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['media_url'] = isset($data['media_url']) ? $data['media_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("sv_SE", "en_US", "nb_NO");
        if (!in_array($this->container['locale'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'locale', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("sv_SE", "en_US", "nb_NO");
        if (!in_array($this->container['locale'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets enable_dev_features
     * @return bool
     */
    public function getEnableDevFeatures()
    {
        return $this->container['enable_dev_features'];
    }

    /**
     * Sets enable_dev_features
     * @param bool $enable_dev_features
     * @return $this
     */
    public function setEnableDevFeatures($enable_dev_features)
    {
        $this->container['enable_dev_features'] = $enable_dev_features;

        return $this;
    }

    /**
     * Gets enable_newsletters_index
     * @return bool
     */
    public function getEnableNewslettersIndex()
    {
        return $this->container['enable_newsletters_index'];
    }

    /**
     * Sets enable_newsletters_index
     * @param bool $enable_newsletters_index
     * @return $this
     */
    public function setEnableNewslettersIndex($enable_newsletters_index)
    {
        $this->container['enable_newsletters_index'] = $enable_newsletters_index;

        return $this;
    }

    /**
     * Gets enable_subscription_management
     * @return bool
     */
    public function getEnableSubscriptionManagement()
    {
        return $this->container['enable_subscription_management'];
    }

    /**
     * Sets enable_subscription_management
     * @param bool $enable_subscription_management
     * @return $this
     */
    public function setEnableSubscriptionManagement($enable_subscription_management)
    {
        $this->container['enable_subscription_management'] = $enable_subscription_management;

        return $this;
    }

    /**
     * Gets enable_theme
     * @return bool
     */
    public function getEnableTheme()
    {
        return $this->container['enable_theme'];
    }

    /**
     * Sets enable_theme
     * @param bool $enable_theme
     * @return $this
     */
    public function setEnableTheme($enable_theme)
    {
        $this->container['enable_theme'] = $enable_theme;

        return $this;
    }

    /**
     * Gets locale
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $allowed_values = array('sv_SE', 'en_US', 'nb_NO');
        if (!in_array($locale, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'locale', must be one of 'sv_SE', 'en_US', 'nb_NO'");
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets media_url
     * @return string
     */
    public function getMediaUrl()
    {
        return $this->container['media_url'];
    }

    /**
     * Sets media_url
     * @param string $media_url
     * @return $this
     */
    public function setMediaUrl($media_url)
    {
        $this->container['media_url'] = $media_url;

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
            return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MailMojo\ObjectSerializer::sanitizeForSerialization($this));
    }
}


