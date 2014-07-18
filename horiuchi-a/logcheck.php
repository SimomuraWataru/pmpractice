<?php

/* 入出力確認 */
$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : null;
$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : null;
$check_input = array($id, $pass);
foreach ($check_input as $check) {
    if ($check != '') {
        if (preg_match("/^[0-9a-zA-Z]+$/", $check)) {
            
        } else {
            header("Location: logmiss.php");
        }
    } else {
        header("Location: logmiss.php");
    }
}
/* ＩＤとパスワード照合 */
$dsn = 'mysql:dbname=cd4hnh6_aw5;host=175.184.33.65';
$dbUser = 'cd4hnh6_aw5';
$dbPass = 'E8wDNvDx';
$key = 0;
try {
    $db = new PDO($dsn, $dbUser, $dbPass);
    $sql = 'select * from account';
    foreach ($db->query($sql) as $row) {
        if (($row['id'] == $id) && ($row['pass'] == $pass)) {
            $key = 1;
        }
    }
} catch (PDOException $e) {
    header("Location: logmiss.php");
    die();
}
$db = null;
if ($key == 0) {
    header("Location: logmiss.php");
} else {
    header("Location: main.php");
}
?>
