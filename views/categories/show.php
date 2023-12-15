<?php
if (!isset($_GET['id'])) {
    header("Location: ./index.php");
}

include "../../Controllers/CategoriesController.php";
$category = CategoriesController::find($_GET['id']);
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
    <div class="container mt-5">
        <img src="../../models/images/banner-1.png" class="card-img-top" alt="...">

        <h1 class="mb-4 display-4 text-center text-uppercase">Category Details</h1>

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
                                <h5 class="card-title"><?= $category->name . " " . $category->description ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                            </ul>
                            <div class="card-body">
                                <a href="./index.php" class="card-link">Get back to all categories</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <p>Isdelioti itemai turetu buti cia palei kategorija</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>