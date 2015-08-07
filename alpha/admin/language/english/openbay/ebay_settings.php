<?php
// Heading
$lang['heading_title']        			= 'Marketplace settings';
$lang['text_openbay']					= 'OpenBay Pro';
$lang['text_ebay']						= 'eBay';

// Text
$lang['text_developer']				= 'Developer / support';
$lang['text_app_settings']				= 'Application settings';
$lang['text_default_import']			= 'Default import settings';
$lang['text_payments']					= 'Payments';
$lang['text_notify_settings']			= 'Notification settings';
$lang['text_listing']					= 'Listing defaults';
$lang['text_token_register']			= 'Register for your eBay token';
$lang['text_token_renew']				= 'Renew your eBay token';
$lang['text_application_settings']		= 'Your application settings allow you to configure the way OpenBay Pro works and integrates with your core.';
$lang['text_import_description']		= 'Customise the status of an order during different stages. You cannot use a status on an eBay order that does not exist in this list.';
$lang['text_payments_description']		= 'Pre populate your payment options for new listings, this will save you entering them for every new listing you create.';
$lang['text_allocate_1']				= 'When customer buys';
$lang['text_allocate_2']				= 'When customer had paid';
$lang['text_developer_description']	= 'You should not use this area unless instructed to do so';
$lang['text_payment_paypal']			= 'PayPal accepted';
$lang['text_payment_paypal_add']		= 'PayPal email address';
$lang['text_payment_cheque']			= 'Cheque accepted';
$lang['text_payment_card']				= 'Cards accepted';
$lang['text_payment_desc']				= 'See description (e.g. bank transfer)';
$lang['text_tax_use_listing'] 			= 'Use tax rate set in eBay listing';
$lang['text_tax_use_value']			= 'Use a set value for everything';
$lang['text_notifications']			= 'Control when customers receive notifications from the application. Enabling update emails can improve your DSR ratings as the user will get updates about their order.';
$lang['text_listing_1day']             = '1 day';
$lang['text_listing_3day']             = '3 days';
$lang['text_listing_5day']             = '5 days';
$lang['text_listing_7day']             = '7 days';
$lang['text_listing_10day']            = '10 days';
$lang['text_listing_30day']            = '30 days';
$lang['text_listing_gtc']              = 'GTC- Good till cancelled';
$lang['text_api_status']               = 'API connection status';
$lang['text_api_ok']                   = 'Connection OK, token expires';
$lang['text_api_failed']               = 'Validation failed';
$lang['text_api_other']        		= 'Other actions';
$lang['text_create_date_0']            = 'When added to OpenCart';
$lang['text_create_date_1']            = 'When created on eBay';
$lang['text_obp_detail_update']        = 'Update your store URL &amp; contact email';
$lang['text_success']					= 'Your settings have been saved';
$lang['text_edit']						= 'Edit eBay settings';

// Entry
$lang['entry_status']					= 'Status';
$lang['entry_token']					= 'Token';
$lang['entry_secret']					= 'Secret';
$lang['entry_string1']					= 'Encryption string 1';
$lang['entry_string2']					= 'Encryption string 2';
$lang['entry_end_items']				= 'End items?';
$lang['entry_relist_items']			= 'Relist when back in stock?';
$lang['entry_disable_soldout']			= 'Disable product when no stock?';
$lang['entry_debug']					= 'Enable logging';
$lang['entry_currency']				= 'Default currency';
$lang['entry_stock_allocate']			= 'Allocate stock';
$lang['entry_created_hours']			= 'New order age limit';
$lang['entry_developer_locks']			= 'Remove order locks?';
$lang['entry_payment_instruction']		= 'Payment instructions';
$lang['entry_payment_immediate']		= 'Immediate payment required';
$lang['entry_payment_types']			= 'Payment types';
$lang['entry_brand_disable']			= 'Disable brand link';
$lang['entry_duration']				= 'Default listing duration';
$lang['entry_measurement']				= 'Measurement core';
$lang['entry_address_format']			= 'Default address format';
$lang['entry_timezone_offset']			= 'Timezone offset';
$lang['entry_tax_listing']				= 'Product tax';
$lang['entry_tax']						= 'Tax % used for everything';
$lang['entry_create_date']				= 'Created date for new orders';
$lang['entry_notify_order_update']		= 'Order updates';
$lang['entry_notify_buyer']			= 'New order - buyer';
$lang['entry_notify_admin']			= 'New order - admin';
$lang['entry_import_pending']			= 'Import unpaid orders:';
$lang['entry_import_def_id']			= 'Import default status:';
$lang['entry_import_paid_id']			= 'Paid status:';
$lang['entry_import_shipped_id']		= 'Shipped status:';
$lang['entry_import_cancelled_id']		= 'Cancelled status:';
$lang['entry_import_refund_id']		= 'Refunded status:';
$lang['entry_import_part_refund_id']	= 'Partially refunded status:';

// Tabs
$lang['tab_api_info']					= 'API details';
$lang['tab_setup']						= 'Settings';
$lang['tab_defaults']					= 'Listing defaults';

// Help
$lang['help_disable_soldout']			= 'When the item sells out it then disables the product in OpenCart';
$lang['help_relist_items'] 			= 'If an item link existed before it will relist previous item if back in stock';
$lang['help_end_items']    			= 'If items sell out, should the listing be ended on eBay?';
$lang['help_currency']     			= 'Based on currencies from your store';
$lang['help_created_hours']   			= 'Orders are new when younger than this limit (in hours). Default is 72';
$lang['help_stock_allocate'] 			= 'When should stock be allocated from the store?';
$lang['help_payment_instruction']  	= 'Be as descriptive as possible. Do you require payment within a certain time? Do they call to pay by card? Do you have any special payment terms?';
$lang['help_payment_immediate'] 		= 'Immediate payment stops unpaid buyers, as an item is not sold until they pay.';
$lang['help_listing_tax']     			= 'If you use the rate from listings ensure your items have the correct tax in eBay';
$lang['help_tax']             			= 'Used when you import items or orders';
$lang['help_duration']    				= 'GTC is only available is you have an eBay shop.';
$lang['help_address_format']      		= 'Only used if the country does not have an address format set-up already.';
$lang['help_create_date']         		= 'Choose which created time will appear on an order when it is imported';
$lang['help_timezone_offset']     		= 'Based on hours. 0 is GMT timezone. Only works if eBay time is used for order creation.';
$lang['help_notify_admin']   			= 'Notify the store admin with the default new order email';
$lang['help_notify_order_update']		= 'This is for automated updates, for example if you update an order in eBay and the new status is updated in your store automatically.';
$lang['help_notify_buyer']        		= 'Notify the user with the default new order email';
$lang['help_measurement']        		= 'Choose what measurement core you want to use for listings';

// Buttons
$lang['button_update']             	= 'Update';
$lang['button_repair_links']    		= 'Repair item links';

// Error
$lang['error_api_connect']         	= 'Failed to connect to the API';