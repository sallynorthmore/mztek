<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "info@mztek.org", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: http://www.mztek.org/thankyou.html" );
?>