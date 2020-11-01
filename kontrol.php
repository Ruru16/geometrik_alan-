
<?php 
error_reporting(0);
$adSoyad = $_GET['adSoyad'];
$takim = $_GET['takim'];
$cinsiyet = $_GET['cinsiyet'];
$cihaz = $_GET['cihaz'];

$cihaz== 0;

if ($cihaz == "telefon" ){
	echo "Merhaba ".$adSoyad.", ".$cihaz." ile canlı derse bağlanmak için zoom app ve Microsoft teams kullanabilirsin.";
}
else if($cihaz =="bilgisayar" ){
	echo "Merhaba ".$adSoyad.", ".$cihaz." ile canlı derse bağlanmak için masaüstü zoom bigBlueButton ve Microsoft teams kullanabilirsin";
}
else if($cihaz == "tablet"){
	echo "Merhaba ".$adSoyad.", ".$cihaz." ile canlı derse bağlanmak için Zoom app ve  blackboard kullanabilirsin";
}
else
	echo "Lütfen bir cihaz seçimi yapınız";


?>
