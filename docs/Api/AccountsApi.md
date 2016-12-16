# MailMojo\AccountsApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountsApi.md#createAccount) | **POST** /accounts/ | Create an account.
[**getAccountByUsername**](AccountsApi.md#getAccountByUsername) | **GET** /accounts/{username}/ | Retrieve account details.
[**updateAccount**](AccountsApi.md#updateAccount) | **POST** /accounts/{username}/ | Update account details.


# **createAccount**
> \MailMojo\Model\User createAccount($user)

Create an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\AccountsApi();
$user = new \MailMojo\Model\MinimalUser(); // \MailMojo\Model\MinimalUser | 

try {
    $result = $api_instance->createAccount($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\MailMojo\Model\MinimalUser**](../Model/\MailMojo\Model\MinimalUser.md)|  |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountByUsername**
> \MailMojo\Model\User getAccountByUsername($username)

Retrieve account details.

This endpoint can be used to get details about your own account, or a subuser associated with you as a partner. If the username of your current authenticated user is unknown, you may use the special username \"me\" to retrieve details about the authenticated user account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\AccountsApi();
$username = "username_example"; // string | Username of the account to get details for, or the special username \"me\" to get details about your authenticated user.

try {
    $result = $api_instance->getAccountByUsername($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountByUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the account to get details for, or the special username \&quot;me\&quot; to get details about your authenticated user. |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \MailMojo\Model\User updateAccount($username)

Update account details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\AccountsApi();
$username = "username_example"; // string | Username of the user to update.

try {
    $result = $api_instance->updateAccount($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the user to update. |

### Return type

[**\MailMojo\Model\User**](../Model/User.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

