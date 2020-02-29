<?php
    //escopo global
    $nome = "Guilherme Ortiz";
    $x = 1;
    $y = 2;
    $z = 3;

    function exibeNome(){
        global $nome;
        echo $nome;
    }
    exibeNome();
    echo "<hr>";

    function exibeCidade(){
        //escopo local
        global $cidade;
        $cidade = "Castro";
    }
    exibeCidade();
    echo "<hr>";

    function soma(){
        echo = $GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['z'];
    }
    soma();
?>