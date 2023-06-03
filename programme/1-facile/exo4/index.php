<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$number1 = rand(1, 100);
$number2 = rand(1, 100);
$result = abs($number1 - $number2);
?>

<p>chiffre 1 : <strong><?= $number1 ?></strong></p>
<p>chiffre 2 : <strong><?= $number2 ?></strong></p>
<br />
<p><?= $result ?></p>
<p>La valeur absolue de <?= $number1 ?> - <?= $number2 ?> <?= $result >= 25 && $result <= 75 ? 'est comprise' : 'n\' est pas comprise' ?> entre 25 et 75</p>





<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>