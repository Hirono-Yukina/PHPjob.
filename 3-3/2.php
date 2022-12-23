<?php
$number = $_GET['number'];
$key = str_split($number);
$rand = array_rand($key,1);
$rand_num = $key[$rand];
?>
<p> <?php echo date("Y/m/d"); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $rand_num; ?></p>
<?php
$rand_num = 0;
if($rand_num == 0){
    echo "凶";
}elseif($rand_num == 1){
    echo"小吉";
}elseif($rand_num == 2){
    echo"小吉";
}elseif($rand_num == 3){
    echo"小吉";
}elseif($rand_num == 4){
    echo"中吉";
}elseif($rand_num == 5){
    echo"中吉";
}elseif($rand_num == 6){
    echo"中吉";
}elseif($rand_num == 7){
    echo"吉";
}elseif($rand_num == 8){
    echo"吉";
}elseif($rand_num == 9){
    echo"大吉";
}
?>