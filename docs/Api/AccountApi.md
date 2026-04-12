# MailMojo\AccountApi



All URIs are relative to http://api.mailmojo.no, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccount()**](AccountApi.md#createAccount) | **POST** /v1/accounts/ | Create an account. |
| [**createAccountField()**](AccountApi.md#createAccountField) | **POST** /v1/accounts/fields/ | Create a custom field on the account. |
| [**deleteAccountField()**](AccountApi.md#deleteAccountField) | **DELETE** /v1/accounts/fields/{field_id}/ | Delete a custom field on the account. |
| [**getAccountByUsername()**](AccountApi.md#getAccountByUsername) | **GET** /v1/accounts/{username}/ | Retrieve account details. |
| [**getAccountFields()**](AccountApi.md#getAccountFields) | **GET** /v1/accounts/fields/ | Returns info about all available fields on the account. |
| [**getAccountIntegrations()**](AccountApi.md#getAccountIntegrations) | **GET** /v1/accounts/integrations/ | Retrieve installed integrations for an account. |
| [**getAccountSdkDetails()**](AccountApi.md#getAccountSdkDetails) | **GET** /v1/accounts/sdk/ | Retrieve JS SDK details for the authenticated account. |
| [**updateAccount()**](AccountApi.md#updateAccount) | **POST** /v1/accounts/{username}/ | Update account details. |
| [**updateAccountField()**](AccountApi.md#updateAccountField) | **PATCH** /v1/accounts/fields/{field_id}/ | Update a custom field on the account. |
| [**updateAccountIntegration()**](AccountApi.md#updateAccountIntegration) | **PATCH** /v1/accounts/integrations/{integration_id}/ | Update installed integration settings. |


## `createAccount()`

```php
createAccount($user): \MailMojo\Model\User
```

Create an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \MailMojo\Model\UserCreation(); // \MailMojo\Model\UserCreation

try {
    $result = $apiInstance->createAccount($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | [**\MailMojo\Model\UserCreation**](../Model/UserCreation.md)|  | |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountField()`

```php
createAccountField($field): \MailMojo\Model\Field
```

Create a custom field on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field = new \MailMojo\Model\Field(); // \MailMojo\Model\Field

try {
    $result = $apiInstance->createAccountField($field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccountField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field** | [**\MailMojo\Model\Field**](../Model/Field.md)|  | |

### Return type

[**\MailMojo\Model\Field**](../Model/Field.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountField()`

```php
deleteAccountField($field_id)
```

Delete a custom field on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | ID of the custom field.

try {
    $apiInstance->deleteAccountField($field_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAccountField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| ID of the custom field. | |

### Return type

void (empty response body)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountByUsername()`

```php
getAccountByUsername($username): \MailMojo\Model\User
```

Retrieve account details.

This endpoint can be used to get details about your own account, or a subuser associated with you as a partner. If the username of your current authenticated user is unknown, you may use the special username 'me' to retrieve details about the authenticated user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the account to get details for, or the special username `me` to get details about your authenticated user.

try {
    $result = $apiInstance->getAccountByUsername($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountByUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the account to get details for, or the special username &#x60;me&#x60; to get details about your authenticated user. | |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountFields()`

```php
getAccountFields(): \MailMojo\Model\Field
```

Returns info about all available fields on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\Field**](../Model/Field.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountIntegrations()`

```php
getAccountIntegrations(): \MailMojo\Model\InstalledIntegration
```

Retrieve installed integrations for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountIntegrations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\InstalledIntegration**](../Model/InstalledIntegration.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSdkDetails()`

```php
getAccountSdkDetails(): \MailMojo\Model\AccountSdkDetails
```

Retrieve JS SDK details for the authenticated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountSdkDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSdkDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\AccountSdkDetails**](../Model/AccountSdkDetails.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($username): \MailMojo\Model\User
```

Update account details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | Username of the user to update.

try {
    $result = $apiInstance->updateAccount($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username of the user to update. | |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountField()`

```php
updateAccountField($field_id, $field): \MailMojo\Model\Field
```

Update a custom field on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 'field_id_example'; // string | ID of the custom field.
$field = new \MailMojo\Model\Field(); // \MailMojo\Model\Field

try {
    $result = $apiInstance->updateAccountField($field_id, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccountField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **field_id** | **string**| ID of the custom field. | |
| **field** | [**\MailMojo\Model\Field**](../Model/Field.md)|  | |

### Return type

[**\MailMojo\Model\Field**](../Model/Field.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountIntegration()`

```php
updateAccountIntegration($integration_id, $settings)
```

Update installed integration settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$settings = array('key' => new \stdClass); // object

try {
    $apiInstance->updateAccountIntegration($integration_id, $settings);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccountIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **settings** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
