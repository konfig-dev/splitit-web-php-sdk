# Splitit\InstallmentPlanApi

All URIs are relative to https://web-api-v3.sandbox.splitit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancel()**](InstallmentPlanApi.md#cancel) | **POST** /api/installmentplans/{installmentPlanNumber}/cancel |  |
| [**checkEligibility()**](InstallmentPlanApi.md#checkEligibility) | **POST** /api/installmentplans/check-eligibility |  |
| [**get()**](InstallmentPlanApi.md#get) | **GET** /api/installmentplans/{installmentPlanNumber} |  |
| [**post()**](InstallmentPlanApi.md#post) | **POST** /api/installmentplans/initiate |  |
| [**post2()**](InstallmentPlanApi.md#post2) | **POST** /api/installmentplans |  |
| [**refund()**](InstallmentPlanApi.md#refund) | **POST** /api/installmentplans/{installmentPlanNumber}/refund |  |
| [**search()**](InstallmentPlanApi.md#search) | **GET** /api/installmentplans/search |  |
| [**updateOrder()**](InstallmentPlanApi.md#updateOrder) | **PUT** /api/installmentplans/{installmentPlanNumber}/updateorder |  |
| [**updateOrder2()**](InstallmentPlanApi.md#updateOrder2) | **PUT** /api/installmentplans/updateorder |  |
| [**verifyAuthorization()**](InstallmentPlanApi.md#verifyAuthorization) | **GET** /api/installmentplans/{installmentPlanNumber}/verifyauthorization |  |


## `cancel()`

```php
cancel($installment_plan_number, $x_splitit_idempotency_key): \Splitit\Model\InstallmentPlanCancelResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'installment_plan_number' => "installmentPlanNumber_example",
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
];

try {
    $result = $apiInstance->cancel(request);
    print_r($result->$getInstallmentPlanNumber());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **installment_plan_number** | **string**|  | |
| **x_splitit_idempotency_key** | **string**|  | |

### Return type

[**\Splitit\Model\InstallmentPlanCancelResponse**](../Model/InstallmentPlanCancelResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkEligibility()`

```php
checkEligibility($x_splitit_idempotency_key, $check_installments_eligibility_request): \Splitit\Model\InstallmentsEligibilityResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'check_installments_eligibility_request' => [
    ],
];

try {
    $result = $apiInstance->checkEligibility(request);
    print_r($result->$getPaymentPlanOptions());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->checkEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_splitit_idempotency_key** | **string**|  | |
| **check_installments_eligibility_request** | [**\Splitit\Model\CheckInstallmentsEligibilityRequest**](../Model/CheckInstallmentsEligibilityRequest.md)|  | |

### Return type

[**\Splitit\Model\InstallmentsEligibilityResponse**](../Model/InstallmentsEligibilityResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($installment_plan_number, $x_splitit_idempotency_key): \Splitit\Model\InstallmentPlanGetResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'installment_plan_number' => "installmentPlanNumber_example",
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
];

try {
    $result = $apiInstance->get(request);
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getDateCreated());
    print_r($result->$getRefOrderNumber());
    print_r($result->$getPurchaseMethod());
    print_r($result->$getStatus());
    print_r($result->$getCurrency());
    print_r($result->$getOriginalAmount());
    print_r($result->$getAmount());
    print_r($result->$getAuthorization());
    print_r($result->$getShopper());
    print_r($result->$getBillingAddress());
    print_r($result->$getPaymentMethod());
    print_r($result->$getExtendedParams());
    print_r($result->$getInstallments());
    print_r($result->$getRefunds());
    print_r($result->$getLinks());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **installment_plan_number** | **string**|  | |
| **x_splitit_idempotency_key** | **string**|  | |

### Return type

[**\Splitit\Model\InstallmentPlanGetResponse**](../Model/InstallmentPlanGetResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `post()`

```php
post($x_splitit_idempotency_key, $installment_plan_initiate_request, $x_splitit_test_mode): \Splitit\Model\InitiatePlanResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'installment_plan_initiate_request' => [
        "auto_capture" => True,
        "attempt3d_secure" => True,
    ],
    'x_splitit_test_mode' => "None",
];

try {
    $result = $apiInstance->post(request);
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getRefOrderNumber());
    print_r($result->$getPurchaseMethod());
    print_r($result->$getStatus());
    print_r($result->$getCurrency());
    print_r($result->$getAmount());
    print_r($result->$getExtendedParams());
    print_r($result->$getShopper());
    print_r($result->$getBillingAddress());
    print_r($result->$getCheckoutUrl());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_splitit_idempotency_key** | **string**|  | |
| **installment_plan_initiate_request** | [**\Splitit\Model\InstallmentPlanInitiateRequest**](../Model/InstallmentPlanInitiateRequest.md)|  | |
| **x_splitit_test_mode** | **string**|  | [optional] |

### Return type

[**\Splitit\Model\InitiatePlanResponse**](../Model/InitiatePlanResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `post2()`

```php
post2($x_splitit_idempotency_key, $installment_plan_create_request, $x_splitit_test_mode): \Splitit\Model\InstallmentPlanCreateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'installment_plan_create_request' => [
        "auto_capture" => True,
        "terms_and_conditions_accepted" => True,
    ],
    'x_splitit_test_mode' => "None",
];

try {
    $result = $apiInstance->post2(request);
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getDateCreated());
    print_r($result->$getRefOrderNumber());
    print_r($result->$getPurchaseMethod());
    print_r($result->$getStatus());
    print_r($result->$getCurrency());
    print_r($result->$getOriginalAmount());
    print_r($result->$getAmount());
    print_r($result->$getExtendedParams());
    print_r($result->$getAuthorization());
    print_r($result->$getShopper());
    print_r($result->$getBillingAddress());
    print_r($result->$getPaymentMethod());
    print_r($result->$getInstallments());
    print_r($result->$getLinks());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->post2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_splitit_idempotency_key** | **string**|  | |
| **installment_plan_create_request** | [**\Splitit\Model\InstallmentPlanCreateRequest**](../Model/InstallmentPlanCreateRequest.md)|  | |
| **x_splitit_test_mode** | **string**|  | [optional] |

### Return type

[**\Splitit\Model\InstallmentPlanCreateResponse**](../Model/InstallmentPlanCreateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($installment_plan_number, $x_splitit_idempotency_key, $installment_plan_refund_request): \Splitit\Model\InstallmentPlanRefundResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'installment_plan_number' => "installmentPlanNumber_example",
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'installment_plan_refund_request' => [
        "amount" => 3.14,
        "refund_strategy" => "FutureInstallmentsFirst",
    ],
];

try {
    $result = $apiInstance->refund(request);
    print_r($result->$getRefundId());
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getCurrency());
    print_r($result->$getNonCreditRefundAmount());
    print_r($result->$getCreditRefundAmount());
    print_r($result->$getSummary());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **installment_plan_number** | **string**|  | |
| **x_splitit_idempotency_key** | **string**|  | |
| **installment_plan_refund_request** | [**\Splitit\Model\InstallmentPlanRefundRequest**](../Model/InstallmentPlanRefundRequest.md)|  | |

### Return type

[**\Splitit\Model\InstallmentPlanRefundResponse**](../Model/InstallmentPlanRefundResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($x_splitit_idempotency_key, $installment_plan_number, $ref_order_number, $extended_params): \Splitit\Model\InstallmentPlanSearchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'installment_plan_number' => "string_example",
    'ref_order_number' => "string_example",
    'extended_params' => [
        "key": "string_example",
    ],
];

try {
    $result = $apiInstance->search(request);
    print_r($result->$getPlanList());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_splitit_idempotency_key** | **string**|  | |
| **installment_plan_number** | **string**|  | [optional] |
| **ref_order_number** | **string**|  | [optional] |
| **extended_params** | [**array<string,string>**](../Model/string.md)|  | [optional] |

### Return type

[**\Splitit\Model\InstallmentPlanSearchResponse**](../Model/InstallmentPlanSearchResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($installment_plan_number, $x_splitit_idempotency_key, $update_order_request): \Splitit\Model\InstallmentPlanUpdateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'installment_plan_number' => "installmentPlanNumber_example",
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'update_order_request' => [
        "shipping_status" => "Pending",
    ],
];

try {
    $result = $apiInstance->updateOrder(request);
    print_r($result->$getRefOrderNumber());
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getStatus());
    print_r($result->$getShippingStatus());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **installment_plan_number** | **string**|  | |
| **x_splitit_idempotency_key** | **string**|  | |
| **update_order_request** | [**\Splitit\Model\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)|  | |

### Return type

[**\Splitit\Model\InstallmentPlanUpdateResponse**](../Model/InstallmentPlanUpdateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder2()`

```php
updateOrder2($x_splitit_idempotency_key, $installment_plan_update_request_by_identifier): \Splitit\Model\InstallmentPlanUpdateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
    'installment_plan_update_request_by_identifier' => None,
];

try {
    $result = $apiInstance->updateOrder2(request);
    print_r($result->$getRefOrderNumber());
    print_r($result->$getInstallmentPlanNumber());
    print_r($result->$getStatus());
    print_r($result->$getShippingStatus());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->updateOrder2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_splitit_idempotency_key** | **string**|  | |
| **installment_plan_update_request_by_identifier** | [**\Splitit\Model\InstallmentPlanUpdateRequestByIdentifier**](../Model/InstallmentPlanUpdateRequestByIdentifier.md)|  | |

### Return type

[**\Splitit\Model\InstallmentPlanUpdateResponse**](../Model/InstallmentPlanUpdateResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAuthorization()`

```php
verifyAuthorization($installment_plan_number, $x_splitit_idempotency_key): \Splitit\Model\VerifyAuthorizationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Splitit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Setting host path is optional and defaults to https://web-api-v3.sandbox.splitit.com
// Splitit\Configuration::getDefaultConfiguration()->setHost("https://web-api-v3.sandbox.splitit.com");

$apiInstance = new Splitit\Api\InstallmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


$request = [
    'installment_plan_number' => "installmentPlanNumber_example",
    'x_splitit_idempotency_key' => "X-Splitit-IdempotencyKey_example",
];

try {
    $result = $apiInstance->verifyAuthorization(request);
    print_r($result->$getIsAuthorized());
    print_r($result->$getAuthorizationAmount());
    print_r($result->$getAuthorization());
} catch (\Exception $e) {
    echo 'Exception when calling InstallmentPlanApi->verifyAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **installment_plan_number** | **string**|  | |
| **x_splitit_idempotency_key** | **string**|  | |

### Return type

[**\Splitit\Model\VerifyAuthorizationResponse**](../Model/VerifyAuthorizationResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
