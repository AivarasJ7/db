<?php
include "../../models/Categories.php";
class CategoriesController{

public static function getAll() {
    $categories = Categories::all();
    return $categories;
}

public static function find($id){
    $categories = Categories::find($id);
    return $categories;
}

public static function store() {
    $categories = new Categories();
    $categories->name = $_POST['name'];
    $categories->description = $_POST['description'];
    $categories->save();
}
public static function update($id) {
    $categories = Categories::find($id);
    $categories->name = $_POST['name'];
    $categories->description = $_POST['description'];
    $categories->update();
}

public static function destroy($id) {
    Categories::destroy($id);
}

}

?>