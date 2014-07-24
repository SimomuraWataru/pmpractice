<?php

/* 入出力確認 */
$input_data1 = isset($_POST['text1']) ? htmlspecialchars($_POST['text1']) : null;
session_start();
$_SESSION["hidden_data2"] = $input_data1;
if ($input_data1 != '') {
    if (preg_match("/^[0-9]+$/", $input_data1)) {
        
    } else {
        header("Location:  reserveer.php");
    }
} else {
    header("Location:  reserveer.php");
}

/* ＩＤとパスワード照合 */
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',$_SERVER["C4SA_MYSQL_HOST"],$_SERVER["C4SA_MYSQL_DB"]);
$user = 'chmqbh0_ar1';
$password = 'lHaJv32n';
$key = 0;
try {
    $dbh = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);
    $sql = 'select * from gest';
    foreach ($dbh->query($sql) as $row) {
        if ($row['ID'] == $input_data1) {
            $key = 1;
        }
    }
} catch (PDOException $e) {
    header("Location: reserveer.php");
    die();
}
$dbh = null;
if ($key == 0) {
    header("Location: reserveer.php");
} else {
    header("Location:eat.php");
}
?>