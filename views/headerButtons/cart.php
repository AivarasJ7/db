<?php
include_once "../components/head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
    <title>Shopping Cart</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container mt-5 flex-grow-1">
        <h1 class="mb-4 display-4 text-center text-uppercase">Shopping Cart</h1>

        <p>Your shopping cart is currently empty. Start shopping now!</p>

        <p>Total Price: $0.00</p>
    </div>
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <p>Email: contact@example.com</p>
                    <p>Phone: +123-456-7890</p>
                </div>
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4">
                    <h3>Follow Us</h3>
                    <p>Connect with us on social media:</p>
                    <div class="btn-group">
                        <a href="https://www.facebook.com" class="btn btn-primary me-2" target="_blank">
                            <i class="fab fa-facebook"></i> Facebook
                        </a>
                        <a href="https://twitter.com" class="btn btn-info" target="_blank">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
