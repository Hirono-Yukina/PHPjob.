<?php
$my_name = $_GET['number'];
?>
<p> <?php echo date("Y/m/d"); ?>の運勢は</p>
<p>選ばれた数字は<?php echo mt_rand(1,9); ?></p>
<?php
$fortune = 0;
if($fortune == 0){
    echo "凶";
}elseif($fortune == 1){
    echo"小吉";
}elseif($fortune == 2){
    echo"小吉";
}elseif($fortune == 3){
    echo"小吉";
}elseif($fortune == 4){
    echo"中吉";
}elseif($fortune == 5){
    echo"中吉";
}elseif($fortune == 6){
    echo"中吉";
}elseif($fortune == 7){
    echo"吉";
}elseif($fortune == 8){
    echo"吉";
}elseif($fortune == 9){
    echo"大吉";
}
?>