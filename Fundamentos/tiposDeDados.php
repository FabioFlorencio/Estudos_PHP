<?php 
    $nome = "Ola mundo";    
    $idade = 40;
    $altura = 1.75;
    $admin = true;
    $carros = array("Gol","Uno","Camaro",12,20.6,true);
    $cidade = NULL;

    var_dump($nome); // Mostra o tipo de dado e a quantidade conforme sua declaração   
    if(is_string($nome)):
        echo "<br>E uma string<br>";
    else:
        echo "<br>Nao e uma string<br>";
    endif;  
    
    echo "<hr>";
    
    var_dump($idade);
    if(is_int($idade)): // Válida se é um inteiro
        echo "<br>E um inteiro<br>";
    else:
        echo "<br>Nao e um inteiro<br>";
    endif;      
    
    echo "<hr>";

    var_dump($altura);
    if(is_float($altura)):
        echo "<br>E um float<br>";
    else:
        echo "<br>Não e um float<br>";
    endif;        

    echo "<hr>";

    var_dump($admin);
    if(is_bool($admin)):
        echo "<br>E um boolean<br>";
    else:
        echo "<br>Nao e um boolean<br>";
    endif;

    echo "<hr>";    

    var_dump($carros);

    if(is_array($carros)):
        echo "<br>E um array<br>";
    else:
        echo "<br>Nao e um array<br>";
    endif;
    
    echo "<hr>";

    class Cliente{
        public $nome;

        public function atribuirNome($nome){
            $this->$nome = $nome;
        }
    }

    $cliente = new Cliente();
    $cliente->atribuirNome("Fabio");

    var_dump($cliente);
    if(is_object($cliente)):
        echo "E um objeto";
    else:
        echo "Nao e um objeto";
    endif;

    echo "<hr>";

    var_dump($cidade);    
?> 
