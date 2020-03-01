<?php

   class Database{

      private $host = "127.0.0.1";
      private $user = "root";
      private $password = "#2$2LxdmZc41";
      private $dbName = "myblog";

      private $dbHandler;
      private $error;
      private $statement;

      public function __construct(){
         $dsn = "mysql:host=" . $this->host . "; dbname=" . $this->dbName;
         $options = [
            PDO::ATTR_PERSISTENT  => true,
            PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION
         ];


         try{
            $this->dbHandler = new PDO($dsn, $this->user, $this->password, $options);
         } catch(PDOException $e){
            print "Error!: " . $this->error = $e->getMessage() . "\n";
         }

      }

   }

?>