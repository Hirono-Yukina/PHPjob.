<?php 
$name = $_POST['name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];
?>


<p> <?php echo $name; ?> さんの結果は・・・？</p>
<p>①の答え</p>
<?php
$number = 80;
if($number == 80){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>

<p>②の答え</p>
<?php
$language = "HTML";
if($language == "HTML"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>

<p>③の答え</p>
<?php
$command = "select" ;
if($command == "select"){
    echo "正解！";
}else{
    echo "残念・・・";
}
?>