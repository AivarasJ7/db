<?php
include "../../Controllers/ItemsController.php";
include "../../Controllers/CategoriesController.php";  // Include the CategoriesController

// If the form is submitted, store the item and redirect to index.php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Assuming your form fields are named "title", "description", "price", and "category_id"
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];  // Add this line to get the category_id

    // Validate input as needed

    // Create a new item and save it
    ItemsController::store($title, $description, $price, $category_id);  // Pass the category_id

    // Redirect to index.php
    header("Location: ./index.php");
    exit(); // Make sure to exit after a header redirect
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Item</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row bg-secondary bg-gradient bg-opacity-25">
            <div class="col"></div>
            <div class="col-6">
                <form action="./create.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" placeholder="Enter Description" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price" required>
                    </div>
                    <!-- Add a dropdown for selecting the category -->
                    <div class="form-group">
                        <label for="category_id">Select Category:</label>
                        <select class="form-control" name="category_id" required>
                            <?php
                            // Fetch all categories
                            $categories = CategoriesController::getAll();
                            foreach ($categories as $category) {
                                echo "<option value=\"{$category->id}\">{$category->name}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>