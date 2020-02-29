<?php
    function media($n1,$n2,$n3,$n4){
        $media = ($n1+$n2+$n3+$n4)/4;
        if($media>=7):
            echo "aprovado";
        else:
            echo "reprovado";
        endif;
    }
    media(1,1,1,1);
    media(6,7,6,8);
?>