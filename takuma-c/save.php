<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>保存確認画面</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        //送信されたデータの取出し
        $jikkoubi = $_POST['jikkoubi'];
        $sikijounannba = $_POST['sikijounannba'];
        $person1 = $_POST['person1'];
        $person2 = $_POST['person2'];
        $person3 = $_POST['person3'];
        $person4 = $_POST['person4'];
        $person5 = $_POST['person5'];
        $person6 = $_POST['person6'];
        $person7 = $_POST['person7'];
        $person8 = $_POST['person8'];
        $person9 = $_POST['person9'];
        $person10 = $_POST['person10'];
        $person11 = $_POST['person11'];
        $person12 = $_POST['person12'];
        $person13 = $_POST['person13'];
        $person14 = $_POST['person14'];

        echo   "<p>$jikkoubi</p>";
        echo  "<p>$sikijounannba</p>";
        echo  "<p>$person1</p>";
        echo  "<p>$person2</p>";
        echo  "<p>$person3</p>";
        echo  "<p>$person4</p>";
        echo  "<p>$person5</p>";
        echo  "<p>$person6</p>";
        echo  "<p>$person7</p>";
        echo  "<p>$person8</p>";
        echo  "<p>$person9</p>";
        echo  "<p>$person10</p>";
        echo  "<p>$person11</p>";
        echo  "<p>$person12</p>";
        echo  "<p>$person13</p>";
        echo  "<p>$person14</p>";

        //データベースに接続（レシピ260）
        $dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
$db = new PDO($dsn,$user,$password,
              array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);


            
  
              
        //データベース更新（レシピ267）
        try {
  $dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
$db = new PDO($dsn,$user,$password,
              array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);
         
              
              
            $sql = 'insert into test (jikkoubi,sikijounannba,kokyakuid,person1,person2,person3,person4,person5,person6,person7,person8,person9,person10,person11,person12,person13,person14)  values (:jikkoubi,:sikijounannba,:jikkoubi+sikijounannba,:person1, :person2, :person3,:person4,:person5,:person6,:person7,:person8,:person9,:person10,:person11,:person12,:person13,:person14)';
            $prepare = $db->prepare($sql);
          
            $prepare->bindValue(':jikkoubi', $jikkoubi);
            $prepare->bindValue(':sikijounannba', $sikijounannba);
            $prepare->bindValue(':person1', $person1);
            $prepare->bindValue(':person2', $person2);
            $prepare->bindValue(':person3', $person3);
            $prepare->bindValue(':person4', $person4);
            $prepare->bindValue(':person5', $person5);
            $prepare->bindValue(':person6', $person6);
            $prepare->bindValue(':person7', $person7);
            $prepare->bindValue(':person8', $person8);
            $prepare->bindValue(':person9', $person9);
            $prepare->bindValue(':person10', $person10);
            $prepare->bindValue(':person11', $person11);
            $prepare->bindValue(':person12', $person12);
            $prepare->bindValue(':person13', $person13);
            $prepare->bindValue(':person14', $person14);
            
            
            $prepare->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
        <div>保存しました。</div>
        <form action="index.php" method="post">
<p><input type="submit" value="戻る"></p>

</form>
    </body>
</html>
