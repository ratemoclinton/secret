<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/ratemo/stomigram";
    public static $GMAIL = "clintonbrucy@gmail.com";
    public static $GMAIL_PASSWORD = "clintonhot";

    public static function _DB(){
      try {
        self::$database = new PDO('postgres:host=ec2-54-221-243-211.compute-1.amazonaws.com;dbname=dfqagcdd4dv2pf;charset=utf8mb4', 'wbyegwoztbkvss', '6a5f10056a115c200837e736a123b49f960791907a66b6473c4cb80fc2ff771d');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
