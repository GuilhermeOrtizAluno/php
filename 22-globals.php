<?php
    $x = 1;
    $y = 2;
    function soma(){
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }
    soma();
    echo "<hr>";

?>