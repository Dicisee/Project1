<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation - Iman Hospital</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        h1, h2, p {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        section {
            margin-bottom: 30px;
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 150px; 
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/017/177/954/small/round-medical-cross-symbol-on-transparent-background-free-png.png" alt="Iman Hospital Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="documentation.php">Documentation</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Project Documentation</h1>

            <section>
                <h2>Platform Features</h2>
                <p>This platform is built as a hospital-themed website with multiple pages that allow users to navigate through various services, including general check-up details and the ability to contact the hospital for inquiries. The website is designed to be simple, professional, and user-friendly.</p>
            </section>

            <section>
                <h2>Structure</h2>
                <p>The website contains several key components:
                    <ul>
                        <li><strong>Index Page:</strong> A welcoming landing page introducing Iman Hospital.</li>
                        <li><strong>Services Page:</strong> Details about medical services offered.</li>
                        <li><strong>Contact Page:</strong> A form for patients or users to submit inquiries or messages.</li>
                        <li><strong>Process Order:</strong> A form processing script (`processorder.php`) that validates inputs and sends email notifications.</li>
                    </ul>
                </p>
            </section>

            <section>
                <h2>Adaptations from Course Material</h2>
                <p>The code for this platform is adapted from Chapters 1-7 of the course materials. Concepts such as HTML structure, CSS styling, PHP form processing, and basic validation techniques were integrated and extended to meet the project requirements.</p>
            </section>

            <section>
                <h2>Challenges and Solutions</h2>
                <p>
                    One of the key challenges was ensuring the form validation and submission process worked smoothly. I resolved this by incorporating PHP's built-in `filter_var()` function to validate email inputs and sanitizing all form data to prevent potential security issues.
                </p>
            </section>


        </main>

        <footer>
            <p>&copy; 2024 Iman Hospital. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
