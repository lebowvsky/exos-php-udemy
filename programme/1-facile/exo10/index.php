<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$word = 'Coucou';

function removeVowels($word)
{
  $reg = "/(a|e|i|o|u)/i";
  return preg_replace($reg, '', $word);
}
?>
<p><?= $word ?> sans voyelles donne : <strong><?= removeVowels($word) ?></strong></p>
<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>