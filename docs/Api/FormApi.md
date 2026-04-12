# MailMojo\FormApi



All URIs are relative to http://api.mailmojo.no, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**formAddSubscriber()**](FormApi.md#formAddSubscriber) | **PATCH** /v1/forms/{id}/subscribers/ | Add a subscriber through a form and track the conversion. |
| [**getFormById()**](FormApi.md#getFormById) | **GET** /v1/forms/{id}/ | Retrieve a form. |
| [**getForms()**](FormApi.md#getForms) | **GET** /v1/forms/ | Retrieve all forms. |
| [**trackFormView()**](FormApi.md#trackFormView) | **PATCH** /v1/forms/{id}/track/view/ | Track a view of a form. |
| [**updateForm()**](FormApi.md#updateForm) | **PATCH** /v1/forms/{id}/ | Update a form partially. |


## `formAddSubscriber()`

```php
formAddSubscriber($id, $subscriber): \MailMojo\Model\FormConversion
```

Add a subscriber through a form and track the conversion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the form.
$subscriber = new \MailMojo\Model\AddFormSubscriber(); // \MailMojo\Model\AddFormSubscriber

try {
    $result = $apiInstance->formAddSubscriber($id, $subscriber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->formAddSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the form. | |
| **subscriber** | [**\MailMojo\Model\AddFormSubscriber**](../Model/AddFormSubscriber.md)|  | |

### Return type

[**\MailMojo\Model\FormConversion**](../Model/FormConversion.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormById()`

```php
getFormById($id): \MailMojo\Model\Form
```

Retrieve a form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the form to retrieve.

try {
    $result = $apiInstance->getFormById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->getFormById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the form to retrieve. | |

### Return type

[**\MailMojo\Model\Form**](../Model/Form.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForms()`

```php
getForms($is_published): \MailMojo\Model\Form[]
```

Retrieve all forms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_published = false; // bool | List only published forms.

try {
    $result = $apiInstance->getForms($is_published);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->getForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_published** | **bool**| List only published forms. | [optional] [default to false] |

### Return type

[**\MailMojo\Model\Form[]**](../Model/Form.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackFormView()`

```php
trackFormView($id, $view): \MailMojo\Model\TrackFormView
```

Track a view of a form.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the form to track view of.
$view = new \MailMojo\Model\TrackFormView(); // \MailMojo\Model\TrackFormView

try {
    $result = $apiInstance->trackFormView($id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->trackFormView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the form to track view of. | |
| **view** | [**\MailMojo\Model\TrackFormView**](../Model/TrackFormView.md)|  | |

### Return type

[**\MailMojo\Model\TrackFormView**](../Model/TrackFormView.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateForm()`

```php
updateForm($id, $form): \MailMojo\Model\Form
```

Update a form partially.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the form to update.
$form = new \MailMojo\Model\Form(); // \MailMojo\Model\Form

try {
    $result = $apiInstance->updateForm($id, $form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->updateForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the form to update. | |
| **form** | [**\MailMojo\Model\Form**](../Model/Form.md)|  | [optional] |

### Return type

[**\MailMojo\Model\Form**](../Model/Form.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
