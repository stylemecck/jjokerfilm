<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    // Email configuration
    $to_email = "jokerfilmspresent4u@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message = "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Email: $email\n";
    $message .= "Comments:\n$comments";

    // Send email
    if (mail($to_email, $subject, $message)) {
        // Email sent successfully
        echo "Thank you for your submission!";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle non-POST requests (if any)
    echo "Invalid request method";
}
?>
