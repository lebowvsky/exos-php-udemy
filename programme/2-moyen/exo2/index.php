<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableau à deux dimensions"; //Mettre le nom du titre de la pAge que vous voulez
include 'functions.php';
?>

<!-- mettre ici le code -->
<div class="container text-center">
  <div class="row align-items-start">

    <?php
    $array1 = [
      'title' => 'Tableau 1',
      'notes' => [1, 4, 14, 16, 15]
    ];
    $array2 = [
      'title' => 'Tableau 2',
      'notes' => [2, 4, 14, 16, 16, 20]
    ];

    $arrFinal = [$array1, $array2];
    foreach ($arrFinal as $arr) {
      displayArray($arr);
    }

    ?>
  </div>
</div>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>