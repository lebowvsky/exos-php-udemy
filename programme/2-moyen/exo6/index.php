<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut statique"; //Mettre le nom du titre de la pAge que vous voulez
require 'class.php';
$home1 = new Home(1900, 4, 174);
$home2 = new Home(1905, 6, 250);
$home3 = new Home(1873, 7, 300);
$home4 = new Home(1979, 4, 120);
$allHomes = [$home1, $home2, $home3, $home4];

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre de chambres</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($allHomes as $home) : ?>
      <tr>
        <th scope="row"><?= $home->getId() ?></th>
        <td><?= $home->getDate() ?></td>
        <td><?= $home->getNbrRoom() ?></td>
        <td><?= $home->getArea() ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>

<!-- mettre ici le code -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>