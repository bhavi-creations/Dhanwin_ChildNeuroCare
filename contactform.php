<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $first = $_POST['first'] ?? '';
    $last = $_POST['last'] ?? '';
    $email = $_POST['email'] ?? '';
    $phonenumber = $_POST['phonenumber'] ?? '';
    $date = $_POST['date'] ?? '';
    $category = $_POST['category'] ?? '';
    $message = $_POST['message'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username =  'dhanwinchildneurocare@gmail.com'; // Your Gmail email address
        $mail->Password = 'kjfwwbfufsjzvmkq'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('dhanwinchildneurocare@gmail.com', 'Dhanwin Child Neuro Care'); // Your Gmail email and name
        $mail->addAddress('dhanwinchildneurocare@gmail.com', 'Dhanwin Child Neuro Care'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
            <h1>New Message From Contact Form</h1>
            <p><strong> First Name:</strong> $first</p>
            <p><strong>Last Name :</strong> $last</p>
            <p><strong>Email:</strong><br> $email</p>
            <p><strong>Strong :</strong> $date</p>
            <p><strong>Category :</strong> $category</p>
            <p><strong>Message:</strong>$message</p>
        
           ";

        $mail->send();
        echo '<script>window.alert("successfully Submitted"),
         window.location.href="index.php"</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
