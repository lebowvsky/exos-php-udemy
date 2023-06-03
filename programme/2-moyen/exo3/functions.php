<?php
function displayAnimal($animal)
{
?>
  <div class="card" style="margin: 20px 0;">
    <div class="card-body">
      <p>Nom : <?= $animal['name'] ?></p>
      <p>Age : <?= $animal['age'] ?></p>
      <p>Type : <?= $animal['type'] ?></p>
    </div>
  </div>
<?php
}
