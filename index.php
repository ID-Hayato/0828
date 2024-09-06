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
        <h1 id="subtitle">投稿一覧</h1>


        <table class='comment'>
            <?php
            ini_set('display_errors', 'On');
            //  コネクションを開く(ホスト名、ユーザー名、パスワード、使用するデータベース名)
            $link = mysqli_connect("localhost", "root", "mariadb", "２2ch");
            //文字コードを設定
            mysqli_set_charset($link, "utf8mb4");

            $result = mysqli_query($link, "SELECT * FROM userdata");

            //レコードセットを繰り返し取得する。

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr class='commentbox'>";
                echo "<td class='data' id='".htmlspecialchars($row["id"]) ."'>" . htmlspecialchars($row["id"]) . "　" .  htmlspecialchars($row["username"]) ."　　　". htmlspecialchars($row["time"]) ."</td>";

                if(htmlspecialchars($row["abnormal"])){
               echo"<td class='chatbox'><span class='abnormal'>※この投稿は規約違反の為非表示にされました。</span>";
                }else{
                  echo "<td class='chatbox'>" . htmlspecialchars($row["chat"]) ."</td>";  
                }
                
                echo "<td class='tobox'> <a href='#". htmlspecialchars($row["tochat"]) . "'> >>".htmlspecialchars($row["tochat"]) ."</a></td>";
                echo "</tr>";


               
            }

            mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
        <?php
      ini_set('display_errors', 'On');
session_start();
if($_SESSION["ID"]==="test"&&$_SESSION["pass"]==="pass"){
echo"<div id='gopage'>
    <p><a href='comment.php'>投稿する</a></p>   <a href='login.php'>アカウント変更</a>
    <p><a href='report.php'>規約違反の報告</a></p>
       <p id='deletepage'><a href='delete.php'>⚠投稿の完全削除⚠</a></p>
</div>";

}else{
    echo"<div id='gopage'>
    <p>ログインして今すぐ<a href='login.php'>投稿する</a></p><br><br>

    </div>";
}

?>


    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
        <a href="reported.php">報告確認ページ</a>
    </div>
</body>

</html>