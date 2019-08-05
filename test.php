<?php
require_once "vendor/autoload.php";

use fake\Name;
use fake\Phone;
use fake\Address;

$fake = new Name();
echo($fake->name());


$fake1 = new Phone();
echo ($fake1->phone()) . "\n";


$fake2 = new Address();
echo($fake2->address());