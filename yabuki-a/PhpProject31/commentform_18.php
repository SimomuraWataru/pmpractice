<html>
    <head>
        <meta charset="UTF-8">
        <title>コメント表示のサンプル</title>
    </head>
    <body>
        <table border="1" width="120" height="120">
            <tr>
                <td>クリックした場所の店名
                    <iframe src="shopnameview_18.php" width="500" height="60">
                    </iframe>
                </td>
            </tr>
            <tr>
                <td>食べログへ飛べるリンク
                    <iframe src="linkview_18.php" width="500" height="60">
                    </iframe>
                </td>
            </tr>
            <tr>
                <td>（コメント）

                    <iframe src="commentsview_18.php" width="500" height="200">
                    </iframe>
                    <form action="comment_18.php" method="post">
                        <dl>
                            <dt>名前</dt>
                            <dd><input name="name" type="input" /></dd>
                            <dt>コメント</dt>
                            <dd><textarea name="comment" type="input" rows="5" cols="30"></textarea></dd>
                            <dt></dt>
                            <dd><input type="submit" value="投稿する" /></dd>
                        </dl>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
