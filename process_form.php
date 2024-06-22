<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = isset($_POST['first-name']) ? htmlspecialchars($_POST['first-name']) : '';
    $lastName = isset($_POST['last-name']) ? htmlspecialchars($_POST['last-name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Email address to send to
    $to = "subashldrdm@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email content
    $emailContent = "First Name: $firstName\n";
    $emailContent .= "Last Name: $lastName\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
