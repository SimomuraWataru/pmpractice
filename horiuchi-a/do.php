<?php

//データの確認
//print_r($_POST);

//データベースに接続
    require_once 'database_conf.php';
    require_once 'h.php';
    
    $db = new PDO($dsn, $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['edit'])) {//データの更新（レシピ267）
    $sql = "update cinfo set username=:username, seibetu=:seibetu, birthday=:birthday, yubinban=:yubinban, juusyo=:juusyo, denban=:denban, mailad=:mailad, bikou=:bikou where usernumber=:usernumber";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':usernumber', $_POST['usernumber']);
    $prepare->bindValue(':username', $_POST['username']);
    $prepare->bindValue(':seibetu', $_POST['seibetu']);
    $prepare->bindValue(':birthday', $_POST['birthday']);
    $prepare->bindValue(':yubinban', $_POST['yubinban']);
    $prepare->bindValue(':juusyo', $_POST['juusyo']);
    $prepare->bindValue(':denban', $_POST['denban']);
    $prepare->bindValue(':mailad', $_POST['mailad']);
    $prepare->bindValue(':bikou', $_POST['bikou']);
    $prepare->execute();
    
} else if (isset($_POST['delete'])) {//あるいはデータの削除
    $sql = "delete from cinfo where usernumber=:usernumber";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':usernumber', $_POST['usernumber']);
    $prepare->execute();
    
}

header('Location:main.php');

?>