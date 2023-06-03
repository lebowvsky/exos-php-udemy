<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableaux complexes"; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<?php

$allPeople = [
  [
    'Nom' => 'serge',
    'Age' => 50,
    'sexe' => 'homme',
    'notes' => [9, 12, 16, 18, 15]
  ],
  [
    'Nom' => 'marie',
    'Age' => 40,
    'sexe' => 'femme',
    'notes' => [9, 13, 11, 19, 5]
  ],
  [
    'Nom' => 'Georges',
    'Age' => 45,
    'sexe' => 'homme',
    'notes' => [13, 12, 14, 18, 12, 13]
  ]
];

foreach ($allPeople as $people) {
  displayPeople($people);
};


function displayPeople($people)
{
  echo '<ul>';
  foreach ($people as $key => $value) {
    if ($key !== 'notes') {
?>
      <li><?= $key ?> : <?= $value ?></li>
    <?php
    } else {
      displayNotes($value);
    }
  }
  echo '</ul>';
  echo '------------------';
}

function displayNotes($arrNotes)
{
  $total = 0;
  foreach ($arrNotes as $index => $note) {
    ?>
    <li>Note <?= $index + 1 ?> : <?= $note ?></li>
  <?php
    $total += $note;
  }
  ?>
  <li>La moyenne est de : <?= $total / count($arrNotes) ?></li>
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