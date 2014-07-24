<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ようこそ</title>
    </head>
    <body bgcolor="#98fb98">
        <span style="position:relative;  top:170pt; left: 120pt"> <!––枠線の位置 ––>
            <div style="padding: 50px;background: #FFFFFF;border: 5px dashed #6b8e23; text-align: center; width: 70%; ">
                <!––marginは、枠の外側の余白です。margin-bottomだと、枠の下の余白です。数値の大小で、余白の幅が変更できます。,
                borderは、線の指定です。これは、線の太さ1px、線の種類がdotted、線の色が#333333,paddingは、枠の内側の余白です。これは、10px内側に余白を入れています。数値の大小で、余白の幅が変更できます。
                paddingは、枠の内側の余白です。これは、10px内側に余白を入れています。数値の大小で、余白の幅が変更できます。
                ––>
                <FONT size="7">本日は<font color="#4169e1">当</font>館をご利用くださいまし<font color="#ff7f50">て</font>誠に、
    　　<br/>ありがとう<font color="#4169e1">ご</font>ざいます。
      　<br/>皆様に<font color="#ff0000">良</font>い旅にしていただく<font color="#00bfff">為</font>に
                <br/>ご到<font color="#ffd700">着</font>からの行動をお<font color="#008000">知</font>らせ下さい。
                </FONT> <BR>
            </div>
            <SCRIPT LANGUAGE="JavaScript">
                <!--
           function TimeLink() {
                    myTime = (new Date()).getHours();
                    if (myTime >= 10 && myTime < 17)
                    {
                        location.href = "reserve.php";
                    }
                    else
                        (myTime <= 18 || myTime >= 24)
                    {
                        location.href = "reservent.php";
                    }
                }
                //-->
            </SCRIPT>
            <FORM><INPUT type="button" value="ログイン" onClick="TimeLink()"style="width:100px;height:50px;position: relative; left:550px; top: 50px;" /></FORM>   



        </span> 
    </body>
</html>
