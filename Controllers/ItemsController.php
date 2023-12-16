<?php
include "../../models/Item.php";  // Assuming your model class for items is named Item.php

class ItemsController{

    public static function getAll() {
        $items = Item::all();  // Update to match your actual model class
        return $items;
    }

    public static function find($id){
        $item = Item::find($id);  // Update to match your actual model class
        return $item;
    }

    public static function store() {
        $item = new Item();  // Update to match your actual model class
        $item->name = $_POST['name'];
        $item->description = $_POST['description'];
        $item->save();
    }

    public static function update($id) {
        $item = Item::find($id);  // Update to match your actual model class
        $item->name = $_POST['name'];
        $item->description = $_POST['description'];
        $item->update();
    }

    public static function destroy($id) {
        Item::destroy($id);  // Update to match your actual model class
    }
}
?>
