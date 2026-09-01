# PaymentDisputeOutcomeDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fees** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container will show the dollar value of any fees associated with the payment dispute. This container is only returned if there are fees associated with the payment dispute. | [optional]
**protected_amount** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container shows the amount of money that the seller is protected against in a payment dispute under eBay&#39;s seller protection policy. | [optional]
**protection_status** | [**\eBay\Sell\Fulfillment\Model\ProtectionStatusEnum**](ProtectionStatusEnum.md) | This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. | [optional]
**reason_for_closure** | [**\eBay\Sell\Fulfillment\Model\OutcomeEnum**](OutcomeEnum.md) | The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. | [optional]
**recoup_amount** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container shows the dollar amount being recouped from the seller. This container is empty if the seller wins the payment dispute or if the seller is fully protected by eBay&#39;s seller protection policy. | [optional]
**total_fee_credit** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container shows the amount of money in selling fee credits due back to the seller after a payment dispute is settled. | [optional]
**donation_credit_amount** | [**\eBay\Sell\Fulfillment\Model\SimpleAmount**](SimpleAmount.md) | This container shows the amount of money in donation credits. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
