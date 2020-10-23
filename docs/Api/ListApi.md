# MailMojo\ListApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](ListApi.md#createSegment) | **POST** /v1/lists/{list_id}/segments/ | Create a segment in the email list.
[**getListById**](ListApi.md#getListById) | **GET** /v1/lists/{list_id}/ | Retrieve an email list.
[**getLists**](ListApi.md#getLists) | **GET** /v1/lists/ | Retrieve all email lists.
[**getSubscriberOnListByEmail**](ListApi.md#getSubscriberOnListByEmail) | **GET** /v1/lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
[**getSubscribersOnList**](ListApi.md#getSubscribersOnList) | **GET** /v1/lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
[**getUnsubscribedOnList**](ListApi.md#getUnsubscribedOnList) | **GET** /v1/lists/{list_id}/unsubscribed/ | Retrieve unsubscribed contacts on a list.
[**importSubscribersToList**](ListApi.md#importSubscribersToList) | **POST** /v1/lists/{list_id}/subscribers/import/ | Subscribe contacts to the email list.
[**subscribeContactToList**](ListApi.md#subscribeContactToList) | **POST** /v1/lists/{list_id}/subscribers/ | Subscribe a contact to the email list.
[**unsubscribeContactOnListByEmail**](ListApi.md#unsubscribeContactOnListByEmail) | **DELETE** /v1/lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
[**updateList**](ListApi.md#updateList) | **PATCH** /v1/lists/{list_id}/ | Update an email list partially.


# **createSegment**
> \MailMojo\MailMojo\Model\Segment createSegment($list_id, $segment)

Create a segment in the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = new \stdClass; // object | ID of the email list to create a segment in.
$segment = new \MailMojo\MailMojo\Model\SegmentCreation(); // \MailMojo\MailMojo\Model\SegmentCreation | 

try {
    $result = $apiInstance->createSegment($list_id, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | [**object**](../Model/.md)| ID of the email list to create a segment in. |
 **segment** | [**\MailMojo\MailMojo\Model\SegmentCreation**](../Model/SegmentCreation.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\Segment**](../Model/Segment.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListById**
> \MailMojo\MailMojo\Model\ListDetail getListById($list_id)

Retrieve an email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to retrieve.

try {
    $result = $apiInstance->getListById($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getListById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve. |

### Return type

[**\MailMojo\MailMojo\Model\ListDetail**](../Model/ListDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLists**
> \MailMojo\MailMojo\Model\ModelList[] getLists()

Retrieve all email lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\MailMojo\Model\ModelList[]**](../Model/ModelList.md)

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

$apiInstance = new MailMojo\Api\ListApi(
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
    echo 'Exception when calling ListApi->getSubscriberOnListByEmail: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailMojo\Api\ListApi(
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
    echo 'Exception when calling ListApi->getSubscribersOnList: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailMojo\Api\ListApi(
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
    echo 'Exception when calling ListApi->getUnsubscribedOnList: ', $e->getMessage(), PHP_EOL;
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

# **importSubscribersToList**
> \MailMojo\MailMojo\Model\ImportResult importSubscribersToList($list_id, $contacts)

Subscribe contacts to the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to subscribe to.
$contacts = array(new \MailMojo\MailMojo\Model\Contacts()); // \MailMojo\MailMojo\Model\Contacts[] | 

try {
    $result = $apiInstance->importSubscribersToList($list_id, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->importSubscribersToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to subscribe to. |
 **contacts** | [**\MailMojo\MailMojo\Model\Contacts[]**](../Model/Contacts.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\ImportResult**](../Model/ImportResult.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: text/csv
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

$apiInstance = new MailMojo\Api\ListApi(
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
    echo 'Exception when calling ListApi->subscribeContactToList: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new MailMojo\Api\ListApi(
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
    echo 'Exception when calling ListApi->unsubscribeContactOnListByEmail: ', $e->getMessage(), PHP_EOL;
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

# **updateList**
> \MailMojo\MailMojo\Model\ListDetail updateList($list_id, $list)

Update an email list partially.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to retrieve.
$list = new \MailMojo\MailMojo\Model\ListDetail(); // \MailMojo\MailMojo\Model\ListDetail | 

try {
    $result = $apiInstance->updateList($list_id, $list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to retrieve. |
 **list** | [**\MailMojo\MailMojo\Model\ListDetail**](../Model/ListDetail.md)|  | [optional]

### Return type

[**\MailMojo\MailMojo\Model\ListDetail**](../Model/ListDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

