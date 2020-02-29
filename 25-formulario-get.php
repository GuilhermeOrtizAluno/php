<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="24-get.php" method="GET">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br> 
        <button type="submit">Enviar</button>
    </form>

    <a href="get.php?idade=25&sobrenome=santos">Enviar dados</a>
</body>
</html>