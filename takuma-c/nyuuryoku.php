<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>家系図データ入力画面</title>
    </head>
    <body>
      <?php
      $dsn='mysql:dbname=ce5b9ip_apv;host=175.184.33.60';
$user='ce5b9ip_apv';
$password='Rjb9Sj2J';
$db = new PDO($dsn,$user,$password,
              array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"
    )
);
  

?>
        <h1>家系図データ入力画面</h1>
        <h4> 対象の家族情報を入力してください。</h4>


<form action="save.php" method="post"> 
        <TABLE border="1" align="left">
            <TR>
                <TD>家族名</TD>
                <TD>
                    <input type="text" name="kazokumei" size="40">
                </TD>
            </TR>
            <TR>
                <TD>実行日</TD>
                <TD>
                    <input type="text" name="jikkoubi" size="40" maxlength="8"  onKeyup="this.value = this.value.replace(/[^0-9]+/, '')" >
                </TD>
            </TR>
            <TR>
                <TD>式場ナンバー</TD>
                <TD>
                    <select  name="sikijounannba">
                        
                        <option value="01" selected>01</option>
                        <option value="02" >02</option>
                        <option value="03" >03</option>
                        <option value="04" >04</option>
                        <option value="05" >05</option> 
                        <option value="06" >06</option>
                        <option value="07" >07</option>
                        <option value="08" >08</option>
                        <option value="09" >09</option>
                        <option value="10" >10</option>
                        <option value="11" >11</option>
                        <option value="12" >12</option>
                    </select>
                </TD>
            </TR>
        </TABLE>
        <br clear="all"><br><br>
        
       <?php
        $jikkoubi = array('jikkoubi');
$sikijounannba = array('sikijounannba');
$kokyakuid = array($jikkoubi+$sikijounannba);
?>
        
   
<h4>親族の種類に対応する氏名を入力してください。</h4>


        
            <TABLE border="1" align="left">
                <TR>
                    <TD>配置No.</TD>
                    <TD>親族の種類</TD>
                    <TD>氏名</TD>
                </TR>
                <TR>
                    <TD>1</TD>
                    <TD>夫</TD>
                    <TD><input type="text" name="person1" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>1,1</TD>
                    <TD>夫の父</TD>
                    <TD><input type="text" name="person2" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>1,2</TD>
                    <TD>夫の母</TD>
                    <TD><input type="text" name="person3" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>1,1,1</TD>
                    <TD>夫の父方の祖父</TD>
                    <TD><input type="text" name="person4" size="60" class="font04"></TD>
                </TR>
                <TR>
                    <TD>1,1,2</TD>
                    <TD>夫の父方の祖母</TD>
                    <TD><input type="text" name="person5" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>1,2,1</TD>
                    <TD>夫の母方の祖父</TD>
                    <TD><input type="text" name="person6" size="60"class="font04"></TD>
                </TR>
                <TR>
                    <TD>1,2,2</TD>
                    <TD>夫の母方の祖母</TD>
                    <TD><input type="text" name="person7" size="60" class="font04"></TD>
                </TR>
            </TABLE>

            
            <TABLE border="1" align="right">
                <TR>
                    <TD>配置No.</TD>
                    <TD>親族の種類</TD>
                    <TD>氏名</TD>
                </TR>
                <TR>
                    <TD>2</TD>
                    <TD>妻</TD>
                    <TD><input type="text" name="person8" size="60"class="font04"></TD>
                </TR>
                <TR>
                    <TD>2,1</TD>
                    <TD>妻の父</TD>
                    <TD><input type="text" name="person9" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>2,2</TD>
                    <TD>妻の母</TD>
                    <TD><input type="text" name="person10" size="60" class="font04"></TD>
                </TR>
                <TR>
                    <TD>2,1,1</TD>
                    <TD>妻の父方の祖父</TD>
                    <TD><input type="text" name="person11" size="60" class="font04"></TD>
                </TR>
                <TR>
                    <TD>2,1,2</TD>
                    <TD>妻の父方の祖母</TD>
                    <TD><input type="text" name="person12" size="60"class="font04" ></TD>
                </TR>
                <TR>
                    <TD>2,2,1</TD>
                    <TD>妻の母方の祖父</TD>
                    <TD><input type="text" name="person13" size="60" class="font04"></TD>
                </TR>
                <TR>
                    <TD>2,2,2</TD>
                    <TD>妻の母方の祖母</TD>
                    <TD><input type="text" name="person14" size="60" class="font04" ></TD>
                </TR>
            </TABLE>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h1 align="center">
            <button type="button" onclick="location.href='http://ce5b9ip-aos-app000.c4sa.net/'">
            戻る
            </button>
             <form action="save.php" method="post"> 
            <input type="submit" value="保存"/>

                </form>
            
        </h1>
        
    </BODY>
</HTML>