<?php

   class User{

      public $id = 33;
      public $username;
      public $email;
      public $password;

      public function __construct($username){
         $this->username = $username;
         echo "New User Instantiated <br />";
      }

      public function register(){
         echo "User Registered <br />";
      }

      public function login(){
         echo "username: ".$this->username." is now logged in <br />";
      }

      public function auth_user($password){
         $this->password = $password;
         $this->login();
         echo "In auth_user function <br />";
         echo "User id is $this->id <br />";
      }

      public function __destruct(){
         echo "User is being Destructed";
      }

   }

   $user = new User("Mike");

   $user->register();
   $user->auth_user("12");

?>