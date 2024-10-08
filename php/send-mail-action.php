<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = "gaetan.slt@gmail.com";
    $headers = "From: $email\r\n";
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}