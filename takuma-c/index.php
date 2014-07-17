<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>メニュー画面</title>
</head>
<body>
<div>
<?php
$dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
$db = new PDO($dsn,$user,$password,
array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);

if (isset($_POST['id'])) 
    {
  echo h($_POST['id']);
}
echo '</p><hr>';
?>
  <form method="post" action="view.php"> 
    <p align="center">メニュー</p>
<p align="center">顧客ID
<input type="text" name="id" size="30" maxlength="10"  onKeyup="this.value = this.value.replace(/[^0-9]+/, '')">
※半角数字8桁で入力してください
</p>
<p>
<h1 align="center">
   <button type="button" onclick="location='http://ce5b9ip-aos-app000.c4sa.net/nyuuryoku.php'">
データ入力
</button>
<input type="submit" value="家系図表示">
</form>
  </h1>
</div>
</body>
</html>
