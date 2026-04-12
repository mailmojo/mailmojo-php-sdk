# MailMojo\AutomationApi



All URIs are relative to http://api.mailmojo.no, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAutomationById()**](AutomationApi.md#getAutomationById) | **GET** /v1/automations/{automation_id}/ | Retrieve an automation by id. |
| [**updateAutomation()**](AutomationApi.md#updateAutomation) | **PATCH** /v1/automations/{automation_id}/ | Update a draft or paused automation partially. |


## `getAutomationById()`

```php
getAutomationById($automation_id): \MailMojo\Model\AutomationDetail
```

Retrieve an automation by id.

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
$automation_id = 56; // int | ID of the automation to retrieve.

try {
    $result = $apiInstance->getAutomationById($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **int**| ID of the automation to retrieve. | |

### Return type

[**\MailMojo\Model\AutomationDetail**](../Model/AutomationDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomation()`

```php
updateAutomation($automation_id, $automation): \MailMojo\Model\AutomationDetail
```

Update a draft or paused automation partially.

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
$automation_id = 56; // int | ID of the automation to update.
$automation = new \MailMojo\Model\Automation(); // \MailMojo\Model\Automation

try {
    $result = $apiInstance->updateAutomation($automation_id, $automation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->updateAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **int**| ID of the automation to update. | |
| **automation** | [**\MailMojo\Model\Automation**](../Model/Automation.md)|  | [optional] |

### Return type

[**\MailMojo\Model\AutomationDetail**](../Model/AutomationDetail.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
