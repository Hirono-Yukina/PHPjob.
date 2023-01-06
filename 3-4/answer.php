<link rel="stylesheet" href=css/answer.css>
<body style = "background-color:gray;">


<?php 
$name = $_POST['name'];
$value = $_POST['number'];
$value1 = $_POST['language'];
$value2 = $_POST['command'];

$number_A = $_POST['number_A'];
$language_A = $_POST['language_A'];
$command_A = $_POST['command_A'];


?>

<div class = "answer">
    <p> <?php echo $name; ?> さんの結果は・・・？</p>
    <div class = "value">
        <?php
        function judge($answer , $correct){
            if($answer == $correct){
                echo "正解！";
            }else{
                echo "残念・・・";
            }
        }
        ?>

        
        <p>①の答え</p>
        <p><?php judge($value,$number_A); ?></p>
        <p>②の答え</p>  
        <p><?php judge($value1 , $language_A); ?></p>
        <p>③の答え</p> 
        <p><?php judge($value2 , $command_A); ?></p>


        


    </div>
</div>

