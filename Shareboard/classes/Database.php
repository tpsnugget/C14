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

      public function query($query){
         $this->statement = $this->dbHandler->prepare($query);
      }

      public function bind($param, $value, $type = null){
         if(is_null($type)){
            switch(true){
               case is_int($value):
               $type = PDO::PARAM_INT;
               break;

               case is_bool($value):
               $type = PDO::PARAM_BOOL;
               break;

               case is_null($value):
               $type = PDO::PARAM_NULL;
               break;
               default:
               $type = PDO::PARAM_STRING;
            }
         }
         $this->statement->bindValue($param, $value, $type);
      }

      public function execute(){
         return $this->statement->execute();
      }

      public function resultSet(){
         $this->execute();
         return $this->statement->fetchAll(PDO::FETCH_ASSOC);
      }

      // public function __set($name, $value){
      //    $this->name = $value;
      // }

      // public function __get($name){
      //    print "Getting '$name' \n";
      //    return $this->name;
      // }

   }

?>