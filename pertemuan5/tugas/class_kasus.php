<?php

class Vehicle {
    protected $type;
    protected $fuel;
   
    
    protected function __construct($type,$fuel)
    {
        $this->type = $type;
        $this->fuel = $fuel;
        
    }
    

    protected function getInfo(){
        echo "Nama Hewan:" . $this->type . "<br>";
        echo "jenis Hewan:" . $this->fuel . "<br>";
       
    }
}

class Laut extends Vehicle {
    public $wheels;

    public function __construct ($type,$fuel,$wheels)
    {
        parent ::__construct($type,$fuel);
        $this->wheels = $wheels;
    }

    public function getInfolaut()
    {
        parent::getInfo();
        echo "Habitat :" . $this->wheels . "<br>";

    }
}

class Darat extends Vehicle {
    public $max_depth;
        
    public function __construct ($type,$fuel,$max_depth)
        {
            parent::__construct($type,$fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfodarat(){
            parent::getInfo();
            echo "Suka makan Bambu dan hidup di " . $this->max_depth . "<br>";
        }
}




?>