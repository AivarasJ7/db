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
<div class="container mt-5">
        <img src="../../models/images/banner-1.png" class="card-img-top" alt="...">
        
        <h1 class="mb-4">Categories</h1>

        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form class="d-flex">
                <a class="btn btn-success" href="./create.php">Create new category</a>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 100%;">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
                <div class="row">
            <?php foreach ($categories as $key => $category) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $category->photo ? $category->photo : '../../models/images/default.jpg' ?>" class="card-img-top" alt="<?= $category->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $category->name ?></h5>
                            <p class="card-text"><?= $category->description ?></p>
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" href="./show.php?id=<?= $category->id ?>">Show</a>
                                <a class="btn btn-success" href="./edit.php?id=<?= $category->id ?>">Edit</a>
                                <form action="./index.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $category->id ?>">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>