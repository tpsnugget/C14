<?php

// include "Chapter16foo.php";
// include "Chapter16bar.php";

// or

spl_autoload_register( function($className){
   include $className . ".php";
} );

$foo = new Chapter16Foo;
$bar = new Chapter16Bar;

$foo->sayHello();
$bar->sayHello();
$bar->sayHi();

?>