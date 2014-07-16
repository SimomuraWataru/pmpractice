<?php
        require_once 'database_conf.php';
        require_once 'h.php';
        
	/*入出力確認*/
	$id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : null;
	$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : null;
	$check_input = array($id,$pass);
        
	foreach($check_input as $check){
            if($check != ''){
		if(preg_match("/^[0-9a-zA-Z]+$/",$check)){
		}else{
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: logmiss.php");
		}
		}else{
                    header("HTTP/1.1 301 Moved Permanently");
                    header("Location: logmiss.php");
		}
	}
        
        
		/*ＩＤとパスワード照合*/
        
            $db=mysqli_connect('127.0.0.1','horiA','hijeru') or exit("MySQLへ接続できません。");
            mysqli_select_db($db,'mydb') or exit("データベース名が間違っています。");
            $sql="SELECT * FROM account where id='{$_POST['id']}' and pass='{$_POST['pass']}';";
            $result=mysqli_query($db,$sql) or exit("データの抽出に失敗しました。");
            
            if(mysqli_num_rows($result)!=0){
              header("HTTP/1.1 301 Moved Permanently");
              header("Location: main.php");
            }
            else{
              header("HTTP/1.1 301 Moved Permanently");
              header("Location: logmiss.php");
            } 
            
            mysqli_close($db);
            
?>