<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableau associatifs"; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<?php
$serge = array(
  'Nom' => 'serge',
  'Age' => 50,
  'sexe' => 'homme'
);

$marie = array(
  'Nom' => 'marie',
  'Age' => 40,
  'sexe' => 'femme'
);

function displayPeople($people)
{
  echo '<ul>';
  foreach ($people as $key => $value) {
?>
    <li><?= $key ?> : <?= $value ?></li>
<?php
  }
  echo '</ul>';
}

displayPeople($serge);
echo '--------------------';
displayPeople($marie);
?>

<?php


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>