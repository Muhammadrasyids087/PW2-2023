<?php
require_once "class_kasus.php";


//objek
$laut = new Laut(" Hiu Paus", " karnipora ", "Lautan");
$darat = new Darat(" Panda"," Omnivora ", "Hutan Bambu");

//echo 
echo "info hewan laut : " . "<br>";
$laut->getInfolaut();
echo "<hr>";

echo "info hewan darat :" . "<br>";
$darat->getInfodarat();
echo "<hr>";
?>