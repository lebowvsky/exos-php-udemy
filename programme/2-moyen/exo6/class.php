<?php

class Home
{
  private static $nextId = 1;
  private $id;
  private $date;
  private $nbrRoom;
  private $area;

  public function __construct(int $date, int $nbrRoom, int $area)
  {
    $this->id = self::$nextId;
    $this->date = $date;
    $this->nbrRoom = $nbrRoom;
    $this->area = $area;
    self::$nextId++;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function getNbrRoom()
  {
    return $this->nbrRoom;
  }

  public function getArea()
  {
    return $this->area;
  }
}
