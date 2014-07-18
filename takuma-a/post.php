<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>更新完了</title></head>
<body>

<?php

$dsn = 'mysql:dbname=cb7nh5d_ak1;host=192.168.0.1';
$user = 'cb7nh5d_ak1';
$password = 'LqL4RHCk';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');


$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$b5 = $_POST['b5'];
$b6 = $_POST['b6'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c6 = $_POST['c6'];
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3 = $_POST['e3'];
$e4 = $_POST['e4'];
$e5 = $_POST['e5'];
$e6 = $_POST['e6'];
$f1 = $_POST['f1'];
$f2 = $_POST['f2'];
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];
$f5 = $_POST['f5'];
$f6 = $_POST['f6'];
        
try{
    
 $sql = 'update atai set a1=?,a2=?,a3=?,a4=?,a5=?,a6=?,b1=?,b2=?,b3=?,b4=?,b5=?,b6=?,c1=?,c2=?,c3=?,c4=?,c5=?,c6=?,d1=?,d2=?,d3=?,d4=?,d5=?,d6=?,e1=?,e2=?,e3=?,e4=?,e5=?,e6=?,f1=?,f2=?,f3=?,f4=?,f5=?,f6=? ';
 $stmt = $dbh->prepare($sql);
$flag = $stmt->execute(array($a1, $a2, $a3, $a4 , $a5 , $a6 ,$b1 , $b2 , $b3 , $b4 , $b5 , $b6 ,$c1 , $c2 , $a3 , $c4 , $c5 , $c6 ,$d1 , $d2 , $d3 , $d4 , $d5 , $d6 ,$e1 , $e2 , $e3 , $e4 , $e5 , $e6 ,$f1 , $f2 , $f3 , $f4 , $f5 , $f6 )); 

    if ($flag){
        print('データを更新しました<br>');
    }else{
        print('データの更新に失敗しました<br>');
    }

    
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


?>
    
    
<form action="index.php" method="post">
<p><input type="submit" value="戻る"></p>

</form>

</body>
</html>