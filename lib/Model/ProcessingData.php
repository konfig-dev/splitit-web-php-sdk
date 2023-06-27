<?php
/**
 * ProcessingData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Splitit
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * splitit-web-api-v3
 *
 * Splitit's Web API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Splitit\Model;

use \ArrayAccess;
use \Splitit\ObjectSerializer;

/**
 * ProcessingData Class Doc Comment
 *
 * @category Class
 * @package  Splitit
 * @implements \ArrayAccess<string, mixed>
 */
class ProcessingData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessingData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attempt_three_d_secured' => 'bool',
        'soft_descriptor' => 'string',
        'three_ds_data' => '\Splitit\Model\ThreeDSData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attempt_three_d_secured' => null,
        'soft_descriptor' => null,
        'three_ds_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attempt_three_d_secured' => false,
		'soft_descriptor' => false,
		'three_ds_data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attempt_three_d_secured' => 'AttemptThreeDSecured',
        'soft_descriptor' => 'SoftDescriptor',
        'three_ds_data' => 'ThreeDSData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attempt_three_d_secured' => 'setAttemptThreeDSecured',
        'soft_descriptor' => 'setSoftDescriptor',
        'three_ds_data' => 'setThreeDsData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attempt_three_d_secured' => 'getAttemptThreeDSecured',
        'soft_descriptor' => 'getSoftDescriptor',
        'three_ds_data' => 'getThreeDsData'
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
        $this->setIfExists('attempt_three_d_secured', $data ?? [], null);
        $this->setIfExists('soft_descriptor', $data ?? [], null);
        $this->setIfExists('three_ds_data', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets attempt_three_d_secured
     *
     * @return bool|null
     */
    public function getAttemptThreeDSecured()
    {
        return $this->container['attempt_three_d_secured'];
    }

    /**
     * Sets attempt_three_d_secured
     *
     * @param bool|null $attempt_three_d_secured attempt_three_d_secured
     *
     * @return self
     */
    public function setAttemptThreeDSecured($attempt_three_d_secured)
    {

        if (is_null($attempt_three_d_secured)) {
            throw new \InvalidArgumentException('non-nullable attempt_three_d_secured cannot be null');
        }

        $this->container['attempt_three_d_secured'] = $attempt_three_d_secured;

        return $this;
    }

    /**
     * Gets soft_descriptor
     *
     * @return string|null
     */
    public function getSoftDescriptor()
    {
        return $this->container['soft_descriptor'];
    }

    /**
     * Sets soft_descriptor
     *
     * @param string|null $soft_descriptor soft_descriptor
     *
     * @return self
     */
    public function setSoftDescriptor($soft_descriptor)
    {

        if (is_null($soft_descriptor)) {
            throw new \InvalidArgumentException('non-nullable soft_descriptor cannot be null');
        }

        $this->container['soft_descriptor'] = $soft_descriptor;

        return $this;
    }

    /**
     * Gets three_ds_data
     *
     * @return \Splitit\Model\ThreeDSData|null
     */
    public function getThreeDsData()
    {
        return $this->container['three_ds_data'];
    }

    /**
     * Sets three_ds_data
     *
     * @param \Splitit\Model\ThreeDSData|null $three_ds_data three_ds_data
     *
     * @return self
     */
    public function setThreeDsData($three_ds_data)
    {

        if (is_null($three_ds_data)) {
            throw new \InvalidArgumentException('non-nullable three_ds_data cannot be null');
        }

        $this->container['three_ds_data'] = $three_ds_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


