<?php
require_once "../vendor/autoload.php";

use Faker\Fake;

$fake = new Fake();
echo $fake->name;
echo $fake->address;
echo $fake->phone;
echo $fake->birth;
