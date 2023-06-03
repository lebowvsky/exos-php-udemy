<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaires et Tableaux "; //Mettre le nom du titre de la pAge que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="post">
  <div class="mb-3">
    <label for="note1" class="form-label">note 1</label>
    <input type="text" class="form-control" name="note1" id="note1">
  </div>
  <div class="mb-3">
    <label for="note2" class="form-label">note 2</label>
    <input type="text" class="form-control" name="note2" id="note2">
  </div>
  <div class="mb-3">
    <label for="note3" class="form-label">note 3</label>
    <input type="text" class="form-control" name="note3" id="note3">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br />

<?php
if (
  isset($_POST['note1']) && !empty($_POST['note1'])
  && isset($_POST['note2']) && !empty($_POST['note2'])
  && isset($_POST['note3']) && !empty($_POST['note3'])
) {
  $total = 0;
  foreach ($_POST as $value) {
    $total += $value;
  }
  $average = $total / count($_POST);
?>
  <h1>La moyenne des trois notes est de : <?= $average ?></h1>
<?php
}


/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>