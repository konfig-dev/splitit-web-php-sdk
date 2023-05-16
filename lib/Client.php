<?php

namespace Splitit;

class Client
{
    public readonly \Splitit\Api\InstallmentPlanApi $installmentPlan;

    /**
     * Constructor
     */
    public function __construct(
        string $tokenUrl = null,
        string $clientId = null,
        string $clientSecret = null,
        string $host = 'https://web-api-v3.production.splitit.com',
        \Splitit\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \Splitit\Configuration(
            );
            $config->setHost($host);
            $config->setTokenUrl($tokenUrl);
            $config->setClientId($clientId);
            $config->setClientSecret($clientSecret);
        }
        $this->installmentPlan = new \Splitit\Api\InstallmentPlanApi($config);
    }
}
