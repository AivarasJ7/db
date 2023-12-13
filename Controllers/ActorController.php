<?php
include "../../models/Actor.php";
class ActorController{

public static function getAll(){
    $actor = Actor::all();
    return $actor;

}


}


?>