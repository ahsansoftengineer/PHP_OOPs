<h1>Traits</h1>
<p>Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.</p>

<?php
  trait hello{
    public function sayHello(){
      echo "Hello Every One\n";
    }
    public function sayHi(){
      echo "Hi Every One\n";
    }
  }
  trait bye{
    public function sayBye(){
      echo "Bye Every One\n";
    }
  }
  class base1{
    use hello, bye;
  }
  class base2{
    use bye;
  }
  $b1 = new base1();
  $b1->sayHello();
  $b1->sayHi();
  $b2 = new base2();
  $b2->saybye();
?>