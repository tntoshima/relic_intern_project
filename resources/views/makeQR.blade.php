<?php
require_once("phpqrcode/qrlib.php");
 
	// QR削除
	array_map("unlink", glob("qr/sample.png"));
 
	// 現在時刻取得
	$date = date("Y-m-d");
	$value = "現在時刻は{$date}です。";
 
	// パスセット
	$path = "phpqrcode/qr/sample.png";
 
	$qr = new QRcode();
 
	// QRコード作成
	$qr->png($value, $path, QR_ECLEVEL_M, 12);
?>
<html>
<head>
<meta charset="sjis">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
{
	text-align: center;
}
</style>
 
</head>
<body>
<h1><?php echo $value ?></h1>
<img  src="phpqrcode/qr/sample.png">
</body>
</html>
 