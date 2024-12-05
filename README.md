# splitit-web-php-sdk<a id="splitit-web-php-sdk"></a>

Splitit's Web API

[![Packagist](https://img.shields.io/badge/Packagist-v3.0.9-blue)](https://packagist.org/packages/konfig/splitit-web-php-sdk)

## Table of Contents<a id="table-of-contents"></a>

<!-- toc -->

- [Installation & Usage](#installation--usage)
  * [Requirements](#requirements)
  * [Composer](#composer)
  * [Manual Installation](#manual-installation)
- [Getting Started](#getting-started)
- [Reference](#reference)
  * [`splitit.installmentPlan.checkEligibility`](#splititinstallmentplancheckeligibility)
  * [`splitit.installmentPlan.get`](#splititinstallmentplanget)
  * [`splitit.installmentPlan.getEligibilityTermsAndCondition`](#splititinstallmentplangeteligibilitytermsandcondition)
  * [`splitit.installmentPlan.post`](#splititinstallmentplanpost)
  * [`splitit.installmentPlan.post2`](#splititinstallmentplanpost2)
  * [`splitit.installmentPlan.refund`](#splititinstallmentplanrefund)
  * [`splitit.installmentPlan.search`](#splititinstallmentplansearch)
  * [`splitit.installmentPlan.updateOrder`](#splititinstallmentplanupdateorder)
  * [`splitit.installmentPlan.updateOrder2`](#splititinstallmentplanupdateorder2)
  * [`splitit.installmentPlan.verifyAuthorization`](#splititinstallmentplanverifyauthorization)

<!-- tocstop -->

## Installation & Usage<a id="installation--usage"></a>

### Requirements<a id="requirements"></a>

This library requires `PHP ^7.0`

### Composer<a id="composer"></a>

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
    "konfig/splitit-web-php-sdk": "3.0.9"
  }
}
```

Then run `composer install`

### Manual Installation<a id="manual-installation"></a>

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/splitit-web-php-sdk/vendor/autoload.php');
```

## Getting Started<a id="getting-started"></a>

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$splitit = new \Splitit\Client(
    getenv("SPLITIT_CLIENT_ID"),
    getenv("SPLITIT_CLIENT_SECRET")
);

$result = $splitit->installmentPlan->checkEligibility(
    "X-Splitit-IdempotencyKey_example", 
    "", 
    [
        "total_amount" => 3.14,
        "number_of_installments" => 1,
        "purchase_method" => "InStore",
        "strategy" => "SecuredPlan",
    ], 
    [
        "card_brand" => "Mastercard",
        "card_type" => "Credit",
    ], 
    [
    ], 
    "string_example"
);
```
## Reference<a id="reference"></a>


### `splitit.installmentPlan.checkEligibility`<a id="splititinstallmentplancheckeligibility"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->checkEligibility(
    "X-Splitit-IdempotencyKey_example", 
    "", 
    [
        "total_amount" => 3.14,
        "number_of_installments" => 1,
        "purchase_method" => "InStore",
        "strategy" => "SecuredPlan",
    ], 
    [
        "card_brand" => "Mastercard",
        "card_type" => "Credit",
    ], 
    [
    ], 
    "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### PlanData: [`PlanData`](./lib/Model/PlanData.php)<a id="plandata-plandatalibmodelplandataphp"></a>

##### CardDetails: [`CardData`](./lib/Model/CardData.php)<a id="carddetails-carddatalibmodelcarddataphp"></a>

##### BillingAddress: [`AddressData`](./lib/Model/AddressData.php)<a id="billingaddress-addressdatalibmodeladdressdataphp"></a>

##### ShopperIdentifier: `string`<a id="shopperidentifier-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentsEligibilityResponse**](./lib/Model/InstallmentsEligibilityResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/check-eligibility` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.get`<a id="splititinstallmentplanget"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->get(
    "installmentPlanNumber_example", 
    "X-Splitit-IdempotencyKey_example", 
    ""
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### installment_plan_number: `string`<a id="installment_plan_number-string"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanGetResponse**](./lib/Model/InstallmentPlanGetResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/{installmentPlanNumber}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.getEligibilityTermsAndCondition`<a id="splititinstallmentplangeteligibilitytermsandcondition"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->getEligibilityTermsAndCondition(
    "ipn_example", 
    "X-Splitit-IdempotencyKey_example", 
    ""
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### ipn: `string`<a id="ipn-string"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint


#### 🔄 Return<a id="🔄-return"></a>

[**EligibilityTermsAndConditionResponse**](./lib/Model/EligibilityTermsAndConditionResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/{ipn}/legal` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.post`<a id="splititinstallmentplanpost"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->post(
    "X-Splitit-IdempotencyKey_example", 
    "", 
    True, 
    True, 
    [
    ], 
    [
        "total_amount" => 3.14,
        "purchase_method" => "InStore",
    ], 
    [
    ], 
    [
    ], 
    [
    ], 
    [
    ], 
    [
    ], 
    "None", 
    "SecuredPlan", 
    "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### AutoCapture: `bool`<a id="autocapture-bool"></a>

##### Attempt3dSecure: `bool`<a id="attempt3dsecure-bool"></a>

##### Shopper: [`ShopperData`](./lib/Model/ShopperData.php)<a id="shopper-shopperdatalibmodelshopperdataphp"></a>

##### PlanData: [`PlanDataModel`](./lib/Model/PlanDataModel.php)<a id="plandata-plandatamodellibmodelplandatamodelphp"></a>

##### BillingAddress: [`AddressDataModel`](./lib/Model/AddressDataModel.php)<a id="billingaddress-addressdatamodellibmodeladdressdatamodelphp"></a>

##### RedirectUrls: [`InitiateRedirectionEndpointsModel`](./lib/Model/InitiateRedirectionEndpointsModel.php)<a id="redirecturls-initiateredirectionendpointsmodellibmodelinitiateredirectionendpointsmodelphp"></a>

##### UxSettings: [`UxSettingsModel`](./lib/Model/UxSettingsModel.php)<a id="uxsettings-uxsettingsmodellibmodeluxsettingsmodelphp"></a>

##### EventsEndpoints: [`EventsEndpointsModel`](./lib/Model/EventsEndpointsModel.php)<a id="eventsendpoints-eventsendpointsmodellibmodeleventsendpointsmodelphp"></a>

##### ProcessingData: [`ProcessingData`](./lib/Model/ProcessingData.php)<a id="processingdata-processingdatalibmodelprocessingdataphp"></a>

##### x_splitit_test_mode: `string`<a id="x_splitit_test_mode-string"></a>

##### x_splitit_strategy: `string`<a id="x_splitit_strategy-string"></a>

##### splititclientinfo: `string`<a id="splititclientinfo-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InitiatePlanResponse**](./lib/Model/InitiatePlanResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/initiate` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.post2`<a id="splititinstallmentplanpost2"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->post2(
    True, 
    True, 
    "X-Splitit-IdempotencyKey_example", 
    "", 
    True, 
    [
    ], 
    [
        "total_amount" => 3.14,
        "purchase_method" => "InStore",
    ], 
    [
    ], 
    [
        "type" => "Card",
    ], 
    [
    ], 
    [
    ], 
    [
    ], 
    "None", 
    "SecuredPlan", 
    "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### AutoCapture: `bool`<a id="autocapture-bool"></a>

##### TermsAndConditionsAccepted: `bool`<a id="termsandconditionsaccepted-bool"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### Attempt3dSecure: `bool`<a id="attempt3dsecure-bool"></a>

##### Shopper: [`ShopperData`](./lib/Model/ShopperData.php)<a id="shopper-shopperdatalibmodelshopperdataphp"></a>

##### PlanData: [`PlanDataModel`](./lib/Model/PlanDataModel.php)<a id="plandata-plandatamodellibmodelplandatamodelphp"></a>

##### BillingAddress: [`AddressDataModel`](./lib/Model/AddressDataModel.php)<a id="billingaddress-addressdatamodellibmodeladdressdatamodelphp"></a>

##### PaymentMethod: [`PaymentMethodModel`](./lib/Model/PaymentMethodModel.php)<a id="paymentmethod-paymentmethodmodellibmodelpaymentmethodmodelphp"></a>

##### RedirectUrls: [`RedirectionEndpointsModel`](./lib/Model/RedirectionEndpointsModel.php)<a id="redirecturls-redirectionendpointsmodellibmodelredirectionendpointsmodelphp"></a>

##### ProcessingData: [`ProcessingData`](./lib/Model/ProcessingData.php)<a id="processingdata-processingdatalibmodelprocessingdataphp"></a>

##### EventsEndpoints: [`EventsEndpointsModel`](./lib/Model/EventsEndpointsModel.php)<a id="eventsendpoints-eventsendpointsmodellibmodeleventsendpointsmodelphp"></a>

##### x_splitit_test_mode: `string`<a id="x_splitit_test_mode-string"></a>

##### x_splitit_strategy: `string`<a id="x_splitit_strategy-string"></a>

##### splititclientinfo: `string`<a id="splititclientinfo-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanCreateResponse**](./lib/Model/InstallmentPlanCreateResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.refund`<a id="splititinstallmentplanrefund"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->refund(
    3.14, 
    "installmentPlanNumber_example", 
    "X-Splitit-IdempotencyKey_example", 
    "", 
    "FutureInstallmentsFirst", 
    "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### Amount: `float`<a id="amount-float"></a>

##### installment_plan_number: `string`<a id="installment_plan_number-string"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### RefundStrategy:<a id="refundstrategy"></a>

##### ReferenceId: `string`<a id="referenceid-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanRefundResponse**](./lib/Model/InstallmentPlanRefundResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/{installmentPlanNumber}/refund` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.search`<a id="splititinstallmentplansearch"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->search(
    "X-Splitit-IdempotencyKey_example", 
    "", 
    "string_example", 
    "string_example", 
    [
        "key": "string_example",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### installment_plan_number: `string`<a id="installment_plan_number-string"></a>

##### ref_order_number: `string`<a id="ref_order_number-string"></a>

##### extended_params: array<string, `string`><a id="extended_params-array"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanSearchResponse**](./lib/Model/InstallmentPlanSearchResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/search` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.updateOrder`<a id="splititinstallmentplanupdateorder"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->updateOrder(
    "installmentPlanNumber_example", 
    "X-Splitit-IdempotencyKey_example", 
    "", 
    "string_example", 
    "string_example", 
    True, 
    "Pending", 
    3.14
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### installment_plan_number: `string`<a id="installment_plan_number-string"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### RefOrderNumber: `string`<a id="refordernumber-string"></a>

##### TrackingNumber: `string`<a id="trackingnumber-string"></a>

##### Capture: `bool`<a id="capture-bool"></a>

##### ShippingStatus:<a id="shippingstatus"></a>

##### NewAmount: `float`<a id="newamount-float"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanUpdateResponse**](./lib/Model/InstallmentPlanUpdateResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/{installmentPlanNumber}/updateorder` `PUT`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.updateOrder2`<a id="splititinstallmentplanupdateorder2"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->updateOrder2(
    "X-Splitit-IdempotencyKey_example", 
    "", 
    "string_example", 
    "string_example", 
    True, 
    "Pending", 
    3.14, 
    [
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint

##### RefOrderNumber: `string`<a id="refordernumber-string"></a>

##### TrackingNumber: `string`<a id="trackingnumber-string"></a>

##### Capture: `bool`<a id="capture-bool"></a>

##### ShippingStatus:<a id="shippingstatus"></a>

##### NewAmount: `float`<a id="newamount-float"></a>

##### Identifier: [`IdentifierContract`](./lib/Model/IdentifierContract.php)<a id="identifier-identifiercontractlibmodelidentifiercontractphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**InstallmentPlanUpdateResponse**](./lib/Model/InstallmentPlanUpdateResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/updateorder` `PUT`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `splitit.installmentPlan.verifyAuthorization`<a id="splititinstallmentplanverifyauthorization"></a>




#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $splitit->installmentPlan->verifyAuthorization(
    "installmentPlanNumber_example", 
    "X-Splitit-IdempotencyKey_example", 
    ""
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### installment_plan_number: `string`<a id="installment_plan_number-string"></a>

##### x_splitit_idempotency_key: `string`<a id="x_splitit_idempotency_key-string"></a>

##### x_splitit_touch_point: `string`<a id="x_splitit_touch_point-string"></a>

TouchPoint


#### 🔄 Return<a id="🔄-return"></a>

[**VerifyAuthorizationResponse**](./lib/Model/VerifyAuthorizationResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/api/installmentplans/{installmentPlanNumber}/verifyauthorization` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


## Author<a id="author"></a>
This PHP package is automatically generated by [Konfig](https://konfigthis.com)
