<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true;
?>

<p><?= $nom ?> à <?= $age ?> ans et c'est <?= $homme == true ? 'un homme' : 'une femme' ?></p>
<p><?= $nom2 ?> à <?= $age2 ?> ans et c'est <?= $homme2 == true ? 'un homme' : 'une femme' ?></p>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>