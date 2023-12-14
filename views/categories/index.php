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
        <h1 class="mb-4">Categories</h1>
        <a class="btn btn-success mb-3" href="./create.php">Create new category</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $key => $category) { ?>
                <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $category->id ?></td>
                        <td><?= $category->name ?></td>
                        <td><?= $category->description ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" href="./show.php?id=<?= $category->id ?>">Show</a>
                                <a class="btn btn-success" href="./edit.php?id=<?= $category->id ?>">Edit</a>
                                <form action="./index.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $category->id ?>">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>