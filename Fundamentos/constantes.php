<?php

    /*
        Constantes

        E necessário declarar a constante com letras maiúsculas e passar
        um parâmetro. Quando for utilizar não é necessário declarar com cifrão.

    */    

    const NOME = 'Fabio'; 
    define("IDADE",40);
    define("ALTURA",1.75);
    define("SOLTEIRO", true);

    echo 'Meu nome e ' .NOME.', minha idade e ' .IDADE. ' anos e tenho a altura de '. ALTURA;    

    function exibeNome(){
        echo NOME; // Não é necessário declarar como global a constante pois por default já possui essa propriedade
    }

    echo '<br>';
    exibeNome();    
?>
