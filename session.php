<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>セッション中 高等技術専門校板（こうぎせん板）</title>
<meta http-equiv="refresh" content="0;url=http://localhost/~itsys/0828/comment.php">
</head>
<body>

    <h1 id="title">高等技術専門校板（こうぎせん板）</h1>
    <div id="main" id="top">
<?php
      ini_set('display_errors', 'On');
      session_start();
      $ID=$_POST["ID"];
      $_SESSION["ID"]=$ID;
      $pass=$_POST["pass"];
      $_SESSION["pass"]=$pass;
 
      
?>
  <p class="load">認証中…</p>
    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
    </div>
</body>
</html>