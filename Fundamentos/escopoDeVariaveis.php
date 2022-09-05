<?php

    $nome = "Fabio";
    $n1 = 2;
    $n2 = 3;
    $n3 = 4;

    function exibeNome(){
        global $nome; // Escopo Global é necessário ser declarada para utilizar
        echo $nome;
    }

    exibeNome();
    echo '<hr>';

    function exibeCidade(){
        global $cidade;
        $cidade = "Sao Paulo";
    }

    exibeCidade();
    echo $cidade;
    echo '<hr>';

    function soma(){
        // GLOBALS e um array associativo especial onde o nome da variável global vai ser a chave do array
        echo $GLOBALS['n1'] + $GLOBALS['n2'] + $GLOBALS['n3'];                
    }

    soma();

?> 
