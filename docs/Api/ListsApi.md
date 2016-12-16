# MailMojo\ListsApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListById**](ListsApi.md#getListById) | **GET** /lists/{list_id}/ | Retrieve an email list.
[**getLists**](ListsApi.md#getLists) | **GET** /lists/ | Retrieve all email lists.
[**updateList**](ListsApi.md#updateList) | **PATCH** /lists/{list_id}/ | Update an email list partially.


# **getListById**
> \MailMojo\Model\ModelList getListById($list_id)

Retrieve an email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to retrieve.

try {
    $result = $api_instance->getListById($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getListById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve. |

### Return type

[**\MailMojo\Model\ModelList**](../Model/ModelList.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLists**
> \MailMojo\Model\ModelList[] getLists()

Retrieve all email lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();

try {
    $result = $api_instance->getLists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\ModelList[]**](../Model/ModelList.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateList**
> \MailMojo\Model\ModelList updateList($list_id)

Update an email list partially.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to retrieve.

try {
    $result = $api_instance->updateList($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve. |

### Return type

[**\MailMojo\Model\ModelList**](../Model/ModelList.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

