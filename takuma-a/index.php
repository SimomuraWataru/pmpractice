<html>
<head>
    <meta charset="utf-8">
  <title>講義閲覧入力画面</title>
 
</head>


<body>
      
<center><h1>講義閲覧入力画面</h1></center>


    <table class="tb">
        <thead>
        <tr><td></td><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr>
    </thead>
    
    <tbody>  
        
<?php
 
$dsn = 'mysql:dbname=cb7nh5d_ak1;host=192.168.0.1';
$user = 'cb7nh5d_ak1';
$password = 'LqL4RHCk';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

  $st = $dbh->query("SELECT * FROM atai");
  while ($row = $st->fetch()) {
    $a1 = htmlspecialchars($row['a1']);
    $a2 = htmlspecialchars($row['a2']);
    $a3 = htmlspecialchars($row['a3']);
    $a4 = htmlspecialchars($row['a4']);
    $a5 = htmlspecialchars($row['a5']);
    $a6 = htmlspecialchars($row['a6']);
    $b1 = htmlspecialchars($row['b1']);
    $b2 = htmlspecialchars($row['b2']);
    $b3 = htmlspecialchars($row['b3']);
    $b4 = htmlspecialchars($row['b4']);
    $b5 = htmlspecialchars($row['b5']);
    $b6 = htmlspecialchars($row['b6']);
    $c1 = htmlspecialchars($row['c1']);
    $c2 = htmlspecialchars($row['c2']);
    $c3 = htmlspecialchars($row['c3']);
    $c4 = htmlspecialchars($row['c4']);
    $c5 = htmlspecialchars($row['c5']);
    $c6 = htmlspecialchars($row['c6']);
    $d1 = htmlspecialchars($row['d1']);
    $d2 = htmlspecialchars($row['d2']);
    $d3 = htmlspecialchars($row['d3']);
    $d4 = htmlspecialchars($row['d4']);
    $d5 = htmlspecialchars($row['d5']);
    $d6 = htmlspecialchars($row['d6']);
    $e1 = htmlspecialchars($row['e1']);
    $e2 = htmlspecialchars($row['e2']);
    $e3 = htmlspecialchars($row['e3']);
    $e4 = htmlspecialchars($row['e4']);
    $e5 = htmlspecialchars($row['e5']);
    $e6 = htmlspecialchars($row['e6']);
    $f1 = htmlspecialchars($row['f1']);
    $f2 = htmlspecialchars($row['f2']);
    $f3 = htmlspecialchars($row['f3']);
    $f4 = htmlspecialchars($row['f4']);
    $f5 = htmlspecialchars($row['f5']);
    $f6 = htmlspecialchars($row['f6']);
    
    
    
    
    
     echo "  <tr><th>1限</th><td><textarea>$a1</textarea></td>
                             <td><textarea>$a2</textarea></td>
                             <td><textarea>$a3</textarea></td>
                             <td><textarea>$a4</textarea></td>
                             <td><textarea>$a5</textarea></td>
                             <td><textarea>$a6</textarea></td>
             <tr><th>2限</th><td><textarea>$b1</textarea></td>
                             <td><textarea>$b2</textarea></td>
                             <td><textarea>$b3</textarea></td>
                             <td><textarea>$b4</textarea></td>
                             <td><textarea>$b5</textarea></td>
                             <td><textarea>$b6</textarea></td>
             <tr><th>3限</th><td><textarea>$c1</textarea></td>
                             <td><textarea>$c2</textarea></td>
                             <td><textarea>$c3</textarea></td>
                             <td><textarea>$c4</textarea></td>
                             <td><textarea>$c5</textarea></td>
                             <td><textarea>$c6</textarea></td> 
             <tr><th>4限</th><td><textarea>$d1</textarea></td>
                             <td><textarea>$d2</textarea></td>
                             <td><textarea>$d3</textarea></td>
                             <td><textarea>$d4</textarea></td>
                             <td><textarea>$d5</textarea></td>
                             <td><textarea>$d6</textarea></td>
             <tr><th>5限</th><td><textarea>$e1</textarea></td>
                             <td><textarea>$e2</textarea></td>
                             <td><textarea>$e3</textarea></td>
                             <td><textarea>$e4</textarea></td>
                             <td><textarea>$e5</textarea></td>
                             <td><textarea>$e6</textarea></td>
             <tr><th>6限</th><td><textarea>$f1</textarea></td>
                             <td><textarea>$f2</textarea></td>
                             <td><textarea>$f3</textarea></td>
                             <td><textarea>$f4</textarea></td>
                             <td><textarea>$f5</textarea></td>
                             <td><textarea>$f6</textarea></td>"; 



  }
?>

   </tbody>
</table>

 
 


</body>

<form action="index2.php" method="post">
<p><input type="submit" value="編集する"></p>

</form>
</html>