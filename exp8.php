<html>

<body>
   <h1>Inheritance</h1>
   <!-- <?php
         class parrot
         {
            public $parrot_color;
            public $parrot_name;

            public function __construct($parrot_color, $parrot_name)
            {
               $this->parrot_color = $parrot_color;
               $this->parrot_name = $parrot_name;
            }
         }
         class bird extends parrot
         {
            public function __construct($parrot_color, $parrot_name, $bird_age)
            {
               $this->parrot_color = $parrot_color;
               $this->parrot_name = $parrot_name;
               $this->bird_age = $bird_age;
            }
            public function Bird()
            {
               echo "The bird name is {$this->parrot_name} , the color of bird is {$this->parrot_color}, and his age is {$this->bird_age}.";
            }
         }
         $b = new bird('green', 'Parrot', '2');
         $b->Bird();

         echo "<br>";

         ?> -->

   <h2>Multilevel Inheritance</h2>
   <?php
   class crow
   {
      public $crow_color;
      public $crow_name;

      public function __construct($crow_color, $crow_name)
      {
         $this->crow_color = $crow_color;
         $this->crow_name = $crow_name;
      }
   }

   class age extends crow
   {

      public function __construct($crow_color, $crow_name, $bird_age)
      {
         $this->crow_color = $crow_color;
         $this->crow_name = $crow_name;
         $this->bird_age = $bird_age;
      }
   }

   class birds extends age
   {
      public function __construct($crow_color, $crow_name, $bird_age)
      {
         $this->crow_color = $crow_color;
         $this->crow_name = $crow_name;
         $this->bird_age = $bird_age;
      }
      public function Bird()
      {
         echo "The bird name is {$this->crow_name} , the color of bird is {$this->crow_color}, and his age is {$this->bird_age}.";
      }
   }
   $b = new birds('black', 'Crow', '3');
   $b->Bird();

   ?>
   <h2>Multiple Inheritance</h2>

   <?php
   trait crow1
   {
      public $crow_color;
      public $crow_name;

      public function __construct($crow_color, $crow_name)
      {
         $this->crow_color = $crow_color;
         $this->crow_name = $crow_name;
      }
   }
   trait parrot1
   {
      public $parrot_color;
      public $parrot_name;

      public function __construct($parrot_color, $parrot_name)
      {
         $this->parrot_color = $parrot_color;
         $this->parrot_name = $parrot_name;
      }
   }
   class Multiple_bird
   {
      use crow1;
      public function __construct($color, $name, $age)
      {
         $this->color = $color;
         $this->name = $name;
         $this->age = $age;
      }
      public function Multiple_bird()
      {
         echo "The bird name is {$this->name} , the color of bird is {$this->color}, and his age is {$this->age}.";
      }
   }
   $crow = new Multiple_bird("black", "Crow", "2");
   $parrot = new Multiple_bird("Green", "Parrot", "4");
   $crow->Multiple_bird();
   echo "<br>";
   $parrot->Multiple_bird();
   ?>
</body>

</html>