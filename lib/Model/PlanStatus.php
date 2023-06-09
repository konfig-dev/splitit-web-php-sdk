<?php
/**
 * PlanStatus
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
 * PlanStatus Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Splitit
 */
class PlanStatus
{
    /**
     * Possible values of this enum
     */
    public const INITIALIZED = 'Initialized';

    public const PENDING_CAPTURE = 'PendingCapture';

    public const ACTIVE = 'Active';

    public const CLEARED = 'Cleared';

    public const CANCELED = 'Canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INITIALIZED,
            self::PENDING_CAPTURE,
            self::ACTIVE,
            self::CLEARED,
            self::CANCELED
        ];
    }
}


