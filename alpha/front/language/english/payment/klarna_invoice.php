<?php
// Text
$lang['text_title']				= 'Klarna Invoice - Pay within 14 days';
$lang['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$lang['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$lang['text_additional']			= 'Klarna Invoice requires some additional information before they can proccess your order.';
$lang['text_male']					= 'Male';
$lang['text_female']				= 'Female';
$lang['text_year']					= 'Year';
$lang['text_month']				= 'Month';
$lang['text_day']					= 'Day';
$lang['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$lang['entry_gender']				= 'Gender';
$lang['entry_pno']					= 'Personal Number';
$lang['entry_dob']					= 'Date of Birth';
$lang['entry_phone_no']			= 'Phone number';
$lang['entry_street']				= 'Street';
$lang['entry_house_no']			= 'House No.';
$lang['entry_house_ext']			= 'House Ext.';
$lang['entry_company']				= 'Company Registration Number';

// Help
$lang['help_pno']					= 'Please enter your Social Security number here.';
$lang['help_phone_no']				= 'Please enter your phone number.';
$lang['help_street']				= 'Please note that delivery can only take place to the registered address when paying with Klarna.';
$lang['help_house_no']				= 'Please enter your house number.';
$lang['help_house_ext']			= 'Please submit your house extension here. E.g. A, B, C, Red, Blue ect.';
$lang['help_company']				= 'Please enter your Company\'s registration number';

// Error
$lang['error_deu_terms']			= 'You must agree to Klarna\'s privacy policy (Datenschutz)';
$lang['error_address_match']		= 'Billing and Shipping addresses must match if you want to use Klarna Invoice';
$lang['error_network']				= 'Error occurred while connecting to Klarna. Please try again later.';