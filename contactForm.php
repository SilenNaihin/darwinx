<?php
    $subscriberEmail = $_POST['email'];

    $emailFrom = "arnav_paruthi@hotmail.com";
    $to = "arnavparuthi@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .= "Reply-To $subscriberEmail \r\n";

    $emailSubject = "Darwinx Mailing list Subscriber";
    $emailBody = "$subscriberEmail is a new subscriber";

    mail($to, $emailSubject, $emailBody, $headers );

    header("Location: index.html");
?>