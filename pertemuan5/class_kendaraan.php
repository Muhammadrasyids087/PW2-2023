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
        echo "jenis kendaraan:" . $this->type . "<br>";
        echo "jenis bahan bakar:" . $this->fuel . "<br>";
       
    }
}

class Motor extends Vehicle {
    public $wheels;

    public function __construct ($type,$fuel,$wheels)
    {
        parent ::__construct($type,$fuel);
        $this->wheels = $wheels;
    }

    public function getInfoMotor()
    {
        parent::getInfo();
        echo "jumlah roda :" . $this->wheels . "<br>";

    }
}

class Perahu extends Vehicle {
    public $max_depth;
        
    public function __construct ($type,$fuel,$max_depth)
        {
            parent::__construct($type,$fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfoPerahu(){
            parent::getInfo();
            echo "maksimal kedalaman" . $this->max_depth . "<br>";
        }
}




?>