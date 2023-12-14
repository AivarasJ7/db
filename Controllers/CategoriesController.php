<?php
include "../../models/Category.php";
class CategoriesController{

public static function getAll() {
    $categories = Category::all();
    return $categories;
}

public static function find($id){
    $categories = Category::find($id);
    return $categories;
}

public static function store() {
    $categories = new Category();
    $categories->name = $_POST['name'];
    $categories->description = $_POST['description'];
    $categories->save();
}
public static function update($id) {
    $categories = Category::find($id);
    $categories->name = $_POST['name'];
    $categories->description = $_POST['description'];
    $categories->update();
}

public static function destroy($id) {
    Category::destroy($id);
}

}

?>