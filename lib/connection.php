<?php
class DB
{
  private static $instance = NULl;
  public static function getInstance()
  {
    if (!isset(self::$instance)) {

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "btl_web";

      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      self::$instance = new mysqli($servername, $username, $password, $dbname);
      if (self::$instance->connect_error) {
        die("Connection failed: " . self::$instance->connect_error);
      } else {;
      }
    }
    return self::$instance;
  }
}
