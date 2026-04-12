# MailMojo\NewsletterApi



All URIs are relative to http://api.mailmojo.no, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelNewsletter()**](NewsletterApi.md#cancelNewsletter) | **PUT** /v1/newsletters/{newsletter_id}/cancel/ | Cancel a newsletter. |
| [**createNewsletter()**](NewsletterApi.md#createNewsletter) | **POST** /v1/newsletters/ | Create a newsletter draft. |
| [**getNewsletterById()**](NewsletterApi.md#getNewsletterById) | **GET** /v1/newsletters/{newsletter_id}/ | Retrieve a newsletter by id. |
| [**getNewsletters()**](NewsletterApi.md#getNewsletters) | **GET** /v1/newsletters/ | Retrieve all newsletters. |
| [**sendNewsletter()**](NewsletterApi.md#sendNewsletter) | **PUT** /v1/newsletters/{newsletter_id}/send/ | Send a newsletter. |
| [**testNewsletter()**](NewsletterApi.md#testNewsletter) | **POST** /v1/newsletters/{newsletter_id}/send_test/ | Send a test newsletter. |
| [**updateNewsletter()**](NewsletterApi.md#updateNewsletter) | **PATCH** /v1/newsletters/{newsletter_id}/ | Update a newsletter draft partially. |


## `cancelNewsletter()`

```php
cancelNewsletter($newsletter_id): \MailMojo\Model\NewsletterDetail
```

Cancel a newsletter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 56; // int | ID of the newsletter to retrieve.

try {
    $result = $apiInstance->cancelNewsletter($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->cancelNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **int**| ID of the newsletter to retrieve. | |

### Return type

[**\MailMojo\Model\NewsletterDetail**](../Model/NewsletterDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewsletter()`

```php
createNewsletter($newsletter): \MailMojo\Model\NewsletterDetail
```

Create a newsletter draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter = new \MailMojo\Model\NewsletterCreation(); // \MailMojo\Model\NewsletterCreation

try {
    $result = $apiInstance->createNewsletter($newsletter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->createNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter** | [**\MailMojo\Model\NewsletterCreation**](../Model/NewsletterCreation.md)|  | |

### Return type

[**\MailMojo\Model\NewsletterDetail**](../Model/NewsletterDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletterById()`

```php
getNewsletterById($newsletter_id): \MailMojo\Model\NewsletterDetail
```

Retrieve a newsletter by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 56; // int | ID of the newsletter to retrieve.

try {
    $result = $apiInstance->getNewsletterById($newsletter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->getNewsletterById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **int**| ID of the newsletter to retrieve. | |

### Return type

[**\MailMojo\Model\NewsletterDetail**](../Model/NewsletterDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNewsletters()`

```php
getNewsletters($page, $per_page, $type): \MailMojo\Model\GetNewsletters200Response
```

Retrieve all newsletters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current page of items (1 indexed).
$per_page = 25; // int | The number of items returned per page.
$type = 'type_example'; // string | The type of newsletters to retrieve. Supported options are `draft`, `scheduled` and `sent`.

try {
    $result = $apiInstance->getNewsletters($page, $per_page, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->getNewsletters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current page of items (1 indexed). | [optional] [default to 1] |
| **per_page** | **int**| The number of items returned per page. | [optional] [default to 25] |
| **type** | **string**| The type of newsletters to retrieve. Supported options are &#x60;draft&#x60;, &#x60;scheduled&#x60; and &#x60;sent&#x60;. | [optional] |

### Return type

[**\MailMojo\Model\GetNewsletters200Response**](../Model/GetNewsletters200Response.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendNewsletter()`

```php
sendNewsletter($newsletter_id, $config): \MailMojo\Model\NewsletterDetail
```

Send a newsletter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 56; // int | ID of the newsletter to retrieve.
$config = new \MailMojo\Model\NewsletterSend(); // \MailMojo\Model\NewsletterSend

try {
    $result = $apiInstance->sendNewsletter($newsletter_id, $config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->sendNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **int**| ID of the newsletter to retrieve. | |
| **config** | [**\MailMojo\Model\NewsletterSend**](../Model/NewsletterSend.md)|  | [optional] |

### Return type

[**\MailMojo\Model\NewsletterDetail**](../Model/NewsletterDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testNewsletter()`

```php
testNewsletter($newsletter_id, $config)
```

Send a test newsletter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 56; // int | ID of the newsletter to retrieve.
$config = new \MailMojo\Model\NewsletterSendTest(); // \MailMojo\Model\NewsletterSendTest

try {
    $apiInstance->testNewsletter($newsletter_id, $config);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->testNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **int**| ID of the newsletter to retrieve. | |
| **config** | [**\MailMojo\Model\NewsletterSendTest**](../Model/NewsletterSendTest.md)|  | |

### Return type

void (empty response body)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNewsletter()`

```php
updateNewsletter($newsletter_id, $newsletter): \MailMojo\Model\NewsletterDetail
```

Update a newsletter draft partially.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\NewsletterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$newsletter_id = 56; // int | ID of the newsletter to update.
$newsletter = new \MailMojo\Model\NewsletterUpdate(); // \MailMojo\Model\NewsletterUpdate

try {
    $result = $apiInstance->updateNewsletter($newsletter_id, $newsletter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterApi->updateNewsletter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newsletter_id** | **int**| ID of the newsletter to update. | |
| **newsletter** | [**\MailMojo\Model\NewsletterUpdate**](../Model/NewsletterUpdate.md)|  | [optional] |

### Return type

[**\MailMojo\Model\NewsletterDetail**](../Model/NewsletterDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
