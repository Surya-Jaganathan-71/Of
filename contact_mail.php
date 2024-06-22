<?php
// Include db.php to access its functions
require_once 'db.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into database
    $inserted = insert_contact_data($first_name, $last_name, $email, $message);

    if ($inserted) {
        // Send email
        $to = "subashldrdm@gmail.com";
        $subject = "New Contact Form Submission";
        $mail_message = "You have received a new contact form submission:\n\n";
        $mail_message .= "Name: $first_name $last_name\n";
        $mail_message .= "Email: $email\n";
        $mail_message .= "Message:\n$message\n";

        // Additional headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Sending email
        if (mail($to, $subject, $mail_message, $headers)) {
            // Redirect to success page or wherever you want
            header("Location: index.html");
            exit;
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Failed to insert data into database.";
    }
}
?>
