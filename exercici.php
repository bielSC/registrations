<?php
function indexArray($keyin,$keyfin){
   
    $arrayAleatori = array();
    
    for ($i=$keyin; $i <$keyfin ; $i++) {
        $random = rand(1,500);
        $arrayAleatori[$i] =$random;
    }
    return $arrayAleatori;
}
$arrayAleatori = indexArray(1,6);

foreach ($arrayAleatori as $value) 
    echo "<h1>" . $value . "</h1>";
?>