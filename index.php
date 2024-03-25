<?php
// definisikan variables
$nama = 'Mohamad subhan al hafiz';
$umur = 19;
$berat = 50.4;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';
// variable system
echo '<br/>Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];


// definisikan konstansta

define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');
$jari = 4 ;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;


$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
 }
 echo '</ol>';
 sort($ar_buah);
 echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';


?>