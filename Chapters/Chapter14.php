<?php

   class User{

      public static $minPassLength = 5;

      public static function validatePassword($password){
         if(strlen($password) >= self::$minPassLength){
            return true;
         } else {
            return false;
         }
      }

   }

   $password = "pass";

   echo "The minimum password length is " . User::$minPassLength . "\n";

   User::$minPassLength = 7;
   echo "minPassLength is now " . User::$minPassLength . "\n";

   if(User::validatePassword($password)){
      echo "Password is valid";
   } else {
      echo "Password is not valid";
   }

?>