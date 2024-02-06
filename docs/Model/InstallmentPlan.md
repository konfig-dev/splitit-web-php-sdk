# # InstallmentPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installment_plan_number** | **string** |  | [optional]
**installment_plan_status** | [**\Splitit\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional]
**amount** | [**\Splitit\Model\Money**](Money.md) |  | [optional]
**outstanding_amount** | [**\Splitit\Model\Money**](Money.md) |  | [optional]
**disputes** | [**\Splitit\Model\Disputes**](Disputes.md) |  | [optional]
**number_of_installments** | **int** |  |
**number_of_processed_installments** | **int** |  |
**original_amount** | [**\Splitit\Model\Money**](Money.md) |  | [optional]
**refund_amount** | [**\Splitit\Model\Money**](Money.md) |  | [optional]
**consumer** | [**\Splitit\Model\ConsumerData**](ConsumerData.md) |  | [optional]
**active_card** | [**\Splitit\Model\CardData2**](CardData2.md) |  | [optional]
**fraud_check** | [**\Splitit\Model\FraudCheck**](FraudCheck.md) |  | [optional]
**terminal** | [**\Splitit\Model\TerminalRef**](TerminalRef.md) |  | [optional]
**merchant** | [**\Splitit\Model\MerchantRef**](MerchantRef.md) |  | [optional]
**ref_order_number** | **string** |  | [optional]
**purchase_method** | [**\Splitit\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional]
**strategy** | [**\Splitit\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional]
**delay_resolution** | [**\Splitit\Model\ReferenceEntityBase**](ReferenceEntityBase.md) |  | [optional]
**extended_params** | **array<string,string>** |  | [optional]
**is_full_captured** | **bool** |  |
**is_charged_back** | **bool** |  |
**are_payments_on_hold** | **bool** |  |
**scp_funding_percent** | **float** |  |
**funding_status** | [**\Splitit\Model\MoneyFlows**](MoneyFlows.md) |  |
**test_mode** | [**\Splitit\Model\TestModes**](TestModes.md) |  |
**creation_date_time** | **\DateTime** |  |
**life_time_url_expiration_time** | **\DateTime** |  |
**installments** | [**\Splitit\Model\Installment2[]**](Installment2.md) |  | [optional]
**secure_authorizations** | [**\Splitit\Model\ReAuthorization[]**](ReAuthorization.md) |  | [optional]
**logo_url** | **string** |  | [optional]
**is_in_auto_retry** | **bool** |  |
**payment_method** | **string** |  | [optional]
**allow_card_update_on_splitit_portals** | **bool** |  |
**on_hold_last_open_date** | **\DateTime** |  | [optional]
**on_hold_last_open_user_id** | **string** |  | [optional]
**installments_schedule_interval** | **int** |  |
**external_payment_provider** | [**\Splitit\Model\ExternalProviderTypes**](ExternalProviderTypes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
