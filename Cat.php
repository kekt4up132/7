   <?php

   require_once 'Animal.php';

   class Cat extends Animal {
       public function makeSound(): string {
           return "Мяу!";
       }

       public function getType(): string {
           return "Млекопитающее";
       }
   }
   
