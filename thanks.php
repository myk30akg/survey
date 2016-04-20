	<?php
	try
	{

		//ステップ1.db接続
		$dsn = 'mysql:dbname = phpkiso;host = localhost';
		//本当はIPアドレスを書く

		//接続するため(MySQLにログインするため)のユーザー情報
		$user = 'root';
		$password = '';

		//DB接続オブジェクトを作成。オブジェクト指向型のときに利用
		$dbh = new PDO($dsn,$user,$password);

		//接続したDBオブジェクトで文字コードutf8を使うように指定
		$dbh->query('SET NAMES utf8');
		//矢印の演算式と言われている

	?>
<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>

	<body>
	<?php
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$goiken = $_POST['goiken'];

		$nickname = htmlspecialchars($nickname);
		$email = htmlspecialchars($email);
		$goiken = htmlspecialchars($goiken);

		echo $nickname;
		echo '様<br/>';
		echo 'ご意見ありがとうございました<br/>';
		echo 'いただいたご意見『';
		echo $goiken;
		echo '』<br/>';
		echo $email;
		echo 'にメールを送りましたのでご確認ください';

		//ステップ2.DBエンジンにSQL文で指令を出す		
		$sql = 'INSERT INTO `survey`(`code`, `nickname`, `email`, `goiken`)VALUES ([value-1],[value-2],[value-3],[value-4])';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();

		//ステップ3.データベースから切断
		$dbn = null;
	}
	catch (Exception $e)
	{
		echo 'ただいま障害により大変ご迷惑おかけしております。';
	}
	?>
	</body>

</html>