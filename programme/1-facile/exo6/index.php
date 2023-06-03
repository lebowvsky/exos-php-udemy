<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$number = rand(5, 15);
$result = 0;
$j = 0;
?>
<h1>Voici le cumul des <?= $number ?> premiers nombres</h1>
<?php
for ($i = $number; $i > 0; $i--) {
  $result += $i;
?>
  <p>Etape <?= $j + 1 ?> : résultat = <?= $result ?></p>
<?php
  $j++;
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