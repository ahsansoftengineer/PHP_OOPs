<h1>Static Members $ Late Static Binding in PHP</h1>
<p>Late static bindings in PHP is a feature which can be used to reference the called class in a context of static inheritance. Essentially, late static bindings work by storing the class named in the last “non-forwarding call”.</p>
<p>:: Known as Schope Resolution Operator</p>
<?php
  // When all the Members are Static then it is known as Static Class
  class Personnel{
    public static $fixedValue = 3.7;
    public static $parentStaticVariable = 32305;

    public static function print(){
      echo self::$fixedValue;
    }
    public static function chapo(){
      // This will Override the Parent and use Child Variable if any
      // Late Static Binding (use static instead of self)
      echo static::$parentStaticVariable;
    }
  }
  class Professor extends Personnel{

  }
  class Dean extends Personnel{
    public static $myFixedValue = 3.8;
    public static $parentStaticVariable = 7218;
    public static function print(){
      echo parent::$fixedValue;
      echo self::$myFixedValue;
    }
  }
  $dean = new Dean();
  echo $dean->print()."<br>";
  echo $dean->chapo()."<br>";
  $professor = new Professor();
  echo $professor->chapo();

?>