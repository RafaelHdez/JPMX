<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'billing@justplanemx.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = "New Aircraft Service Request";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['registration_no'], 'Registration No.');
  $contact->add_message( $_POST['aircraft_serial_no'], 'Aircraft Serial No.');
  $contact->add_message( $_POST['contact_name'], 'Name of Contact');
  $contact->add_message( $_POST['relation_to_aircraft'], 'Relation to Aircraft');
  $contact->add_message( $_POST['company_name'], 'Company Name');
  $contact->add_message( $_POST['billing_address'], 'Billing Address');
  $contact->add_message( $_POST['street_address'], 'Street Address');
  $contact->add_message( $_POST['address_line2'], 'Address Line 2');
  $contact->add_message( $_POST['state'], 'State / Province / Region');
  $contact->add_message( $_POST['zip_code'], 'ZIP / Postal Code');
  $contact->add_message( $_POST['country'], 'Country');
  $contact->add_message( $_POST['shipping_address'], 'Shipping Address');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['fax'], 'Fax');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['aircraft_type'], 'Aircraft Type');
  $contact->add_message( $_POST['flight_operation'], 'Flight Operation');
  $contact->add_message( $_POST['maintenance_type'], 'Type of Maintenance');
  $contact->add_message( $_POST['engine_model_no'], 'Engine Model No.');
  $contact->add_message( $_POST['aircraft_total_time'], 'Aircraft Total Time');
  $contact->add_message( $_POST['aircraft_total_landings'], 'Aircraft Total Landings');
  $contact->add_message( $_POST['engine_1_sn'], 'Engine #1 S/N');
  $contact->add_message( $_POST['engine_2_sn'], 'Engine #2 S/N');
  $contact->add_message( $_POST['engine_3_sn'], 'Engine #3 S/N');
  $contact->add_message( $_POST['engine_1_cycles'], 'Engine #1 Cycles');
  $contact->add_message( $_POST['engine_2_cycles'], 'Engine #2 Cycles');
  $contact->add_message( $_POST['engine_3_cycles'], 'Engine #3 Cycles');
  $contact->add_message( $_POST['city'], 'City');
  $contact->add_message( $_POST['apu_sn'], 'APU S/N');
  $contact->add_message( $_POST['apu_model_no'], 'APU Model No.');
  $contact->add_message( $_POST['apu_model_tt'], 'APU Model TT');
  $contact->add_message( $_POST['plane_locked'], 'Plane Locked');
  $contact->add_message( $_POST['special_requests'], 'Special Requests');
  $contact->add_message( $_POST['overtime_authorized'], 'Overtime Authorized');
  $contact->add_message( $_POST['location_of_services'], 'Location of Services');
  $contact->add_message( $_POST['requested_arrival_date'], 'Requested Date of Arrival');
  $contact->add_message( $_POST['requested_departure_date'], 'Requested Date of Departure');
  $contact->add_message( $_POST['po_number'], 'P.O #');
  $contact->add_message( $_POST['warranty_information'], 'Enter Warranty Information');
  $contact->add_message( $_POST['credit_card_number'], 'Credit Card Number');
  $contact->add_message( $_POST['credit_card_month'], 'Credit Card Month');
  $contact->add_message( $_POST['credit_card_year'], 'Credit Card Year');
  $contact->add_message( $_POST['credit_card_security_code'], 'Credit Card Security Code');
  $contact->add_message( $_POST['cardholder_name'], 'Cardholder Name');
  $contact->add_message( $_POST['service_authorized_by'], 'Service authorized by');
  $contact->add_message( $_POST['service_authorized_date'], 'Date');
  $contact->add_message( implode(', ', $_POST['warranty_programs']), 'Warranty Programs');

  echo $contact->send();
?>
