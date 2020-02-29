<?php
    if(1==1 && 2==2):
        echo "true";
    else:
        echo "false";
    endif;
    echo "<hr>";

    if(1==1 || 1==2):
        echo "true";
    else:
        echo "false";
    endif;
    echo "<hr>";

    if(1==1 xor 2==2):
        echo "true";
    else:
        echo "false";
    endif;
    echo "<hr>";

    if(1==1 ! 2==2):
        echo "true";
    else:
        echo "false";
    endif;
    echo "<hr>";
?>