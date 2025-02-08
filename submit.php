<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $redirect = $_POST['redirect']; // Get the redirect URL

    // Email settings
    $to = "itstaj7272@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    
    // Email content
    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email and redirect back
    if (mail($to, $subject, $body, $headers)) {
        header("Location: $redirect?success=1");
    } else {
        header("Location: $redirect?error=1");
    }
    exit;
}
?>
