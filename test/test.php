<?php
require_once "vendor/autoload.php";

use Faker\Fake;
$fake = new Fake();
echo $fake->Name;
echo $fake->Address;
echo $fake->Phone;
