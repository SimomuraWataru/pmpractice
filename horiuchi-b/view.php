<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charaset=utf-8">
        <title>確認画面</title>
    </head>
    <body>
    <body bgcolor="#98fb98" leftmargin="120px" >
        <?php
        /* 入出力確認 */
        session_start();
        $input_data1 = 1;
        /* ＩＤとパスワード照合 */
       $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',$_SERVER["C4SA_MYSQL_HOST"],$_SERVER["C4SA_MYSQL_DB"]);
        $user = 'chmqbh0_ar1';
        $password = 'lHaJv32n';
        $key = 0;
        try {
            $dbh = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);
            $sql = 'select * from home';
            foreach ($dbh->query($sql) as $row) {
                if ($row['ID'] == $input_data1) {
                    $key = 1;
                    $data10 = $row['umu']; //氏名
                    $data11 = $row['sizi']; //宿泊人数
                    $dat12 = $row['sihun'];
                    $data13 = $row['place'];
                    $data14 = $row['reumu'];
                    $data15 = $row['renzi'];
                    $data16 = $row['renhun'];

                    /*
                      $data4=$row['年s'];
                      $data5=$row['月s'];
                      $data6=$row['日s'];
                      $data7=$row['年e'];
                      $data8=$row['月e'];
                      $data9=$row['日e']; */
                }
            }
        } catch (PDOException $e) {
            header("Location: error.html");
            die();
        }
        $dbh = null;
        if ($key == 0) {
            header("Location: error.html");
        }



        /* 入出力確認 */


        try {
            $dbh = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);
            $sql = 'select * from eat';
            foreach ($dbh->query($sql) as $row) {
                if ($row['ID'] == $input_data1) {
                    $key = 1;
                    $data17 = $row['dumu']; //氏名
                    $data18 = $row['dnzi']; //宿泊人数
                    $data19 = $row['dnhun'];
                    $data20 = $row['bumu'];
                    $data21 = $row['brzi'];
                    $data22 = $row['brhun'];

                    /*
                      $data4=$row['年s'];
                      $data5=$row['月s'];
                      $data6=$row['日s'];
                      $data7=$row['年e'];
                      $data8=$row['月e'];
                      $data9=$row['日e']; */
                }
            }
        } catch (PDOException $e) {
            header("Location: error.html");
            die();
        }
        $dbh = null;
        if ($key == 0) {
            header("Location: error.html");
        }




        try {
            $dbh = new PDO($dsn, $_SERVER["C4SA_MYSQL_USER"], $_SERVER["C4SA_MYSQL_PASSWORD"]);
            $sql = 'select * from rest';
            foreach ($dbh->query($sql) as $row) {
                if ($row['ID'] == $input_data1) {
                    $key = 1;
                    $data2 = $row['name']; //氏名
                    $data3 = $row['nin']; //宿泊人数
                    $data4 = $row['years'];
                    $data5 = $row['months'];
                    $data6 = $row['days'];
                    $data7 = $row['yeare'];
                    $data8 = $row['monthe'];
                    $data9 = $row['daye'];
                    /*
                      $data4=$row['年s'];
                      $data5=$row['月s'];
                      $data6=$row['日s'];
                      $data7=$row['年e'];
                      $data8=$row['月e'];
                      $data9=$row['日e']; */
                }
            }
        } catch (PDOException $e) {
            header("Location: error.html");
            die();
        }
        $dbh = null;
        if ($key == 0) {
            header("Location: error.html");
        }
        ?>

        <FONT size="7">
        確<font color="#6b8e23">認</font>画面<br><br><br>
        </FONT>



        <font style="position: relative; left: 100px; top: 0px;" >氏名</font><input type="text" name="simei" size="40"  value="<?php echo$data2 ?>" style="position: relative; left: 400px; top: 0px;"><br>
        <font style="position: relative; left: 100px; top: 0px;" >宿泊人数</font><input type="text" name="ninzu" size="40"  value="<?php echo$data3 ?>" style="position: relative; left: 368px; top: 0px;"><font style="position: relative; left: 368px; top: 0px;" >人</font><br>
        <font style="position: relative; left: 100px; top: 0px;" >宿泊期間</font><input type="text" name="nen" size="20"  value="<?php echo$data4 ?>" style="position: relative; left: 368px; top: 0px;"><font style="position: relative; left: 368px; top: 0px;" >年</font>
    　　　　<input type="text" name="gatu" size="20"  value="<?php echo$data5 ?>" disabled="disabled" style="position: relative; left: 368px; top: 0px;"><font style="position: relative; left: 368px; top: 0px;" >月</font>
        　　<input type="text" name="niti" size="20"  value="<?php echo $data6 ?>"disabled="disabled" style="position: relative; left: 368px; top: 0px;"><font style="position: relative; left: 368px; top: 0px;" >日～</font><br>
        <input type="text" name="nen1" size="20"  value="<?php echo$data7 ?>" disabled="disabled" style="position: relative; left: 650px; top: 0px;"><font style="position: relative; left: 650px; top: 0px;" >年</font>
     　　　　<input type="text" name="gatu1" size="20"  value="<?php echo$data8 ?>"disabled="disabled"  style="position: relative; left: 650px; top: 0px;"><font style="position: relative; left: 650px; top: 0px;" >月</font>
        <input type="text" name="niti1" size="20"  value="<?php echo $data9 ?>"disabled="disabled"  style="position: relative; left:650px; top: 0px;"><font style="position: relative; left: 650px; top: 0px;" >日</font><br><br>


        <font style="position: relative; left: 100px; top: 0px;" >食事について</font><br><br>
        <font style="position: relative; left: 100px; top: 0px;" >*夕食</font>
     　  <input type="text" name="" size="40"  value="<?php echo$data18 ?>" disabled="disabled" style="position: relative; left: 400px; top: 0px;">
        <font style="position: relative; left: 410px; top: 0px;" >：</font>
   　    <input type="text" name="" size="40"  value="<?php echo$data19 ?>"disabled="disabled"  style="position: relative; left: 400px; top: 0px;"><br><br>
        <font style="position: relative; left: 100px; top: 0px;" >*朝食</font>
     　  <input type="text" name="" size="40"  value="<?php echo$data21 ?>" disabled="disabled" style="position: relative; left: 400px; top: 0px;">
        <font style="position: relative; left: 410px; top: 0px;" >：</font>
   　    <input type="text" name="" size="40"  value="<?php echo$data22 ?>" disabled="disabled" style="position: relative; left: 400px; top: 0px;"><br><br><br>

        <font style="position: relative; left: 100px; top: 0px;" >施設利用について</font><br><br>
        <?php
        if ($data10 == "利用する") {
            echo '<font style="position: relative; left: 200px; top: 0px;" >利用する</font><br><br>';


            echo '<font style="position: relative; left: 400px; top: 0px;" >・時間</font>';
            echo '<input type="text" name="" size="40"  value="' . $data11 . '"   disabled="disabled"  style="position: relative; left: 410px; top: 0px;"/>';
            echo ' <font style="position: relative; left: 410px; top: 0px;" >：</font>';
            echo '<input type="text" name="" size="40"  value="' . $data12 . '" disabled="disabled" style="position: relative; left: 410px; top: 0px;"/><br><br>';

            echo '<font style="position: relative; left: 400px; top: 0px;" >・場所</font>';
            echo '<input type="text" name="" size="40"  value="' . $data13 . '" disabled="disabled"  style="position: relative; left: 415px; top: 0px;"/><br><br>';

            echo '<font style="position: relative; left: 400px; top: 0px;" >・レンタル</font><br><br>';

            if ($data14 == "しない") {
                echo '<font style="position: relative; left: 500px; top: 0px;" >しない</font><br>';
            } else {
                echo '<font style="position: relative; left: 500px; top: 0px;" >する</font><br>';
                echo '<input type="text" name="" size="20" value="' . $data15 . '"  disabled="disabled"  style="position: relative; left: 610px; top: 0px;"/>';
                echo ' <font style="position: relative; left: 610px; top: 0px;" >：</font>';
                echo '<input type="text" name="" size="20" value="' . $data16 . '"  disabled="disabled"  style="position: relative; left: 620px; top: 0px;"/><br><br>';
            }
        } elseif ($data10 == "利用しない") {
            echo '<font style="position: relative; left: 200px; top: 0px;" >利用しない</font><br><br><br><br><br><br><br><br>';
        } else {
            echo '<font style="position: relative; left: 200px; top: 0px;" >未定</font><br><br><br><br><br><br><br><br>';
        }
        ?>






    </body>
</html>


