<?php
ob_start(); //NE PAS MODIFIER 
$titre = "Une page web d'animaux";
?>

<?php
require "./models/MonPDO.class.php";
require "./models/Animal.class.php";
require "./models/AnimalDAO.class.php";

$animaux = AnimalDAO::getAnimauxBD();
foreach ($animaux as $animal) {
  $type = AnimalDAO::getTypeAnimal($animal['idAnimal']);
  $images = AnimalDAO::getImagesAnimal($animal['idAnimal']);
  new Animal($animal['idAnimal'], $animal['nom'], $animal['age'], $animal['sexe'], $type, $images);
}

// View
// foreach (Animal::$mesAnimaux as $animal) {
//   echo $animal->getNom() . ' : ' . $animal->getType() . '<br />';
//   echo 'images : ';
//   foreach ($animal->getImages() as $image) {
//     echo $image['libelle'] . ' ;';
//   }
//   echo '<br /><br />';
// }

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Type</th>
      <th scope="col">Images</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach (Animal::$mesAnimaux as $animal) : ?>
      <tr>
        <th scope="row"><?= $animal->getId() ?></th>
        <td><?= $animal->getNom() ?></td>
        <td><?= $animal->getAge() ?></td>
        <td><?= $animal->getSexe() == 0 ?  "Femelle" : "Mâle" ?></td>
        <td><?= $animal->getType() ?></td>
        <td>
          <?php foreach ($animal->getImages() as $image) : ?>
            <img class="rounded img-thumbnail img-fluid" src="sources/<?= $image['url'] ?>" alt="<?= $image['libelle'] ?>" style="max-height: 150px;" />
          <?php endforeach ?>
        </td>
      </tr>
    <?php endforeach ?>
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