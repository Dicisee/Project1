<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];

    if (empty($name)) {
        $errors[] = "Please enter your name.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if (empty($message)) {
        $errors[] = "Please enter your message.";
    }

    if (empty($errors)) {
        $to = "iman.talukder@lc.cuny.edu";  
        $subject = "New Contact Form Message from " . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<p class='success-message'>Thank you, your message has been sent successfully!</p>";
        } else {
            echo "<p class='error-message'>Sorry, there was an issue sending your message. Please try again later.</p>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p class='error-message'>$error</p>";
        }
    }
} else {
    echo "<p class='error-message'>Invalid request. Please fill out the form.</p>";
}
?>
