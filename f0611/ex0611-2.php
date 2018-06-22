<?php

$outfile = './usrdata.dat';
$fp = fopen($outfile, "a");
fwrite($fp, $_POST{'usrdata'}."\n");
fclose($fp);

$from_email='love_81965@ezwesb.ne.jp';

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'love_81965@ezweb.ne.jp';
$title = 'usedate';
$content = htmlspecialchars($_POST[usrdata]);
$header = "From: $from_email\nReply-To: $from_email\n";
if(mb_send_mail($to, $title, $content, $header)){
    echo "<br>送信完了致しました。<br><br>
内容の確認を致しまして、担当者からお返事させて頂きます。<br>";
}else{
    echo "<br>メールの送信に失敗しました。<br>
    お手数ですがもう一度入力をお願いします。";
};


$sepdata=explode(',',$_POST[userdata]);


    
?>
