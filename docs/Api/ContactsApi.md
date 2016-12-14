# MailMojo\ContactsApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsGet**](ContactsApi.md#contactsGet) | **GET** /contacts/ | Retrieve all contacts across every list.
[**listsListIdSubscribersEmailDelete**](ContactsApi.md#listsListIdSubscribersEmailDelete) | **DELETE** /lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
[**listsListIdSubscribersEmailGet**](ContactsApi.md#listsListIdSubscribersEmailGet) | **GET** /lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
[**listsListIdSubscribersGet**](ContactsApi.md#listsListIdSubscribersGet) | **GET** /lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
[**listsListIdSubscribersImportPost**](ContactsApi.md#listsListIdSubscribersImportPost) | **POST** /lists/{list_id}/subscribers/import/ | Subscribe contacts to the email list.
[**listsListIdSubscribersPost**](ContactsApi.md#listsListIdSubscribersPost) | **POST** /lists/{list_id}/subscribers/ | Subscribe a contact to the email list.


# **contactsGet**
> \MailMojo\Model\Contact[] contactsGet()

Retrieve all contacts across every list.

This endpoint currently returns all contacts in your account *without any pagination* and should be considered EXPERIMENTAL. The response schema will change without any warning in the near future to account for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\ContactsApi();

try {
    $result = $api_instance->contactsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\Contact[]**](../Model/Contact.md)

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

$api_instance = new MailMojo\Api\ContactsApi();
$list_id = 56; // int | ID of the email list to unsubscribe from.
$email = "email_example"; // string | Email address of the contact to unsubscribe.

try {
    $result = $api_instance->listsListIdSubscribersEmailDelete($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listsListIdSubscribersEmailDelete: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new MailMojo\Api\ContactsApi();
$list_id = 56; // int | ID of the email list to retrieve the subscriber from.
$email = "email_example"; // string | Email address of the contact to retrieve.

try {
    $result = $api_instance->listsListIdSubscribersEmailGet($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listsListIdSubscribersEmailGet: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new MailMojo\Api\ContactsApi();
$list_id = 56; // int | ID of the email list.

try {
    $result = $api_instance->listsListIdSubscribersGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listsListIdSubscribersGet: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new MailMojo\Api\ContactsApi();
$list_id = 56; // int | ID of the email list to subscribe to.
$contacts = array(new Contacts()); // \MailMojo\Model\Contacts[] | 

try {
    $result = $api_instance->listsListIdSubscribersImportPost($list_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listsListIdSubscribersImportPost: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new MailMojo\Api\ContactsApi();
$list_id = 56; // int | ID of the email list to subscribe to.
$contact = new \MailMojo\Model\Contact(); // \MailMojo\Model\Contact | 

try {
    $result = $api_instance->listsListIdSubscribersPost($list_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->listsListIdSubscribersPost: ', $e->getMessage(), PHP_EOL;
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

