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
    <h1 id="subtitle">違反報告一覧</h1>

        <?php
        ini_set('display_errors', 'On');
        //  コネクションを開く(ホスト名、ユーザー名、パスワード、使用するデータベース名)
        $link = mysqli_connect("localhost", "root", "mariadb", "２2ch");
        //文字コードを設定
        mysqli_set_charset($link, "utf8mb4");

        $result = mysqli_query($link, "SELECT 
            report .ID,
            userdata.chat,
            report.reportitem,
            report.reportcomment,
            report.reportID
            FROM userdata,report
            WHERE userdata.id=report.reportID");

        //レコードセットを繰り返し取得する。

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr class='commentbox'>";
            echo "<td class='data'>" .htmlspecialchars($row["ID"]). "　</td>";
            echo "<td class='chatbox'>" . htmlspecialchars($row["chat"]) . "</td>";
            echo "<td class='tobox'>違反項目　" . htmlspecialchars($row["reportitem"]) . "</td>";
            echo "<td class='chatbox'>" . htmlspecialchars($row["reportcomment"]) . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
        </table>


    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
    </div>
</body>

</html>