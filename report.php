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
        <h1 id="subtitle">規約違反の報告</h1>
        <div id="reportbox">
            <form action="reporting.php" method="post">
                <p>違反している投稿ID</p><input type="number" name="num" id="numbox">
                <h3 class="subtitle">違反内容の選択</h3>
                <div class="radio">
                    <label class="radioblock">不適切な発言
                        <input type="radio" name="radio" value="不適切な発言"></label>
                    <label class="radioblock">個人情報の添付<input type="radio" name="radio" value="個人情報の添付"></label>
                    <label class="radioblock">スパム、無言
                    <input type="radio" name="radio" value="スパム、無言"></label>
                    <label class="radioblock">おもんない罪
                    <input type="radio" name="radio" value="おもんない罪"></label>
                    <label class="radioblock">その他
                    <input type="radio" name="radio" value="その他"></label>

                </div>
                <h3>具体的な内容</h3>
                <textarea name="text" id="textbox"></textarea>
                <br>
                <input type="submit" value="送信する">
            </form>
        </div>

    </div>
    <div id="back">
        <a href="index.php">掲示板へ戻る</a>
        <a href="#top">ページ先頭へ戻る</a>
       
    </div>
</body>

</html>