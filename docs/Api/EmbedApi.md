# MailMojo\EmbedApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmbedSession**](EmbedApi.md#createEmbedSession) | **POST** /embed/ | Create a new embedded application session.


# **createEmbedSession**
> string createEmbedSession($config)

Create a new embedded application session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new MailMojo\Api\EmbedApi();
$config = new \MailMojo\Model\Embed(); // \MailMojo\Model\Embed | 

try {
    $result = $api_instance->createEmbedSession($config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->createEmbedSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\MailMojo\Model\Embed**](../Model/\MailMojo\Model\Embed.md)|  | [optional]

### Return type

**string**

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

