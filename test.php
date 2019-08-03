<?php
require_once "vendor/autoload.php";
use fake\Name;
$obj1 = new Name();
echo ($obj1->random());
use fake\Phone;
$obj2= new Phone();
echo ($obj2->random())."\n";   