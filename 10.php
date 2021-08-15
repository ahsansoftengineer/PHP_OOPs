<?php
  namespace MethodChaning{
    class Method{
      public function first(){
        echo "First Method Called <br>";
        return $this;
      }
      public function second(){
        echo "Second Method Called <br>";
        return $this;
      }
      public function third(){
        echo "Third Method Called <br>";
        return $this;
      }
    }
    $m = new Method();
    $m->first()->second()->third();
  }
?>