<?php
    $arquivo = fopen('35-arquivo.txt', 'r');
    while(!feof($arquivo)):
        $linha = fgets($arquivo, filesize('35-arquivo.txt'));
        echo $linha."<br>";
    endwhile;
    fclose($arquivo);
?>