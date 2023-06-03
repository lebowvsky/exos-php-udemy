<?php
class MonPDO
{
  private const HOST_NAME = '127.0.0.1:8889';
  private const DB_NAME = 'animaux';
  private const USER_NAME = 'root';
  private const PASSWORD = 'root';

  private static $monPDOinstance = null;

  public static function getPDO()
  {
    if (is_null(self::$monPDOinstance)) {
      try {
        $options = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $connexion = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::HOST_NAME;
        self::$monPDOinstance = new PDO($connexion, self::USER_NAME, self::PASSWORD, $options);
      } catch (PDOException $e) {
        $message = 'erreur de connexion à la bdd : ' .  $e->getMessage();
        die($message);
      }
    }
    return self::$monPDOinstance;
  }
}
