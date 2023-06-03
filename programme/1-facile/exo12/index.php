<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Michelle = [1, 19, 2, 18, 4, 16];
$serge = [11, 14, 10, 4, 20, 8, 2];

function calcAverage($array)
{
  $total = 0;
  foreach ($array as $value) {
    $total += $value;
  }
  return  $total / count($array);
}
?>
<p>La moyenne de Michelle est <?= calcAverage($Michelle) ?></p>
<p>La moyenne de Michelle est <?= calcAverage($serge) ?></p>
<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>