# MailMojo\ContactApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactByEmail**](ContactApi.md#getContactByEmail) | **GET** /v1/contacts/{email}/ | Retrieve a contact in any list by email.
[**getContacts**](ContactApi.md#getContacts) | **GET** /v1/contacts/ | Retrieve all contacts across every list.
[**getHistoricalContactStats**](ContactApi.md#getHistoricalContactStats) | **GET** /v1/contacts/stats/ | Retrieve historical stats over contacts across every list.
[**getSubscriberOnListByEmail**](ContactApi.md#getSubscriberOnListByEmail) | **GET** /v1/lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
[**getSubscribersOnList**](ContactApi.md#getSubscribersOnList) | **GET** /v1/lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
[**getUnsubscribedOnList**](ContactApi.md#getUnsubscribedOnList) | **GET** /v1/lists/{list_id}/unsubscribed/ | Retrieve unsubscribed contacts on a list.
[**subscribeContactToList**](ContactApi.md#subscribeContactToList) | **POST** /v1/lists/{list_id}/subscribers/ | Subscribe a contact to the email list.
[**unsubscribeContactOnListByEmail**](ContactApi.md#unsubscribeContactOnListByEmail) | **DELETE** /v1/lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
[**updateContact**](ContactApi.md#updateContact) | **PATCH** /v1/contacts/{email}/ | Update details about a contact.


# **getContactByEmail**
> \MailMojo\MailMojo\Model\Contact getContactByEmail($email)

Retrieve a contact in any list by email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 

try {
    $result = $apiInstance->getContactByEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**\MailMojo\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \MailMojo\MailMojo\Model\Contact[] getContacts()

Retrieve all contacts across every list.

This endpoint currently returns all contacts in your account *without any pagination* and should be considered EXPERIMENTAL. The response schema will change without any warning in the near future to account for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContacts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\MailMojo\Model\Contact[]**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalContactStats**
> \MailMojo\MailMojo\Model\HistoricalContactsStats[] getHistoricalContactStats($start_date)

Retrieve historical stats over contacts across every list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20"); // \DateTime | The starting date to include stats from.

try {
    $result = $apiInstance->getHistoricalContactStats($start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getHistoricalContactStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| The starting date to include stats from. | [optional]

### Return type

[**\MailMojo\MailMojo\Model\HistoricalContactsStats[]**](../Model/HistoricalContactsStats.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriberOnListByEmail**
> \MailMojo\MailMojo\Model\Subscriber getSubscriberOnListByEmail($list_id, $email)

Retrieve a subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to retrieve the subscriber from.
$email = "email_example"; // string | Email address of the contact to retrieve.

try {
    $result = $apiInstance->getSubscriberOnListByEmail($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getSubscriberOnListByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve the subscriber from. |
 **email** | **string**| Email address of the contact to retrieve. |

### Return type

[**\MailMojo\MailMojo\Model\Subscriber**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscribersOnList**
> \MailMojo\MailMojo\Model\Subscriber[] getSubscribersOnList($list_id, $limit)

Retrieve subscribers on a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list.
$limit = 56; // int | Limits the result to given count.

try {
    $result = $apiInstance->getSubscribersOnList($list_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getSubscribersOnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list. |
 **limit** | **int**| Limits the result to given count. | [optional]

### Return type

[**\MailMojo\MailMojo\Model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribedOnList**
> \MailMojo\MailMojo\Model\Contact[] getUnsubscribedOnList($list_id, $limit)

Retrieve unsubscribed contacts on a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list.
$limit = 56; // int | Limits the result to given count.

try {
    $result = $apiInstance->getUnsubscribedOnList($list_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getUnsubscribedOnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list. |
 **limit** | **int**| Limits the result to given count. | [optional]

### Return type

[**\MailMojo\MailMojo\Model\Contact[]**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeContactToList**
> \MailMojo\MailMojo\Model\Contact subscribeContactToList($list_id, $contact)

Subscribe a contact to the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to subscribe to.
$contact = new \MailMojo\MailMojo\Model\Subscriber(); // \MailMojo\MailMojo\Model\Subscriber | 

try {
    $result = $apiInstance->subscribeContactToList($list_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->subscribeContactToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to subscribe to. |
 **contact** | [**\MailMojo\MailMojo\Model\Subscriber**](../Model/Subscriber.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeContactOnListByEmail**
> \MailMojo\MailMojo\Model\Contact unsubscribeContactOnListByEmail($list_id, $email)

Unsubscribe a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to unsubscribe from.
$email = "email_example"; // string | Email address of the contact to unsubscribe.

try {
    $result = $apiInstance->unsubscribeContactOnListByEmail($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unsubscribeContactOnListByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to unsubscribe from. |
 **email** | **string**| Email address of the contact to unsubscribe. |

### Return type

[**\MailMojo\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \MailMojo\MailMojo\Model\BaseContact updateContact($email, $contact)

Update details about a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Email address of contact to update.
$contact = new \MailMojo\MailMojo\Model\BaseContact(); // \MailMojo\MailMojo\Model\BaseContact | 

try {
    $result = $apiInstance->updateContact($email, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of contact to update. |
 **contact** | [**\MailMojo\MailMojo\Model\BaseContact**](../Model/BaseContact.md)|  | [optional]

### Return type

[**\MailMojo\MailMojo\Model\BaseContact**](../Model/BaseContact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

