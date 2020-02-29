<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<?php
    if(isset($_POST['enviar-formulario'])):
        $formatos = array("png", "jpg", "jpeg");
        $ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if(in_array($ext, $formatos)):
            $pasta = "_imagens/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $newName = uniqid().".$ext";

            move_uploaded_file($temporario, $pasta.$newName);

            echo "true";
        else:
            echo "false";
        endif;
    endif;    
?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo"> 
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>