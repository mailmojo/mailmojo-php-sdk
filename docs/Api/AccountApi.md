# MailMojo\AccountApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountApi.md#createAccount) | **POST** /v1/accounts/ | Create an account.
[**getAccountByUsername**](AccountApi.md#getAccountByUsername) | **GET** /v1/accounts/{username}/ | Retrieve account details.
[**getDomain**](AccountApi.md#getDomain) | **GET** /v1/domains/{domain}/ | Retrieve domain details and authentication status.
[**updateAccount**](AccountApi.md#updateAccount) | **POST** /v1/accounts/{username}/ | Update account details.


# **createAccount**
> \MailMojo\MailMojo\Model\User createAccount($user)

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
$user = new \MailMojo\MailMojo\Model\UserCreation(); // \MailMojo\MailMojo\Model\UserCreation | 

try {
    $result = $apiInstance->createAccount($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\MailMojo\MailMojo\Model\UserCreation**](../Model/UserCreation.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountByUsername**
> \MailMojo\MailMojo\Model\User getAccountByUsername($username)

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
$username = "username_example"; // string | Username of the account to get details for, or the special username `me` to get details about your authenticated user.

try {
    $result = $apiInstance->getAccountByUsername($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountByUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the account to get details for, or the special username &#x60;me&#x60; to get details about your authenticated user. |

### Return type

[**\MailMojo\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomain**
> \MailMojo\MailMojo\Model\Domain getDomain($domain)

Retrieve domain details and authentication status.

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
$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->getDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\MailMojo\MailMojo\Model\Domain**](../Model/Domain.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \MailMojo\MailMojo\Model\User updateAccount($username)

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
$username = "username_example"; // string | Username of the user to update.

try {
    $result = $apiInstance->updateAccount($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the user to update. |

### Return type

[**\MailMojo\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

