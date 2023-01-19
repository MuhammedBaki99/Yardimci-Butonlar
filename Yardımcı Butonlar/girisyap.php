<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="../Yardımcı Butonlar/CSS/style.css" />
	
</head>
<body class="phpbg">
<?php 
$kullaniciadi=$_GET["kullaniciadi"];
$eposta=$_GET["eposta"];
echo ("<h1>Sayfamıza Hoşgeldiniz $kullaniciadi...</h1>");
echo("<h3>Kullanıcı Adı=$kullaniciadi</h3>");
echo("<h3>E-Posta=$eposta</h3>");


?>
</body>
</html>