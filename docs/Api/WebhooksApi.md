# Swagger\Client\WebhooksApi

All URIs are relative to *https://api.vonage.com/vgis*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhooksApi.md#createWebhook) | **POST** /self/webhooks | Create a new webhook subscription
[**destroyWebhook**](WebhooksApi.md#destroyWebhook) | **DELETE** /self/webhooks/{id} | Remove a web hook
[**listWebhooks**](WebhooksApi.md#listWebhooks) | **GET** /self/webhooks | List web hooks
[**renewWebhook**](WebhooksApi.md#renewWebhook) | **PUT** /self/webhooks/{id}/renew | Renews a web hook
[**viewWebhook**](WebhooksApi.md#viewWebhook) | **GET** /self/webhooks/{id} | Get web hook details


# **createWebhook**
> \com.vonage.client.model.VonageIntegrationSuite\Webhook createWebhook($body)

Create a new webhook subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$body = new \com.vonage.client.model.VonageIntegrationSuite\WebhookCreate(); // \com.vonage.client.model.VonageIntegrationSuite\WebhookCreate | Webhook create parameters

try {
    $result = $api_instance->createWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com.vonage.client.model.VonageIntegrationSuite\WebhookCreate**](../Model/\com.vonage.client.model.VonageIntegrationSuite\WebhookCreate.md)| Webhook create parameters |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroyWebhook**
> destroyWebhook($id)

Remove a web hook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$id = "id_example"; // string | Webhook ID

try {
    $api_instance->destroyWebhook($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->destroyWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebhooks**
> \com.vonage.client.model.VonageIntegrationSuite\Webhook[] listWebhooks()

List web hooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();

try {
    $result = $api_instance->listWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Webhook[]**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewWebhook**
> \com.vonage.client.model.VonageIntegrationSuite\Webhook renewWebhook($id)

Renews a web hook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$id = "id_example"; // string | Webhook ID

try {
    $result = $api_instance->renewWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->renewWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewWebhook**
> \com.vonage.client.model.VonageIntegrationSuite\Webhook viewWebhook($id)

Get web hook details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$id = "id_example"; // string | Webhook ID

try {
    $result = $api_instance->viewWebhook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->viewWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

