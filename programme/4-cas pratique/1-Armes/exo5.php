<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 5 : Amélioration de la classe"; //Mettre le nom du titre de la pAge que vous voulez

class Arme
{
  private $nom;
  private $image;
  private $description;

  public function __construct(string $nom, string $image, string $description)
  {
    $this->nom = $nom;
    $this->image = $image . strval(rand(1, 2)) . '.png';
    $this->description = $description;
  }

  public function setImage($image)
  {
    $this->image = $image;
  }

  function show()
  {
?>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./sources/<?= $this->image ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $this->nom ?></h5>
            <p class="card-text"><?= $this->description ?></p>
          </div>
        </div>

      </div>
    </div>
<?php
  }
}

$arme1 = new Arme('épée', 'epee/epee', 'Une arme tranchante');
$arme1->setImage('epee/epee' . strval(rand(1, 5)) . '.png');
$arme2 = new Arme('hache', 'hache/hache', 'Une arme tranchante ou un outil qui coupe du bois');
$arme2->setImage('hache/hache' . strval(rand(1, 5)) . '.png');
$arme3 = new Arme('arc', 'arc/arc', 'Une arme à distance');
$arme3->setImage('arc/arc' . strval(rand(1, 2)) . '.png');
$arme4 = new Arme('Fléau', 'fleau/fleau', 'Une arme contondante du Moyen âge');
$arme4->setImage('fleau/fleau' . strval(rand(1, 5)) . '.png');

$armes = [$arme1, $arme2, $arme3, $arme4];
?>

<!-- mettre ici le code -->
<div>
  <strong>Voici toutes les armes :</strong>
</div>
<?php foreach ($armes as $arme) : ?>
  <?php $arme->show() ?>
<?php endforeach ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>