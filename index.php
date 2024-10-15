<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iman Hospital</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo {
            width: 150px; 
            height: auto; 
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .hero {
            background-color: #ecf0f1;
            text-align: center;
            padding: 50px 0;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #2c3e50;
            color: white;
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
                    <li><a href="#about">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="documentation.php">Documentation</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="hero">
                <h1>Welcome to Iman Hospital</h1>
                <p>Dedicated to providing the best healthcare services.</p>
            </section>

            <section id="about">
                <h2>About Us</h2>
                <p>Iman Hospital is committed to improving the health and wellness of our community.</p>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Iman Hospital. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
