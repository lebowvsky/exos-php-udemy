<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la pAge que vous voulez
require 'functions.php';
?>

<!-- mettre ici le code -->
<a class="btn btn-primary" href="?type=all">Tous</a>
<a class="btn btn-primary" href="?type=chien">Chien</a>
<a class="btn btn-primary" href="?type=chat">Chat</a>
<?php
$animal1 = [
  'name' => 'Georges',
  'age' => '5',
  'type' => 'chien',
];
$animal2 = [
  'name' => 'Michel',
  'age' => '3',
  'type' => 'chat',
];
$animal3 = [
  'name' => 'Serge',
  'age' => '8',
  'type' => 'chien',
];
$animal4 = [
  'name' => 'Jules',
  'age' => '8',
  'type' => 'chat',
];

$animals = [$animal1, $animal2, $animal3, $animal4];

foreach ($animals as $animal) {
  if ($animal['type'] === $_GET['type'] || $_GET['type'] === 'all') displayAnimal($animal);
}

?>

<h1><?= $_GET['animal'] ?></h1>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>