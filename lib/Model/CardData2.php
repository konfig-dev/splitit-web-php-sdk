<?php
/**
 * CardData2
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
 * CardData2 Class Doc Comment
 *
 * @category Class
 * @package  Splitit
 * @implements \ArrayAccess<string, mixed>
 */
class CardData2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardData2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_id' => 'string',
        'card_number' => 'string',
        'card_exp_month' => 'string',
        'card_exp_year' => 'string',
        'card_brand' => '\Splitit\Model\ReferenceEntityBase',
        'card_type' => '\Splitit\Model\ReferenceEntityBase',
        'bin' => 'string',
        'card_holder_full_name' => 'string',
        'card_cvv' => 'string',
        'address' => '\Splitit\Model\AddressData2',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_id' => null,
        'card_number' => null,
        'card_exp_month' => null,
        'card_exp_year' => null,
        'card_brand' => null,
        'card_type' => null,
        'bin' => null,
        'card_holder_full_name' => null,
        'card_cvv' => null,
        'address' => null,
        'token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'card_id' => false,
		'card_number' => false,
		'card_exp_month' => false,
		'card_exp_year' => false,
		'card_brand' => false,
		'card_type' => false,
		'bin' => false,
		'card_holder_full_name' => false,
		'card_cvv' => false,
		'address' => false,
		'token' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'card_id' => 'CardId',
        'card_number' => 'CardNumber',
        'card_exp_month' => 'CardExpMonth',
        'card_exp_year' => 'CardExpYear',
        'card_brand' => 'CardBrand',
        'card_type' => 'CardType',
        'bin' => 'Bin',
        'card_holder_full_name' => 'CardHolderFullName',
        'card_cvv' => 'CardCvv',
        'address' => 'Address',
        'token' => 'Token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_id' => 'setCardId',
        'card_number' => 'setCardNumber',
        'card_exp_month' => 'setCardExpMonth',
        'card_exp_year' => 'setCardExpYear',
        'card_brand' => 'setCardBrand',
        'card_type' => 'setCardType',
        'bin' => 'setBin',
        'card_holder_full_name' => 'setCardHolderFullName',
        'card_cvv' => 'setCardCvv',
        'address' => 'setAddress',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_id' => 'getCardId',
        'card_number' => 'getCardNumber',
        'card_exp_month' => 'getCardExpMonth',
        'card_exp_year' => 'getCardExpYear',
        'card_brand' => 'getCardBrand',
        'card_type' => 'getCardType',
        'bin' => 'getBin',
        'card_holder_full_name' => 'getCardHolderFullName',
        'card_cvv' => 'getCardCvv',
        'address' => 'getAddress',
        'token' => 'getToken'
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
        $this->setIfExists('card_id', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('card_exp_month', $data ?? [], null);
        $this->setIfExists('card_exp_year', $data ?? [], null);
        $this->setIfExists('card_brand', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('card_holder_full_name', $data ?? [], null);
        $this->setIfExists('card_cvv', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
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
     * Gets card_id
     *
     * @return string|null
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string|null $card_id card_id
     *
     * @return self
     */
    public function setCardId($card_id)
    {

        if (is_null($card_id)) {
            throw new \InvalidArgumentException('non-nullable card_id cannot be null');
        }

        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number card_number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {

        if (is_null($card_number)) {
            throw new \InvalidArgumentException('non-nullable card_number cannot be null');
        }

        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_exp_month
     *
     * @return string|null
     */
    public function getCardExpMonth()
    {
        return $this->container['card_exp_month'];
    }

    /**
     * Sets card_exp_month
     *
     * @param string|null $card_exp_month card_exp_month
     *
     * @return self
     */
    public function setCardExpMonth($card_exp_month)
    {

        if (is_null($card_exp_month)) {
            throw new \InvalidArgumentException('non-nullable card_exp_month cannot be null');
        }

        $this->container['card_exp_month'] = $card_exp_month;

        return $this;
    }

    /**
     * Gets card_exp_year
     *
     * @return string|null
     */
    public function getCardExpYear()
    {
        return $this->container['card_exp_year'];
    }

    /**
     * Sets card_exp_year
     *
     * @param string|null $card_exp_year card_exp_year
     *
     * @return self
     */
    public function setCardExpYear($card_exp_year)
    {

        if (is_null($card_exp_year)) {
            throw new \InvalidArgumentException('non-nullable card_exp_year cannot be null');
        }

        $this->container['card_exp_year'] = $card_exp_year;

        return $this;
    }

    /**
     * Gets card_brand
     *
     * @return \Splitit\Model\ReferenceEntityBase|null
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     *
     * @param \Splitit\Model\ReferenceEntityBase|null $card_brand card_brand
     *
     * @return self
     */
    public function setCardBrand($card_brand)
    {

        if (is_null($card_brand)) {
            throw new \InvalidArgumentException('non-nullable card_brand cannot be null');
        }

        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return \Splitit\Model\ReferenceEntityBase|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param \Splitit\Model\ReferenceEntityBase|null $card_type card_type
     *
     * @return self
     */
    public function setCardType($card_type)
    {

        if (is_null($card_type)) {
            throw new \InvalidArgumentException('non-nullable card_type cannot be null');
        }

        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin bin
     *
     * @return self
     */
    public function setBin($bin)
    {

        if (is_null($bin)) {
            throw new \InvalidArgumentException('non-nullable bin cannot be null');
        }

        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets card_holder_full_name
     *
     * @return string|null
     */
    public function getCardHolderFullName()
    {
        return $this->container['card_holder_full_name'];
    }

    /**
     * Sets card_holder_full_name
     *
     * @param string|null $card_holder_full_name card_holder_full_name
     *
     * @return self
     */
    public function setCardHolderFullName($card_holder_full_name)
    {

        if (is_null($card_holder_full_name)) {
            throw new \InvalidArgumentException('non-nullable card_holder_full_name cannot be null');
        }

        $this->container['card_holder_full_name'] = $card_holder_full_name;

        return $this;
    }

    /**
     * Gets card_cvv
     *
     * @return string|null
     */
    public function getCardCvv()
    {
        return $this->container['card_cvv'];
    }

    /**
     * Sets card_cvv
     *
     * @param string|null $card_cvv card_cvv
     *
     * @return self
     */
    public function setCardCvv($card_cvv)
    {

        if (is_null($card_cvv)) {
            throw new \InvalidArgumentException('non-nullable card_cvv cannot be null');
        }

        $this->container['card_cvv'] = $card_cvv;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Splitit\Model\AddressData2|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Splitit\Model\AddressData2|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {

        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }

        $this->container['token'] = $token;

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

