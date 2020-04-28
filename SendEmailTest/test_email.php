<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    $from = "eventos@casademontevideu.pt";
    $to = "eventos@casademontevideu.pt";
    $subject = "PHP EMAIL TEST SCRIPT";
    $message = "This is a test to check the PHP mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Test email sent";

