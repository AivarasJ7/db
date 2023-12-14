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
    <div class="container">
        <h1>Categories</h1>
        <a class="btn btn-success" href="./create.php">Create new category</a>
        <table class="table table-striped">
            <tr>
                <th>Number</th>
                <th>id</th>
                <th>Category name</th>
                <th>description</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($categories as $key => $category) { ?>
                <tr>
                    <td> <?= $key + 1 ?> </td>
                    <td> <?= $category->id ?> </td>
                    <td> <?= $category->name ?> </td>
                    <td> <?= $category->description ?> </td>
                    <td>
                        <div class="d-inline-block">
                            <a class="btn btn-primary" href="./show.php?id=<?= $category->id ?>">show</a>
                        </div>
                        <div class="d-inline-block">
                            <form action="./edit.php" method="get">
                                <input type="hidden" name="id" value="<?= $category->id ?>">
                                <button class="btn btn-success" type="submit">edit</button>
                            </form>
                        </div>
                        <div class="d-inline-block">
                            <form action="./index.php" method="post">
                                <input type="hidden" name="id" value="<?= $category->id ?>">
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>