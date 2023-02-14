<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');


// PDOのインスタンスを取得
$pdo = db_connect();


// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}
try {
    // booksの全レコードを、id降順で取得するクエリを設定
    $sql = "SELECT * FROM post ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error :' . $e->getMessage();
    die();
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a>
    <table>
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>本文</th>
            <th>投稿日</th>
            <th></th>
            <th></th>
        </tr>
        <?php  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['coctent']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a></td>
                    <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>