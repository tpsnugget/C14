<?php

   class People{

      public $person1 = "Mike";
      public $persion2 = "Stephen";
      public $persion3 = "Shari";
      protected $person4 = "Protected John";
      private $person5 = "Private Jen";

      function iterateObject(){
         foreach($this as $key => $value){
            print "$key => $value\n";
         }
      }

   }

   $people = new People;

   $people->iterateObject();

   foreach($people as $key => $value){
      print "$key => $value\n";
   }

?>