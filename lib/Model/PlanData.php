<?php
/**
 * PlanData
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
 * PlanData Class Doc Comment
 *
 * @category Class
 * @package  Splitit
 * @implements \ArrayAccess<string, mixed>
 */
class PlanData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlanData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_id' => 'string',
        'total_amount' => 'float',
        'first_installment_amount' => 'float',
        'currency' => 'string',
        'number_of_installments' => 'int',
        'purchase_method' => '\Splitit\Model\PurchaseMethod',
        'ref_order_number' => 'string',
        'tags' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terminal_id' => null,
        'total_amount' => 'decimal',
        'first_installment_amount' => 'decimal',
        'currency' => null,
        'number_of_installments' => 'int32',
        'purchase_method' => null,
        'ref_order_number' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'terminal_id' => false,
		'total_amount' => false,
		'first_installment_amount' => false,
		'currency' => false,
		'number_of_installments' => false,
		'purchase_method' => false,
		'ref_order_number' => false,
		'tags' => false
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
        'terminal_id' => 'TerminalId',
        'total_amount' => 'TotalAmount',
        'first_installment_amount' => 'FirstInstallmentAmount',
        'currency' => 'Currency',
        'number_of_installments' => 'NumberOfInstallments',
        'purchase_method' => 'PurchaseMethod',
        'ref_order_number' => 'RefOrderNumber',
        'tags' => 'Tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_id' => 'setTerminalId',
        'total_amount' => 'setTotalAmount',
        'first_installment_amount' => 'setFirstInstallmentAmount',
        'currency' => 'setCurrency',
        'number_of_installments' => 'setNumberOfInstallments',
        'purchase_method' => 'setPurchaseMethod',
        'ref_order_number' => 'setRefOrderNumber',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_id' => 'getTerminalId',
        'total_amount' => 'getTotalAmount',
        'first_installment_amount' => 'getFirstInstallmentAmount',
        'currency' => 'getCurrency',
        'number_of_installments' => 'getNumberOfInstallments',
        'purchase_method' => 'getPurchaseMethod',
        'ref_order_number' => 'getRefOrderNumber',
        'tags' => 'getTags'
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
        $this->setIfExists('terminal_id', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('first_installment_amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('number_of_installments', $data ?? [], null);
        $this->setIfExists('purchase_method', $data ?? [], null);
        $this->setIfExists('ref_order_number', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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

        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['number_of_installments'] === null) {
            $invalidProperties[] = "'number_of_installments' can't be null";
        }
        if ($this->container['purchase_method'] === null) {
            $invalidProperties[] = "'purchase_method' can't be null";
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
     * Gets terminal_id
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string|null $terminal_id terminal_id
     *
     * @return self
     */
    public function setTerminalId($terminal_id)
    {

        if (is_null($terminal_id)) {
            throw new \InvalidArgumentException('non-nullable terminal_id cannot be null');
        }

        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {

        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }

        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets first_installment_amount
     *
     * @return float|null
     */
    public function getFirstInstallmentAmount()
    {
        return $this->container['first_installment_amount'];
    }

    /**
     * Sets first_installment_amount
     *
     * @param float|null $first_installment_amount first_installment_amount
     *
     * @return self
     */
    public function setFirstInstallmentAmount($first_installment_amount)
    {

        if (is_null($first_installment_amount)) {
            throw new \InvalidArgumentException('non-nullable first_installment_amount cannot be null');
        }

        $this->container['first_installment_amount'] = $first_installment_amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets number_of_installments
     *
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     *
     * @param int $number_of_installments number_of_installments
     *
     * @return self
     */
    public function setNumberOfInstallments($number_of_installments)
    {

        if (is_null($number_of_installments)) {
            throw new \InvalidArgumentException('non-nullable number_of_installments cannot be null');
        }

        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets purchase_method
     *
     * @return \Splitit\Model\PurchaseMethod
     */
    public function getPurchaseMethod()
    {
        return $this->container['purchase_method'];
    }

    /**
     * Sets purchase_method
     *
     * @param \Splitit\Model\PurchaseMethod $purchase_method purchase_method
     *
     * @return self
     */
    public function setPurchaseMethod($purchase_method)
    {

        if (is_null($purchase_method)) {
            throw new \InvalidArgumentException('non-nullable purchase_method cannot be null');
        }

        $this->container['purchase_method'] = $purchase_method;

        return $this;
    }

    /**
     * Gets ref_order_number
     *
     * @return string|null
     */
    public function getRefOrderNumber()
    {
        return $this->container['ref_order_number'];
    }

    /**
     * Sets ref_order_number
     *
     * @param string|null $ref_order_number ref_order_number
     *
     * @return self
     */
    public function setRefOrderNumber($ref_order_number)
    {

        if (is_null($ref_order_number)) {
            throw new \InvalidArgumentException('non-nullable ref_order_number cannot be null');
        }

        $this->container['ref_order_number'] = $ref_order_number;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return array<string,string>|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param array<string,string>|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {

        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }

        $this->container['tags'] = $tags;

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


