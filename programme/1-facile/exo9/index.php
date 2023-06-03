<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 5;
$b = 122;

function isEven($number)
{
  if ($number % 2 === 0) {
    return true;
  }
  return false;
}

?>

<p>Le chiffre <?= $a ?> <?= isEven($a) ? 'est' : 'n\'est pas' ?> pair</p>
<p>Le chiffre <?= $b ?> <?= isEven($b) ? 'est' : 'n\'est pas' ?> pair</p>

<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>