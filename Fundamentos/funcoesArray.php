<?php

    $nomes = array("Rodrigo","Felipe","Maria","Jose");
    $nomes1 = array("Primo"=>"Ed","Vizinho"=>"Moaci","Mae"=>"Francisca","Pai"=>"Jose");
    $keys = array_keys($nomes1); // Pega o indice do array ("Primo","Vizinho","Mae","Pai")
        
    echo in_array("Rodrigo",$nomes);//Verifica se um valor existe dentro do array
    echo '<br>';

    print_r($keys);    
?>
