<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PR 9</title>
</head>

<body>
   <h1><strong>INTROSPECTION</strong></h1>
   <?php
   class A
   {
      public $a = 1;
      public function showA()
      {
         echo $this->a;
      }
   }
   class B extends A
   {
      public $b = 2;
      public function showB()
      {
         echo $this->b;
      }
   }

   $obj = new A();
   $obj2 = new B();


   echo get_class($obj);
   echo "<br>";
   echo get_parent_class($obj2);
   echo "<br>";
   echo class_exists("A");
   echo "<br>";
   // print_r(get_declared_classes());
   echo "<br>";
   echo is_subclass_of($obj2, "A");
   echo "<br>";
   print_r(get_class_vars("A"));
   echo "<br>";
   print_r(get_object_vars($obj));
   echo "<br>";
   echo method_exists($obj, "showA");
   echo "<br>";
   print_r(get_class_methods($obj));
   ?>

   <h1><strong>SERIALIZATION</strong></h1>

   <h2>Serialization of Array</h2>

   <?php
   $arr = array("RED", "GREEN", "BLUE");
   $serialized = serialize($arr);
   echo $serialized;
   echo "<br>";

   $unserialized = unserialize($serialized);
   print_r($unserialized);
   ?>

   <h2>Serialization of Object of class</h2>
   <?php

   class C
   {
      public $a = 1;
      public function showA()
      {
         echo $this->a;
      }
   }

   $obj = new C();
   $obj->a = 2;

   echo $obj->a;
   echo "<br>";

   $serialized = serialize($obj);
   echo $serialized;
   echo "<br>";


   $unserialized = unserialize($serialized);
   echo $unserialized->a;
   echo "<br>";

   ?>

</body>

</html>