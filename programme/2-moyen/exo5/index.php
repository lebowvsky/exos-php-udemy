<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private & getters"; //Mettre le nom du titre de la pAge que vous voulez
require 'class.php';
$book1 = new Book('Babar', 'edition du radeau', 'Georges', 1983);
$book2 = new Book('Tomtom & Nana', 'Bô Livre', 'Gislaine', 1987);
$book3 = new Book('La Petite Sirène', 'edition du radeau', 'Jean Robert', 1995);
$book4 = new Book('Zorro', 'Bô Livre', 'Juan Lopez', 1978);
$book5 = new Book('Rox et Rouky', 'Bô Livre', 'Jules Renard', 1967);
$book6 = new Book('Tintin en RTT', 'edition du radeau', 'Hergé', 1978);
$allBooks = [$book1, $book2, $book3, $book4, $book5, $book6];

$allEditions = [];
foreach ($allBooks as $book) {
  array_push($allEditions, $book->getEdition());
}
$allEditions = array_unique($allEditions, SORT_STRING);

$allDates = [];
foreach ($allBooks as $book) {
  array_push($allDates, $book->getDate());
}
$allDates = array_unique($allDates, SORT_ASC);
?>

<!-- mettre ici le code -->
<div class="container-fluid bg-light p-3">
  <form action="" method="post">
    <div class="row my-4 px-3">
      <div class="card p-4">
        <label for="edition">Edition :</label>
        <select class="form-select" name="edition">
          <option value="all" selected>Toutes</option>
          <?php foreach ($allEditions as $edition) :  ?>
            <option value="<?= $edition ?>"><?= $edition ?></option>
          <?php endforeach  ?>
        </select>
      </div>
      <div class="card p-4 mx-4">
        <label for="date">Date :</label>
        <select class="form-select" name="date">
          <option value="all" selected>Toutes</option>
          <?php foreach ($allDates as $date) :  ?>
            <option value=<?= $date ?>><?= $date ?></option>
          <?php endforeach  ?>
        </select>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>

<div class="container d-flex flex-wrap p-2">
  <?php foreach ($allBooks as $book) : ?>
    <?php if (($_POST['edition'] === 'all' || $_POST['edition'] === $book->getEdition()) && ($_POST['date'] === 'all' || $_POST['date'] == $book->getDate())) : ?>
      <div class="card col-3 mr-4 my-4 p-2">
        <h5 class="card-title"><?= $book->getName() ?></h5>
        <p class="card-text"><?= $book->getAuthor() ?></p>
        <p class="card-text"><?= $book->getEdition() ?></p>
        <p class="card-text"><?= $book->getDate() ?></p>
      </div>

    <?php endif ?>
  <?php endforeach ?>
</div>
<!-- <h1><?= $_POST['edition'] ?></h1> -->
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>