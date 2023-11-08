<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Email details
    $to = "your@email.com"; // Change this to your email address
    $subject = "Resume Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Form submitted and email sent successfully.";
    } else {
        // Email sending failed
        echo "Form submitted, but there was an issue sending the email.";
    }
}
?>
