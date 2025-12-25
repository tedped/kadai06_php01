<?php
// XSS対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
// POSTを受け取る
$name = $_POST['name']?? '';
$email = $_POST['email']?? '';
$password = $_POST['****']?? '';
$time = date("Y-m-d H:i:s");

$data = $time . ',　名前：' . $name . ',　Eメール：' . $email . ',　パスワード入力：あり'. PHP_EOL;

// ファイルに書き込み
file_put_contents("data/data.txt", $data, FILE_APPEND);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
