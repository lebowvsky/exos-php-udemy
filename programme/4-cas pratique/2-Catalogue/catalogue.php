<?php
ob_start(); //NE PAS MODIFIER 
$titre = "Un catalogue de produits";

$dsn = 'mysql:dbname=catalogue;host=127.0.0.1:8889';
$user = 'root';
$password = 'root';

try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Laa connexion a échouée : ' . $e->getMessage();
}

$req = 'SELECT * FROM produit';
$stmt = $dbh->prepare($req);
$stmt->execute();
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="row no-gutters">
  <?php foreach ($produits as $produit) : ?>
    <div class="col-4">
      <div class="card m-2">
        <img src="source/<?= $produit['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $produit['titre'] ?></h5>
          <p class="card-text"><?= $produit['texte'] ?></p>
          <?php
          $req2 = "SELECT nom FROM type WHERE id = :idType";
          $stmt = $dbh->prepare($req2);
          $stmt->bindValue(":idType", $produit['idType'], PDO::PARAM_INT);
          $stmt->execute();
          $type = $stmt->fetch(PDO::FETCH_ASSOC);
          ?>
          <span class="badge badge-primary"><?= $type['nom'] ?></span>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>