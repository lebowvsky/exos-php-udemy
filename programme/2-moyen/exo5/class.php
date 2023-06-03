<?php

class Book
{
  private  $name;
  private  $edition;
  private  $author;
  private  $date;

  public function __construct(string $name, string $edition, string $author, int $date)
  {
    $this->name = $name;
    $this->edition = $edition;
    $this->author = $author;
    $this->date = $date;
  }

  public function getName()
  {
    return $this->name;
  }
  public function getEdition()
  {
    return $this->edition;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function getDate()
  {
    return $this->date;
  }
}
