<?php 
$bil1=100;
$bil2=20;
$teks1="soal";
$teks2="latihan";

$hasil=($bil1 <> $bil2) or ($teks1== $teks2);
echo "$bil1 <> $bil2 or $teks1==teks2 adalah $hasil<br>";

$hasil=!($teks1==$teks2);
echo "!($teks1==teks2) adalah $hasil";
?>