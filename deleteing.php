<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>高等技術専門校板（こうぎせん板）</title>
</head>
<body>

    <h1 id="title">高等技術専門校板（こうぎせん板）</h1>
    <div id="main" id="top">
    <?php
    ini_set('display_errors','On');
   $link = mysqli_connect("localhost", "root", "mariadb", "２2ch");
    mysqli_set_charset($link, "utf8mb4");
     $num=$_POST["num"];
     if(isset($_POST["check"])){

        if(!($num<1||$num===null)){
$stmt = mysqli_prepare(
        $link,
        "DELETE FROM userdata WHERE userdata.id =".$num.";"
       
    ); 
      mysqli_stmt_execute($stmt);
 echo "<h2 id='subtitle'>削除が完了しました。</h2><a href='index.php'>掲示板へ戻る</a><br>";

        }else{
         echo   "<h2 id='subtitle'>無効なIDが指定されました。</h2><a href='delete.php'>再入力</a><br>";
        }

     }else{
echo"<h1>お？ロボットか？まあゆっくりしていけよ🤖</h1>
<a href='delete.php'>再入力</a><br>";

     }


 

    mysqli_close($link);

   


    ?>
    
    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
    </div>
</body>
</html>