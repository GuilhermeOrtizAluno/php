<?php
    $numero = 50;
    if($numero == 10):
        echo "igual a 10";
    elseif($numero<=9):
        echo "menor que 9";
    else:
        echo "diferente de 10";
    endif;
    echo "<hr>";

    $media = 6;
    echo($media >= 7) ? "aprovado" : "Reprovado";
    echo "<hr>";

    $semana = 1;
    switch($semana):
        case 1:
            echo "Domingo";
        break;
        case 1:
            echo "Segunda";
        break;
        case 1:
            echo "Terça";
        break;
        case 1:
            echo "Quarta";
        break;
        case 1:
            echo "Quinta";
        break;
        case 1:
            echo "Sexta";
        break;
        case 1:
            echo "Sabado";
        break;
    endswitch;
?>