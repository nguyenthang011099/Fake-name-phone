<?php

require_once "vendor/autoload.php";

use Faker\Fake;

$faker = new Fake();
echo $faker->name;
echo $faker->address;
echo $faker->phone;
echo $faker->birth;
