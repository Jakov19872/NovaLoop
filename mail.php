<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contact-name']);
    $email = htmlspecialchars($_POST['contact-email']);
    $number = htmlspecialchars($_POST['contact-number']);

    // Here, you can save the data to a database, send an email, or handle it as needed
    // Example: echo the data back to the screen
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Number: " . $number . "<br>";
    

    // Example: Send an email with the information
    $to = "ahmedbahroun19872@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nNumber: $number\n";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
