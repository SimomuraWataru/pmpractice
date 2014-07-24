<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <?php
# データベース設定☆レシピ260☆（データベースに接続したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。
            require_once 'database_conf.php';
# h()関数☆レシピ221☆（安全にブラウザで値を表示したい）を読み込みます。
            require_once 'h.php';

            try {
# MySQLデータベースに接続します☆レシピ260☆（データベースに接続したい）。
                $db = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

# SQL文を準備します。
                $sql = "INSERT INTO `eat` (`ID`,`dumu`,`dnzi`,`dnhun`,`bumu`,`brzi`,`brhun`) VALUES (:ID,:dinner,:dzi,:dhun,:breakfast,:bzi,:bhun)";
                $prepare = $db->prepare($sql);
# SQL文のプレースホルダに値をバインドして、クエリを実行します。
                $prepare->bindValue(':ID', $_POST['ID'], PDO::PARAM_INT);
                $prepare->bindValue(':dinner', $_POST['dinner'], PDO::PARAM_INT);
                $prepare->bindValue(':dzi', $_POST['dzi'], PDO::PARAM_INT);
                $prepare->bindValue(':dhun', $_POST['dhun'], PDO::PARAM_INT);
                $prepare->bindValue(':breakfast', $_POST['breakfast'], PDO::PARAM_STR);
                $prepare->bindValue(':bzi', $_POST['bzi'], PDO::PARAM_INT);
                $prepare->bindValue(':bhun', $_POST['bhun'], PDO::PARAM_INT);

                $prepare->execute();

# SQL文を準備します。
                $sql = "INSERT INTO `home` (`ID`,`umu`,`sizi`,`sihun`,`place`,`reumu`,`renzi`,`renhun`) VALUES (:ID,:institution,:zi,:hun,:place,:rental,:rezi,:rehun)";
                $prepare = $db->prepare($sql);
# SQL文のプレースホルダに値をバインドして、クエリを実行します。
                $prepare->bindValue(':ID', $_POST['ID'], PDO::PARAM_INT);
                $prepare->bindValue(':institution', $_POST['institution'], PDO::PARAM_STR);
                $prepare->bindValue(':zi', $_POST['zi'], PDO::PARAM_INT);
                $prepare->bindValue(':hun', $_POST['hun'], PDO::PARAM_INT);
                $prepare->bindValue(':place', $_POST['place'], PDO::PARAM_STR);
                $prepare->bindValue(':rental', $_POST['rental'], PDO::PARAM_STR);
                $prepare->bindValue(':rezi', $_POST['rezi'], PDO::PARAM_INT);
                $prepare->bindValue(':rehun', $_POST['rehun'], PDO::PARAM_INT);
                $prepare->execute();


                header("Location:end.php");
# エラーが発生した場合、PDOException例外がスローされるのでキャッチします。
            } catch (PDOException $e) {
                echo 'エラーが発生しました。内容: ' . h($e->getMessage());
            }
            ?>
        </div>

    </body>
</html>