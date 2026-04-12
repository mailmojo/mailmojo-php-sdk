# MailMojo\ContactApi



All URIs are relative to http://api.mailmojo.no, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactByEmail()**](ContactApi.md#getContactByEmail) | **GET** /v1/contacts/{email}/ | Retrieve a contact in any list by email. |
| [**getContacts()**](ContactApi.md#getContacts) | **GET** /v1/contacts/ | Retrieve all contacts across every list. |
| [**getHistoricalContactStats()**](ContactApi.md#getHistoricalContactStats) | **GET** /v1/contacts/stats/ | Retrieve historical stats over contacts across every list. |
| [**getSubscriberOnListByEmail()**](ContactApi.md#getSubscriberOnListByEmail) | **GET** /v1/lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber. |
| [**getSubscribersOnList()**](ContactApi.md#getSubscribersOnList) | **GET** /v1/lists/{list_id}/subscribers/ | Retrieve subscribers on a list. |
| [**getUnsubscribedOnList()**](ContactApi.md#getUnsubscribedOnList) | **GET** /v1/lists/{list_id}/unsubscribed/ | Retrieve unsubscribed contacts on a list. |
| [**subscribeContactToList()**](ContactApi.md#subscribeContactToList) | **POST** /v1/lists/{list_id}/subscribers/ | Subscribe a contact to the email list. |
| [**unsubscribeContactOnListByEmail()**](ContactApi.md#unsubscribeContactOnListByEmail) | **DELETE** /v1/lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact. |
| [**updateContact()**](ContactApi.md#updateContact) | **PATCH** /v1/contacts/{email}/ | Update details about a contact. |


## `getContactByEmail()`

```php
getContactByEmail($email): \MailMojo\Model\Contact
```

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
$email = 'email_example'; // string

try {
    $result = $apiInstance->getContactByEmail($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |

### Return type

[**\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($search, $limit, $offset): \MailMojo\Model\Contact[]
```

Retrieve all contacts across every list.

This endpoint returns contacts across every list on the account. Use limit and offset query parameters to paginate large datasets.

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
$search = 'search_example'; // string | Filter by partial email address or name.
$limit = 56; // int | Limits the result to given count.
$offset = 56; // int | Skips the given count of contacts before returning results.

try {
    $result = $apiInstance->getContacts($search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Filter by partial email address or name. | [optional] |
| **limit** | **int**| Limits the result to given count. | [optional] |
| **offset** | **int**| Skips the given count of contacts before returning results. | [optional] |

### Return type

[**\MailMojo\Model\Contact[]**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricalContactStats()`

```php
getHistoricalContactStats($start_date): \MailMojo\Model\HistoricalContactsStats[]
```

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
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The starting date to include stats from.

try {
    $result = $apiInstance->getHistoricalContactStats($start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getHistoricalContactStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**| The starting date to include stats from. | [optional] |

### Return type

[**\MailMojo\Model\HistoricalContactsStats[]**](../Model/HistoricalContactsStats.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriberOnListByEmail()`

```php
getSubscriberOnListByEmail($list_id, $email): \MailMojo\Model\Subscriber
```

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
$email = 'email_example'; // string | Email address of the contact to retrieve.

try {
    $result = $apiInstance->getSubscriberOnListByEmail($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getSubscriberOnListByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the email list to retrieve the subscriber from. | |
| **email** | **string**| Email address of the contact to retrieve. | |

### Return type

[**\MailMojo\Model\Subscriber**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscribersOnList()`

```php
getSubscribersOnList($list_id, $search, $limit, $offset): \MailMojo\Model\Subscriber[]
```

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
$search = 'search_example'; // string | Filter by partial email address or name.
$limit = 56; // int | Limits the result to given count.
$offset = 56; // int | Skips the given count of contacts before returning results.

try {
    $result = $apiInstance->getSubscribersOnList($list_id, $search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getSubscribersOnList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the email list. | |
| **search** | **string**| Filter by partial email address or name. | [optional] |
| **limit** | **int**| Limits the result to given count. | [optional] |
| **offset** | **int**| Skips the given count of contacts before returning results. | [optional] |

### Return type

[**\MailMojo\Model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnsubscribedOnList()`

```php
getUnsubscribedOnList($list_id, $limit, $offset): \MailMojo\Model\Contact[]
```

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
$offset = 56; // int | Skips the given count of contacts before returning results.

try {
    $result = $apiInstance->getUnsubscribedOnList($list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getUnsubscribedOnList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the email list. | |
| **limit** | **int**| Limits the result to given count. | [optional] |
| **offset** | **int**| Skips the given count of contacts before returning results. | [optional] |

### Return type

[**\MailMojo\Model\Contact[]**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeContactToList()`

```php
subscribeContactToList($list_id, $contact): \MailMojo\Model\Contact
```

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
$contact = new \MailMojo\Model\Subscriber(); // \MailMojo\Model\Subscriber

try {
    $result = $apiInstance->subscribeContactToList($list_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->subscribeContactToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the email list to subscribe to. | |
| **contact** | [**\MailMojo\Model\Subscriber**](../Model/Subscriber.md)|  | |

### Return type

[**\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeContactOnListByEmail()`

```php
unsubscribeContactOnListByEmail($list_id, $email): \MailMojo\Model\Contact
```

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
$email = 'email_example'; // string | Email address of the contact to unsubscribe.

try {
    $result = $apiInstance->unsubscribeContactOnListByEmail($list_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unsubscribeContactOnListByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **int**| ID of the email list to unsubscribe from. | |
| **email** | **string**| Email address of the contact to unsubscribe. | |

### Return type

[**\MailMojo\Model\Contact**](../Model/Contact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($email, $contact): \MailMojo\Model\BaseContact
```

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
$email = 'email_example'; // string | Email address of contact to update.
$contact = new \MailMojo\Model\BaseContact(); // \MailMojo\Model\BaseContact

try {
    $result = $apiInstance->updateContact($email, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address of contact to update. | |
| **contact** | [**\MailMojo\Model\BaseContact**](../Model/BaseContact.md)|  | [optional] |

### Return type

[**\MailMojo\Model\BaseContact**](../Model/BaseContact.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
