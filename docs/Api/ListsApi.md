# MailMojo\ListsApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsGet**](ListsApi.md#listsGet) | **GET** /lists/ | Retrieve all email lists.
[**listsListIdGet**](ListsApi.md#listsListIdGet) | **GET** /lists/{list_id}/ | Retrieve an email list.
[**listsListIdPatch**](ListsApi.md#listsListIdPatch) | **PATCH** /lists/{list_id}/ | Update an email list partially.
[**listsListIdSubscribersEmailDelete**](ListsApi.md#listsListIdSubscribersEmailDelete) | **DELETE** /lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
[**listsListIdSubscribersEmailGet**](ListsApi.md#listsListIdSubscribersEmailGet) | **GET** /lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
[**listsListIdSubscribersGet**](ListsApi.md#listsListIdSubscribersGet) | **GET** /lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
[**listsListIdSubscribersImportPost**](ListsApi.md#listsListIdSubscribersImportPost) | **POST** /lists/{list_id}/subscribers/import/ | Subscribe contacts to the email list.
[**listsListIdSubscribersPost**](ListsApi.md#listsListIdSubscribersPost) | **POST** /lists/{list_id}/subscribers/ | Subscribe a contact to the email list.


# **listsGet**
> \MailMojo\Model\ModelList[] listsGet()

Retrieve all email lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();

try {
    $result = $api_instance->listsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
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

# **listsListIdGet**
> \MailMojo\Model\ModelList listsListIdGet($list_id)

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
    $result = $api_instance->listsListIdGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdGet: ', $e->getMessage(), PHP_EOL;
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

# **listsListIdPatch**
> \MailMojo\Model\ModelList listsListIdPatch($list_id)

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
    $result = $api_instance->listsListIdPatch($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdPatch: ', $e->getMessage(), PHP_EOL;
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

# **listsListIdSubscribersEmailDelete**
> \MailMojo\Model\Contact listsListIdSubscribersEmailDelete($list_id, $email)

Unsubscribe a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to unsubscribe from.
$email = "email_example"; // string | Email address of the contact to unsubscribe.

try {
    $result = $api_instance->listsListIdSubscribersEmailDelete($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdSubscribersEmailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to unsubscribe from. |
 **email** | **string**| Email address of the contact to unsubscribe. |

### Return type

[**\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdSubscribersEmailGet**
> \MailMojo\Model\Subscriber[] listsListIdSubscribersEmailGet($list_id, $email)

Retrieve a subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to retrieve the subscriber from.
$email = "email_example"; // string | Email address of the contact to retrieve.

try {
    $result = $api_instance->listsListIdSubscribersEmailGet($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdSubscribersEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve the subscriber from. |
 **email** | **string**| Email address of the contact to retrieve. |

### Return type

[**\MailMojo\Model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdSubscribersGet**
> \MailMojo\Model\Subscriber[] listsListIdSubscribersGet($list_id)

Retrieve subscribers on a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list.

try {
    $result = $api_instance->listsListIdSubscribersGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdSubscribersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list. |

### Return type

[**\MailMojo\Model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdSubscribersImportPost**
> \MailMojo\Model\ImportResult listsListIdSubscribersImportPost($list_id, $contacts)

Subscribe contacts to the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to subscribe to.
$contacts = array(new Contacts()); // \MailMojo\Model\Contacts[] | 

try {
    $result = $api_instance->listsListIdSubscribersImportPost($list_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdSubscribersImportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to subscribe to. |
 **contacts** | [**\MailMojo\Model\Contacts[]**](../Model/Contacts.md)|  | [optional]

### Return type

[**\MailMojo\Model\ImportResult**](../Model/ImportResult.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: text/csv
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdSubscribersPost**
> \MailMojo\Model\Contact listsListIdSubscribersPost($list_id, $contact)

Subscribe a contact to the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ListsApi();
$list_id = 56; // int | ID of the email list to subscribe to.
$contact = new \MailMojo\Model\Contact(); // \MailMojo\Model\Contact | 

try {
    $result = $api_instance->listsListIdSubscribersPost($list_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdSubscribersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to subscribe to. |
 **contact** | [**\MailMojo\Model\Contact**](../Model/\MailMojo\Model\Contact.md)|  | [optional]

### Return type

[**\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

