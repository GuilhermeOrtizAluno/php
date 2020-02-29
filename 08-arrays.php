<?php
    // numerico
   $carros = array(1=>"golzao", 2=>"unao", 3=>"combezona");
   $carros[] = "corsinha";
   $carros[10] = "celtinha";
   echo $carros[10]; 
   echo "<hr>";

   //associativo
   $pessoa = array("nome"=>"rodrigo", "idade"=>20);
   $pessoa["cidade"] = "castro";

   //multidimensionais
    $times =  array(
        "cariocas"=>array("campeao"=>"flamengo","sempre-vice"=>"vasco"),
        "paulistas"=>array("rebaixado"=>"corinthians","biba"=>"sao paulo", "sem-mundial"=>"palmeiras")
    );


?>