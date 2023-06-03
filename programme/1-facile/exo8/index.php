<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = 0;
$i = 1;
while ($random <= 15) {
  $random = rand(1, 20);
  if ($random <= 15) {
    echo 'Essai ' . $i . ' : ' . $random . ' est trop petit <br />';
  } else {
    echo 'Le chiffre choisi est ' . $random;
  }
  $i++;
}


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>