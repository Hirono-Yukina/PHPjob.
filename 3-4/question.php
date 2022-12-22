<link rel="stylesheet" href=css/question.css>
<body style = "background-color:gray;">

<?php
$my_name = $_POST['my_name'];
?>

<p>お疲れ様です <?php echo $my_name; ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<div class = "number">
<?php 
$number=["80","22","20","21"];
foreach($number as $value){  ?>
    <input type="radio" name ="number" value = $number>
    <?php echo $value; 
}
?>

</div>

<h2>②Webページを作成するための言語は？</h2>
<div class = "language">
<?php 
$language=["PHP","Python","JAVA","HTML"];
foreach($language as $value){ ?> 
    <input type="radio" name ="langage" value = $language>
    <?php echo $value; 
}
?>
</div>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<div class = "command">
<?php 
$command=["join","select","insert","update"];
foreach($command as $value){ ?> 
    <input  type="radio" name ="command" value = $command>
    <?php echo $value; 
}
?>
</div>

        
<div class="from">
    <form action="answer.php" method="post">
        <input type="submit" style="font-size: 8px;" value="回答する" class="submit"/>
        <input type ="hidden" name ="name" value="<?php echo $my_name; ?> ">
    </form>
</div>



