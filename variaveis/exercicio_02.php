<?php

    $anoNascimento = 1990;

    //Evitar caracteres especiais e números no ínicio

    $nome1 = 'Lucas';
    $sobrenome = 'Santos';

    $nomeCompleto = $nome1 . " " .  $sobrenome; // -> Concatenação

    echo $nomeCompleto;
    exit();

    echo $nome1;
    echo "<br/>";

    /*
    unset ($nome1);
    echo $nome1; // Erro Notice, pois não tem mais valor
    */

    if (isset ($nome1)) {

        echo $nome1;
    }
    

?>