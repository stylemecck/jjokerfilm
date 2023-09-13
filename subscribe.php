<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Add your email sending code here
    $to = "jokerfilmspresent4u@gmail.com";
    $subject = "New Subscription";
    $message = "Email: " . $email;
    
    // Use the mail() function to send the email
    mail($to, $subject, $message);
}
?>