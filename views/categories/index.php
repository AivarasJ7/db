<?php
include "../../Controllers/CategoriesController.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    CategoriesController::destroy($_POST['id']);
    header("Location: ./index.php");
}

$categories = CategoriesController::getAll();

include_once "../components/head.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Categories</title>
</head>

<body>


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
<?php
include "../components/footer.php";
?>
    </body>
</html>