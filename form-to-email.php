<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];
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

    echo '<p>Message sent!</p>'

