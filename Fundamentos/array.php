<?php
    //arrays

    $carros1 = array("BMW","Veloster","Hilux");

    // Esse exemplo abaixo permite definir o indice do array
    $carros2 = array(1=>"Gol",2=>"Brasilia",3=>"Fusca");
    $carros1[] = "Amarok";

    print_r($carros1); // print_r -> Printa retorno caso seja verdadeiro
    echo '<hr>';    
    echo "$carros1[0]<br>";
    echo "$carros2[1]<br>";
    echo '<hr>';
    echo 'Adiciona elemento no array carros1<br>';
    print_r($carros1);
    echo '<hr>';
    
    $motos = array(); //Outra forma de utilizar um array
    $motos[]= "Yamaha";
    $motos[]= "Honda";
    $motos[5]= "Suzuki";
    //echo $motos[];
    echo '<br>';
    var_dump($motos);
    echo '<hr>';

    $clientes = array("Rodrigo","Fabio","Jones");
    print_r($clientes);

?>
