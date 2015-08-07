<?php
// Heading
$lang['heading_title']					 = 'First Data EMEA Web Service API';

// Text
$lang['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$lang['text_payment']					 = 'Payment';
$lang['text_success']					 = 'Success: You have modified First Data account details!';
$lang['text_edit']                      = 'Edit First Data EMEA Web Service API';
$lang['text_card_type']				 = 'Card type';
$lang['text_enabled']					 = 'Enabled';
$lang['text_merchant_id']				 = 'Store ID';
$lang['text_subaccount']				 = 'Subaccount';
$lang['text_user_id']					 = 'User ID';
$lang['text_capture_ok']				 = 'Capture was successful';
$lang['text_capture_ok_order']			 = 'Capture was successful, order status updated to success - settled';
$lang['text_refund_ok']				 = 'Refund was successful';
$lang['text_refund_ok_order']			 = 'Refund was successful, order status updated to refunded';
$lang['text_void_ok']					 = 'Void was successful, order status updated to voided';
$lang['text_settle_auto']				 = 'Sale';
$lang['text_settle_delayed']			 = 'Pre auth';
$lang['text_mastercard']				 = 'Mastercard';
$lang['text_visa']						 = 'Visa';
$lang['text_diners']					 = 'Diners';
$lang['text_amex']						 = 'American Express';
$lang['text_maestro']					 = 'Maestro';
$lang['text_payment_info']				 = 'Payment information';
$lang['text_capture_status']			 = 'Payment captured';
$lang['text_void_status']				 = 'Payment voided';
$lang['text_refund_status']			 = 'Payment refunded';
$lang['text_order_ref']				 = 'Order ref';
$lang['text_order_total']				 = 'Total authorised';
$lang['text_total_captured']			 = 'Total captured';
$lang['text_transactions']				 = 'Transactions';
$lang['text_column_amount']			 = 'Amount';
$lang['text_column_type']				 = 'Type';
$lang['text_column_date_added']		 = 'Created';
$lang['text_confirm_void']				 = 'Are you sure you want to void the payment?';
$lang['text_confirm_capture']			 = 'Are you sure you want to capture the payment?';
$lang['text_confirm_refund']			 = 'Are you sure you want to refund the payment?';

// Entry
$lang['entry_certificate_path']		 = 'Certificate path';
$lang['entry_certificate_key_path']	 = 'Private key path';
$lang['entry_certificate_key_pw']		 = 'Private key password';
$lang['entry_certificate_ca_path']		 = 'CA path';
$lang['entry_merchant_id']				 = 'Store ID';
$lang['entry_user_id']					 = 'User ID';
$lang['entry_password']				 = 'Password';
$lang['entry_total']					 = 'Total';
$lang['entry_sort_order']				 = 'Sort order';
$lang['entry_geo_zone']				 = 'Geo zone';
$lang['entry_status']					 = 'Status';
$lang['entry_debug']					 = 'Debug logging';
$lang['entry_auto_settle']				 = 'Settlement type';
$lang['entry_status_success_settled']	 = 'Success - settled';
$lang['entry_status_success_unsettled'] = 'Success - not settled';
$lang['entry_status_decline']			 = 'Decline';
$lang['entry_status_void']				 = 'Voided';
$lang['entry_status_refund']			 = 'Refunded';
$lang['entry_enable_card_store']		 = 'Enable card storage tokens';
$lang['entry_cards_accepted']			 = 'Card types accepted';

// Help
$lang['help_total']					 = 'The checkout total the order must reach before this payment method becomes active';
$lang['help_certificate']				 = 'Certificates and private keys should be stored outside of your public web folders';
$lang['help_card_select']				 = 'Ask the user to choose thier card type before they are redirected';
$lang['help_notification']				 = 'You need to supply this URL to First Data to get payment notifications';
$lang['help_debug']					 = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise .';
$lang['help_settle']					 = 'If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped';

// Tab
$lang['tab_account']					 = 'API info';
$lang['tab_order_status']				 = 'Order status';
$lang['tab_payment']					 = 'Payment settings';

// Button
$lang['button_capture']				= 'Capture';
$lang['button_refund']					= 'Refund';
$lang['button_void']					= 'Void';

// Error
$lang['error_merchant_id']				= 'Store ID is required';
$lang['error_user_id']					= 'User ID is required';
$lang['error_password']				= 'Password is required';
$lang['error_certificate']				= 'Certificate path is required';
$lang['error_key']						= 'Certificate key is required';
$lang['error_key_pw']					= 'Certificate key password is required';
$lang['error_ca']						= 'Certificate Authority (CA) is required';