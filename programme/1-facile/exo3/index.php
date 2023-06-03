<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$number = rand(1, 20);
?>

<h1>Le chiffre est <?= $number ?></h2>

  <?php
  switch ($number) {
    case $number <= 5:
      echo "il est compris entre 1 et 5";
      break;
    case $number <= 10:
      echo "il est compris entre 6 et 10";
      break;
    case $number <= 15:
      echo "il est compris entre 11 et 15";
      break;
    default:
      echo "il est compris entre 16 et 20";
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