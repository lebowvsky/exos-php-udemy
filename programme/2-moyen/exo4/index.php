<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la pAge que vous voulez
require 'class.php';
?>

<!-- mettre ici le code -->
<a class="btn btn-primary" href="?type=all">Tous</a>
<a class="btn btn-primary" href="?type=chien">Chien</a>
<a class="btn btn-primary" href="?type=chat">Chat</a>
<?php


$animal1 = new Animal('Georges', 5, 'chien');
$animal2 = new Animal('Michel', 3, 'chat');
$animal3 = new Animal('Serge', 8, 'chien');
$animal4 = new Animal('Jules', 8, 'chat');

$animals = [$animal1, $animal2, $animal3, $animal4];

foreach ($animals as $animal) {
  if ($animal->type === $_GET['type'] || $_GET['type'] === 'all') $animal->displayAnimal();
}

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>