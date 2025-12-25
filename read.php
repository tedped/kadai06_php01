<?php
// ファイルを開く
// ファイル内容を1行ずつ読み込んで出力

// ファイルを開いて内容を読み込む
$data = file_get_contents('data/data.txt');

// nl2br ... textファイルの改行をHTMLの<br>に変換する関数
echo nl2br($data);



// ファイルを閉じる
