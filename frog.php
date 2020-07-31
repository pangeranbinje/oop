<?php
require_once 'animal.php';

class frog extends animal{
    public $legs = 4;
    public $jump = "hop hop";

    public function get_jump(){
        return $this->jump;
    }
}
?>