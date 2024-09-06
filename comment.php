<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>投稿ページ-高等技術専門校板（こうぎせん板）</title>
</head>
<body>

    <h1 id="title">高等技術専門校板（こうぎせん板）</h1>
    <div id="main" id="top">
<?php
      ini_set('display_errors', 'On');
session_start();
if($_SESSION["ID"]==="test"&&$_SESSION["pass"]==="pass"){
echo"<h1 id='subtitle'>投稿</h1>";
echo'    <div id="form">
<form action="result.php" method="post">
    name　<input type="text" name="username" value="名無し"><br>
    投稿内容<br>
    <textarea name="chat" id="textbox"></textarea><br>
    to　<input type="number" name="tochat" value=0><br>
 <input type="submit" value="投稿する">
</div>';

}else{
echo"<h2>入力内容に誤りがあります</h2><br>";
echo "IDまたはパスワードが違います";
}

?>


    
    </div>
    <div id="back">
        <a href="index.php" class="backpage">掲示板へ戻る</a>
        <a href="#top" class="backpage">ページ先頭へ戻る</a>
    </div>
</body>
</html>