<?php
/**
 * SendingCreation
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
 * SendingCreation Class Doc Comment
 *
 * @category Class
 * @description un envoi
 * @package  Maileva\Client
 * @author   Maileva Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendingCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sending_creation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'custom_id' => 'string',
'custom_data' => 'string',
'acknowledgement_of_receipt' => 'bool',
'acknowledgement_of_receipt_scanning' => 'bool',
'color_printing' => 'bool',
'duplex_printing' => 'bool',
'optional_address_sheet' => 'bool',
'notification_email' => 'string',
'sender_address_line_1' => 'string',
'sender_address_line_2' => 'string',
'sender_address_line_3' => 'string',
'sender_address_line_4' => 'string',
'sender_address_line_5' => 'string',
'sender_address_line_6' => 'string',
'sender_country_code' => '\Maileva\Client\Model\CountryCode',
'archiving_duration' => 'int',
'return_envelope_reference' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'custom_id' => null,
'custom_data' => null,
'acknowledgement_of_receipt' => null,
'acknowledgement_of_receipt_scanning' => null,
'color_printing' => null,
'duplex_printing' => null,
'optional_address_sheet' => null,
'notification_email' => null,
'sender_address_line_1' => null,
'sender_address_line_2' => null,
'sender_address_line_3' => null,
'sender_address_line_4' => null,
'sender_address_line_5' => null,
'sender_address_line_6' => null,
'sender_country_code' => null,
'archiving_duration' => null,
'return_envelope_reference' => null    ];

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
        'name' => 'name',
'custom_id' => 'custom_id',
'custom_data' => 'custom_data',
'acknowledgement_of_receipt' => 'acknowledgement_of_receipt',
'acknowledgement_of_receipt_scanning' => 'acknowledgement_of_receipt_scanning',
'color_printing' => 'color_printing',
'duplex_printing' => 'duplex_printing',
'optional_address_sheet' => 'optional_address_sheet',
'notification_email' => 'notification_email',
'sender_address_line_1' => 'sender_address_line_1',
'sender_address_line_2' => 'sender_address_line_2',
'sender_address_line_3' => 'sender_address_line_3',
'sender_address_line_4' => 'sender_address_line_4',
'sender_address_line_5' => 'sender_address_line_5',
'sender_address_line_6' => 'sender_address_line_6',
'sender_country_code' => 'sender_country_code',
'archiving_duration' => 'archiving_duration',
'return_envelope_reference' => 'return_envelope_reference'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'custom_id' => 'setCustomId',
'custom_data' => 'setCustomData',
'acknowledgement_of_receipt' => 'setAcknowledgementOfReceipt',
'acknowledgement_of_receipt_scanning' => 'setAcknowledgementOfReceiptScanning',
'color_printing' => 'setColorPrinting',
'duplex_printing' => 'setDuplexPrinting',
'optional_address_sheet' => 'setOptionalAddressSheet',
'notification_email' => 'setNotificationEmail',
'sender_address_line_1' => 'setSenderAddressLine1',
'sender_address_line_2' => 'setSenderAddressLine2',
'sender_address_line_3' => 'setSenderAddressLine3',
'sender_address_line_4' => 'setSenderAddressLine4',
'sender_address_line_5' => 'setSenderAddressLine5',
'sender_address_line_6' => 'setSenderAddressLine6',
'sender_country_code' => 'setSenderCountryCode',
'archiving_duration' => 'setArchivingDuration',
'return_envelope_reference' => 'setReturnEnvelopeReference'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'custom_id' => 'getCustomId',
'custom_data' => 'getCustomData',
'acknowledgement_of_receipt' => 'getAcknowledgementOfReceipt',
'acknowledgement_of_receipt_scanning' => 'getAcknowledgementOfReceiptScanning',
'color_printing' => 'getColorPrinting',
'duplex_printing' => 'getDuplexPrinting',
'optional_address_sheet' => 'getOptionalAddressSheet',
'notification_email' => 'getNotificationEmail',
'sender_address_line_1' => 'getSenderAddressLine1',
'sender_address_line_2' => 'getSenderAddressLine2',
'sender_address_line_3' => 'getSenderAddressLine3',
'sender_address_line_4' => 'getSenderAddressLine4',
'sender_address_line_5' => 'getSenderAddressLine5',
'sender_address_line_6' => 'getSenderAddressLine6',
'sender_country_code' => 'getSenderCountryCode',
'archiving_duration' => 'getArchivingDuration',
'return_envelope_reference' => 'getReturnEnvelopeReference'    ];

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

    const ARCHIVING_DURATION_3 = 3;
const ARCHIVING_DURATION_6 = 6;
const ARCHIVING_DURATION_10 = 10;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArchivingDurationAllowableValues()
    {
        return [
            self::ARCHIVING_DURATION_3,
self::ARCHIVING_DURATION_6,
self::ARCHIVING_DURATION_10,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['custom_id'] = isset($data['custom_id']) ? $data['custom_id'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
        $this->container['acknowledgement_of_receipt'] = isset($data['acknowledgement_of_receipt']) ? $data['acknowledgement_of_receipt'] : true;
        $this->container['acknowledgement_of_receipt_scanning'] = isset($data['acknowledgement_of_receipt_scanning']) ? $data['acknowledgement_of_receipt_scanning'] : false;
        $this->container['color_printing'] = isset($data['color_printing']) ? $data['color_printing'] : true;
        $this->container['duplex_printing'] = isset($data['duplex_printing']) ? $data['duplex_printing'] : false;
        $this->container['optional_address_sheet'] = isset($data['optional_address_sheet']) ? $data['optional_address_sheet'] : false;
        $this->container['notification_email'] = isset($data['notification_email']) ? $data['notification_email'] : null;
        $this->container['sender_address_line_1'] = isset($data['sender_address_line_1']) ? $data['sender_address_line_1'] : null;
        $this->container['sender_address_line_2'] = isset($data['sender_address_line_2']) ? $data['sender_address_line_2'] : null;
        $this->container['sender_address_line_3'] = isset($data['sender_address_line_3']) ? $data['sender_address_line_3'] : null;
        $this->container['sender_address_line_4'] = isset($data['sender_address_line_4']) ? $data['sender_address_line_4'] : null;
        $this->container['sender_address_line_5'] = isset($data['sender_address_line_5']) ? $data['sender_address_line_5'] : null;
        $this->container['sender_address_line_6'] = isset($data['sender_address_line_6']) ? $data['sender_address_line_6'] : null;
        $this->container['sender_country_code'] = isset($data['sender_country_code']) ? $data['sender_country_code'] : null;
        $this->container['archiving_duration'] = isset($data['archiving_duration']) ? $data['archiving_duration'] : 3;
        $this->container['return_envelope_reference'] = isset($data['return_envelope_reference']) ? $data['return_envelope_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['notification_email'] === null) {
            $invalidProperties[] = "'notification_email' can't be null";
        }
        $allowedValues = $this->getArchivingDurationAllowableValues();
        if (!is_null($this->container['archiving_duration']) && !in_array($this->container['archiving_duration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'archiving_duration', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Nom de l'envoi
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
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
     * @param string $custom_id Identifiant de l'envoi défini par le client
     *
     * @return $this
     */
    public function setCustomId($custom_id)
    {
        $this->container['custom_id'] = $custom_id;

        return $this;
    }

    /**
     * Gets custom_data
     *
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param string $custom_data Information libre fournie par le client
     *
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets acknowledgement_of_receipt
     *
     * @return bool
     */
    public function getAcknowledgementOfReceipt()
    {
        return $this->container['acknowledgement_of_receipt'];
    }

    /**
     * Sets acknowledgement_of_receipt
     *
     * @param bool $acknowledgement_of_receipt Avis de réception (AR)
     *
     * @return $this
     */
    public function setAcknowledgementOfReceipt($acknowledgement_of_receipt)
    {
        $this->container['acknowledgement_of_receipt'] = $acknowledgement_of_receipt;

        return $this;
    }

    /**
     * Gets acknowledgement_of_receipt_scanning
     *
     * @return bool
     */
    public function getAcknowledgementOfReceiptScanning()
    {
        return $this->container['acknowledgement_of_receipt_scanning'];
    }

    /**
     * Sets acknowledgement_of_receipt_scanning
     *
     * @param bool $acknowledgement_of_receipt_scanning Gestion électronique des avis de réception (AR). Cette option indique que Maileva doit recevoir, numériser, mettre en ligne l’image et archiver physiquement les Avis de Réception. Pour cela, la première ligne de l’adresse de l’expéditeur sera conservée, mais les 5 autres lignes et le pays seront remplacés par l’adresse de Maileva. Cette option nécessite que l’option avis de réception soit activée.
     *
     * @return $this
     */
    public function setAcknowledgementOfReceiptScanning($acknowledgement_of_receipt_scanning)
    {
        $this->container['acknowledgement_of_receipt_scanning'] = $acknowledgement_of_receipt_scanning;

        return $this;
    }

    /**
     * Gets color_printing
     *
     * @return bool
     */
    public function getColorPrinting()
    {
        return $this->container['color_printing'];
    }

    /**
     * Sets color_printing
     *
     * @param bool $color_printing Impression couleur
     *
     * @return $this
     */
    public function setColorPrinting($color_printing)
    {
        $this->container['color_printing'] = $color_printing;

        return $this;
    }

    /**
     * Gets duplex_printing
     *
     * @return bool
     */
    public function getDuplexPrinting()
    {
        return $this->container['duplex_printing'];
    }

    /**
     * Sets duplex_printing
     *
     * @param bool $duplex_printing Impression recto verso
     *
     * @return $this
     */
    public function setDuplexPrinting($duplex_printing)
    {
        $this->container['duplex_printing'] = $duplex_printing;

        return $this;
    }

    /**
     * Gets optional_address_sheet
     *
     * @return bool
     */
    public function getOptionalAddressSheet()
    {
        return $this->container['optional_address_sheet'];
    }

    /**
     * Sets optional_address_sheet
     *
     * @param bool $optional_address_sheet Feuille porte adresse optionnelle
     *
     * @return $this
     */
    public function setOptionalAddressSheet($optional_address_sheet)
    {
        $this->container['optional_address_sheet'] = $optional_address_sheet;

        return $this;
    }

    /**
     * Gets notification_email
     *
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->container['notification_email'];
    }

    /**
     * Sets notification_email
     *
     * @param string $notification_email E-mail du destinataire des notifications
     *
     * @return $this
     */
    public function setNotificationEmail($notification_email)
    {
        $this->container['notification_email'] = $notification_email;

        return $this;
    }

    /**
     * Gets sender_address_line_1
     *
     * @return string
     */
    public function getSenderAddressLine1()
    {
        return $this->container['sender_address_line_1'];
    }

    /**
     * Sets sender_address_line_1
     *
     * @param string $sender_address_line_1 Ligne d'adresse n°1 (Société) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine1($sender_address_line_1)
    {
        $this->container['sender_address_line_1'] = $sender_address_line_1;

        return $this;
    }

    /**
     * Gets sender_address_line_2
     *
     * @return string
     */
    public function getSenderAddressLine2()
    {
        return $this->container['sender_address_line_2'];
    }

    /**
     * Sets sender_address_line_2
     *
     * @param string $sender_address_line_2 Ligne d'adresse n°2 (Civilité, Prénom, Nom) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine2($sender_address_line_2)
    {
        $this->container['sender_address_line_2'] = $sender_address_line_2;

        return $this;
    }

    /**
     * Gets sender_address_line_3
     *
     * @return string
     */
    public function getSenderAddressLine3()
    {
        return $this->container['sender_address_line_3'];
    }

    /**
     * Sets sender_address_line_3
     *
     * @param string $sender_address_line_3 Ligne d'adresse n°3 (Résidence, Bâtiement ...) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine3($sender_address_line_3)
    {
        $this->container['sender_address_line_3'] = $sender_address_line_3;

        return $this;
    }

    /**
     * Gets sender_address_line_4
     *
     * @return string
     */
    public function getSenderAddressLine4()
    {
        return $this->container['sender_address_line_4'];
    }

    /**
     * Sets sender_address_line_4
     *
     * @param string $sender_address_line_4 Ligne d'adresse n°4 (N° et libellé de la voie) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine4($sender_address_line_4)
    {
        $this->container['sender_address_line_4'] = $sender_address_line_4;

        return $this;
    }

    /**
     * Gets sender_address_line_5
     *
     * @return string
     */
    public function getSenderAddressLine5()
    {
        return $this->container['sender_address_line_5'];
    }

    /**
     * Sets sender_address_line_5
     *
     * @param string $sender_address_line_5 Ligne d'adresse n°5 (Lieu dit, BP...) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine5($sender_address_line_5)
    {
        $this->container['sender_address_line_5'] = $sender_address_line_5;

        return $this;
    }

    /**
     * Gets sender_address_line_6
     *
     * @return string
     */
    public function getSenderAddressLine6()
    {
        return $this->container['sender_address_line_6'];
    }

    /**
     * Sets sender_address_line_6
     *
     * @param string $sender_address_line_6 Ligne d'adresse n°6 (Code postal et ville) de l'expéditeur
     *
     * @return $this
     */
    public function setSenderAddressLine6($sender_address_line_6)
    {
        $this->container['sender_address_line_6'] = $sender_address_line_6;

        return $this;
    }

    /**
     * Gets sender_country_code
     *
     * @return \Maileva\Client\Model\CountryCode
     */
    public function getSenderCountryCode()
    {
        return $this->container['sender_country_code'];
    }

    /**
     * Sets sender_country_code
     *
     * @param \Maileva\Client\Model\CountryCode $sender_country_code sender_country_code
     *
     * @return $this
     */
    public function setSenderCountryCode($sender_country_code)
    {
        $this->container['sender_country_code'] = $sender_country_code;

        return $this;
    }

    /**
     * Gets archiving_duration
     *
     * @return int
     */
    public function getArchivingDuration()
    {
        return $this->container['archiving_duration'];
    }

    /**
     * Sets archiving_duration
     *
     * @param int $archiving_duration Durée d'archivage en années
     *
     * @return $this
     */
    public function setArchivingDuration($archiving_duration)
    {
        $allowedValues = $this->getArchivingDurationAllowableValues();
        if (!is_null($archiving_duration) && !in_array($archiving_duration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'archiving_duration', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['archiving_duration'] = $archiving_duration;

        return $this;
    }

    /**
     * Gets return_envelope_reference
     *
     * @return string
     */
    public function getReturnEnvelopeReference()
    {
        return $this->container['return_envelope_reference'];
    }

    /**
     * Sets return_envelope_reference
     *
     * @param string $return_envelope_reference Référence de l’enveloppe retour. Si l'enveloppe retour est une enveloppe T (postréponse) et si un destinataire n'est pas en France métropolitaine ou dans un DOM, alors le pli partira sans enveloppe T. Cette option ajoute un délai d'un jour de production supplémentaire
     *
     * @return $this
     */
    public function setReturnEnvelopeReference($return_envelope_reference)
    {
        $this->container['return_envelope_reference'] = $return_envelope_reference;

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
