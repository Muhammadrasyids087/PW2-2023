<?php

    class Car {
        // property
        public $brand;
        public $color;

        //Method
        function getBrand(){
            return $this->brand;
            
        }
        function getColor(){
            return $this->color;
        }
    }

    //objek
    $rubicon  = new Car();
    $tesla = new Car();

    
     $rubicon->brand = "Rubicon";
     $rubicon->color = "Black";

     $tesla->brand = "Tesla";
     $tesla->color = "Red";

    //Echo
    echo $rubicon->getBrand();
    echo "<br>";
    echo $rubicon->getColor();

    echo "<br><br>";

    echo $tesla->getBrand();
    echo "<br>";
    echo $tesla->getColor();
    




?>