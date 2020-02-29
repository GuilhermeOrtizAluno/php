<?php
    $senha = "123456";
    $novasenha = base64_encode($senha);
    echo "base64: ".$novasenha."<br>";
    echo "sua senha é".base64_decode($novasenha);
    echo "<hr>";

    echo "md5: ". md5($senha);
    echo "Sha1: ". sha1($senha);
    echo "<hr>";

    $options = [
        'cost' => 10,
    ];

    $senha_db = '';
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
    echo $senhaSegura;

    if (password_verify($senha, $senha_db)):
        echo "senha vaalida";
    endif;
?>