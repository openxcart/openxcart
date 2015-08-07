<?php
//Headings
$lang['heading_title']                 = 'Login and Pay with Amazon';

//Text
$lang['text_success']                  = 'Login and Pay with Amazon module has been updated';
$lang['text_ipn_url']					= 'Cron Job\'s URL';
$lang['text_ipn_token']				= 'Secret Token';
$lang['text_us']						= 'US';
$lang['text_germany']                  = 'Germany';
$lang['text_uk']                       = 'United Kingdom';
$lang['text_live']                     = 'Live';
$lang['text_sandbox']                  = 'Sandbox';
$lang['text_auth']						= 'Authorization';
$lang['text_payment']                  = 'Payment';
$lang['text_no_capture']               = '--- No Automatic Capture ---';
$lang['text_all_geo_zones']            = 'All Geo Zones';
$lang['text_button_settings']          = 'Checkout Button Settings';
$lang['text_colour']                   = 'Colour';
$lang['text_orange']                   = 'Orange';
$lang['text_tan']                      = 'Tan';
$lang['text_white']                    = 'White';
$lang['text_light']                    = 'Light';
$lang['text_dark']                     = 'Dark';
$lang['text_size']                     = 'Size';
$lang['text_medium']                   = 'Medium';
$lang['text_large']                    = 'Large';
$lang['text_x_large']                  = 'Extra large';
$lang['text_background']               = 'Background';
$lang['text_edit']						= 'Edit Login and Pay with Amazon';
$lang['text_amazon_login_pay']         = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Sign-up to Login and Pay with Amazon"><img src="view/image/payment/amazon.png" alt="Login and Pay with Amazon" title="Login and Pay with Amazon" style="border: 1px solid #EEEEEE;" /></a>';
$lang['text_amazon_join']              = '<a href="http://go.amazonservices.com/opencart.html" target="_blank" title="Sign-up to Login and Pay with Amazon"><u>Sign-up to Login and Pay with Amazon</u></a>';
$lang['entry_login_pay_test']          = 'Test mode';
$lang['entry_login_pay_mode']          = 'Payment mode';
$lang['text_payment_info']				= 'Payment information';
$lang['text_capture_ok']				= 'Capture was successful';
$lang['text_capture_ok_order']			= 'Capture was successful, authorization has been fully captured';
$lang['text_refund_ok']				= 'Refund was successfully requested';
$lang['text_refund_ok_order']			= 'Refund was successfully requested, amount fully refunded';
$lang['text_cancel_ok']				= 'Cancel was successful, order status updated to canceled';
$lang['text_capture_status']			= 'Payment captured';
$lang['text_cancel_status']			= 'Payment canceled';
$lang['text_refund_status']			= 'Payment refunded';
$lang['text_order_ref']				= 'Order ref';
$lang['text_order_total']				= 'Total authorized';
$lang['text_total_captured']			= 'Total captured';
$lang['text_transactions']				= 'Transactions';
$lang['text_column_authorization_id']	= 'Amazon Authorization ID';
$lang['text_column_capture_id']		= 'Amazon Capture ID';
$lang['text_column_refund_id']			= 'Amazon Refund ID';
$lang['text_column_amount']			= 'Amount';
$lang['text_column_type']				= 'Type';
$lang['text_column_status']			= 'Status';
$lang['text_column_date_added']		= 'Date added';
$lang['text_confirm_cancel']			= 'Are you sure you want to cancel the payment?';
$lang['text_confirm_capture']			= 'Are you sure you want to capture the payment?';
$lang['text_confirm_refund']			= 'Are you sure you want to refund the payment?';
$lang['text_minimum_total']            = 'Minimum Order Total';
$lang['text_geo_zone']                 = 'Geo Zone';
$lang['text_status']                   = 'Status';
$lang['text_declined_codes']           = 'Test Decline Codes';
$lang['text_sort_order']               = 'Sort Order';
$lang['text_amazon_invalid']           = 'InvalidPaymentMethod';
$lang['text_amazon_rejected']          = 'AmazonRejected';
$lang['text_amazon_timeout']           = 'TransactionTimedOut';
$lang['text_amazon_no_declined']       = '--- No Automatic Declined Authorization ---';

// Columns
$lang['column_status']                 = 'Status';

//entry
$lang['entry_merchant_id']             = 'Merchant ID';
$lang['entry_access_key']              = 'Access Key';
$lang['entry_access_secret']           = 'Secret Key';
$lang['entry_client_id']               = 'Client ID';
$lang['entry_client_secret']           = 'Client Secret';
$lang['entry_marketplace']             = 'Marketplace';
$lang['entry_capture_status']          = 'Automatic capture status';
$lang['entry_pending_status']          = 'Pending Order Status';
$lang['entry_ipn_url']					= 'IPN\'s URL';
$lang['entry_ipn_token']				= 'Secret Token';
$lang['entry_debug']					= 'Debug logging';


// Help
$lang['help_pay_mode']					= 'Payment is only available for US marketplace';
$lang['help_capture_status']			= 'Choose order staus that will trigger automatic capture of an authorized payment';
$lang['help_ipn_url']					= 'Set this as you merhcant URL in Amazon Seller Central';
$lang['help_ipn_token']				= 'Make this long and hard to guess';
$lang['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$lang['help_declined_codes']			= 'This is for testing purposes only';

// Order Info
$lang['tab_order_adjustment']          = 'Order Adjustment';

// Errors
$lang['error_permission']              = 'You do not have permissions to modify this module';
$lang['error_merchant_id']			    = 'Merchant ID is required';
$lang['error_access_key']			    = 'Access Key is required';
$lang['error_access_secret']		    = 'Secret Key is required';
$lang['error_client_id']			    = 'Client ID is required';
$lang['error_client_secret']			= 'Client Key is required';
$lang['error_pay_mode']				= 'Payment is only available for US marketplace';
$lang['error_curreny']                 = 'Your shop must have %s currency installed and enabled';
$lang['error_upload']                  = 'Upload failed';
$lang['error_data_missing'] 			= 'Required data is missing';

// Buttons
$lang['button_capture']				= 'Capture';
$lang['button_refund']					= 'Refund';
$lang['button_cancel']					= 'Cancel';
