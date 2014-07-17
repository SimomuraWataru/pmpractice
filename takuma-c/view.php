<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>家系図表示画面</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
        <?php
 //ID=3の場合
       
      $id=$_POST['id'] ;
      
        //データベースに接続（レシピ260）
        $dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
$db = new PDO($dsn,$user,$password,
array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);




        if ($id==FALSE){
           header("Location:http://ce5b9ip-aos-app000.c4sa.net/nyuuryoku.php");
            }  
       
           

        //データベース更新（レシピ261）
        try {
          $dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
             $db = new PDO($dsn,$user,$password,
          array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);;
          
                          
            $sql = 'select * from test where kokyakuid = :id';
            $prepare = $db->prepare($sql);
            $prepare->bindValue(':id', $id);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            
            
         
            
        
            
//echo '<pre>';            
//print_r($result);
//echo '</pre>';  
            
            $person1 = $result[0]['person1'];
            $person2 = $result[0]['person2'];
            $person3 = $result[0]['person3'];
            $person4 = $result[0]['person4'];
            $person5 = $result[0]['person5'];
            $person6 = $result[0]['person6'];
            $person7 = $result[0]['person7'];
            $person8 = $result[0]['person8'];
            $person9 = $result[0]['person9'];
            $person10 = $result[0]['person10'];
            $person11 = $result[0]['person11'];
            $person12 = $result[0]['person12'];
            $person13 = $result[0]['person13'];
            $person14 = $result[0]['person14'];
         
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
             
# 別ファイルのユーザー定義関数「makeChartParts()」を読み込みます。
require_once  './make_chart_parts.php';
// グラフの値


$data = array();
$data[] = array('表示データ', '親要素', 'マウスオーバー');
$data[] = array( "<p>$person1</p>", '', '');
$data[] = array("<p>$person2</p>",  "<p>$person1</p>", '');
$data[] = array("<p>$person3</p>",  "<p>$person1</p>", '');
$data[] = array("<p>$person4</p>", "<p>$person2</p>", '');
$data[] = array("<p>$person5</p>", "<p>$person2</p>", '');
$data[] = array("<p>$person6</p>", "<p>$person3</p>", '');
$data[] = array("<p>$person7</p>", "<p>$person3</p>", '');
$data[] = array( "<p>$person8</p>", '', '');
$data[] = array("<p>$person9</p>",  "<p>$person8</p>", '');
$data[] = array("<p>$person10</p>",  "<p>$person8</p>", '');
$data[] = array("<p>$person11</p>", "<p>$person9</p>", '');
$data[] = array("<p>$person12</p>", "<p>$person9</p>", '');
$data[] = array("<p>$person13</p>", "<p>$person10</p>", '');
$data[] = array("<p>$person14</p>", "<p>$person10</p>", '');
    

// グラフのオプション
$options = array('allowHtml' => true);  // グラフ内のHTMLタグを有効化

// グラフ種類（組織図）
$type = 'OrgChart';

// グラフ描画のJavaScriptの関数、表示させる<div>タグの生成
list($chart, $div) = makeChartParts($data, $options, $type);
?>
<html lang="ja">
<head>
<script src="https://www.google.com/jsapi"></script>
<script>
<?php
# グラフ描画関数を表示します。
echo $chart;
?>
</script>
</head>
<body>
    
<div>
<?php
# グラフを表示させる<div>タグを適切な場所に配置します。
echo $div;
        ?>
            </div>
<head>
    <style type="text/css">
        <!-- 
input:hover{
filter:alpha(opacity=0);
    -moz-opacity: 0;
    opacity: 0;   
}
-->
</style>
</head>
     <h1 align="left">
         <ul>
            <form action="index.php" method="post">
<input type="submit" value="戻る">
</form>
         </ul>
     </h1>
    </body>
</html>
