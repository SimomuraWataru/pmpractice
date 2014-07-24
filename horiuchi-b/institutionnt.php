<html>

    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>施設利用について</title>
</head>
<body bgcolor="#87ceeb"leftmargin="120px">
   <font size="7">施<font color="#33cccc">設</font>の利用について</font>
      <?php
 
 $dinner=($_GET['dinner']);
 $breakfast=($_GET['breakfast']);
 $dzi=($_GET['dzi']);
 $dhun=($_GET['dhun']);
 $bzi=($_GET['bzi']);
 $bhun=($_GET['bhun']);
 

?>
<br><br><br>
<form action="checknt.php" method="get">
    
     <input type="hidden" name="dinner"value="<?php echo $dinner?>" >
    <input type="hidden" name="breakfast"value="<?php echo $breakfast?>" >
    <input type="hidden" name="dzi"value="<?php echo $dzi?>" >
    <input type="hidden" name="dhun"value="<?php echo $dhun?>" >
    <input type="hidden" name="bzi"value="<?php echo $bzi?>" >
    <input type="hidden" name="bhun"value="<?php echo $bhun?>" >
    
 <input type="radio" name="institution" value="利用する"style="position: relative; left: 353px; top: 0px;"checked>
 <font size="5"style="position: relative; left: 354px; top: 0px;" >利用する</font>
 <br><br>
  <font size="5"style="position: relative; left: 370px; top: 0px;" >・時間</font>
  <SELECT name="zi" style="position: relative; left: 380px; top: 0px;">
<OPTION value="00時">00</OPTION>
 <OPTION value="01時">01</OPTION>
 <OPTION value="02時">02</OPTION>
 <OPTION value="03時">03</OPTION>
 <OPTION value="04時">04</OPTION>
 <OPTION value="05時">05</OPTION>
 <OPTION value="06時">06</OPTION>
 <OPTION value="07時">07</OPTION>
 <OPTION value="08時">08</OPTION>
 <OPTION value="09時">09</OPTION>
 <OPTION value="10時">10</OPTION>
 <OPTION value="11時">11</OPTION>
 <OPTION value="12時">12</OPTION>
 <OPTION value="13時">13</OPTION>
 <OPTION value="14時">14</OPTION>
 <OPTION value="15時">15</OPTION>
 <OPTION value="16時">16</OPTION>
 <OPTION value="17時">17</OPTION>
 <OPTION value="18時">18</OPTION>
 <OPTION value="19時">19</OPTION>
 <OPTION value="20時">20</OPTION>
 <OPTION value="21時">21</OPTION>
 <OPTION value="22時">22</OPTION>
 <OPTION value="23時">23</OPTION>
</SELECT>
  <font size="4"style="position: relative; left: 400px; top: 0px;" >：</font> 
  <SELECT name="hun" style="position: relative; left: 420px; top: 0px;">
 <OPTION value="00分">00</OPTION>
 <OPTION value="01分">01</OPTION>
 <OPTION value="02分">02</OPTION>
 <OPTION value="03分">03</OPTION>
 <OPTION value="04分">04</OPTION>
 <OPTION value="05分">05</OPTION>
 <OPTION value="06分">06</OPTION>
 <OPTION value="07分">07</OPTION>
 <OPTION value="08分">08</OPTION>
 <OPTION value="09分">09</OPTION>
 <OPTION value="10分">10</OPTION>
 <OPTION value="11分">11</OPTION>
 <OPTION value="12分">12</OPTION>
 <OPTION value="13分">13</OPTION>
 <OPTION value="14分">14</OPTION>
 <OPTION value="15分">15</OPTION>
 <OPTION value="16分">16</OPTION>
 <OPTION value="17分">17</OPTION>
 <OPTION value="18分">18</OPTION>
 <OPTION value="19分">19</OPTION> 
 <OPTION value="20分">20</OPTION>
 <OPTION value="21分">21</OPTION>
 <OPTION value="22分">22</OPTION>
 <OPTION value="23分">23</OPTION>
 <OPTION value="24分">24</OPTION>
 <OPTION value="25分">25</OPTION>
 <OPTION value="26分">26</OPTION>
 <OPTION value="27分">27</OPTION>
 <OPTION value="28分">28</OPTION>
 <OPTION value="29分">29</OPTION>  
 <OPTION value="30分">30</OPTION>
 <OPTION value="31分">31</OPTION>
 <OPTION value="32分">32</OPTION>
 <OPTION value="33分">33</OPTION>
 <OPTION value="34分">34</OPTION>
 <OPTION value="35分">35</OPTION>
 <OPTION value="36分">36</OPTION>
 <OPTION value="37分">37</OPTION>
 <OPTION value="38分">38</OPTION>
 <OPTION value="39分">39</OPTION>  
 <OPTION value="40分">40</OPTION>
 <OPTION value="41分">41</OPTION>
 <OPTION value="42分">42</OPTION>
 <OPTION value="43分">43</OPTION>
 <OPTION value="44分">44</OPTION>
 <OPTION value="45分">45</OPTION>
 <OPTION value="46分">46</OPTION>
 <OPTION value="47分">47</OPTION>
 <OPTION value="48分">48</OPTION>
 <OPTION value="49分">49</OPTION> 
 <OPTION value="50分">50</OPTION>
 <OPTION value="51分">51</OPTION>
 <OPTION value="52分">52</OPTION>
 <OPTION value="53分">53</OPTION>
 <OPTION value="54分">54</OPTION>
 <OPTION value="55分">55</OPTION>
 <OPTION value="56分">56</OPTION>
 <OPTION value="57分">57</OPTION>
 <OPTION value="58分">58</OPTION>
 <OPTION value="59分">59</OPTION>
</SELECT>
 <br><br>
  <font size="5"style="position: relative; left: 370px; top: 0px;" >・場所</font>
    <SELECT name="place" style="position: relative; left: 380px; top: 0px;">
 <OPTION value="卓球">卓球</OPTION>
 <OPTION value="カラオケ">カラオケ</OPTION>
 <OPTION value="ダーツ">ダーツ</OPTION>
 <OPTION value="ビリヤード">ビリヤード</OPTION>
    </select>
<br><br><br>
  <font size="5"style="position: relative; left: 370px; top: 0px;" >・レンタル</font>
 <br>
   <font size="5"style="position: relative; left: 500px; top: 0px;" >しない</font>
 <input type="radio" name="rental" value="指定しない"style="position: relative; left: 390px; top: 0px;"checked>
 <br><br>
   <font size="5"style="position: relative; left: 500px; top: 0px;" >する</font>
 <input type="radio" name="rental" value="指定する"style="position: relative; left: 410px; top: 0px;">
   <br><br>
  <SELECT name="rezi" style="position: relative; left: 380px; top: 0px;">
<OPTION value="00時">00</OPTION>
 <OPTION value="01時">01</OPTION>
 <OPTION value="02時">02</OPTION>
 <OPTION value="03時">03</OPTION>
 <OPTION value="04時">04</OPTION>
 <OPTION value="05時">05</OPTION>
 <OPTION value="06時">06</OPTION>
 <OPTION value="07時">07</OPTION>
 <OPTION value="08時">08</OPTION>
 <OPTION value="09時">09</OPTION>
 <OPTION value="10時">10</OPTION>
 <OPTION value="11時">11</OPTION>
 <OPTION value="12時">12</OPTION>
 <OPTION value="13時">13</OPTION>
 <OPTION value="14時">14</OPTION>
 <OPTION value="15時">15</OPTION>
 <OPTION value="16時">16</OPTION>
 <OPTION value="17時">17</OPTION>
 <OPTION value="18時">18</OPTION>
 <OPTION value="19時">19</OPTION>
 <OPTION value="20時">20</OPTION>
 <OPTION value="21時">21</OPTION>
 <OPTION value="22時">22</OPTION>
 <OPTION value="23時">23</OPTION>
 </SELECT>
 . <font size="4"style="position: relative; left: 400px; top: 0px;" >：</font> 
 <SELECT name="rehun" style="position: relative; left: 420px; top: 0px;">
<OPTION value="00分">00</OPTION>
 <OPTION value="01分">01</OPTION>
 <OPTION value="02分">02</OPTION>
 <OPTION value="03分">03</OPTION>
 <OPTION value="04分">04</OPTION>
 <OPTION value="05分">05</OPTION>
 <OPTION value="06分">06</OPTION>
 <OPTION value="07分">07</OPTION>
 <OPTION value="08分">08</OPTION>
 <OPTION value="09分">09</OPTION>
 <OPTION value="10分">10</OPTION>
 <OPTION value="11分">11</OPTION>
 <OPTION value="12分">12</OPTION>
 <OPTION value="13分">13</OPTION>
 <OPTION value="14分">14</OPTION>
 <OPTION value="15分">15</OPTION>
 <OPTION value="16分">16</OPTION>
 <OPTION value="17分">17</OPTION>
 <OPTION value="18分">18</OPTION>
 <OPTION value="19分">19</OPTION> 
 <OPTION value="20分">20</OPTION>
 <OPTION value="21分">21</OPTION>
 <OPTION value="22分">22</OPTION>
 <OPTION value="23分">23</OPTION>
 <OPTION value="24分">24</OPTION>
 <OPTION value="25分">25</OPTION>
 <OPTION value="26分">26</OPTION>
 <OPTION value="27分">27</OPTION>
 <OPTION value="28分">28</OPTION>
 <OPTION value="29分">29</OPTION>  
 <OPTION value="30分">30</OPTION>
 <OPTION value="31分">31</OPTION>
 <OPTION value="32分">32</OPTION>
 <OPTION value="33分">33</OPTION>
 <OPTION value="34分">34</OPTION>
 <OPTION value="35分">35</OPTION>
 <OPTION value="36分">36</OPTION>
 <OPTION value="37分">37</OPTION>
 <OPTION value="38分">38</OPTION>
 <OPTION value="39分">39</OPTION>  
 <OPTION value="40分">40</OPTION>
 <OPTION value="41分">41</OPTION>
 <OPTION value="42分">42</OPTION>
 <OPTION value="43分">43</OPTION>
 <OPTION value="44分">44</OPTION>
 <OPTION value="45分">45</OPTION>
 <OPTION value="46分">46</OPTION>
 <OPTION value="47分">47</OPTION>
 <OPTION value="48分">48</OPTION>
 <OPTION value="49分">49</OPTION> 
 <OPTION value="50分">50</OPTION>
 <OPTION value="51分">51</OPTION>
 <OPTION value="52分">52</OPTION>
 <OPTION value="53分">53</OPTION>
 <OPTION value="54分">54</OPTION>
 <OPTION value="55分">55</OPTION>
 <OPTION value="56分">56</OPTION>
 <OPTION value="57分">57</OPTION>
 <OPTION value="58分">58</OPTION>
 <OPTION value="59分">59</OPTION>
</SELECT>
 <br><br>
  <input type="radio" name="institution" value="利用しない"style="position: relative; left: 353px; top: 0px;">
 <font size="5"style="position: relative; left: 354px; top: 0px;" >利用しない</font>
  <input type="radio" name="institution" value="未定"style="position: relative; left: 499px; top: 0px;">
 <font size="5"style="position: relative; left: 500px; top: 0px;" >未定</font>
  <input type="submit" value="次へ" style="position: relative; left: 400px; top: 100px;"/>
  <input type="button" value=" 戻る" onClick="location.href='eatnt.php'" style="position: relative; left: 400px; top: 100px;"/>
 </form>
</body>
</html>