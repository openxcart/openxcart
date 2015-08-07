<?php
// Text
$lang['text_title']				= 'Credit or Debit Card';
$lang['text_credit_card']			= 'Credit Card Details';
$lang['text_wait']					= 'Please wait!';
$lang['text_result']				= 'Result';
$lang['text_message']				= 'Message';
$lang['text_cvn_result']			= 'CVN result';
$lang['text_avs_postcode']			= 'AVS postcode';
$lang['text_avs_address']			= 'AVS address';
$lang['text_eci']					= 'ECI (3D secure) result';
$lang['text_tss']					= 'TSS result';
$lang['text_card_bank']			= 'Card issue bank';
$lang['text_card_country']			= 'Card country';
$lang['text_card_region']			= 'Card region';
$lang['text_last_digits']			= 'Last 4 digits';
$lang['text_order_ref']			= 'Order ref';
$lang['text_timestamp']			= 'Timestamp';
$lang['text_card_visa']			= 'Visa';
$lang['text_card_mc']				= 'Mastercard';
$lang['text_card_amex']			= 'American Express';
$lang['text_card_switch']			= 'Switch';
$lang['text_card_laser']			= 'Laser';
$lang['text_card_diners']			= 'Diners';
$lang['text_auth_code']			= 'Auth code';
$lang['text_3d_s1']				= 'Cardholder Not Enrolled, liability shift';
$lang['text_3d_s2']				= 'Unable To Verify Enrolment, no liability shift';
$lang['text_3d_s3']				= 'Invalid Response From Enrolment Server, no liability shift';
$lang['text_3d_s4']				= 'Enrolled, But Invalid Response From ACS (Access Control Server), no liability shift';
$lang['text_3d_s5']				= 'Successful Authentication, liability shift';
$lang['text_3d_s6']				= 'Authentication Attempt Acknowledged, liability shift';
$lang['text_3d_s7']				= 'Incorrect Password Entered, no liability shift';
$lang['text_3d_s8']				= 'Authentication Unavailable, no liability shift';
$lang['text_3d_s9']				= 'Invalid Response From ACS, no liability shift';
$lang['text_3d_s10']				= 'RealMPI Fatal Error, no liability shift';

// Entry
$lang['entry_cc_type']				= 'Card type';
$lang['entry_cc_number']			= 'Card number';
$lang['entry_cc_name']				= 'Cardholder name';
$lang['entry_cc_expire_date']		= 'Card expiry date';
$lang['entry_cc_cvv2']				= 'Card security code (CVV2)';
$lang['entry_cc_issue']			= 'Card issue number';

// Help
$lang['help_start_date']			= '(if available)';
$lang['help_issue']				= '(for Maestro and Solo cards only)';

// Error
$lang['error_card_number']			= 'Please check your card number is valid';
$lang['error_card_name']			= 'Please check the card holder name is valid';
$lang['error_card_cvv']			= 'Please check the CVV2 is valid';
$lang['error_3d_unable']			= 'Merchant requires 3D secure but unable to verify with your bank, please try later';
$lang['error_3d_500_response_no_payment'] = 'An invalid response was received from the card processor, no payment has been taken';
$lang['error_3d_unsuccessful']		= '3D secure authorisation failed';