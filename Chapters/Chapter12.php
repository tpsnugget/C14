<?php

   class First{
      
      public $id = 23;
      public $name = "John Doe";

      protected function saySomething(){
         echo "Something...";
      }

   }

   class Second extends First{

      public function callSaySomething(){
         $this->saySomething();
      }

   }

   $myVar = new Second;
   $myVar->callSaySomething();

?>