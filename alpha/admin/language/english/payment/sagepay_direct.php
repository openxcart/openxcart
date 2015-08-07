<?php
// Heading
$lang['heading_title']					= 'SagePay Direct';

// Text
$lang['text_payment']					= 'Payment';
$lang['text_success']					= 'Success: You have modified SagePay account details!';
$lang['text_edit']                     = 'Edit SagePay Direct';
$lang['text_sagepay_direct']			= '<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$lang['text_sim']						= 'Simulator';
$lang['text_test']						= 'Test';
$lang['text_live']						= 'Live';
$lang['text_defered']					= 'Defered';
$lang['text_authenticate']				= 'Authenticate';
$lang['text_release_ok']				= 'Release was successful';
$lang['text_release_ok_order']			= 'Release was successful, order status updated to success - settled';
$lang['text_rebate_ok']				= 'Rebate was successful';
$lang['text_rebate_ok_order']			= 'Rebate was successful, order status updated to rebated';
$lang['text_void_ok']					= 'Void was successful, order status updated to voided';
$lang['text_payment_info']				= 'Payment information';
$lang['text_release_status']			= 'Payment released';
$lang['text_void_status']				= 'Payment voided';
$lang['text_rebate_status']			= 'Payment rebated';
$lang['text_order_ref']				= 'Order ref';
$lang['text_order_total']				= 'Total authorised';
$lang['text_total_released']			= 'Total released';
$lang['text_transactions']				= 'Transactions';
$lang['text_column_amount']			= 'Amount';
$lang['text_column_type']				= 'Type';
$lang['text_column_date_added']		= 'Created';
$lang['text_confirm_void']				= 'Are you sure you want to void the payment?';
$lang['text_confirm_release']			= 'Are you sure you want to release the payment?';
$lang['text_confirm_rebate']			= 'Are you sure you want to rebate the payment?';

// Entry
$lang['entry_vendor']					= 'Vendor';
$lang['entry_test']					= 'Test Mode';
$lang['entry_transaction']				= 'Transaction Method';
$lang['entry_total']					= 'Total';
$lang['entry_order_status']			= 'Order Status';
$lang['entry_geo_zone']				= 'Geo Zone';
$lang['entry_status']					= 'Status';
$lang['entry_sort_order']				= 'Sort Order';
$lang['entry_debug']					= 'Debug logging';
$lang['entry_card']					= 'Store Cards';
$lang['entry_cron_job_token']			= 'Secret Token';
$lang['entry_cron_job_url']			= 'Cron Job\'s URL';
$lang['entry_last_cron_job_run']		= 'Last cron job\'s run time:';

// Help
$lang['help_total']					= 'The checkout total the order must reach before this payment method becomes active.';
$lang['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$lang['help_transaction']				= 'Transaction method MUST be set to Payment to allow subscription payments';
$lang['help_cron_job_token']			= 'Make this long and hard to guess';
$lang['help_cron_job_url']				= 'Set a cron job to call this URL';

// Button
$lang['btn_release']					= 'Release';
$lang['btn_rebate']					= 'Rebate / refund';
$lang['btn_void']						= 'Void';

// Error
$lang['error_permission']				= 'Warning: You do not have permission to modify payment SagePay!';
$lang['error_vendor']					= 'Vendor ID Required!';