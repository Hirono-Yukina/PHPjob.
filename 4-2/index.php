<?php
require_once("getData.php");
$data = new getData();
$userdata = $data->getUserData();
$postdata = $data->getPostData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>記事一覧</title>
</head>
<body>
    <div class = "header">
        <div class = "left">
            <img src="LetsEngineer\PHPjob\4-2\1599315827_logo.png" class = "pic">
        </div>
        <div class = right>
            <div class = "right1">ようこそ<?php echo $userdata["last_name"].$userdata["first_name"]?>さん</div>
            <div class = "right2">最終ログイン日：<?php echo $userdata["last_login"]?></div>
        </div>
    </div>
    <table class = "main">
        <tr class = column>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($postdata as $post){?>
        <tr class = record>
            <td><?php echo $post["id"]?></td>
            <td><?php echo $post["title"]?></td>
            <td><?php if($post["category_no"]==1) {
                echo "食事";
            }else if($post["category_no"]==2) {
                echo "旅行";
            }else{
                echo "その他";
            } ?></td>
            <td><?php echo $post["comment"]?></td>
            <td><?php echo $post["created"]?></td>
        </tr>
        <?php } ?>
    </table>
    <div class = "footer">
        <p>Y$I group.inc</p>
    </div>

</body>
</html>