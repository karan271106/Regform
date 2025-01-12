<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $regNo = htmlspecialchars($_POST['regNo']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $year = htmlspecialchars($_POST['year']);

    // Email details
    $subject = "Library Registration Confirmation";
    $message = "
        Dear $name,

        Thank you for registering for the library.

        Here are your registration details:
        - Name: $name
        - Registration Number: $regNo
        - Gender: $gender
        - Course: $course
        - Year: $year

        We look forward to serving you.

        Best regards,
        Library Team
    ";
    $headers = "From: library@example.com\r\n" . 
               "Reply-To: library@example.com\r\n" . 
               "Content-Type: text/plain; charset=UTF-8";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "Registration successful! A confirmation email has been sent to $email.";
    } else {
        echo "Error: Unable to send confirmation email.";
    }
}
?>
