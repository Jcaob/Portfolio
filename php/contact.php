<?php
if(isset($_POST['submit'])) {
    $to = "JacobCatalan943@gmail.com"; // replace with your email address
    $subject = "New Contact Form Submission";

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct message body
    $body = "Name: " . $name . "\n\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message: " . $message;

    // Set headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if(mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will be in touch soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>