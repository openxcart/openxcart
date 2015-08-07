<?php
// Heading
$lang['heading_title']                     = 'Item import';
$lang['text_openbay']                      = 'OpenBay Pro';
$lang['text_ebay']                         = 'eBay';

// Text
$lang['text_sync_import_line1']            = '<strong>Caution!</strong> This will import all of your eBay products and build a category structure in your store. It is advised that you delete all categories and products before you run this option. <br />The category structure is from the normal eBay categories, not your shop categories (if you have an eBay shop). You can rename, remove and edit the imported categories without affecting your eBay products.';
$lang['text_sync_import_line3']            = 'You need to ensure your server can accept and process large POST data sizes. 1000 eBay items is about 40Mb in size, you will need to calculate what you require. If your call fails then it is likely your setting is too small. Your PHP memory limit needs to be about 128Mb.';
$lang['text_sync_server_size']             = 'Currently your server can accept: ';
$lang['text_sync_memory_size']             = 'Your PHP memory limit: ';
$lang['text_import_confirm']				= 'This will import all of your eBay items as new products, are you sure? This CAN NOT be undone! ENSURE you have a backup first!';
$lang['text_import_notify']				= 'Your import request has been sent for processing. An import takes about 1 hour per 1000 items.';
$lang['text_import_images_msg1']           = 'images are pending import/copy from eBay. Refresh this page, if the number does not decrease then';
$lang['text_import_images_msg2']           = 'click here';
$lang['text_import_images_msg3']           = 'and wait. More information about why this happened can be found <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">here</a>';

// Entry
$lang['entry_import_item_advanced']        = 'Get advanced data';
$lang['entry_import_categories']         	= 'Import categories';
$lang['entry_import_description']			= 'Import item descriptions';
$lang['entry_import']						= 'Import eBay items';

// Buttons
$lang['button_import']						= 'Import';
$lang['button_complete']					= 'Complete';

// Help
$lang['help_import_item_advanced']        	= 'Will take up to 10 times longer to import items. Imports weights, sizes, ISBN and more if available';
$lang['help_import_categories']         	= 'Builds a category structure in your store from the eBay categories';
$lang['help_import_description']         	= 'This will import everything including HTML, visit counters etc';

// Error
$lang['error_import']                   	= 'Failed to load';
$lang['error_maintenance']					= 'Your store is in maintenance mode. Importing will fail!';
$lang['error_ajax_load']					= 'Failed to connect to server';
$lang['error_validation']					= 'You need to register for your API token and enable the module.';