# ListDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**data_retention** | **object** | If set (to a number of days), automatic cleanup of inactive contacts will be enabled and performed every X days. | [optional] 
**description** | **string** |  | [optional] 
**enable_link_proxy** | **bool** | Beta feature: Whether to block robots from following links in newsletters. | [optional] 
**enable_recaptcha** | **bool** | Whether to enable reCAPTCHA to block spam subscriptions from the default subscribe form. | [optional] 
**enable_stats_filter** | **bool** | Beta feature: Whether to block robots that trigger opens and clicks from being tracked in reports. | [optional] 
**facebook** | **string** |  | [optional] 
**from_email** | **string** |  | 
**from_name** | **string** |  | 
**id** | **int** |  | [optional] 
**instagram** | **string** |  | [optional] 
**is_primary** | **bool** | Whether this is the primary email list on the account. | [optional] 
**last_cleaned_at** | [**\DateTime**](\DateTime.md) | When cleanup of inactive contacts were last performed. | [optional] 
**linkedin** | **string** |  | [optional] 
**name** | **string** |  | 
**pinterest** | **string** |  | [optional] 
**segments** | [**\MailMojo\MailMojo\Model\Segment[]**](Segment.md) |  | [optional] 
**subscribe_redirect_url** | **string** |  | [optional] 
**subscribe_url** | **string** |  | [optional] 
**twitter** | **string** |  | [optional] 
**unsubscribe_cascades** | **bool** |  | [optional] 
**unsubscribe_redirect_url** | **string** |  | [optional] 
**unsubscribe_url** | **string** |  | [optional] 
**website** | **string** |  | [optional] 
**youtube** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


