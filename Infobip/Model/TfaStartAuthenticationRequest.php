<?php
/**
 * TfaStartAuthenticationRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use \ArrayAccess;
use \Infobip\ObjectSerializer;

/**
 * TfaStartAuthenticationRequest Class Doc Comment
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TfaStartAuthenticationRequest implements ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TfaStartAuthenticationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicationId' => 'string',
        'from' => 'string',
        'messageId' => 'string',
        'placeholders' => 'map[string,string]',
        'to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'from' => null,
        'messageId' => null,
        'placeholders' => null,
        'to' => null
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
        'applicationId' => 'applicationId',
        'from' => 'from',
        'messageId' => 'messageId',
        'placeholders' => 'placeholders',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicationId' => 'setApplicationId',
        'from' => 'setFrom',
        'messageId' => 'setMessageId',
        'placeholders' => 'setPlaceholders',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicationId' => 'getApplicationId',
        'from' => 'getFrom',
        'messageId' => 'getMessageId',
        'placeholders' => 'getPlaceholders',
        'to' => 'getTo'
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
        $this->container['applicationId'] = $data['applicationId'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['messageId'] = $data['messageId'] ?? null;
        $this->container['placeholders'] = $data['placeholders'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['messageId'] === null) {
            $invalidProperties[] = "'messageId' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
     * Gets applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     *
     * @param string $applicationId 2FA application ID.
     *
     * @return self
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Use this parameter if you wish to override the sender ID from the [created](#channels/sms/create-2fa-message-template) message template parameter `senderId`.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     *
     * @param string $messageId Message template ID that will be sent to phone number.
     *
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets placeholders
     *
     * @return map[string,string]|null
     */
    public function getPlaceholders()
    {
        return $this->container['placeholders'];
    }

    /**
     * Sets placeholders
     *
     * @param map[string,string]|null $placeholders Key value pairs that will be replaced during message sending. Placeholder keys should NOT contain curly brackets and should NOT contain a `pin` placeholder. Valid example: `\"placeholders\":{\"firstName\":\"John\"}`
     *
     * @return self
     */
    public function setPlaceholders($placeholders)
    {
        $this->container['placeholders'] = $placeholders;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Phone number to which the 2FA message will be sent. Example: 41793026727.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
