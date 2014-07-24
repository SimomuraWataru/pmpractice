<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">

        <title>メイン画面</title>
    </head>
    <body>
        <a name="top"></a>
        <!-- メニューバー -->
        <div id="menu">
            <table>
                <tr>
                    <td><br>
                        <a href="main.php"><u>TOP</u></a> <br><br><br>
                        <a href="#top"><u>ページ上部へ</u></a> <br><br>
                        <a href="#under"><u>ページ下部へ</u></a> <br><br>
                    </td>
                </tr>
            </table>
        </div>

        <div id="main">
            ●検索
            <form method="post" action="search.php">
                <table>
                    <tr><td>
                            <table border="1" class="tbl">
                                <tr>
                                    <td class="koumoku">ID</td>
                                    <td class="koumoku">名前</td>
                                    <td class="koumoku">性別</td>
                                    <td class="koumoku">生年月日</td>
                                    <td class="koumoku">住所</td>
                                    <td class="koumoku">電話番号</td>
                                    <td class="koumoku">メールアドレス</td>
                                </tr>
                                <tr class='boxc'>
                                    <td class="box"><input class="boxs" type="text" name="usernumber" value="" autofocus></td>
                                    <td class="box"><input class="boxs" type="text" name="username" value=""></td>
                                    <td class="box"><SELECT class="boxs" name="seibetu">
                                            <OPTION value="">指定なし</OPTION>
                                            <OPTION value="男">男</OPTION>
                                            <OPTION value="女">女</OPTION></SELECT></td>
                                    <td class="box"><input class="boxs" type="text" name="birthday" maxlength="10" value=""></td>
                                    <td class="box"><input class="boxs" type="text" name="juusyo" value="" autofocus></td>
                                    <td class="box"><input class="boxs" type="text" name="denban" maxlength="13" value=""></td>
                                    <td class="box"><input class="boxs" type="text" name="mailad" value=""></td>
                                </tr>
                            </table>
                        </td>
                        <td><div align="center"><input type="submit" value="検索"></div></td>
                    </tr>
                </table>
            </form>

            <br><br><br>

            ●新規登録
            <form method="post" action="entry.php">
                <table border="1" class="tbl">
                    <tr>
                        <td class="koumoku">名前</td>
                        <td class="koumoku">性別</td>
                        <td class="koumoku">生年月日</td>
                        <td class="koumoku">〒</td>               
                        <td class="koumoku">住所</td>
                        <td class="koumoku">電話番号</td>
                        <td class="koumoku">メールアドレス</td>
                        <td class="koumoku">備考</td>
                    </tr>
                    <tr class='boxc'>
                        <td><input class="boxs" type="text" name="username" value=""></td>
                        <td class="box"><SELECT class="boxs" name="seibetu">
                                <OPTION value="男">男</OPTION>
                                <OPTION value="女">女</OPTION></SELECT></td>
                        <td><input class="boxs" type="text" name="birthday" maxlength="10" value=""></td>
                        <td><input class="boxs" type="text" name="yubinban" maxlength="8" value=""></td>
                        <td><input class="boxs" type="text" name="juusyo" value=""></td>
                        <td><input class="boxs" type="text" name="denban" maxlength="13" value=""></td>
                        <td><input class="boxs" type="text" name="mailad" value=""></td>
                        <td><input class="boxs" type="text" name="bikou" maxlength="30" value=""></td>
                    </tr>
                </table>
                <br>
                <div align="center"><input type="image" src="entry.png">　　　　　　　　　　　　　　</div>
            </form>

            <br><br>

            <script type="text/javascript">
                function submitChk(which) {
                    if (which == 1) {
                        var flag = confirm("更新してもよろしいですか？");
                    } else {
                        var flag = confirm("削除してもよろしいですか？");
                    }

                    return flag;
                }
            </script>

            <div>

                <?php
                # データベース設定☆レシピ260☆（データベースに接続したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。
                require_once 'database_conf.php';
                require_once 'h.php';

                try {
                    # MySQLデータベースに接続します☆レシピ260☆（データベースに接続したい）。
                    $db = new PDO($dsn, $dbUser, $dbPass);
                    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    #データベースから取得する。
                    $sql = 'select * from cinfo';
                    $prepare = $db->prepare($sql);
                    $prepare->execute();
                    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

                    #結果のすべてを表示する。
                    echo "<table border=1 class='tbl'>";
                    echo "<tr><td class='koumoku'>ID</td>";
                    echo "<td class='koumoku'>名前</td>";
                    echo "<td class='koumoku'>性別</td>";
                    echo "<td class='koumoku'>生年月日</td>";
                    echo "<td class='koumoku'>〒</td>";
                    echo "<td class='koumoku'>住所</td>";
                    echo "<td class='koumoku'>電話番号</td>";
                    echo "<td class='koumoku'>メールアドレス</td>";
                    echo "<td class='koumoku'>備考</td>";
                    echo "<td class='koumoku' colspan='2'>変更</td>";
                    echo "</tr>";

                    foreach ($result as $person) {
                        echo '<tr class="boxc"><form action="do.php" method="post">';
                        echo '<td><input class="boxc" type="text" name="usernumber" wrap="soft" value="' . $person['usernumber'] . '" /></td>';
                        echo '<td><input class="boxs" type="text" name="username" wrap="soft" value="' . $person['username'] . '" /></td>';
                        echo '<td><input class="boxc" type="text" name="seibetu" wrap="soft" value="' . $person['seibetu'] . '" /></td>';
                        echo '<td><input class="boxs" type="text" name="birthday" wrap="soft" value="' . $person['birthday'] . '" /></td>';
                        echo '<td><input class="boxyubin" type="text" name="yubinban" wrap="soft" value="' . $person['yubinban'] . '" /></td>';
                        echo '<td><input class="boxjm" type="text" name="juusyo" wrap="soft" value="' . $person['juusyo'] . '" /></td>';
                        echo '<td><input class="boxs" type="text" name="denban" wrap="soft" value="' . $person['denban'] . '" /></td>';
                        echo '<td><input class="boxjm" type="text" name="mailad" wrap="soft" value="' . $person['mailad'] . '" /></td>';
                        echo '<td><input class="boxs" type="text" name="bikou" wrap="soft" value="' . $person['bikou'] . '" /></td>';
                        echo '<td><input type="submit" value="更新" name="edit" onclick="return submitChk(1);"/>';
                        echo '<input type="submit" value="削除" name="delete"  onclick="return submitChk(2);"/></td>';
                        echo '</form></tr>';
                    }
                    echo "</table>";


                    # エラーが発生した場合、PDOException例外がスローされるのでキャッチします。
                } catch (PDOException $e) {
                    echo 'エラーが発生しました。内容: ' . h($e->getMessage());
                }
                $db = null;
                ?>
            </div>
        </div>
        <a name="under"></a>
    </body>
</html>
