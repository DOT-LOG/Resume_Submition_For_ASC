<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Save uploaded file
    $resumeFile = $_FILES['resume']['tmp_name'];
    $resumeFileName = $_FILES['resume']['name'];

    // Email details
    $to = "smlsml182@gmail.com"; // Change this to your email address
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
