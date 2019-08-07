<?php

require_once "../vendor/autoload.php";

use Faker\vi_VN\MagicName;

$fake= new MagicName();
echo $fake->femaleName;