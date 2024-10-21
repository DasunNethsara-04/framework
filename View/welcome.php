<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenithPHP</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo "assets/images/ZenithPHP/web/icon-192.png"; ?>" sizes="any">
    <link rel="apple-touch-icon" href="<?php echo "assets/images/ZenithPHP/web/apple-touch-icon.png"; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        #hero {
            padding: 80px 0;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .hero-heading {
            font-size: 3rem;
            font-weight: bold;
        }

        .lead {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        #content {
            padding: 60px 0;
        }

        #how-to-start {
            background-color: #fff;
            padding: 40px 0;
            text-align: left;
        }

        #how-to-start h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        #how-to-start ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        #how-to-start ul li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 30px 0;
        }

        footer p {
            margin: 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .container p {
            font-size: 1.1rem;
            text-align: center;
        }

        .btn-primary {
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<header id="hero">
    <div class="container">
        <img src="<?php echo "assets/images/ZenithPHP/web/icon-192.png"; ?>" alt="">
        <h1 class="mt-2 hero-heading">Welcome to ZenithPHP!</h1>
        <p class="lead">Your <i><?php echo APP_NAME; ?></i> has been successfully created.</p>
    </div>
</header>

<!-- How to Get Started Section -->
<section id="how-to-start">
    <div class="container">
        <h2>How to Get Started</h2>
        <p>To start building with <?php echo APP_NAME; ?>, follow the steps below:</p>
        <ul>
            <li><strong>Step 1:</strong> Review the <a href="#">documentation</a> to familiarize yourself with the framework's structure.</li>
            <li><strong>Step 2:</strong> Configure your environment by editing the <code>.env</code> file and setting up your database connection.</li>
            <li><strong>Step 3:</strong> Create your first route in the <code>Init.php</code> file, and link it to a controller.</li>
            <li><strong>Step 4:</strong> Use the MVC pattern to create models, views, and controllers for your application.</li>
            <li><strong>Step 5:</strong> Test your application by running it locally and making sure routes and views are working properly.</li>
        </ul>
        <a href="#" class="btn btn-primary">View Documentation</a>
    </div>
</section>

<!-- Main Content Section -->
<section id="content">
    <div class="container">
        <p>This framework is designed to make building web applications simple and efficient. Get started with controllers, routes, and models, and extend the framework to meet your application's needs.</p>
        <p>If you need more guidance, check the <a href="#">documentation</a> or reach out to the community for help.</p>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> ZenithPHP <?php echo APP_VERSION; ?>. All rights reserved.</p>
        <p>Built with <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
