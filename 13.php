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
      require 'classes/' . $class . '.php';
  });
  class Third{
    public function __construct()
    {
      $first = new First();
      $second = new _13_2\Second();
      $forth = new namespaces\Classes();
    }
  }
 
  $t = new Third();
?>