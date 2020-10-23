# MailMojo\PageApi

All URIs are relative to *https://api.mailmojo.no*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPageById**](PageApi.md#getPageById) | **GET** /v1/pages/{id}/ | Retrieve a landing page.
[**getPages**](PageApi.md#getPages) | **GET** /v1/pages/ | Retrieve all landing pages.
[**trackPageView**](PageApi.md#trackPageView) | **PATCH** /v1/pages/{id}/track/view/ | Track a view of a landing page.
[**updatePage**](PageApi.md#updatePage) | **PATCH** /v1/pages/{id}/ | Update a landing page partially.


# **getPageById**
> \MailMojo\MailMojo\Model\Page getPageById($id)

Retrieve a landing page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the landing page to retrieve.

try {
    $result = $apiInstance->getPageById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->getPageById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the landing page to retrieve. |

### Return type

[**\MailMojo\MailMojo\Model\Page**](../Model/Page.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPages**
> \MailMojo\MailMojo\Model\Page[] getPages()

Retrieve all landing pages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->getPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MailMojo\MailMojo\Model\Page[]**](../Model/Page.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackPageView**
> \MailMojo\MailMojo\Model\TrackPageView trackPageView($id, $view)

Track a view of a landing page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the page to track view of.
$view = new \MailMojo\MailMojo\Model\TrackPageView(); // \MailMojo\MailMojo\Model\TrackPageView | 

try {
    $result = $apiInstance->trackPageView($id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->trackPageView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the page to track view of. |
 **view** | [**\MailMojo\MailMojo\Model\TrackPageView**](../Model/TrackPageView.md)|  |

### Return type

[**\MailMojo\MailMojo\Model\TrackPageView**](../Model/TrackPageView.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePage**
> \MailMojo\MailMojo\Model\Page updatePage($id, $page)

Update a landing page partially.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new MailMojo\Api\PageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the landing page to update.
$page = new \MailMojo\MailMojo\Model\Page(); // \MailMojo\MailMojo\Model\Page | 

try {
    $result = $apiInstance->updatePage($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageApi->updatePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the landing page to update. |
 **page** | [**\MailMojo\MailMojo\Model\Page**](../Model/Page.md)|  | [optional]

### Return type

[**\MailMojo\MailMojo\Model\Page**](../Model/Page.md)

### Authorization

[mailmojo_auth](../../README.md#mailmojo_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

