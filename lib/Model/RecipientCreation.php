<?php
/**
 * RecipientCreation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Maileva\Client
 * @author   Maileva Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Maileva / Envoi et Suivi de Lettres Recommandées En Ligne distribuées par le facteur
 *
 * API pour envoyer et suivre des Lettres Recommandées En Ligne distribuées par le facteur  Elles comprennent les fonctions clés pour :   - créer un envoi,  - ajouter des documents et des destinataires,  - choisir ses options (noir & blanc ou couleur, recto ou recto-verso, avec ou sans AR …).  - suivre la production (date de planification, suivi de l’envoi…).  Voir la documentation \"notification_center\".
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Maileva Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maileva\Client\Model;

use \ArrayAccess;
use \Maileva\Client\ObjectSerializer;

/**
 * RecipientCreation Class Doc Comment
 *
 * @category Class
 * @package  Maileva\Client
 * @author   Maileva Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecipientCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipient_creation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_id' => 'string',
'address_line_1' => 'string',
'address_line_2' => 'string',
'address_line_3' => 'string',
'address_line_4' => 'string',
'address_line_5' => 'string',
'address_line_6' => 'string',
'country_code' => '\Maileva\Client\Model\CountryCode',
'pages_range' => '\Maileva\Client\Model\PagesRange'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_id' => null,
'address_line_1' => null,
'address_line_2' => null,
'address_line_3' => null,
'address_line_4' => null,
'address_line_5' => null,
'address_line_6' => null,
'country_code' => null,
'pages_range' => null    ];

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
        'custom_id' => 'custom_id',
'address_line_1' => 'address_line_1',
'address_line_2' => 'address_line_2',
'address_line_3' => 'address_line_3',
'address_line_4' => 'address_line_4',
'address_line_5' => 'address_line_5',
'address_line_6' => 'address_line_6',
'country_code' => 'country_code',
'pages_range' => 'pages_range'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_id' => 'setCustomId',
'address_line_1' => 'setAddressLine1',
'address_line_2' => 'setAddressLine2',
'address_line_3' => 'setAddressLine3',
'address_line_4' => 'setAddressLine4',
'address_line_5' => 'setAddressLine5',
'address_line_6' => 'setAddressLine6',
'country_code' => 'setCountryCode',
'pages_range' => 'setPagesRange'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_id' => 'getCustomId',
'address_line_1' => 'getAddressLine1',
'address_line_2' => 'getAddressLine2',
'address_line_3' => 'getAddressLine3',
'address_line_4' => 'getAddressLine4',
'address_line_5' => 'getAddressLine5',
'address_line_6' => 'getAddressLine6',
'country_code' => 'getCountryCode',
'pages_range' => 'getPagesRange'    ];

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
        $this->container['custom_id'] = isset($data['custom_id']) ? $data['custom_id'] : null;
        $this->container['address_line_1'] = isset($data['address_line_1']) ? $data['address_line_1'] : null;
        $this->container['address_line_2'] = isset($data['address_line_2']) ? $data['address_line_2'] : null;
        $this->container['address_line_3'] = isset($data['address_line_3']) ? $data['address_line_3'] : null;
        $this->container['address_line_4'] = isset($data['address_line_4']) ? $data['address_line_4'] : null;
        $this->container['address_line_5'] = isset($data['address_line_5']) ? $data['address_line_5'] : null;
        $this->container['address_line_6'] = isset($data['address_line_6']) ? $data['address_line_6'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['pages_range'] = isset($data['pages_range']) ? $data['pages_range'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_line_6'] === null) {
            $invalidProperties[] = "'address_line_6' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
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
     * Gets custom_id
     *
     * @return string
     */
    public function getCustomId()
    {
        return $this->container['custom_id'];
    }

    /**
     * Sets custom_id
     *
     * @param string $custom_id Identifiant du destinataire fourni par le client
     *
     * @return $this
     */
    public function setCustomId($custom_id)
    {
        $this->container['custom_id'] = $custom_id;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string $address_line_1 Ligne d'adresse n°1 (Société)
     *
     * @return $this
     */
    public function setAddressLine1($address_line_1)
    {
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string $address_line_2 Ligne d'adresse n°2 (Civilité, Prénom, Nom)
     *
     * @return $this
     */
    public function setAddressLine2($address_line_2)
    {
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_line_3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['address_line_3'];
    }

    /**
     * Sets address_line_3
     *
     * @param string $address_line_3 Ligne d'adresse n°3 (Résidence, Bâtiement ...)
     *
     * @return $this
     */
    public function setAddressLine3($address_line_3)
    {
        $this->container['address_line_3'] = $address_line_3;

        return $this;
    }

    /**
     * Gets address_line_4
     *
     * @return string
     */
    public function getAddressLine4()
    {
        return $this->container['address_line_4'];
    }

    /**
     * Sets address_line_4
     *
     * @param string $address_line_4 Ligne d'adresse n°4 (N° et libellé de la voie)
     *
     * @return $this
     */
    public function setAddressLine4($address_line_4)
    {
        $this->container['address_line_4'] = $address_line_4;

        return $this;
    }

    /**
     * Gets address_line_5
     *
     * @return string
     */
    public function getAddressLine5()
    {
        return $this->container['address_line_5'];
    }

    /**
     * Sets address_line_5
     *
     * @param string $address_line_5 Ligne d'adresse n°5 (Lieu dit, BP...)
     *
     * @return $this
     */
    public function setAddressLine5($address_line_5)
    {
        $this->container['address_line_5'] = $address_line_5;

        return $this;
    }

    /**
     * Gets address_line_6
     *
     * @return string
     */
    public function getAddressLine6()
    {
        return $this->container['address_line_6'];
    }

    /**
     * Sets address_line_6
     *
     * @param string $address_line_6 Ligne d'adresse n°6 (Code postal et ville)
     *
     * @return $this
     */
    public function setAddressLine6($address_line_6)
    {
        $this->container['address_line_6'] = $address_line_6;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return \Maileva\Client\Model\CountryCode
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param \Maileva\Client\Model\CountryCode $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets pages_range
     *
     * @return \Maileva\Client\Model\PagesRange
     */
    public function getPagesRange()
    {
        return $this->container['pages_range'];
    }

    /**
     * Sets pages_range
     *
     * @param \Maileva\Client\Model\PagesRange $pages_range pages_range
     *
     * @return $this
     */
    public function setPagesRange($pages_range)
    {
        $this->container['pages_range'] = $pages_range;

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
