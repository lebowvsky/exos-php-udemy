<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 : Tableaux associatifs"; //Mettre le nom du titre de la pAge que vous voulez

$arme1 = [
  'nom' => 'épée',
  'image' => 'epee/epee1.png',
  'description' => 'Une arme tranchante'
];
$arme2 = [
  'nom' => 'hache',
  'image' => 'hache/hache1.png',
  'description' => 'Une arme tranchante ou un outil qui coupe du bois'
];
$arme3 = [
  'nom' => 'arc',
  'image' => 'arc/arc1.png',
  'description' => 'Une arme à distance'
];
$arme4 = [
  'nom' => 'Fléau',
  'image' => 'fleau/fleau1.png',
  'description' => 'Une arme contondante du Moyen âge'
];
$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<!-- mettre ici le code -->
<div>
  <strong>Voici toutes les armes :</strong>
</div>
<?php foreach ($armes as $arme) : ?>
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="./sources/<?= $arme['image'] ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $arme['nom'] ?></h5>
          <p class="card-text"><?= $arme['description'] ?></p>
        </div>
      </div>

    </div>
  </div>
<?php endforeach ?>

<select class="form-select">
  <option value="" selected></option>
  <?php foreach ($armes as $index => $arme) : ?>
    <option value="<?= $arme ?>"><?= $arme ?></option>
  <?php endforeach ?>
</select>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>