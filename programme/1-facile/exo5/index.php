<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$number = rand(5, 15);

echo '<h1>Voici la table de multiplication de ' . $number . ' :</h1>';


for ($i = 1; $i <= 10; $i++) {
?>
  <p><?= $number ?> * <?= $i ?> = <?= $number * $i ?></p>
<?php
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