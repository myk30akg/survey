<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>

	<body>
		<?php
		//『echo』と入力すると""が出てくるのはなぜ？？？？？？？？
		// $_*****＝スーパーグローバル変数。プログラムのどこからでもアクセスできる変数
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$goiken = $_POST['goiken'];
		// 『$_POST』は絶対大文字

		$nickname = htmlspecialchars($nickname);
		$email = htmlspecialchars($email);
		$goiken = htmlspecialchars($goiken);



	if($nickname == ''){
		echo 'ニックネームが入力されていません。';
	}
	else
	{

		echo 'ようこそ';
		echo $nickname;
		echo '様';

	}
		echo '<br/>';
	if($email == ''){
		echo 'メールアドレスが入力されていません。';
	}
	else
	{

		echo 'メールアドレス：';
		echo $email;
		echo '<br/>';

	}

	if($goiken == ''){
		echo 'ご意見が入力されていません。';
	}
	else
	{

		echo 'ご意見';
		echo '『'.$goiken.'』';
		echo '<br/>';

	}

	if ($nickname == '' ||$email =='' ||$goiken =='') {
		//どれかひとつが空の場合、戻るボタンだけを表示
		echo '<form>';
		echo '<form method="post" action="thanks.php">';
		echo '<input type="button" onclick="history.back()" value="戻る">';
		echo '</form>';
		}else{
		echo '<form method="post" action="thanks.php">';
		echo '<input name = "nickname" type = "hidden" value = "'.$nickname.'">';
		echo '<input name = "email" type = "hidden" value = "'.$email.'">';
		echo '<input name = "goiken" type = "hidden" value = "'.$goiken.'">';


		//onclick="history.back()"はjaでクリックした時に戻るという指示
		echo '<input type="button" onclick="history.back()" value="戻る">';
		echo '<input type="submit" value="OK">';
		echo '</form>';
	}

	?>
	<br/>
	<!-- <a href="index.html">戻る</a> -->

	</body>
</html>
