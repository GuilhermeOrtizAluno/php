<?php 

session_start();

require_once '32-db_connect.php'; 

    if(isset($_POST['btn-editar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome =  mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "UPDATE clientes set nome = '$nome', sobrenome = '$sobrenome', 
        email = '$email', idade = '$idade' WHERE id = '$id'";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: 32-croud.php');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar";
            header('Location: 32-croud.php');
        endif;

    endif;
    
?>

