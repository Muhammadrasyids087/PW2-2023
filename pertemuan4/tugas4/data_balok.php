<?php 
    /**
     * Task 2
     * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
     * Luas, Keliling dan Volume
     * p = 29, l = 16, t = 7
     */


    require_once 'class_balok.php';

    // Membuat objek balok dengan panjang, lebar, dan tinggi yang telah ditentukan
    $balok1 = new Balok(29, 16, 7);
    $balok2 = new Balok(10, 5, 7);
    $balok3 = new Balok(12, 16, 26);
    $balok4= new Balok(15, 14, 8);

    // Menampilkan luas, keliling dan volume balok 1
    echo 'Luas Balok = ' . $balok1->getLuas() . ' cm^2<br>';
    echo 'Keliling Balok = ' . $balok1->getKeliling() . ' cm<br>';
    echo 'Volume Balok = ' . $balok1->getVolume() . ' cm^3<br>';

    echo "<br><br>";

    //Menampilkan luas, keliling dan volume balok 2
    echo 'Luas Balok = ' . $balok2->getLuas() . ' cm^2<br>';
    echo 'Keliling Balok = ' . $balok2->getKeliling() . ' cm<br>';
    echo 'Volume Balok = ' . $balok2->getVolume() . ' cm^3<br>';

    echo "<br><br>";

    //Menampilkan luas, keliling dan volume balok 3
    echo 'Luas Balok = ' . $balok3->getLuas() . ' cm^2<br>';
    echo 'Keliling Balok = ' . $balok3->getKeliling() . ' cm<br>';
    echo 'Volume Balok = ' . $balok3->getVolume() . ' cm^3<br>';

    echo "<br><br>";

    //Menampilkan luas, keliling dan volume balok 4
    echo 'Luas Balok = ' . $balok4->getLuas() . ' cm^2<br>';
    echo 'Keliling Balok = ' . $balok4->getKeliling() . ' cm<br>';
    echo 'Volume Balok = ' . $balok4->getVolume() . ' cm^3<br>';



?>
