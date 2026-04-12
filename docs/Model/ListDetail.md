# ListDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **\DateTime** |  | [optional] [readonly]
**data_retention** | **object** | If set (to a number of days), automatic cleanup of inactive contacts will be enabled and performed every X days. | [optional]
**description** | **string** |  | [optional]
**enable_link_proxy** | **bool** | Beta feature: Whether to block robots from following links in newsletters. | [optional]
**enable_link_tracking_sms** | **bool** | Whether to track clicks on links in email campaigns sent to this list. | [optional]
**enable_recaptcha** | **bool** | Whether to enable reCAPTCHA to block spam subscriptions from the default subscribe form. | [optional]
**enable_stats_filter** | **bool** | Beta feature: Whether to block robots that trigger opens and clicks from being tracked in reports. | [optional]
**facebook** | **string** |  | [optional]
**from_email** | **string** |  |
**from_name** | **string** |  |
**id** | **int** |  | [optional] [readonly]
**instagram** | **string** |  | [optional]
**is_primary** | **bool** | Whether this is the primary email list on the account. | [optional]
**is_sms_sender_approved** | **bool** |  | [optional] [readonly]
**last_cleaned_at** | **\DateTime** | When cleanup of inactive contacts were last performed. | [optional] [readonly]
**linkedin** | **string** |  | [optional]
**name** | **string** |  |
**pinterest** | **string** |  | [optional]
**segments** | [**\MailMojo\Model\Segment[]**](Segment.md) |  | [optional]
**sms_sender** | **string** |  | [optional] [readonly]
**subscribe_redirect_url** | **string** |  | [optional]
**subscribe_url** | **string** |  | [optional] [readonly]
**twitter** | **string** |  | [optional]
**unsubscribe_cascades** | **bool** |  | [optional]
**unsubscribe_redirect_url** | **string** |  | [optional]
**unsubscribe_url** | **string** |  | [optional] [readonly]
**website** | **string** |  | [optional]
**youtube** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
