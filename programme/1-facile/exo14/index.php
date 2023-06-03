<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableau de tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$arrOfarr = [
  [1, 4, 5, 16],
  [4, 8, 9, 13, 18, 14],
  [9, 4, 17, 11],
  [11, 16, 17, 19, 14, 15, 12, 20]
];

foreach ($arrOfarr as $index => $arr) {
  $total = 0;
  foreach ($arr as $value) {
    $total += $value;
  }
  $average = $total / count($arr);
  echo '<p>La moyenne de l\'élève ' . $index . ' est de ' . $average .  '</p>';
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