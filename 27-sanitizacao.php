<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacao</title>
</head>
<body>
    <?php
        if(isset($_POST['envir-formulario'])):
            $erros = array();

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_INT);
            $peso = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_FLOAT);
            $email = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_EMAIL);
            $ip = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_IP);
            $url = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_URL);

            if(!empty(&erros)):
                foreach($erros as $erro):
                    echo "<li> &erro </li>";
                endforeach;
            else:
                echo "dados corretos!";
            endif;
        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        idade: <input type="text" name="idade"><br>
        peso: <input type="text" name="peso"><br>
        Email: <input type="email" name="email"><br>
        ip: <input type="text" name="ip"><br>
        url: <input type="text" name="url"><br> 
        <button type="submit" name="envir-formulario">Enviar</button><br>
    </form>
</body>
</html>