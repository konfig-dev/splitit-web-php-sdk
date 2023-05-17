<?php

namespace Splitit;

class Client
{
    public readonly \Splitit\Api\InstallmentPlanApi $installmentPlan;

    /**
     * Constructor
     */
    public function __construct(
        string $tokenUrl = 'https://id.production.splitit.com/connect/token',
        string $clientId = null,
        string $clientSecret = null,
        string $host = 'https://web-api-v3.production.splitit.com',
        \Splitit\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \Splitit\Configuration(
            );
            if ($host !== null) $config->setHost($host);
            if ($tokenUrl !== null) $config->setTokenUrl($tokenUrl);
            if ($clientId !== null) $config->setClientId($clientId);
            if ($clientSecret !== null) $config->setClientSecret($clientSecret);
        }
        $this->installmentPlan = new \Splitit\Api\InstallmentPlanApi($config);
    }
}
