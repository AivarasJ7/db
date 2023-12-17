<?php
include "../../Controllers/CategoriesController.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    CategoriesController::destroy($_POST['id']);
    header("Location: ./index.php");
}

$categories = CategoriesController::getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Electronics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-question-circle"></i> Help
                    </a>
                </li>
            </ul>
            <div class="navbar-text">
                <a class="nav-link" href="#">
                    <i class="bi bi-person"></i> Account
                </a>
                <a class="nav-link" href="#">
                    <i class="bi bi-cart"></i> Shopping Cart
                </a>
            </div>
        </div>
    </div>
</nav>

    <div class="container mt-5">
        <img src="../../models/images/banner-1.png" class="card-img-top banner-image" alt="...">

        <h1 class="mb-4 display-4 text-center text-uppercase">Categories</h1>

        <div class="row mt-4">
            <div class="col">
                <form class="d-flex">
                    <a class="btn btn-success btn-sm me-2" href="./create.php">Create new category</a>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 100%;">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            <?php foreach ($categories as $key => $category) { ?>
                <div class="col-md-2 mb-4">
                    <div class="card h-100 d-flex flex-column bg-light">
                        <img src="<?= $category->photo ? $category->photo : '../../models/images/default.jpg' ?>" class="card-img-top img-fluid" alt="<?= $category->name ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $category->name ?></h5>
                            <p class="card-text"><?= $category->description ?></p>
                            <div class="btn-group mt-auto" role="group">
                                <a class="btn btn-primary btn-sm" href="./show.php?id=<?= $category->id ?>">Show</a>
                                <a class="btn btn-success btn-sm" href="./edit.php?id=<?= $category->id ?>">Edit</a>
                                <form action="./index.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $category->id ?>">
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
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
        </footer>
    </body>
</html>