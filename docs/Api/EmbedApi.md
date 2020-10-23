# MailMojo\EmbedApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmbedSession**](EmbedApi.md#createEmbedSession) | **POST** /v1/embed/ | Create a new embedded application session.


# **createEmbedSession**
> string createEmbedSession($embed)

Create a new embedded application session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$embed = new \MailMojo\MailMojo\Model\Embed(); // \MailMojo\MailMojo\Model\Embed | 

try {
    $result = $apiInstance->createEmbedSession($embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->createEmbedSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embed** | [**\MailMojo\MailMojo\Model\Embed**](../Model/Embed.md)|  |

### Return type

**string**

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

