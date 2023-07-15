<?php
    $fname = $_POST['inputFname'];
    $lname = $_POST['inputLname'];
    $visitor_email = $_POST['inputEmail'];
    $visitor_phone = $_POST['inputPhone'];
    $message = $_POST['inputMessage'];
?>

<?php
    $email_from = 'salty@saltyservices.co.nz';
    $email_subject = 'New form submission';
    $email_body = 'You have a message from user $name.\n'.
                    'It says:\n $message'
?>

<?php
    $to = 'salty@saltyservices.co.nz';
    $headers = 'From: $email_from \r\n';
    $headers .='Reply-To: $visitor_email \r\n';
    mail($to,$email_subject,$email_body,$headers);
?>

