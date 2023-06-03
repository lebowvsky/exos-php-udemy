<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Tableau à deux dimensions"; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<table class="table">
  <tbody>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<tr>';
      for ($j = 1; $j <= 10; $j++) {
        if ($i === 1 || $j === 1) {
          echo '<td class="font-weight-bold">' . $j * $i . '</td>';
        } else {
          echo '<td>' . $j * $i . '</td>';
        }
      }
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>