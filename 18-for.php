<?php
    for($cont=0; $cont<10; $cont++):
        echo "5 x $cont = ".($cont*5)."<br>"; 
    endfor:
    echo "<hr>";

    $cores = array("azul","amarelo","vermelho");
    foreach($cores as $i => $valor):
        echo $i."-".$valor."<br>";
    endforeach;
?>