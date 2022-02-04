# MailMojo\SegmentApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](SegmentApi.md#createSegment) | **POST** /v1/lists/{list_id}/segments/ | Create a segment in the email list.


# **createSegment**
> \MailMojo\MailMojo\Model\Segment createSegment($list_id, $segment)

Create a segment in the email list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | ID of the email list to create a segment in.
$segment = new \MailMojo\MailMojo\Model\SegmentCreation(); // \MailMojo\MailMojo\Model\SegmentCreation | 

try {
    $result = $apiInstance->createSegment($list_id, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| ID of the email list to create a segment in. |
 **segment** | [**\MailMojo\MailMojo\Model\SegmentCreation**](../Model/SegmentCreation.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\Segment**](../Model/Segment.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

