<?php

   class Post{

      private $name;

      public function __set($name, $value){
         echo "Setting " . $name . " to <strong>" . $value . "</strong>\n";
         $this->name = $value;
      }

      public function __get($name){
         echo "Getting " . $name . "<strong> " . $this->name . "</strong>\n";
      }

      // public function __isset($name){
      //    echo "Is " . $name . " set?<br />";
      //    return isset($this->name);
      // }

   }

   $post = new Post;
   $post->name = "Testing";
   $getName = $post->name;
   echo $getName . "\n";
   // var_dump(isset($post->name));

?>