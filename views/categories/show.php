<?php
if (!isset($_GET['id'])) {
    header("Location: ./index.php");
}

include "../../Controllers/CategoriesController.php";
$category = CategoriesController::findWithItems($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $category->name ?? 'Category' ?></title>
</head>

<body>
    <div class="container mt-5">
        <img src="../../models/images/banner-1.png" class="card-img-top" alt="...">

        <h1 class="mb-4 display-4 text-center text-uppercase"><?= $category->name ?? 'Category' ?></h1>

        <div class="row mt-4">
            <div class="col">
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Look for a product" aria-label="Search" style="width: 100%;">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6" style="height: 200px; overflow: hidden;">
                        <img src="<?= $category->photo ? $category->photo : '../../models/images/default.jpg' ?>" class="card-img-top" alt="<?= $category->name ?>" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $category->description ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($category->items as $item) { ?>
                                <?php } ?>
                            </ul>
                            <div class="card-body">
                                <a href="./index.php" class="card-link">Get back to all categories</a>
                                <a href="../../views/items/create.php" class="btn btn-success">Create Item</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <p>Related items for this category:</p>
                        <div class="row">
                            <?php foreach ($category->items as $item) { ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="<?= $item->photo ? $item->photo : '../../models/images/default.jpg' ?>" class="card-img-top" alt="<?= $item->title ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $item->title ?></h5>
                                            <p class="card-text"><?= $item->description ?></p>
                                            <p class="card-text">Price: $<?= $item->price ?></p>
                                            <a href="#" class="btn btn-primary">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section -->
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

</html>