<?php
require_once 'animal.php';

class ape extends animal{
    public $yell = "Auooo";

    public function get_yell(){
        return $this->yell;
    }


}
?>