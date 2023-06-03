<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 4 : la POO"; //Mettre le nom du titre de la pAge que vous voulez

class Arme
{
  public $nom;
  public $image;
  public $description;

  public function __construct(string $nom, string $image, string $description)
  {
    $this->nom = $nom;
    $this->image = $image;
    $this->description = $description;
  }
}

$arme1 = new Arme('épée', 'epee/epee1.png', 'Une arme tranchante');
$arme2 = new Arme('hache', 'hache/hache1.png', 'Une arme tranchante ou un outil qui coupe du bois');
$arme3 = new Arme('arc', 'arc/arc1.png', 'Une arme à distance');
$arme4 = new Arme('Fléau', 'fleau/fleau1.png', 'Une arme contondante du Moyen âge');

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
        <img src="./sources/<?= $arme->image ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $arme->nom ?></h5>
          <p class="card-text"><?= $arme->description ?></p>
        </div>
      </div>

    </div>
  </div>
<?php endforeach ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>