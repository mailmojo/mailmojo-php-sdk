# MailMojo\FormApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getForms**](FormApi.md#getForms) | **GET** /forms/ | Retrieve all forms.
[**updateForm**](FormApi.md#updateForm) | **PATCH** /forms/{id}/ | Update a form partially.


# **getForms**
> \MailMojo\MailMojo\Model\Form[] getForms($is_published)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_published** | **bool**| List only published forms. | [optional] [default to false]

### Return type

[**\MailMojo\MailMojo\Model\Form[]**](../Model/Form.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForm**
> \MailMojo\MailMojo\Model\Form updateForm($id)

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

try {
    $result = $apiInstance->updateForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->updateForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the form to update. |

### Return type

[**\MailMojo\MailMojo\Model\Form**](../Model/Form.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

