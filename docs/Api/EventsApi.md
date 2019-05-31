# Swagger\Client\EventsApi

All URIs are relative to *https://api.vonage.com/vgis*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEvent**](EventsApi.md#getEvent) | **GET** /self/events/{id} | Get event
[**getEventsCount**](EventsApi.md#getEventsCount) | **GET** /self/events/count | Get events count
[**listEvents**](EventsApi.md#listEvents) | **GET** /self/events | List events


# **getEvent**
> \com.vonage.client.model.VonageIntegrationSuite\Event[] getEvent($id)

Get event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = "id_example"; // string | Event ID

try {
    $result = $api_instance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Event ID |

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventsCount**
> \com.vonage.client.model.VonageIntegrationSuite\EventsCount getEventsCount($types, $from_date, $to_date, $direction, $states)

Get events count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$types = array("types_example"); // string[] | 
$from_date = 56; // int | Default - start of time
$to_date = 56; // int | Default - now
$direction = array("direction_example"); // string[] | Filter by direction. Default - all
$states = array("states_example"); // string[] | Filter by state.

try {
    $result = $api_instance->getEventsCount($types, $from_date, $to_date, $direction, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**string[]**](../Model/string.md)|  | [optional]
 **from_date** | **int**| Default - start of time | [optional]
 **to_date** | **int**| Default - now | [optional]
 **direction** | [**string[]**](../Model/string.md)| Filter by direction. Default - all | [optional]
 **states** | [**string[]**](../Model/string.md)| Filter by state. | [optional]

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\EventsCount**](../Model/EventsCount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEvents**
> \com.vonage.client.model.VonageIntegrationSuite\Event[] listEvents($types, $from_date, $to_date, $direction, $states, $offset, $size, $order, $sort)

List events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$types = array("types_example"); // string[] | 
$from_date = 56; // int | Default - start of time
$to_date = 56; // int | Default - now
$direction = array("direction_example"); // string[] | Filter by direction. Default - all
$states = array("states_example"); // string[] | Filter by state. (Mix SMS/CALL states)
$offset = 789; // int | Page number, from beginning
$size = 56; // int | Page size - number of records to return (default 20)
$order = "order_example"; // string | Defalt - descending
$sort = "sort_example"; // string | Sort property

try {
    $result = $api_instance->listEvents($types, $from_date, $to_date, $direction, $states, $offset, $size, $order, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**string[]**](../Model/string.md)|  | [optional]
 **from_date** | **int**| Default - start of time | [optional]
 **to_date** | **int**| Default - now | [optional]
 **direction** | [**string[]**](../Model/string.md)| Filter by direction. Default - all | [optional]
 **states** | [**string[]**](../Model/string.md)| Filter by state. (Mix SMS/CALL states) | [optional]
 **offset** | **int**| Page number, from beginning | [optional]
 **size** | **int**| Page size - number of records to return (default 20) | [optional]
 **order** | **string**| Defalt - descending | [optional]
 **sort** | **string**| Sort property | [optional]

### Return type

[**\com.vonage.client.model.VonageIntegrationSuite\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

