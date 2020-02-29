<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Dados</title>
</head>
<body>
    <?php
        /************ Ecalares ****************/
        //string
        $nome = "Hello Word"
        var_dump($nome);
        if(is_string($nome)):
            echo "É uma string"
        else:
            echo "Não é um string";
        endif;
        echo "<hr>";
        //int
        $idade = 10;
        var_dump($idade);
        if(is_int($idade)):
            echo "É um inteiro"
        else:
            echo "Não é um inteiro";
        endif;
        echo "<hr>";
        
        //float
        $altura = 1.77;
        var_dump($altura);
        if(is_int($altura)):
            echo "É um flaot"
        else:
            echo "Não é um flaot";
        endif;
        echo "<hr>";

        //boolean
        $admin = true;
        var_dump($admin);
        if(is_bool($admin)):
            echo "É um booleano"
        else:
            echo "Não é um booleano";
        endif;
        echo "<hr>";

        /*************  compostos **************/
        //array
        $carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
        var_dump($carros);
        if(is_array($carros)):
            echo "É um array"
        else:
            echo "Não é um array";
        endif;
        echo "<hr>";

        //object
        class Cliente{
            public $nome;
            public function atribuirNome($nome){
                $this->$nome = $nome;
            }
        }
        $cliente = new Cliente();
        $cliente -> atribuirNome("Guilherme");
        var_dump($cliente);
        if(is_object($cliente)):
            echo "É um objeto"
        else:
            echo "Não é um objeto";
        endif;
        echo "<hr>";
        
        /*************  especiais **************/
        //null
        $cidade = NULL;
        var_dump($cidade);

        //resource
    ?>
</body>
</html>