<?php
include_once "../../models/Item.php";

class ItemsController {

    public static function getAll() {
        $items = Item::all();
        return $items;
    }

    public static function find($id) {
        $item = Item::find($id);
        return $item;
    }

    public static function store() {
        // Validate and sanitize input as needed
        $item = new Item();
        $item->title = $_POST['title'];
        $item->description = $_POST['description'];
        $item->price = $_POST['price'];
        $item->category_id = $_POST['category_id']; // Assuming the category_id is submitted via the form
        $item->save();
    
        // Redirect to the category page
        header("Location: ../../views/categories/show.php?id=" . $item->category_id);
        exit(); // Make sure to exit after a header redirect
    }

    public static function update($id) {
        $item = Item::find($id);
        $item->title = $_POST['title'];
        $item->description = $_POST['description'];
        $item->update();
    }

    public static function destroy($id) {
        Item::destroy($id);
    }
}
?>
