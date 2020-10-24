<?php

if (isset($_POST['submit'])) {
    $subscriberEmail = $_POST['email'];

    $emailFrom = "silen@darwinx.ca";
    $to = "arnav@darwinx.ca";
    $headers = "From: ". $emailFrom;

    $emailSubject = "Darwinx Mailing list Subscriber";
    $emailBody = "$subscriberEmail is a new subscriber";

    mail($to, $emailSubject, $emailBody, $headers );

    header("Location: index.html?mailsent");

    echo "<script>console.log('php script has been excecuted')</script>";
}
?>