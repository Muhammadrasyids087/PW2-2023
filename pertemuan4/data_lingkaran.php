<?php
    require_once 'class_lingkaran.php';

    echo "Nilai PHI " . Lingkaran::PHI;

    $Lingkar1 = new Lingkaran(7);
    $Lingkar2 = new Lingkaran(68);

    echo '<br>Luas Lingkaran 1 = ' . $Lingkar1->getLuas() . 'cm';
    echo '<br>Keliling Lingkaran 1 = ' . $Lingkar1->getKel() . 'cm';

    echo  '<br><br>';

    echo '<br>Luas Lingkaran 2 = ' . $Lingkar2->getLuas() . 'cm';
    echo '<br>Keliling Lingkaran 2 = ' . $Lingkar2->getKel() . 'cm';

    

?>