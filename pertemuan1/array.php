<?php


    $fruits =  ["Apple", "Banana", "Orange"];

    var_dump ($fruits);
    echo "<hr>";
    print_r ($fruits);
    echo "<hr>";
    foreach ( $fruits as $fruit ) {
        echo $fruit;
        echo "<br>";
    
    }

// Array Associative

    echo "<hr>";

    $dinos = [
        'dinoName'=> 'Tyrannosaurus Rex',
        'dinoAge' => 400,
        'isMarried' => 'false'
    ];

    foreach ($dinos as $dinos) {
        echo $dinos;
        echo '<br>';
    }

// Multidimantions Array
    echo "<hr>";

    $dino = [
        [
            'dinoName'=> 'Tyrannosaurus Rex',
            'dinoAge' => 400
        ],
        [
            'dinoName'=> 'Velociraptor',
            'dinoAge' => 100
        ],
        [
            'dinoName'=> 'Diplodocus',
            'dinoAge' => 250
        ],
    ];

    echo $dino [0]['dinoName'];
    echo "<br>";
    echo $dino[0]['dinoAge'];

    echo "<hr>";

    foreach ($dino as $dino) {
        echo $dino ['dinoName'] . " - " .$dino['dinoAge'] . " years old";
        echo "<br>";
    }
    

?>