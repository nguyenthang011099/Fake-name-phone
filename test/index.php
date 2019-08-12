<?php
require __DIR__ . '/../src/autoload.php';
$faker = Faker\Factory::create();
?>
<?php for ($i=0; $i < 5 ; $i++): ?>
    <h1><?php echo $faker->name  ;?></h1>
    <hr>

<?php endfor; ?>