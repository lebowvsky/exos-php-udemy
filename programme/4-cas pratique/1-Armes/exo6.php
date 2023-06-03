<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 6 : Gestion d'images en fonction du level"; //Mettre le nom du titre de la pAge que vous voulez

class Arme
{
  private $nom;
  private $level;
  private $description;
  private $maxLevel;

  public function __construct(string $nom,  string $description, int $maxLevel)
  {
    $this->nom = $nom;
    $this->level = 1;
    $this->description = $description;
    $this->maxLevel = $maxLevel;
  }

  private function formatString()
  {
    $result = strtolower($this->nom);
    $recherche = ['à', 'é', 'è', 'ê', 'ç'];
    $replacement = ['a', 'e', 'e', 'e', 'c'];
    $result = str_replace($recherche, $replacement, $this->nom);
    return $result . "/" . $result;
  }

  function show()
  {
?>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./sources/<?= $this->formatString($this->nom)  ?><?= $_GET["level" . $this->nom] ? $_GET["level" . $this->nom] : $this->level ?>.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-2">
          <form action="" method="GET">
            <select name="level<?= $this->nom ?>" onchange="submit();">
              <?php for ($i = 0; $i < $this->maxLevel; $i++) : ?>
                <option value="<?= $i + 1 ?>"><?= $i + 1 ?></option>
              <?php endfor ?>
            </select>
          </form>
        </div>
        <div class="col-md-6">
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

$arme1 = new Arme('épée', 'Une arme tranchante', 5);
$arme2 = new Arme('hache', 'Une arme tranchante ou un outil qui coupe du bois', 5);
$arme3 = new Arme('arc', 'Une arme à distance', 2);
$arme4 = new Arme('Fléau', 'Une arme contondante du Moyen âge', 5);

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