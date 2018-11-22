<?php
error_reporting(0);


//veritabanı bağlantısı
$baglan = mysql_connect('localhost','root','');
mysql_select_db("baranselvt",$baglan );
mysql_query("SET NAMES UTF8");

//Site Sabitleri
$ayarcek=mysql_query("select * from ayarlar");
$ayar=mysql_fetch_array($ayarcek);
extract($ayar);
$baslik=$sayfaBaslik;
$alt=$copright;
?>