 <?php 
    include_once '32-header.php';
    include_once '32-db_connect.php';
    include_once '32-massage.php';
 ?>

 <div class = "row">
    <div class = "col s12 m6 push-m3">
        <h3 class = "light">Clientes</h3>
        <table class = "striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
 
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $res = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($res)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['sobrenome']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><a href="32-editar.php?id=<?php echo $dados['id']; ?>" class = "btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class = "btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                            <p>Tem certeza?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="32-delete.php" method = "POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn ted">Sim, tenho certeza</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="32-adicionar.php" class = "btn">Adicionar cliente</a>
    </div>
 </div>
 
 <?php include_once '32-footer.php' ?>