# MailMojo\TemplateApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableWebComponents**](TemplateApi.md#getAvailableWebComponents) | **GET** /v1/templates/web_components/ | Retrieve all web components.
[**getTemplates**](TemplateApi.md#getTemplates) | **GET** /v1/templates/ | Retrieve all templates.


# **getAvailableWebComponents**
> \MailMojo\Model\WebComponent[] getAvailableWebComponents()

Retrieve all web components.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableWebComponents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getAvailableWebComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\WebComponent[]**](../Model/WebComponent.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \MailMojo\Model\Template[] getTemplates()

Retrieve all templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\Model\Template[]**](../Model/Template.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

