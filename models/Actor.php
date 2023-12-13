<?php
class Actor{
    public $actor_id;
    public $first_name;
    public $last_name;
    
    public function __construct($actor_id = 0, $first_name = "", $last_name = "")
    {
        $this->actor_id = $actor_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public static function all()
    {
        $actor = [];
        $db = new mysqli("localhost", "root", "", "sakila");
        $result = $db->query("SELECT * from actor");
        while ($row = $result->fetch_assoc()){
            $actor[] = new Actor($row['actor_id'], $row['first_name'], ['last_name'],);
        }
        return $actor;
    }
}
?>