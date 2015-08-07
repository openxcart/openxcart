<?php
// Heading
$lang['heading_title']					 = 'First Data EMEA Connect (3DSecure enabled)';

// Text
$lang['text_payment']					 = 'Payment';
$lang['text_success']					 = 'Success: You have modified First Data account details!';
$lang['text_edit']                      = 'Edit First Data EMEA Connect (3DSecure enabled)';
$lang['text_notification_url']			 = 'Notification URL';
$lang['text_live']						 = 'Live';
$lang['text_demo']						 = 'Demo';
$lang['text_enabled']					 = 'Enabled';
$lang['text_merchant_id']				 = 'Store ID';
$lang['text_secret']					 = 'Shared secret';
$lang['text_capture_ok']				 = 'Capture was successful';
$lang['text_capture_ok_order']			 = 'Capture was successful, order status updated to success - settled';
$lang['text_void_ok']					 = 'Void was successful, order status updated to voided';
$lang['text_settle_auto']				 = 'Sale';
$lang['text_settle_delayed']			 = 'Pre auth';
$lang['text_success_void']				 = 'Transaction has been voided';
$lang['text_success_capture']			 = 'Transaction has been captured';
$lang['text_firstdata']				 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$lang['text_payment_info']				 = 'Payment information';
$lang['text_capture_status']			 = 'Payment captured';
$lang['text_void_status']				 = 'Payment voided';
$lang['text_order_ref']				 = 'Order ref';
$lang['text_order_total']				 = 'Total authorised';
$lang['text_total_captured']			 = 'Total captured';
$lang['text_transactions']				 = 'Transactions';
$lang['text_column_amount']			 = 'Amount';
$lang['text_column_type']				 = 'Type';
$lang['text_column_date_added']		 = 'Created';
$lang['text_confirm_void']				 = 'Are you sure you want to void the payment?';
$lang['text_confirm_capture']			 = 'Are you sure you want to capture the payment?';

// Entry
$lang['entry_merchant_id']				 = 'Store ID';
$lang['entry_secret']					 = 'Shared secret';
$lang['entry_total']					 = 'Total';
$lang['entry_sort_order']				 = 'Sort order';
$lang['entry_geo_zone']				 = 'Geo zone';
$lang['entry_status']					 = 'Status';
$lang['entry_debug']					 = 'Debug logging';
$lang['entry_live_demo']				 = 'Live / Demo';
$lang['entry_auto_settle']			  	 = 'Settlement type';
$lang['entry_card_select']				 = 'Select card';
$lang['entry_tss_check']				 = 'TSS checks';
$lang['entry_live_url']				 = 'Live connection URL';
$lang['entry_demo_url']				 = 'Demo connection URL';
$lang['entry_status_success_settled']	 = 'Success - settled';
$lang['entry_status_success_unsettled'] = 'Success - not settled';
$lang['entry_status_decline']		 	 = 'Decline';
$lang['entry_status_void']				 = 'Voided';
$lang['entry_enable_card_store']		 = 'Enable card storage tokens';

// Help
$lang['help_total']					 = 'The checkout total the order must reach before this payment method becomes active';
$lang['help_notification']				 = 'You need to supply this URL to First Data to get payment notifications';
$lang['help_debug']					 = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$lang['help_settle']					 = 'If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped'; 

// Tab
$lang['tab_account']					 = 'API info';
$lang['tab_order_status']				 = 'Order status';
$lang['tab_payment']					 = 'Payment settings';
$lang['tab_advanced']					 = 'Advanced';

// Button
$lang['button_capture']				 = 'Capture';
$lang['button_void']					 = 'Void';

// Error
$lang['error_merchant_id']				 = 'Store ID is required';
$lang['error_secret']					 = 'Shared secret is required';
$lang['error_live_url']				 = 'Live URL is required';
$lang['error_demo_url']				 = 'Demo URL is required';
$lang['error_data_missing']			 = 'Data missing';
$lang['error_void_error']				 = 'Unable to void transaction';
$lang['error_capture_error']			 = 'Unable to capture transaction';