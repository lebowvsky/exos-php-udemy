<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Méthode GET"; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="get">
  <div class="mb-3">
    <label for="pseudo" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudo" id="pseudo">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="age" id="age">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br />

<?php
if (isset($_GET['pseudo']) && !empty($_GET['pseudo']) && isset($_GET['age']) && !empty($_GET['age'])) {
?>
  <p><?= $_GET['pseudo'] ?> a <?= $_GET['age'] ?> ans</p>
<?php
}


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>