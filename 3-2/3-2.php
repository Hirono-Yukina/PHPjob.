<?php
$fruits = ["りんご" => 100,"みかん" => 150,"もも" => 500];
$num = [3,1,6];

function getPrice($quantity ,$num){
    $total = $quantity * $num;
    return $total;
}
$i=0;
foreach($fruits as $key => $value){
    echo $key."は".getPrice($value,$num[$i])."円です。";
    $i++;
    echo '<br>';
}



?>
