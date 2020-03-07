<?php
    $arquivo = fopen('35-arquivo.txt', 'a');
    fwrite($arquivo, "teste\r\n");
    fclose($arquivo);
?>