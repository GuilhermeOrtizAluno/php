<?php 

session_start();

require_once '32-db_connect.php'; 

    if(isset($_POST['btn-cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome =  mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);

        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastro com sucesso!";
            header('Location: 32-croud.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastro";
            header('Location: 32-croud.php');
        endif;

    endif;
    
?>

