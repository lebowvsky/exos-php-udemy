<?php

class Arme
{
  private static $nextId = 1;
  private $id;
  private $name;
  private $damage;
  private static $allArmes = [];

  public function __construct(string $name, int $damage)
  {
    $this->id = self::$nextId;
    $this->name = $name;
    $this->damage = $damage;
    self::$nextId++;

    array_push(self::$allArmes, [
      'id' => $this->id,
      'name' => $this->name,
      'damage' => $this->damage,
    ]);
  }

  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getDamage()
  {
    return $this->damage;
  }

  public function getAllArmes()
  {
    return self::$allArmes;
  }
}
