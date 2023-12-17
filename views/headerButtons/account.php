<?php
$user = [
    'id' => 1,
    'username' => 'Vardenis Pavardenis',
    'email' => 'mail@example.com',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Account</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Electronics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="../categories/index.php">
                            <i class="bi bi-house-door"></i> Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../headerButtons/help.php">
                            <i class="bi bi-question-circle"></i> Help
                        </a>
                    </li>
                </ul>
                <div class="navbar-text">
                <a class="nav-link" href="./account.php">
                        <i class="bi bi-person"></i> Account
                    </a>
                    <a class="nav-link" href="../headerButtons/cart.php">
                        <i class="bi bi-cart"></i> Shopping Cart
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4 display-4 text-center text-uppercase">My Account</h1>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>User ID:</strong> <?= $user['id'] ?></li>
                            <li class="list-group-item"><strong>Username:</strong> <?= $user['username'] ?></li>
                            <li class="list-group-item"><strong>Email:</strong> <?= $user['email'] ?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
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
