<?php

class Animal
{
  public  $name;
  public  $age;
  public  $type;

  public function __construct(string $name, int $age, string $type)
  {
    $this->name = $name;
    $this->age = $age;
    $this->type = $type;
  }

  public function displayAnimal()
  {
?>
    <div class="card" style="margin: 20px 0;">
      <div class="card-body">
        <p>Nom : <?= $this->name ?></p>
        <p>Age : <?= $this->age ?></p>
        <p>Type : <?= $this->type ?></p>
      </div>
    </div>
<?php
  }
}
