<?php

class Player
{
  private $name;
  private $force;
  private $pv;
  private $arme;

  public function __construct(string $name, int $force, int $pv, int $arme)
  {
    $this->arme = $arme;
    $this->name = $name;
    $this->force = $force;
    $this->pv = $pv;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getForce()
  {
    return $this->force;
  }

  public function getPV()
  {
    return $this->pv;
  }
  public function getArme()
  {
    return $this->arme;
  }
}
