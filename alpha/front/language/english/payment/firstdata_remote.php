<?php
// Text
$lang['text_title']				= 'Credit or Debit Card';
$lang['text_credit_card']			= 'Credit Card Details';
$lang['text_wait']					= 'Please wait!';

// Entry
$lang['entry_cc_number']			= 'Card number';
$lang['entry_cc_name']				= 'Cardholder name';
$lang['entry_cc_expire_date']		= 'Card expiry date';
$lang['entry_cc_cvv2']				= 'Card security code (CVV2)';

// Help
$lang['help_start_date']			= '(if available)';
$lang['help_issue']				= '(for Maestro and Solo cards only)';

// Text
$lang['text_result']				= 'Result: ';
$lang['text_approval_code']		= 'Approval code: ';
$lang['text_reference_number']		= 'Reference: ';
$lang['text_card_number_ref']		= 'Card last 4 digits: xxxx ';
$lang['text_card_brand']			= 'Card brand: ';
$lang['text_response_code']		= 'Response code: ';
$lang['text_fault']				= 'Fault message: ';
$lang['text_error']				= 'Error message: ';
$lang['text_avs']					= 'Address verification: ';
$lang['text_address_ppx']			= 'No address data provided or Address not checked by the Card Issuer';
$lang['text_address_yyy']			= 'Card Issuer confirmed that street and postcode match with their records';
$lang['text_address_yna']			= 'Card Issuer confirmed that street matches with their records but postcode does not match';
$lang['text_address_nyz']			= 'Card Issuer confirmed that postcode matches with their records but street does not match';
$lang['text_address_nnn']			= 'Both street and postcode do not match with the Card Issuer records';
$lang['text_address_ypx']			= 'Card Issuer confirmed that street matches with their records. The Issuer did not check the postcode';
$lang['text_address_pyx']			= 'Card Issuer confirmed that postcode matches with their records. The Issuer did not check the street';
$lang['text_address_xxu']			= 'Card Issuer did not check the AVS information';
$lang['text_card_code_verify']		= 'Security code: ';
$lang['text_card_code_m']			= 'Card security code match';
$lang['text_card_code_n']			= 'Card security code does not match';
$lang['text_card_code_p']			= 'Not processed';
$lang['text_card_code_s']			= 'Merchant has indicated that the card security code is not present on the card';
$lang['text_card_code_u']			= 'Issuer is not certified and/or has not provided encryption keys';
$lang['text_card_code_x']			= 'No response from the credit card association was received';
$lang['text_card_code_blank']		= 'A blank response should indicate that no code was sent and that there was no indication that the code was not present on the card.';
$lang['text_card_accepted']		= 'Accepted cards: ';
$lang['text_card_type_m']			= 'Mastercard';
$lang['text_card_type_v']			= 'Visa (Credit/Debit/Electron/Delta)';
$lang['text_card_type_c']			= 'Diners';
$lang['text_card_type_a']			= 'American Express';
$lang['text_card_type_ma']			= 'Maestro';
$lang['text_card_new']				= 'New card';
$lang['text_response_proc_code']	= 'Processor code: ';
$lang['text_response_ref']			= 'Ref number: ';

// Error
$lang['error_card_number']			= 'Please check your card number is valid';
$lang['error_card_name']			= 'Please check the card holder name is valid';
$lang['error_card_cvv']			= 'Please check the CVV2 is valid';
$lang['error_failed']				= 'Unable to process your payment, please contact the merchant';