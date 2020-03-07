<?php include_once '32-header.php';?>

<div class = "row">
   <div class = "col s12 m6 push-m3">
       <h3 class = "light">Novo cliente</h3>
        <form action="32-create.php" method="POST">
            <div class = "input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class = "input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class = "input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class = "input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="32-croud.php" class="btn green">Lista de Clientes</a>
        </form>   
    </div>
</div>

<?php include_once '32-footer.php' ?>