<?php
$nilai = 90;

$keterangan ="";

if($nilai > 90){
    $keterangan = "Sangat Baik";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Lumayan Baik";
} else {
    $keterangan = "oke";
}

echo $keterangan;