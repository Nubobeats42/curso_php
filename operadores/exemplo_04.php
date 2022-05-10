<?php

    $a = 55.0; // Float

    $b = 55; // Int

    var_dump($a > $b); // = false
    echo "<br/>";
    var_dump($a < $b); // = false 

    // echo "<br/>";
    // var_dump($a = $b);

    /*
     = : atribui valor
     == : compara valor
     === : compara valor e tipo
     != : negação de valor
     !== : negação do valor e do tipo

    */

    echo "<br/>";
    var_dump($a == $b); // = True

    echo "<br/>";
    var_dump($a === $b); //  = False

    echo "<br/>";
    var_dump($a != $b); // valores não são diferentes = false

    echo "<br/>";
    var_dump($a !== $b); // valores não são diferentes, porém o tipo é diferente = true
?>