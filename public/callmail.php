<?php

if ( isset($_POST['phone']) && filter_var($_POST['phone'], FILTER_VALIDATE_EMAIL) ) {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }


$headers = "X-Mailer: PHP/" . phpversion();
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 1\r\n";

$phone = $_POST['phone'];


$body = "#phone: " . $phone;


  //
  mail( "lukatarkhnishvili@gmail.com", $body, $headers );

}
?>
