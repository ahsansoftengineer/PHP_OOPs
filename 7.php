<h1>Method Overriding in Traits</h1>
<?php
  trait A{
    // 3. Third Priority 
    public function func(){
      echo "Trait A Function Called";
    }
    private function func2(){
      echo "Trait A Private Function Called";
    }
  }
  trait Z{
    function func(){
      echo "Trait Z Function Called";
    }
  }
  class B{
    use A{
      A::func2 as public Bfunc2;
    }
    // 2. Overriding Trait A func
    function func(){
      echo "Class B Function Called";
    }
    
  }
  class C extends B{
    // 1. Overriding Class B func
    function func(){
      echo "Class C Function Called";
    }
  }
  class D{
    // Here to prevent colision we are telling which function to use 
    // when the same function name is availaible in both function
    use A, Z{
      Z::func insteadof A;
    }
  }
  // This will look into C then B and then A for func()
  $c1 = new C();
  $c1->func();
  echo "<br>";
  $d1 = new D();
  $d1->func();
  echo "<br>";
  $b = new B();
  $b->Bfunc2();
?>