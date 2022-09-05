<?php
    /*
        Array associativos e quando os indices ou as chaves são string
    */

    // Acrescenta um elemento no array e mais valor
    $pessoa = array("Nome"=> "Fabio","Idade"=> 40,"Altura"=> 1.75);    
    $pessoa["Cidade"] = "Sao Paulo";    

    foreach($pessoa as $indice => $valor){
        echo $indice.":".$valor."<br>";
        //Em cada laço o array $pessoa atribui o valor para variável $indice e a variável $valor        
    }
    //Arrays multidimensionais
    $times = array(
            "cariocas" => array("Vasco","Flamengo","Botafogo"),
            "paulistas" => array("Sao Paulo","Santos","Palmeiras"),
            "baianos" => array("Bahia","Vitoria","Juazeiro")
    );

    echo $times["cariocas"][0];
    echo "<br>";
    echo "<hr>";

    foreach($times["paulistas"] as $indice => $valor){
        echo $indice.": ".$valor."<br>";
    }

?>

