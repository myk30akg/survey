<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
	<?php
	$dsn='mysql:dbname=phpkiso;host=localhost';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->query('SET NAMES utf8');
	
	$sql='SELECT*FROM `survey` WHERE 1';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();


	//while…取得したデータを表示する
	//一覧を作るためのループ
	while(1){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		if ($rec==false)
		 {
		 	//取得できるデータがなくなったので、制御文から抜けて処理を終了する
			break;
		}
	echo $rec['code'];
	echo $rec['nickname'];
	echo '&nbsp; &nbsp;';
	echo $rec['email'];
	echo '&nbsp; &nbsp;';
	echo $rec['goiken'];
	echo '<br/>';
	}

	$dbh=null;

	?>
</body>
</html>