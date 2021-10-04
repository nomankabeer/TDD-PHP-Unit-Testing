<?php
class UserClass {
    public $first_name;
    public $Last_name;
    public function __construct($first_name , $Last_name){
        $this->first_name = $first_name;
        $this->Last_name = $Last_name;
    }
    public function getFullName(){
        return "$this->first_name $this->Last_name";
    }
}

?>