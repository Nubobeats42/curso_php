<?php

    $nome = "Lucas";

    function teste() {

        global $nome;
        echo $nome;
    }

    function teste2() {

        $nome = "João";
        echo "<br/>";
        echo $nome . "  agora no teste2";
    }

    teste();
    teste2();
?>