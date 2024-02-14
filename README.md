# splitit-web-php-sdk [Packagist](https://packagist.org/packages/konfig/splitit-web-php-sdk)

Splitit's Web API


## Installation & Usage

### Requirements

This library requires `PHP ^7.0`

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/konfig-dev/splitit-web-php-sdk.git"
    }
  ],
  "require": {
    "konfig/splitit-web-php-sdk": "2.3.4"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/splitit-web-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$splitit = new \Splitit\Client(
    getenv("SPLITIT_CLIENT_ID"),
    getenv("SPLITIT_CLIENT_SECRET")
);

$installment_plan_number = "installmentPlanNumber_example";
$x_splitit_idempotency_key = "X-Splitit-IdempotencyKey_example";
$x_splitit_touch_point = ""; // TouchPoint

try {
    $result = $splitit->installmentPlan->cancel(
        $installment_plan_number, 
        $x_splitit_idempotency_key, 
        $x_splitit_touch_point
    );
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getInstallmentPlanResponse());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://web-api-v3.production.splitit.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InstallmentPlanApi* | [**cancel**](docs/Api/InstallmentPlanApi.md#cancel) | **POST** /api/installmentplans/{installmentPlanNumber}/cancel | 
*InstallmentPlanApi* | [**checkEligibility**](docs/Api/InstallmentPlanApi.md#checkeligibility) | **POST** /api/installmentplans/check-eligibility | 
*InstallmentPlanApi* | [**get**](docs/Api/InstallmentPlanApi.md#get) | **GET** /api/installmentplans/{installmentPlanNumber} | 
*InstallmentPlanApi* | [**post**](docs/Api/InstallmentPlanApi.md#post) | **POST** /api/installmentplans/initiate | 
*InstallmentPlanApi* | [**post2**](docs/Api/InstallmentPlanApi.md#post2) | **POST** /api/installmentplans | 
*InstallmentPlanApi* | [**refund**](docs/Api/InstallmentPlanApi.md#refund) | **POST** /api/installmentplans/{installmentPlanNumber}/refund | 
*InstallmentPlanApi* | [**search**](docs/Api/InstallmentPlanApi.md#search) | **GET** /api/installmentplans/search | 
*InstallmentPlanApi* | [**updateOrder**](docs/Api/InstallmentPlanApi.md#updateorder) | **PUT** /api/installmentplans/{installmentPlanNumber}/updateorder | 
*InstallmentPlanApi* | [**updateOrder2**](docs/Api/InstallmentPlanApi.md#updateorder2) | **PUT** /api/installmentplans/updateorder | 
*InstallmentPlanApi* | [**verifyAuthorization**](docs/Api/InstallmentPlanApi.md#verifyauthorization) | **GET** /api/installmentplans/{installmentPlanNumber}/verifyauthorization | 

## Models

- [AddressData](docs/Model/AddressData.md)
- [AddressData2](docs/Model/AddressData2.md)
- [AddressData22](docs/Model/AddressData22.md)
- [AddressDataModel](docs/Model/AddressDataModel.md)
- [AuthorizationModel](docs/Model/AuthorizationModel.md)
- [BluesnapVaultedShopperToken](docs/Model/BluesnapVaultedShopperToken.md)
- [CardBrand](docs/Model/CardBrand.md)
- [CardData](docs/Model/CardData.md)
- [CardData2](docs/Model/CardData2.md)
- [CardResult](docs/Model/CardResult.md)
- [CardType](docs/Model/CardType.md)
- [CheckInstallmentsEligibilityRequest](docs/Model/CheckInstallmentsEligibilityRequest.md)
- [ConsumerData](docs/Model/ConsumerData.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyAllOf](docs/Model/CurrencyAllOf.md)
- [DisputeStatus](docs/Model/DisputeStatus.md)
- [Disputes](docs/Model/Disputes.md)
- [Error](docs/Model/Error.md)
- [Error2](docs/Model/Error2.md)
- [ErrorExtended](docs/Model/ErrorExtended.md)
- [ErrorExtendedAllOf](docs/Model/ErrorExtendedAllOf.md)
- [EventsEndpointsModel](docs/Model/EventsEndpointsModel.md)
- [ExternalProviderTypes](docs/Model/ExternalProviderTypes.md)
- [FailedResponse](docs/Model/FailedResponse.md)
- [FraudCheck](docs/Model/FraudCheck.md)
- [GatewayTokenData](docs/Model/GatewayTokenData.md)
- [GwAuthorizationStatus](docs/Model/GwAuthorizationStatus.md)
- [IdentifierContract](docs/Model/IdentifierContract.md)
- [InitiatePlanResponse](docs/Model/InitiatePlanResponse.md)
- [InitiateRedirectionEndpointsModel](docs/Model/InitiateRedirectionEndpointsModel.md)
- [Installment](docs/Model/Installment.md)
- [Installment2](docs/Model/Installment2.md)
- [InstallmentPlan](docs/Model/InstallmentPlan.md)
- [InstallmentPlanCancelResponse](docs/Model/InstallmentPlanCancelResponse.md)
- [InstallmentPlanCreateRequest](docs/Model/InstallmentPlanCreateRequest.md)
- [InstallmentPlanCreateResponse](docs/Model/InstallmentPlanCreateResponse.md)
- [InstallmentPlanGetResponse](docs/Model/InstallmentPlanGetResponse.md)
- [InstallmentPlanInitiateRequest](docs/Model/InstallmentPlanInitiateRequest.md)
- [InstallmentPlanRefundRequest](docs/Model/InstallmentPlanRefundRequest.md)
- [InstallmentPlanRefundResponse](docs/Model/InstallmentPlanRefundResponse.md)
- [InstallmentPlanResponse](docs/Model/InstallmentPlanResponse.md)
- [InstallmentPlanSearchResponse](docs/Model/InstallmentPlanSearchResponse.md)
- [InstallmentPlanUpdateRequest](docs/Model/InstallmentPlanUpdateRequest.md)
- [InstallmentPlanUpdateRequestByIdentifier](docs/Model/InstallmentPlanUpdateRequestByIdentifier.md)
- [InstallmentPlanUpdateRequestByIdentifierAllOf](docs/Model/InstallmentPlanUpdateRequestByIdentifierAllOf.md)
- [InstallmentPlanUpdateResponse](docs/Model/InstallmentPlanUpdateResponse.md)
- [InstallmentStatus](docs/Model/InstallmentStatus.md)
- [InstallmentsEligibilityResponse](docs/Model/InstallmentsEligibilityResponse.md)
- [LinksData](docs/Model/LinksData.md)
- [LinksModel](docs/Model/LinksModel.md)
- [MerchantRef](docs/Model/MerchantRef.md)
- [MerchantRefAllOf](docs/Model/MerchantRefAllOf.md)
- [MockerShopperToken](docs/Model/MockerShopperToken.md)
- [Money](docs/Model/Money.md)
- [MoneyFlows](docs/Model/MoneyFlows.md)
- [PaymentMethodModel](docs/Model/PaymentMethodModel.md)
- [PaymentMethodType](docs/Model/PaymentMethodType.md)
- [PaymentPlanOptionModel](docs/Model/PaymentPlanOptionModel.md)
- [PlanData](docs/Model/PlanData.md)
- [PlanDataModel](docs/Model/PlanDataModel.md)
- [PlanErrorResponse](docs/Model/PlanErrorResponse.md)
- [PlanErrorResponseAllOf](docs/Model/PlanErrorResponseAllOf.md)
- [PlanStatus](docs/Model/PlanStatus.md)
- [ProcessingData](docs/Model/ProcessingData.md)
- [ProcessingData2](docs/Model/ProcessingData2.md)
- [PurchaseMethod](docs/Model/PurchaseMethod.md)
- [ReAuthorization](docs/Model/ReAuthorization.md)
- [RedirectionEndpointsModel](docs/Model/RedirectionEndpointsModel.md)
- [ReferenceEntityBase](docs/Model/ReferenceEntityBase.md)
- [RefundModel](docs/Model/RefundModel.md)
- [RefundStatus](docs/Model/RefundStatus.md)
- [RefundStrategy](docs/Model/RefundStrategy.md)
- [RefundSummary](docs/Model/RefundSummary.md)
- [ResponseHeader](docs/Model/ResponseHeader.md)
- [SearchInstallmentPlanResponseItem](docs/Model/SearchInstallmentPlanResponseItem.md)
- [ShippingStatus](docs/Model/ShippingStatus.md)
- [ShopperData](docs/Model/ShopperData.md)
- [SpreedlyToken](docs/Model/SpreedlyToken.md)
- [TerminalRef](docs/Model/TerminalRef.md)
- [TestModes](docs/Model/TestModes.md)
- [ThreeDSData](docs/Model/ThreeDSData.md)
- [ThreeDSData2](docs/Model/ThreeDSData2.md)
- [ThreeDsRedirectDataV3](docs/Model/ThreeDsRedirectDataV3.md)
- [TransactionResult](docs/Model/TransactionResult.md)
- [User](docs/Model/User.md)
- [UxSettingsModel](docs/Model/UxSettingsModel.md)
- [VerifyAuthorizationResponse](docs/Model/VerifyAuthorizationResponse.md)

## Author

This PHP package is automatically generated by [Konfig](https://konfigthis.com):