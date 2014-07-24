<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>ログイン</title>
  </head>
  <body>
<!-- メニュー -->
<form method="post" action="logcheck.php">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <table align="center" border="0">
      <tr>
        <td>ログイン名    <br><br></td>
        <td><input type="text" name="id" size="50" />　　 <br><br></td>
      </tr>
      <tr>
        <td>パスワード  　<br><br></td>
        <td><input  type="password" name="pass" size="50" />　　 <br><br></td>
      </tr>
      <td colspan="2" align="center">
          <font color="#FF0000" ><b>ログイン名、またはパスワードが異なっています。</b></font>
      </td>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="ＯＫ" /></td>
      </tr>
    </table>

 </form>
</body>
</html>