<?php
class Calculator {

    //Property
    private $num1;
    private $num2;

    //Methode
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function Penambahan() {
        return $this->num1 + $this->num2;
    }

    public function Pengurangan() {
        return $this->num1 - $this->num2;
    }

    public function Perkalian() {
        return $this->num1 * $this->num2;
    }

    public function Pembagian() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error: Division by zero!";
        }
    }
}

// Object dan echo untuk tampilkan masing-masing method
$calculator = new Calculator(10, 5);

echo "Addition: " . $calculator->Penambahan() . "<br>";
echo "Subtraction: " . $calculator->Pengurangan() . "<br>";
echo "Multiplication: " . $calculator->Perkalian() . "<br>";
echo "Division: " . $calculator->Pembagian() . "<br>";
?>
