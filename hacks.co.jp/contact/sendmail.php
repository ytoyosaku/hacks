<?php

//HTML内容出力
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
echo "<title>メールフォーム(送信処理)</title>";
echo "</head>";
echo "<body>";

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


if(mb_send_mail($to,$subject,$body,$header)){
   echo "メール送信成功しました。";
}else{
   echo "メール送信失敗しました。";
}

//HTML内容出力
echo "</body>";
echo "</html>";


?>