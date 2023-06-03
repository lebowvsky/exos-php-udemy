<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 12);
$month = '';

switch ($random) {
  case 1:
    $month = 'janvier';
    break;
  case 2:
    $month = 'février';
    break;
  case 3:
    $month = 'mars';
    break;
  case 4:
    $month = 'avril';
    break;
  case 5:
    $month = 'mai';
    break;
  case 6:
    $month = 'juin';
    break;
  case 7:
    $month = 'juillet';
    break;
  case 8:
    $month = 'aout';
    break;
  case 9:
    $month = 'septembre';
    break;
  case 10:
    $month = 'octobre';
    break;
  case 11:
    $month = 'novembre';
    break;
  case 12:
    $month = 'décembre';
    break;
}

?>
<p>Le mois <strong><?= $random ?></strong> correspond au mois de <strong><?= $month ?></strong> en lettres !</p>
<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>