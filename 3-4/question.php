<link rel="stylesheet" href=css/question.css>
<body style = "background-color:gray;">

<?php
$my_name = $_POST['my_name'];
?>

<p>お疲れ様です <?php echo $my_name; ?>さん</p>

        
<div class="from">
    <form action="answer.php" method="post">
        <h2>①ネットワークのポート番号は何番？</h2>
        <div class = "number">
            <?php
            $number=["80","22","20","21"];
            foreach($number as $value){  
                echo "<input type='radio' name ='number' value = '${value}'> ${value}"; 
            } 
            ?>
        </div>

        <div class = "language">
            <h2>②Webページを作成するための言語は？</h2>
            <?php 
            $language=["PHP","Python","JAVA","HTML"];
            foreach($language as $value1){ 
                echo "<input type='radio' name ='language' value = '${value1}'> ${value1}"; 
            }
            ?>
        </div>

        <div class = "command">
            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <?php
            $command=["join","select","insert","update"];
            foreach($command as $value2){ 
                echo "<input  type='radio' name ='command' value = '${value2}'> ${value2}"; 
            }
            ?>
        </div>
        <br>
        <input type="submit" style="font-size: 8px;" value="回答する" class="submit"/>
        <input type ="hidden" name ="name" value="<?php echo $my_name; ?> ">
    </form>
</div>



