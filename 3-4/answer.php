<link rel="stylesheet" href=css/answer.css>
<body style = "background-color:gray;">


<?php 
$name = $_POST['name'];
$value = $_POST['number'];
$value1 = $_POST['language'];
$value2 = $_POST['command'];
?>

<div class = "answer">
    <p> <?php echo $name; ?> さんの結果は・・・？</p>
    <div class = "value">
        <p>①の答え</p>
        <?php
        if($value == 80){
            echo "正解！";
        }else{
            echo "残念・・・"; 
        }?>
    </div>

    <div class = "value1">
        <p>②の答え</p> 
        <?php
        if($value1 == "HTML"){
            echo "正解！";
        }else{
            echo "残念・・・";
        }
        ?>
    </div>
    
    <div class = "value2">
        <p>③の答え</p> 
        <?php
        if($value2 == "select"){
            echo "正解！";
        }else{
            echo "残念・・・";
        }?>
    </div>
</div>

