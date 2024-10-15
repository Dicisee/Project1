<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Iman Hospital</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #2c3e50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #34495e;
        }

        .success-message, .error-message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .success-message {
            background-color: #c3f3c3;
            color: #2f662f;
        }

        .error-message {
            background-color: #f3c3c3;
            color: #662f2f;
        }

        .logo {
            width: 150px; 
            height: auto; 
            display: block;
            margin: 0 auto; 
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="https://yourhospitalimagelink.com" alt="Iman Hospital Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Contact Us</h1>
            <div class="form-container">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $message = htmlspecialchars(trim($_POST['message']));

                    $to = "iman.talukder@lc.cuny.edu";
                    $subject = "New Contact Form Message from " . $name;
                    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
                    $headers = "From: $email";

                    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if (mail($to, $subject, $body, $headers)) {
                            echo "<p class='success-message'>Thank you, your message has been sent successfully!</p>";
                        } else {
                            echo "<p class='error-message'>Sorry, there was an issue sending your message. Please try again later.</p>";
                        }
                    } else {
                        echo "<p class='error-message'>Please fill out all fields and provide a valid email address.</p>";
                    }
                }
                ?>
                <form action="contact.php" method="POST">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="6" required></textarea>

                    <input type="submit" value="Send Message">
                </form>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Iman Hospital. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
