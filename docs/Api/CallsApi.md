# Swagger\Client\CallsApi

All URIs are relative to *https://api.vonage.com/vgis*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callAnswer**](CallsApi.md#callAnswer) | **PUT** /self/calls/{id}/answer | Answer call (On supported devices)
[**callHold**](CallsApi.md#callHold) | **PUT** /self/calls/{id}/hold | Put call on hold
[**callTransfer**](CallsApi.md#callTransfer) | **POST** /self/calls/{id}/transfer | Transfer call
[**callUnold**](CallsApi.md#callUnold) | **DELETE** /self/calls/{id}/hold | Unhold
[**callVMTransfer**](CallsApi.md#callVMTransfer) | **PUT** /self/calls/{id}/vmtransfer | Send call to voicemail
[**createCall**](CallsApi.md#createCall) | **POST** /self/calls | Place a call
[**destroyCall**](CallsApi.md#destroyCall) | **DELETE** /self/calls/{id} | End a call
[**getCallsCount**](CallsApi.md#getCallsCount) | **GET** /self/calls/count | Get calls count
[**getRoles**](CallsApi.md#getRoles) | **GET** /self/calls/{id} | Get a call
[**listCalls**](CallsApi.md#listCalls) | **GET** /self/calls | List active calls


# **callAnswer**
> \com.vonage.client.model.VonageIntegrationSuite\Call callAnswer($id)

Answer call (On supported devices)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->callAnswer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callHold**
> \com.vonage.client.model.VonageIntegrationSuite\Call callHold($id)

Put call on hold

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->callHold($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callTransfer**
> \com.vonage.client.model.VonageIntegrationSuite\Call callTransfer($id, $body)

Transfer call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID
$body = new \com.vonage.client.model.VonageIntegrationSuite\CallTransfer(); // \com.vonage.client.model.VonageIntegrationSuite\CallTransfer | Call transfer parameters

try {
    $result = $api_instance->callTransfer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |
 **body** | [**\com.vonage.client.model.VonageIntegrationSuite\CallTransfer**](../Model/\com.vonage.client.model.VonageIntegrationSuite\CallTransfer.md)| Call transfer parameters |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callUnold**
> \com.vonage.client.model.VonageIntegrationSuite\Call callUnold($id)

Unhold

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->callUnold($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callUnold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callVMTransfer**
> \com.vonage.client.model.VonageIntegrationSuite\Call callVMTransfer($id)

Send call to voicemail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->callVMTransfer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callVMTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCall**
> \com.vonage.client.model.VonageIntegrationSuite\Call[] createCall($body)

Place a call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$body = new \com.vonage.client.model.VonageIntegrationSuite\CallCreate(); // \com.vonage.client.model.VonageIntegrationSuite\CallCreate | Place call parameters

try {
    $result = $api_instance->createCall($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->createCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com.vonage.client.model.VonageIntegrationSuite\CallCreate**](../Model/\com.vonage.client.model.VonageIntegrationSuite\CallCreate.md)| Place call parameters |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call[]**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroyCall**
> \com.vonage.client.model.VonageIntegrationSuite\Call[] destroyCall($id)

End a call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->destroyCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->destroyCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call[]**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallsCount**
> \com.vonage.client.model.VonageIntegrationSuite\EventsCount getCallsCount($from_date, $to_date, $direction, $states)

Get calls count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$from_date = 56; // int | Default - start of time
$to_date = 56; // int | Default - now
$direction = array("direction_example"); // string[] | Filter by direction. Default - all
$states = array("states_example"); // string[] | Filter by state. Default - active call states

try {
    $result = $api_instance->getCallsCount($from_date, $to_date, $direction, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **int**| Default - start of time | [optional]
 **to_date** | **int**| Default - now | [optional]
 **direction** | [**string[]**](../Model/string.md)| Filter by direction. Default - all | [optional]
 **states** | [**string[]**](../Model/string.md)| Filter by state. Default - active call states | [optional]

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\EventsCount**](../Model/EventsCount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \com.vonage.client.model.VonageIntegrationSuite\Call[] getRoles($id)

Get a call

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$id = "id_example"; // string | Call ID

try {
    $result = $api_instance->getRoles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Call ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call[]**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCalls**
> \com.vonage.client.model.VonageIntegrationSuite\Call[] listCalls($from_date, $to_date, $direction, $states, $offset, $size, $order, $sort)

List active calls

Alias to scope type CALL, active states only. For listing not active calls use Events API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$from_date = 56; // int | 
$to_date = 56; // int | Default - now
$direction = array("direction_example"); // string[] | Filter by direction. Default - all
$states = array("states_example"); // string[] | Filter by state. Default - active call states
$offset = 789; // int | Page number from beginning
$size = 56; // int | Page size - number of records to return (default 20)
$order = "order_example"; // string | Defalt - descending
$sort = "sort_example"; // string | Sort property

try {
    $result = $api_instance->listCalls($from_date, $to_date, $direction, $states, $offset, $size, $order, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->listCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **int**|  | [optional]
 **to_date** | **int**| Default - now | [optional]
 **direction** | [**string[]**](../Model/string.md)| Filter by direction. Default - all | [optional]
 **states** | [**string[]**](../Model/string.md)| Filter by state. Default - active call states | [optional]
 **offset** | **int**| Page number from beginning | [optional]
 **size** | **int**| Page size - number of records to return (default 20) | [optional]
 **order** | **string**| Defalt - descending | [optional]
 **sort** | **string**| Sort property | [optional]

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Call[]**](../Model/Call.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

