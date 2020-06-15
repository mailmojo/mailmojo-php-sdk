<?php
/**
 * Newsletter
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
 * Swagger Codegen version: 2.4.14
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
 * Newsletter Class Doc Comment
 *
 * @category Class
 * @package  MailMojo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Newsletter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Newsletter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completed' => '\DateTime',
        'data' => 'object[]',
        'editor_html' => 'string',
        'html' => 'string',
        'id' => 'int',
        'is_aborted' => 'bool',
        'is_draft' => 'bool',
        'is_in_campaign' => 'bool',
        'is_scheduled' => 'bool',
        'is_sending' => 'bool',
        'is_sent' => 'bool',
        'list' => '\MailMojo\MailMojo\Model\ModelList',
        'meta' => '\MailMojo\MailMojo\Model\PageMeta',
        'num_recipients' => 'int',
        'plain' => 'string',
        'saved' => '\DateTime',
        'screenshot_url' => 'string',
        'segments' => '\MailMojo\MailMojo\Model\NewsletterSegments[]',
        'started' => '\DateTime',
        'statistics' => '\MailMojo\MailMojo\Model\NewsletterStatistics',
        'subject' => 'string',
        'template_id' => 'int',
        'utm_campaign' => 'string',
        'view_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'completed' => 'date-time',
        'data' => null,
        'editor_html' => null,
        'html' => null,
        'id' => 'int32',
        'is_aborted' => null,
        'is_draft' => null,
        'is_in_campaign' => null,
        'is_scheduled' => null,
        'is_sending' => null,
        'is_sent' => null,
        'list' => null,
        'meta' => null,
        'num_recipients' => 'int32',
        'plain' => null,
        'saved' => 'date-time',
        'screenshot_url' => null,
        'segments' => null,
        'started' => 'date-time',
        'statistics' => null,
        'subject' => null,
        'template_id' => 'int32',
        'utm_campaign' => null,
        'view_url' => null
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
        'completed' => 'completed',
        'data' => 'data',
        'editor_html' => 'editor_html',
        'html' => 'html',
        'id' => 'id',
        'is_aborted' => 'is_aborted',
        'is_draft' => 'is_draft',
        'is_in_campaign' => 'is_in_campaign',
        'is_scheduled' => 'is_scheduled',
        'is_sending' => 'is_sending',
        'is_sent' => 'is_sent',
        'list' => 'list',
        'meta' => 'meta',
        'num_recipients' => 'num_recipients',
        'plain' => 'plain',
        'saved' => 'saved',
        'screenshot_url' => 'screenshot_url',
        'segments' => 'segments',
        'started' => 'started',
        'statistics' => 'statistics',
        'subject' => 'subject',
        'template_id' => 'template_id',
        'utm_campaign' => 'utm_campaign',
        'view_url' => 'view_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completed' => 'setCompleted',
        'data' => 'setData',
        'editor_html' => 'setEditorHtml',
        'html' => 'setHtml',
        'id' => 'setId',
        'is_aborted' => 'setIsAborted',
        'is_draft' => 'setIsDraft',
        'is_in_campaign' => 'setIsInCampaign',
        'is_scheduled' => 'setIsScheduled',
        'is_sending' => 'setIsSending',
        'is_sent' => 'setIsSent',
        'list' => 'setList',
        'meta' => 'setMeta',
        'num_recipients' => 'setNumRecipients',
        'plain' => 'setPlain',
        'saved' => 'setSaved',
        'screenshot_url' => 'setScreenshotUrl',
        'segments' => 'setSegments',
        'started' => 'setStarted',
        'statistics' => 'setStatistics',
        'subject' => 'setSubject',
        'template_id' => 'setTemplateId',
        'utm_campaign' => 'setUtmCampaign',
        'view_url' => 'setViewUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completed' => 'getCompleted',
        'data' => 'getData',
        'editor_html' => 'getEditorHtml',
        'html' => 'getHtml',
        'id' => 'getId',
        'is_aborted' => 'getIsAborted',
        'is_draft' => 'getIsDraft',
        'is_in_campaign' => 'getIsInCampaign',
        'is_scheduled' => 'getIsScheduled',
        'is_sending' => 'getIsSending',
        'is_sent' => 'getIsSent',
        'list' => 'getList',
        'meta' => 'getMeta',
        'num_recipients' => 'getNumRecipients',
        'plain' => 'getPlain',
        'saved' => 'getSaved',
        'screenshot_url' => 'getScreenshotUrl',
        'segments' => 'getSegments',
        'started' => 'getStarted',
        'statistics' => 'getStatistics',
        'subject' => 'getSubject',
        'template_id' => 'getTemplateId',
        'utm_campaign' => 'getUtmCampaign',
        'view_url' => 'getViewUrl'
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
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['editor_html'] = isset($data['editor_html']) ? $data['editor_html'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_aborted'] = isset($data['is_aborted']) ? $data['is_aborted'] : null;
        $this->container['is_draft'] = isset($data['is_draft']) ? $data['is_draft'] : null;
        $this->container['is_in_campaign'] = isset($data['is_in_campaign']) ? $data['is_in_campaign'] : null;
        $this->container['is_scheduled'] = isset($data['is_scheduled']) ? $data['is_scheduled'] : null;
        $this->container['is_sending'] = isset($data['is_sending']) ? $data['is_sending'] : null;
        $this->container['is_sent'] = isset($data['is_sent']) ? $data['is_sent'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['num_recipients'] = isset($data['num_recipients']) ? $data['num_recipients'] : null;
        $this->container['plain'] = isset($data['plain']) ? $data['plain'] : null;
        $this->container['saved'] = isset($data['saved']) ? $data['saved'] : null;
        $this->container['screenshot_url'] = isset($data['screenshot_url']) ? $data['screenshot_url'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['utm_campaign'] = isset($data['utm_campaign']) ? $data['utm_campaign'] : null;
        $this->container['view_url'] = isset($data['view_url']) ? $data['view_url'] : null;
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
     * Gets completed
     *
     * @return \DateTime
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param \DateTime $completed completed
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets data
     *
     * @return object[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object[] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets editor_html
     *
     * @return string
     */
    public function getEditorHtml()
    {
        return $this->container['editor_html'];
    }

    /**
     * Sets editor_html
     *
     * @param string $editor_html editor_html
     *
     * @return $this
     */
    public function setEditorHtml($editor_html)
    {
        $this->container['editor_html'] = $editor_html;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_aborted
     *
     * @return bool
     */
    public function getIsAborted()
    {
        return $this->container['is_aborted'];
    }

    /**
     * Sets is_aborted
     *
     * @param bool $is_aborted is_aborted
     *
     * @return $this
     */
    public function setIsAborted($is_aborted)
    {
        $this->container['is_aborted'] = $is_aborted;

        return $this;
    }

    /**
     * Gets is_draft
     *
     * @return bool
     */
    public function getIsDraft()
    {
        return $this->container['is_draft'];
    }

    /**
     * Sets is_draft
     *
     * @param bool $is_draft is_draft
     *
     * @return $this
     */
    public function setIsDraft($is_draft)
    {
        $this->container['is_draft'] = $is_draft;

        return $this;
    }

    /**
     * Gets is_in_campaign
     *
     * @return bool
     */
    public function getIsInCampaign()
    {
        return $this->container['is_in_campaign'];
    }

    /**
     * Sets is_in_campaign
     *
     * @param bool $is_in_campaign is_in_campaign
     *
     * @return $this
     */
    public function setIsInCampaign($is_in_campaign)
    {
        $this->container['is_in_campaign'] = $is_in_campaign;

        return $this;
    }

    /**
     * Gets is_scheduled
     *
     * @return bool
     */
    public function getIsScheduled()
    {
        return $this->container['is_scheduled'];
    }

    /**
     * Sets is_scheduled
     *
     * @param bool $is_scheduled is_scheduled
     *
     * @return $this
     */
    public function setIsScheduled($is_scheduled)
    {
        $this->container['is_scheduled'] = $is_scheduled;

        return $this;
    }

    /**
     * Gets is_sending
     *
     * @return bool
     */
    public function getIsSending()
    {
        return $this->container['is_sending'];
    }

    /**
     * Sets is_sending
     *
     * @param bool $is_sending is_sending
     *
     * @return $this
     */
    public function setIsSending($is_sending)
    {
        $this->container['is_sending'] = $is_sending;

        return $this;
    }

    /**
     * Gets is_sent
     *
     * @return bool
     */
    public function getIsSent()
    {
        return $this->container['is_sent'];
    }

    /**
     * Sets is_sent
     *
     * @param bool $is_sent is_sent
     *
     * @return $this
     */
    public function setIsSent($is_sent)
    {
        $this->container['is_sent'] = $is_sent;

        return $this;
    }

    /**
     * Gets list
     *
     * @return \MailMojo\MailMojo\Model\ModelList
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param \MailMojo\MailMojo\Model\ModelList $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \MailMojo\MailMojo\Model\PageMeta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \MailMojo\MailMojo\Model\PageMeta $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets num_recipients
     *
     * @return int
     */
    public function getNumRecipients()
    {
        return $this->container['num_recipients'];
    }

    /**
     * Sets num_recipients
     *
     * @param int $num_recipients num_recipients
     *
     * @return $this
     */
    public function setNumRecipients($num_recipients)
    {
        $this->container['num_recipients'] = $num_recipients;

        return $this;
    }

    /**
     * Gets plain
     *
     * @return string
     */
    public function getPlain()
    {
        return $this->container['plain'];
    }

    /**
     * Sets plain
     *
     * @param string $plain plain
     *
     * @return $this
     */
    public function setPlain($plain)
    {
        $this->container['plain'] = $plain;

        return $this;
    }

    /**
     * Gets saved
     *
     * @return \DateTime
     */
    public function getSaved()
    {
        return $this->container['saved'];
    }

    /**
     * Sets saved
     *
     * @param \DateTime $saved saved
     *
     * @return $this
     */
    public function setSaved($saved)
    {
        $this->container['saved'] = $saved;

        return $this;
    }

    /**
     * Gets screenshot_url
     *
     * @return string
     */
    public function getScreenshotUrl()
    {
        return $this->container['screenshot_url'];
    }

    /**
     * Sets screenshot_url
     *
     * @param string $screenshot_url screenshot_url
     *
     * @return $this
     */
    public function setScreenshotUrl($screenshot_url)
    {
        $this->container['screenshot_url'] = $screenshot_url;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \MailMojo\MailMojo\Model\NewsletterSegments[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \MailMojo\MailMojo\Model\NewsletterSegments[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime $started started
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \MailMojo\MailMojo\Model\NewsletterStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \MailMojo\MailMojo\Model\NewsletterStatistics $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id template_id
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string $utm_campaign utm_campaign
     *
     * @return $this
     */
    public function setUtmCampaign($utm_campaign)
    {
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets view_url
     *
     * @return string
     */
    public function getViewUrl()
    {
        return $this->container['view_url'];
    }

    /**
     * Sets view_url
     *
     * @param string $view_url view_url
     *
     * @return $this
     */
    public function setViewUrl($view_url)
    {
        $this->container['view_url'] = $view_url;

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

