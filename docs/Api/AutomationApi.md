# MailMojo\AutomationApi

All URIs are relative to *https://api.mailmojo.no/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignById**](AutomationApi.md#getCampaignById) | **GET** /campaigns/{campaign_id}/ | Retrieve an automation campaign by id.


# **getCampaignById**
> \MailMojo\MailMojo\Model\CampaignDetail getCampaignById($campaign_id)

Retrieve an automation campaign by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | ID of the automation campaign to retrieve.

try {
    $result = $apiInstance->getCampaignById($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getCampaignById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| ID of the automation campaign to retrieve. |

### Return type

[**\MailMojo\MailMojo\Model\CampaignDetail**](../Model/CampaignDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

