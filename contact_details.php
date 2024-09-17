<?php
require_once 'db.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL insert statement
    $sql = "INSERT INTO contact_mail (firstName, lastName, email, message) VALUES (?, ?, ?, ?)";
    
    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Prepare email details
            $to = 'subashldrdm@gmail.com'; // Replace with your email address
            $subject = 'New Contact Form Submission';
            $email_message = "You have received a new message from the contact form on your website.\n\n";
            $email_message .= "First Name: " . $first_name . "\n";
            $email_message .= "Last Name: " . $last_name . "\n";
            $email_message .= "Email: " . $email . "\n";
            $email_message .= "Message: \n" . $message . "\n";

            // Send email
            if (mail($to, $subject, $email_message)) {
                // Redirect to index.html on success
                header("Location: index.html");
                exit();
            } else {
                // Handle mail sending error
                echo "Error: Unable to send email.";
            }
        } else {
            // Handle execution error
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        // Handle preparation error
        echo "Error: " . $conn->error;
    }
    
    // Close the connection
    $conn->close();
}
?>
