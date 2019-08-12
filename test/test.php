<?php
require __DIR__ .'/../src/autoload.php';
$faker = Faker\Factory::create();
echo $faker->firstName(female)."\n";

