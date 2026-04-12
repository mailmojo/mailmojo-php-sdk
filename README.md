# MailMojo

v1 of the Mailmojo API

For more information, please visit [https://mailmojo.dev](https://mailmojo.dev).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mailmojo/mailmojo-php-sdk.git"
    }
  ],
  "require": {
    "mailmojo/mailmojo-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MailMojo/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: mailmojo_auth
$config = MailMojo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new MailMojo\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \MailMojo\Model\UserCreation(); // \MailMojo\Model\UserCreation

try {
    $result = $apiInstance->createAccount($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://api.mailmojo.no*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**createAccount**](docs/Api/AccountApi.md#createaccount) | **POST** /v1/accounts/ | Create an account.
*AccountApi* | [**createAccountField**](docs/Api/AccountApi.md#createaccountfield) | **POST** /v1/accounts/fields/ | Create a custom field on the account.
*AccountApi* | [**deleteAccountField**](docs/Api/AccountApi.md#deleteaccountfield) | **DELETE** /v1/accounts/fields/{field_id}/ | Delete a custom field on the account.
*AccountApi* | [**getAccountByUsername**](docs/Api/AccountApi.md#getaccountbyusername) | **GET** /v1/accounts/{username}/ | Retrieve account details.
*AccountApi* | [**getAccountFields**](docs/Api/AccountApi.md#getaccountfields) | **GET** /v1/accounts/fields/ | Returns info about all available fields on the account.
*AccountApi* | [**getAccountIntegrations**](docs/Api/AccountApi.md#getaccountintegrations) | **GET** /v1/accounts/integrations/ | Retrieve installed integrations for an account.
*AccountApi* | [**getAccountSdkDetails**](docs/Api/AccountApi.md#getaccountsdkdetails) | **GET** /v1/accounts/sdk/ | Retrieve JS SDK details for the authenticated account.
*AccountApi* | [**updateAccount**](docs/Api/AccountApi.md#updateaccount) | **POST** /v1/accounts/{username}/ | Update account details.
*AccountApi* | [**updateAccountField**](docs/Api/AccountApi.md#updateaccountfield) | **PATCH** /v1/accounts/fields/{field_id}/ | Update a custom field on the account.
*AccountApi* | [**updateAccountIntegration**](docs/Api/AccountApi.md#updateaccountintegration) | **PATCH** /v1/accounts/integrations/{integration_id}/ | Update installed integration settings.
*AutomationApi* | [**getAutomationById**](docs/Api/AutomationApi.md#getautomationbyid) | **GET** /v1/automations/{automation_id}/ | Retrieve an automation by id.
*AutomationApi* | [**updateAutomation**](docs/Api/AutomationApi.md#updateautomation) | **PATCH** /v1/automations/{automation_id}/ | Update a draft or paused automation partially.
*ContactApi* | [**getContactByEmail**](docs/Api/ContactApi.md#getcontactbyemail) | **GET** /v1/contacts/{email}/ | Retrieve a contact in any list by email.
*ContactApi* | [**getContacts**](docs/Api/ContactApi.md#getcontacts) | **GET** /v1/contacts/ | Retrieve all contacts across every list.
*ContactApi* | [**getHistoricalContactStats**](docs/Api/ContactApi.md#gethistoricalcontactstats) | **GET** /v1/contacts/stats/ | Retrieve historical stats over contacts across every list.
*ContactApi* | [**getSubscriberOnListByEmail**](docs/Api/ContactApi.md#getsubscriberonlistbyemail) | **GET** /v1/lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
*ContactApi* | [**getSubscribersOnList**](docs/Api/ContactApi.md#getsubscribersonlist) | **GET** /v1/lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
*ContactApi* | [**getUnsubscribedOnList**](docs/Api/ContactApi.md#getunsubscribedonlist) | **GET** /v1/lists/{list_id}/unsubscribed/ | Retrieve unsubscribed contacts on a list.
*ContactApi* | [**subscribeContactToList**](docs/Api/ContactApi.md#subscribecontacttolist) | **POST** /v1/lists/{list_id}/subscribers/ | Subscribe a contact to the email list.
*ContactApi* | [**unsubscribeContactOnListByEmail**](docs/Api/ContactApi.md#unsubscribecontactonlistbyemail) | **DELETE** /v1/lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PATCH** /v1/contacts/{email}/ | Update details about a contact.
*EmbedApi* | [**createEmbedSession**](docs/Api/EmbedApi.md#createembedsession) | **POST** /v1/embed/ | Create a new embedded application session.
*FormApi* | [**formAddSubscriber**](docs/Api/FormApi.md#formaddsubscriber) | **PATCH** /v1/forms/{id}/subscribers/ | Add a subscriber through a form and track the conversion.
*FormApi* | [**getFormById**](docs/Api/FormApi.md#getformbyid) | **GET** /v1/forms/{id}/ | Retrieve a form.
*FormApi* | [**getForms**](docs/Api/FormApi.md#getforms) | **GET** /v1/forms/ | Retrieve all forms.
*FormApi* | [**trackFormView**](docs/Api/FormApi.md#trackformview) | **PATCH** /v1/forms/{id}/track/view/ | Track a view of a form.
*FormApi* | [**updateForm**](docs/Api/FormApi.md#updateform) | **PATCH** /v1/forms/{id}/ | Update a form partially.
*ListApi* | [**createList**](docs/Api/ListApi.md#createlist) | **POST** /v1/lists/ | Create an email list.
*ListApi* | [**createSegment**](docs/Api/ListApi.md#createsegment) | **POST** /v1/lists/{list_id}/segments/ | Create a segment in the email list.
*ListApi* | [**getListById**](docs/Api/ListApi.md#getlistbyid) | **GET** /v1/lists/{list_id}/ | Retrieve an email list.
*ListApi* | [**getLists**](docs/Api/ListApi.md#getlists) | **GET** /v1/lists/ | Retrieve all email lists.
*ListApi* | [**getSubscriberOnListByEmail**](docs/Api/ListApi.md#getsubscriberonlistbyemail) | **GET** /v1/lists/{list_id}/subscribers/{email}/ | Retrieve a subscriber.
*ListApi* | [**getSubscribersOnList**](docs/Api/ListApi.md#getsubscribersonlist) | **GET** /v1/lists/{list_id}/subscribers/ | Retrieve subscribers on a list.
*ListApi* | [**getUnsubscribedOnList**](docs/Api/ListApi.md#getunsubscribedonlist) | **GET** /v1/lists/{list_id}/unsubscribed/ | Retrieve unsubscribed contacts on a list.
*ListApi* | [**importSubscribersToList**](docs/Api/ListApi.md#importsubscriberstolist) | **POST** /v1/lists/{list_id}/subscribers/import/ | Subscribe contacts to the email list.
*ListApi* | [**subscribeContactToList**](docs/Api/ListApi.md#subscribecontacttolist) | **POST** /v1/lists/{list_id}/subscribers/ | Subscribe a contact to the email list.
*ListApi* | [**unsubscribeContactOnListByEmail**](docs/Api/ListApi.md#unsubscribecontactonlistbyemail) | **DELETE** /v1/lists/{list_id}/subscribers/{email}/ | Unsubscribe a contact.
*ListApi* | [**updateList**](docs/Api/ListApi.md#updatelist) | **PATCH** /v1/lists/{list_id}/ | Update an email list partially.
*NewsletterApi* | [**cancelNewsletter**](docs/Api/NewsletterApi.md#cancelnewsletter) | **PUT** /v1/newsletters/{newsletter_id}/cancel/ | Cancel a newsletter.
*NewsletterApi* | [**createNewsletter**](docs/Api/NewsletterApi.md#createnewsletter) | **POST** /v1/newsletters/ | Create a newsletter draft.
*NewsletterApi* | [**getNewsletterById**](docs/Api/NewsletterApi.md#getnewsletterbyid) | **GET** /v1/newsletters/{newsletter_id}/ | Retrieve a newsletter by id.
*NewsletterApi* | [**getNewsletters**](docs/Api/NewsletterApi.md#getnewsletters) | **GET** /v1/newsletters/ | Retrieve all newsletters.
*NewsletterApi* | [**sendNewsletter**](docs/Api/NewsletterApi.md#sendnewsletter) | **PUT** /v1/newsletters/{newsletter_id}/send/ | Send a newsletter.
*NewsletterApi* | [**testNewsletter**](docs/Api/NewsletterApi.md#testnewsletter) | **POST** /v1/newsletters/{newsletter_id}/send_test/ | Send a test newsletter.
*NewsletterApi* | [**updateNewsletter**](docs/Api/NewsletterApi.md#updatenewsletter) | **PATCH** /v1/newsletters/{newsletter_id}/ | Update a newsletter draft partially.
*PageApi* | [**getPageById**](docs/Api/PageApi.md#getpagebyid) | **GET** /v1/pages/{id}/ | Retrieve a landing page.
*PageApi* | [**getPages**](docs/Api/PageApi.md#getpages) | **GET** /v1/pages/ | Retrieve all landing pages.
*PageApi* | [**trackPageView**](docs/Api/PageApi.md#trackpageview) | **PATCH** /v1/pages/{id}/track/view/ | Track a view of a landing page.
*PageApi* | [**updatePage**](docs/Api/PageApi.md#updatepage) | **PATCH** /v1/pages/{id}/ | Update a landing page partially.
*SegmentApi* | [**createSegment**](docs/Api/SegmentApi.md#createsegment) | **POST** /v1/lists/{list_id}/segments/ | Create a segment in the email list.
*TemplateApi* | [**getAvailableWebComponents**](docs/Api/TemplateApi.md#getavailablewebcomponents) | **GET** /v1/templates/web_components/ | Retrieve all web components.
*TemplateApi* | [**getTemplates**](docs/Api/TemplateApi.md#gettemplates) | **GET** /v1/templates/ | Retrieve all templates.
*WebhookApi* | [**createWebhook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /v1/webhooks/ | Create a webhook.
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /v1/webhooks/{id}/ | Delete a webhook.

## Models

- [AccountSdkDetails](docs/Model/AccountSdkDetails.md)
- [AddFormSubscriber](docs/Model/AddFormSubscriber.md)
- [Automation](docs/Model/Automation.md)
- [AutomationDetail](docs/Model/AutomationDetail.md)
- [AutomationStatistics](docs/Model/AutomationStatistics.md)
- [BaseContact](docs/Model/BaseContact.md)
- [Category](docs/Model/Category.md)
- [Contact](docs/Model/Contact.md)
- [ContactList](docs/Model/ContactList.md)
- [Embed](docs/Model/Embed.md)
- [EmbedOptions](docs/Model/EmbedOptions.md)
- [Field](docs/Model/Field.md)
- [Form](docs/Model/Form.md)
- [FormConversion](docs/Model/FormConversion.md)
- [FormSubscriberContact](docs/Model/FormSubscriberContact.md)
- [GetNewsletters200Response](docs/Model/GetNewsletters200Response.md)
- [HistoricalContactsStats](docs/Model/HistoricalContactsStats.md)
- [ImportResult](docs/Model/ImportResult.md)
- [InstalledIntegration](docs/Model/InstalledIntegration.md)
- [ListDetail](docs/Model/ListDetail.md)
- [MinimalSegment](docs/Model/MinimalSegment.md)
- [ModelList](docs/Model/ModelList.md)
- [NewsletterCreation](docs/Model/NewsletterCreation.md)
- [NewsletterDetail](docs/Model/NewsletterDetail.md)
- [NewsletterSend](docs/Model/NewsletterSend.md)
- [NewsletterSendTest](docs/Model/NewsletterSendTest.md)
- [NewsletterUpdate](docs/Model/NewsletterUpdate.md)
- [Page](docs/Model/Page.md)
- [PageMeta](docs/Model/PageMeta.md)
- [Segment](docs/Model/Segment.md)
- [SegmentCreation](docs/Model/SegmentCreation.md)
- [SegmentTagPredicate](docs/Model/SegmentTagPredicate.md)
- [Statistics](docs/Model/Statistics.md)
- [Subscriber](docs/Model/Subscriber.md)
- [Template](docs/Model/Template.md)
- [TrackFormView](docs/Model/TrackFormView.md)
- [TrackPageView](docs/Model/TrackPageView.md)
- [Trigger](docs/Model/Trigger.md)
- [TriggerRule](docs/Model/TriggerRule.md)
- [User](docs/Model/User.md)
- [UserCreation](docs/Model/UserCreation.md)
- [WebComponent](docs/Model/WebComponent.md)
- [WebComponentData](docs/Model/WebComponentData.md)
- [Webhook](docs/Model/Webhook.md)

## Authorization

Authentication schemes defined for the API:
### mailmojo_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://api.mailmojo.no/oauth/authorize/`
- **Scopes**: 
    - **account**: Manage your Mailmojo account.
    - **account_creation**: Create new Mailmojo accounts.
    - **account_creation.trial_30**: Create new Mailmojo accounts with a 30 day trial period.
    - **account_settings**: Manage your Mailmojo account settings.
    - **automations**: Manage your automations.
    - **automations:read**: Retrieve your automations.
    - **contacts**: Manage your contacts across all your email lists.
    - **contacts:read**: Retrieve your contacts across all your email lists.
    - **embed**: Give you an embedded Mailmojo application with access to your account.
    - **events**: Track events on your forms and landing pages.
    - **forms**: Manage your forms.
    - **forms:read**: Retrieve your forms.
    - **lists**: Manage your email lists, excluding subscribers.
    - **lists:read**: Retrieve your email lists, excluding subscribers.
    - **newsletters**: Manage your newsletters.
    - **newsletters:read**: Retrieve your newsletters.
    - **pages**: Manage your landing pages.
    - **pages:read**: Retrieve your landing pages.
    - **subscribe**: Add subscribers to email lists.
    - **templates**: Manage your templates.
    - **templates:read**: Retrieve your templates
    - **webhooks**: Manage your webhooks.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hei@mailmojo.no

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.0`
    - Package version: `0.8.0`
    - Generator version: `7.22.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
