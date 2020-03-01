<?php

   abstract class Animal{

      public $name;
      public $color;

      public function describe(){
         return $this->name . " is " . $this->color;
      }

      // abstract public function makeSound();

   }

   class Duck extends Animal{

      public function describe(){
         return parent::describe();
      }

      public function makeSound(){
         return "Quack";
      }

   }

   class Dog extends Animal{

      public function describe(){
         return parent::describe();
      }

      public function makeSound(){
         return "Woof";
      }

   }

   $duck = new Duck;
   $duck->name = "Ben";
   $duck->color = "Yellow";

   echo $duck->describe() . "\n";
   echo $duck->makeSound() . "\n";

   $dog = new Dog;
   $dog->name = "Olive";
   $dog->color = "black";
   echo $dog->describe() . "\n";
   echo $dog->makeSound() . "\n";

?>