<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $subject = htmlspecialchars($_POST["subject"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Set up email parameters
    $to = "murraymaxime2004@gmail.com";  // Replace with your email address
    $headers = "From: $email\r\nReply-To: $email\r\n";
    
    // Compose the email message
    $email_message = "Subject: $subject\n\n";
    $email_message .= "From: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // You can add additional logic or redirect the user after sending the email
    header("Location: thank_you_page.html");
    exit;
}
?>
