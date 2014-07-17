<?php
                    try {
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',
  $_SERVER["C4SA_MYSQL_HOST"],
  $_SERVER["C4SA_MYSQL_DB"]);
$db = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);                    } catch (PDOException $e) {
                        echo "接続できませんでした" . $e->getMessage();
                    }

                    try {
                        $sql = "SELECT name,comment,shopid from comments where shopid = 2";
                        $prepare = $db->prepare($sql);
                        $prepare->execute();
                        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

                        echo '<dl>';
                        foreach ($result as $comments) {

                            $name = $comments['name'];
                            $comment = $comments['comment'];
                            echo "<dt>$name</dt><dt>$comment</dt>";
                        }
                        echo '</dl>';
                    } catch (PDOException $e) {
                        echo "取得失敗" . $e->getMessage();
                    }
                    ?>
</html>