<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Méthode POST"; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="post">
  <div class="mb-3">
    <label for="number" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="number" id="number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br />

<?php
if (isset($_POST['number']) && !empty($_POST['number'])) {
?>
  <p><?= $_POST['number'] %  2 === 0 ? 'Le chiffre saisi est pair' : 'Le chiffre saisi n\'est pas pair' ?></p>
<?php
}


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>