<?php
require __DIR__ . '/../src/autoload.php';
$faker = Faker\Factory::create();
for ($i = 0; $i < 5; $i++)
{
    echo $faker->name . "\n";
}

