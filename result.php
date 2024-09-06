<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>投稿完了-高等技術専門校板（こうぎせん板）</title>
</head>
<body>

    <h1 id="title">高等技術専門校板（こうぎせん板）</h1>
    <div id="main" id="top">
    <?php
         ini_set('display_errors','On');
        require_once 'Userdata.php';
//インスタンス化
$userdata=new Userdata();
$userdata->adddata(   $_POST['username'],
    $_POST['chat'],
    $_POST['tochat'],
);


    echo "<h2 id='subtitle'>投稿完了しました</h2><a href='index.php'>掲示板へ戻る</a><br>
    <a href='comment.php'>もっと投稿する。</a>"

    ?>
    
    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
    </div>
</body>
</html>