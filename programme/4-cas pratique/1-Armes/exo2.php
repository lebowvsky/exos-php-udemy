<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 2 : Tableaux et boucles"; //Mettre le nom du titre de la pAge que vous voulez
$arme1 = 'épée';
$arme2 = 'arc';
$arme3 = 'hache';
$arme4 = 'Fléau';
$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<!-- mettre ici le code -->
<div>
  <strong>Voici toutes les armes :</strong>
</div>
<?php foreach ($armes as $index => $arme) : ?>
  <p>Arme <?= $index + 1 ?> : <?= $arme ?></p>
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