<?php
require_once "class_kendaraan.php";
//objek
$motor = new Motor(" motor", " Bensin ", 2);
$perahu = new Perahu(" Perahu"," Solar ", 100);

//echo 
echo "info motor : " . "<br>";
$motor->getInfoMotor();
echo "<hr>";

echo "info perahu :" . "<br>";
$perahu->getInfoPerahu();
echo "<hr>";
?>