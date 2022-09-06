<?php

    $clientes = array("Fabio","Aline","Jones");
    $alunos = array("Kleber","Maria","João");

    $totalClientes = count($clientes); // Método para contar a qtd de elementos dentro de um array
    print_r($clientes);

    echo '<br>';
    echo "Total de clientes:$totalClientes<br>";
    echo "Total de alunos:". count($alunos);
    echo '<hr>';

    // k $pessoas
    foreach($clientes as $pessoas){
        echo $pessoas. "<br>";
    }

?>

