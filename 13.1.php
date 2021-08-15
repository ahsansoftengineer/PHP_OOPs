<?php
  // require "classes/13.1.php";
  // require "classes/13.2.php";
  // Not Working
  // function my_autoloader($class) {
  //   require 'classes/' . $class . '.php';
  // }

  // spl_autoload_register('my_autoloader');

  // Or, using an anonymous function
  spl_autoload_register(function ($class) {
      require $class . '.php';
  });
  $classes = new namespaces\Classes();
?>