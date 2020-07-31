<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

// index.php
$sungokong = new ape("kera sakti");

echo $sungokong->name."<br>";
echo $sungokong->legs."<br>";
echo $sungokong->get_yell()."<br>"; // "Auooo"

$kodok = new frog("buduk");

echo $kodok->name."<br>";
echo $kodok->legs."<br>";
echo $kodok->get_jump() ; // "hop hop"

?>