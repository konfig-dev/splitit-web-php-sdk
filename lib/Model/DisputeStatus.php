<?php
/**
 * DisputeStatus
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
use \Splitit\ObjectSerializer;

/**
 * DisputeStatus Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Splitit
 */
class DisputeStatus
{
    /**
     * Possible values of this enum
     */
    public const OPEN = 'Open';

    public const WON = 'Won';

    public const LOST = 'Lost';

    public const CLOSED = 'Closed';

    public const OTHER = 'Other';

    public const PENDING = 'Pending';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
            self::WON,
            self::LOST,
            self::CLOSED,
            self::OTHER,
            self::PENDING
        ];
    }
}


