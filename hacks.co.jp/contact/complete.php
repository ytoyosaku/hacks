
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>株式会社hacks | お問い合わせ</title>
	<meta name="discription" content="株式会社hacksのお問い合わせはこちらです。株式会社hacks | お問い合わせ">
	<meta name="keywords" content="hacks,株式会社hacks,ハックス,Contact,コンタクト,お問い合わせ">
	<link rel="stylesheet" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/complete.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
</head>
<body>
	<div id="header">
		<div class="info">
			<h1 class="logo">
				<a href="..">hacks</a>
			</h1>
			<div class="menu">
				<ul>
					<li>
						<a href="..">サービス</a>
					</li>
					<li>
						<a href="..">会社概要</a>
					</li>
					<li>
						<a href="..">ニュース</a>
					</li>
					<li>
						<a href="..">パートナー様</a>
					</li>
					<li>
						<a href=".">お問い合わせ</a>
					</li>
				</ul>
			</div>
		</div><!-- info -->
	</div><!-- header -->
	<div id="main">
		<div class="top_image">
			<img src="image/sky.jpg" alt="top_image" width="100%" height="300px">
			<p>- お問い合わせ -</p>
		</div>
		<div class="complete">
		<?php
			//文字コード設定
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");

			//*環境設定*************************************
			//件名
			$subject = "お問い合わせ";
			//管理人メールアドレス(宛先)
			$to = "ytoyosaku@hacks.co.jp";
			//**********************************************

			//**POSTデータ受け取り**************************
			//差出人メールアドレス格納
			$header = "From: ". $_POST["mail"];

			//本文格納
			$body = "■氏名：" . $_POST["name"] ."\n";
			$body .= "■会社名：" . $_POST["company_name"] ."\n";
			$body .= "■電話番号：" . $_POST["tel"] ."\n";
			$body .= "■内容：" . $_POST["content"] ."\n";

			//************************************************

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(mb_send_mail($to,$subject,$body,$header)){
					echo "メール送信成功しました。";
				} else {
					echo "メール送信失敗しました。";
				}
			}
		?>
		</div>
		<div class="top">
			<a href="..">＜TOPへ戻る＞</a>
		</div>
	</div><!-- main -->
	<div id="footer">
		<p>Copyright(C) hacks Co.,Ltd All Rights Reserved.</p>
	</div><!-- footer -->
</body>
</html>
