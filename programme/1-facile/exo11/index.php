<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$hommes = ["Serge", "Gilbert", "Robert", "Georges"];
$femmes = ["Valérie", "Claudia", "Mélanie", "Sylvie"];

function writeArray($array)
{
  for ($i = 0; $i < count($array); $i++) {
?>
    <p><?= $i ?> : <?= $array[$i] ?></p>
<?php
  }
}
writeArray($hommes);
echo '-------------------------------';
writeArray($femmes);
?>
<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>