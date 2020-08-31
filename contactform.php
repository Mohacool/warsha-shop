<?php
$from = "sendermeail@yourprovider.com";
$to = "omars@block94.com";
$subject = "Simple test for mail function";
$message = "This is a test to check if php mail function sends out the email -mohamed (your brother)";
$headers = "From:" . $from;
if (mail($to, $subject, $body, $header)) {
   echo("
      Message successfully sent!
   ");
} else {
   echo("
      Message delivery failed...
   ");
}
?>