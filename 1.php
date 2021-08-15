<h1>PHP Properties and Functions</h1>
<?php
  class calculation{
    public $a, $b, $c;
    function sum(){
      $this->c = $this->a + $this->b;
      return $this->c;
    }

    function sub(){
      $this->c = $this->a - $this->b;
      return $this->c;
    }
  }
  $c1 = new calculation(); 
  $c1->a = 20;
  $c1->b = 8;
  echo 'c1 sum : '.$c1->sum()."<br>";
  echo 'c1 sub : '.$c1->sub()."<br>";
  $c2 = new calculation(); 
  $c2->a = 250;
  $c2->b = 148;
  echo 'c2 sum : '.$c2->sum()."<br>";
  echo 'c2 sub : '.$c2->sum()."<br>";
?>