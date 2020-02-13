<?php
/**
 * Instruction:
 *
 * 1. Replace the APIKEY with your API Key.
 * 2. OPTIONAL: Replace the COLLECTION with your Collection ID.
 * 3. Replace the X_SIGNATURE with your X Signature Key
 * 4. Replace the http://www.google.com/ with your FULL PATH TO YOUR WEBSITE. It must be end with trailing slash "/".
 * 5. Replace the http://www.google.com/success.html with your FULL PATH TO YOUR SUCCESS PAGE. *The URL can be overridden later
 * 6. OPTIONAL: Set $amount value.
 * 7. OPTIONAL: Set $fallbackurl if the user are failed to be redirected to the Billplz Payment Page.
 *
 */
include 'trahsia.php';
$api_key = BILLPLZ_API_KEY;//'APIKEY';
$collection_id = BILL_001;//'COLLECTION';
$x_signature = BILLPLZ_API_XKEY;//'X_SIGNATURE';

$websiteurl = 'http://' . WEBSITE;
$successpath = 'http://' . WEB_BERJAYA;#contoh je
$amount = '555'; //Example (RM13.50): $amount = '1350';
$fallbackurl = ''; //Example: $fallbackurl = 'http://www.google.com/pay.php';
$description = 'PAYMENT DESCRIPTION';
$reference_1_label = '';
$reference_2_label = '';
