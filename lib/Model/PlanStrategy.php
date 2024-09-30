<?php
/**
 * PlanStrategy
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
 * PlanStrategy Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Splitit
 */
class PlanStrategy
{
    /**
     * Possible values of this enum
     */
    public const SECURED_PLAN = 'SecuredPlan';

    public const NON_SECURED_PLAN = 'NonSecuredPlan';

    public const SECURED_PLAN_CAPTURE_EXISTING_SECURITY_AUTH = 'SecuredPlanCaptureExistingSecurityAuth';

    public const SECURED_PLAN3 = 'SecuredPlan3';

    public const SINGLE_PAYMENT = 'SinglePayment';

    public const EXTERNAL_INSTALLMENT_PROVIDER = 'ExternalInstallmentProvider';

    public const SECURED_PLAN3_A = 'SecuredPlan3A';

    public const SECURED_PLAN3_B = 'SecuredPlan3B';

    public const SECURED_PLAN2_A = 'SecuredPlan2A';

    public const SECURED_PLAN2 = 'SecuredPlan2';

    public const SECURED_PLAN4 = 'SecuredPlan4';

    public const SECURED_PLAN4_A = 'SecuredPlan4A';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SECURED_PLAN,
            self::NON_SECURED_PLAN,
            self::SECURED_PLAN_CAPTURE_EXISTING_SECURITY_AUTH,
            self::SECURED_PLAN3,
            self::SINGLE_PAYMENT,
            self::EXTERNAL_INSTALLMENT_PROVIDER,
            self::SECURED_PLAN3_A,
            self::SECURED_PLAN3_B,
            self::SECURED_PLAN2_A,
            self::SECURED_PLAN2,
            self::SECURED_PLAN4,
            self::SECURED_PLAN4_A
        ];
    }
}


