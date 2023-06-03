<?php

function displayArray($arr)
{
?>
  <div class="col">
    <h1><?= $arr['title'] ?></h1>
    <p>
      <?php foreach ($arr['notes'] as $index => $note) : ?>
        <?php if ($index === 0) : ?>
          <?= $note ?>
        <?php else : ?>
          <span> - <?= $note ?></span>
        <?php endif ?>
      <?php endforeach ?>
    </p>
    <p>La moyenne est de : <?= calcAverage($arr['notes']) ?></p>
    <p>Le tableau <?= isAnOddNote($arr['notes']) ? 'ne contient pas' : 'ne contient' ?> que des valeurs paires</p>
  </div>
<?php

}

function calcAverage($arr)
{
  $total = 0;
  foreach ($arr as $note) {
    $total += $note;
  }
  return $total / count($arr);
}

function isAnOddNote($arrNotes)
{
  $result = false;
  foreach ($arrNotes as $note) {
    if ($note % 2 !== 0) {
      $result = true;
    }
  }
  return $result;
}
