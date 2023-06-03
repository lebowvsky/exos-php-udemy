<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Manipuler deux classes"; //Mettre le nom du titre de la pAge que vous voulez
require 'Arme.class.php';
require 'Player.class.php';

$arme1 = new Arme('Excalibur', 25);
$arme2 = new Arme('Durandal', 24);

$player1 = new Player('Arthur', 45, 100, 1);
$player2 = new Player('Roland', 55, 90, 2);

$allPlayers = [$player1, $player2];
?>
<?php foreach ($allPlayers as $player) : ?>
  <div class="card p-3 my-4">
    <p>Nom : <?= $player->getName() ?></p>
    <p>Force : <?= $player->getForce() ?></p>
    <p>Points de vie<?= $player->getPV() ?></p>
    <p>---------</p>
    <p>Arme :</p>
    <?php foreach ($arme2->getAllArmes() as $arme) : ?>
      <?php if ($arme['id'] == $player->getArme()) : ?>
        <p>Id : <?= $arme['id'] ?></p>
        <p>Nom : <?= $arme['name'] ?></p>
        <p>Dégats : <?= $arme['damage'] ?></p>
      <?php endif ?>
    <?php endforeach ?>
  </div>
<?php endforeach ?>





<!-- mettre ici le code -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>