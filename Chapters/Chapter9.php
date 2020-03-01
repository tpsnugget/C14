<?php

   class User{

      public function __construct(){
         echo "New User Instantiated <br />";
      }

      public function register(){
         echo "User Registered <br />";
      }

      public function login($username="default username", $password=""){
         echo "username: ".$username." is now logged in <br />";
      }

      public function auth_user($username, $password){
         $this->login($username, $password);
         echo "In auth_user function <br />";
      }

      public function __destruct(){
         echo "User is being Destructed";
      }

   }

   $user = new User;

   $user->register();
   $user->auth_user("nugget", "12");

?>