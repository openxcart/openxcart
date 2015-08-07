<?php
// Heading
$lang['heading_title']					= 'Realex Remote';

// Text
$lang['text_payment']					= 'Payment';
$lang['text_success']					= 'Success: You have modified Realex account details!';
$lang['text_edit']                     = 'Edit Realex Remote';
$lang['text_card_type']				= 'Card type';
$lang['text_enabled']					= 'Enabled';
$lang['text_use_default']				= 'Use default';
$lang['text_merchant_id']				= 'Merchant ID';
$lang['text_subaccount']				= 'Sub Account';
$lang['text_secret']					= 'Shared secret';
$lang['text_card_visa']				= 'Visa';
$lang['text_card_master']				= 'Mastercard';
$lang['text_card_amex']				= 'American Express';
$lang['text_card_switch']				= 'Switch/Maestro';
$lang['text_card_laser']				= 'Laser';
$lang['text_card_diners']				= 'Diners';
$lang['text_capture_ok']				= 'Capture was successful';
$lang['text_capture_ok_order']			= 'Capture was successful, order status updated to success - settled';
$lang['text_rebate_ok']				= 'Rebate was successful';
$lang['text_rebate_ok_order']			= 'Rebate was successful, order status updated to rebated';
$lang['text_void_ok']					= 'Void was successful, order status updated to voided';
$lang['text_settle_auto']				= 'Auto';
$lang['text_settle_delayed']			= 'Delayed';
$lang['text_settle_multi']				= 'Multi';
$lang['text_ip_message']				= 'You must supply your server IP address to your Realex account manager before going live';
$lang['text_payment_info']				= 'Payment information';
$lang['text_capture_status']			= 'Payment captured';
$lang['text_void_status']				= 'Payment voided';
$lang['text_rebate_status']			= 'Payment rebated';
$lang['text_order_ref']				= 'Order ref';
$lang['text_order_total']				= 'Total authorised';
$lang['text_total_captured']			= 'Total captured';
$lang['text_transactions']				= 'Transactions';
$lang['text_confirm_void']				= 'Are you sure you want to void the payment?';
$lang['text_confirm_capture']			= 'Are you sure you want to capture the payment?';
$lang['text_confirm_rebate']			= 'Are you sure you want to rebate the payment?';
$lang['text_realex_remote']			= '<a target="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$lang['text_column_amount']			= 'Amount';
$lang['text_column_type']				= 'Type';
$lang['text_column_date_added']		= 'Created';

// Entry
$lang['entry_merchant_id']				= 'Merchant ID';
$lang['entry_secret']					= 'Shared secret';
$lang['entry_rebate_password']			= 'Rebate password';
$lang['entry_total']					= 'Total';
$lang['entry_sort_order']				= 'Sort order';
$lang['entry_geo_zone']				= 'Geo zone';
$lang['entry_status']					= 'Status';
$lang['entry_debug']					= 'Debug logging';
$lang['entry_auto_settle']				= 'Settlement type';
$lang['entry_tss_check']				= 'TSS checks';
$lang['entry_card_data_status']		= 'Card info logging';
$lang['entry_3d']						= 'Enable 3D secure';
$lang['entry_liability_shift']			= 'Accept non-liability shifting scenarios';
$lang['entry_status_success_settled']	= 'Success - settled';
$lang['entry_status_success_unsettled'] = 'Success - not settled';
$lang['entry_status_decline']			= 'Decline';
$lang['entry_status_decline_pending']	= 'Decline - offline auth';
$lang['entry_status_decline_stolen']	= 'Decline - lost or stolen card';
$lang['entry_status_decline_bank']		= 'Decline - bank error';
$lang['entry_status_void']				= 'Voided';
$lang['entry_status_rebate']			= 'Rebated';

// Help
$lang['help_total']					= 'The checkout total the order must reach before this payment method becomes active';
$lang['help_card_select']				= 'Ask the user to choose thier card type before they are redirected';
$lang['help_notification']				= 'You need to supply this URL to Realex to get payment notifications';
$lang['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise.';
$lang['help_liability']				= 'Accepting liability means you will still accept payments when a user fails 3D secure.';
$lang['help_card_data_status']			= 'Logs last 4 cards digits, expire, name, type and issuing bank information';

// Tab
$lang['tab_api']					    = 'API Details';
$lang['tab_account']				    = 'Accounts';
$lang['tab_order_status']				= 'Order Status';
$lang['tab_payment']					= 'Payment Settings';

// Button
$lang['button_capture']				= 'Capture';
$lang['button_rebate']					= 'Rebate / refund';
$lang['button_void']					= 'Void';

// Error
$lang['error_merchant_id']				= 'Merchant ID is required';
$lang['error_secret']					= 'Shared secret is required';