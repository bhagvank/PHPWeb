<?php
   class Item {
     
      var $price;
      var $name;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setName($par){
         $this->name = $par;
      }
      
      function getName(){
         echo $this->name ." <br/>";
      }
   }

$phone = new Item();
$table = new Item();
$phone->setName('Telephone');
$table->setName('Table');

echo $phone->getName();
echo "<br>";
echo $table->getName()
?>
