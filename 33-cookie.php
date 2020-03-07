<?php
    setcookie('ultima_pesquisa', 'php', time()+3600);
    echo $_COOKIE['ultima_pesquisa'];
?>