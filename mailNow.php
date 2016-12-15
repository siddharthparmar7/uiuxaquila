<?php

    $to      = 'siddharthparmar7@gmail.com';
    $subject = 'New Request from Website';
    $message = $_REQUEST['name'] . $_REQUEST['email'] .$_REQUEST['msg'];
    $headers = 'From: siddharthparmar7@gmail.com' . "\r\n" .
    'Reply-To: siddharthparmar7@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $send = mail($to, $subject, $message, $headers);

    // this will help you to get the status mail sent or not
    if($send) :
       echo "Email sent";
    else :
        echo "Email sending failed";
    endif;

?>