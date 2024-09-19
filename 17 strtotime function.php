<?php

//Penggunaan Dasar strtotime()
$timestamp = strtotime("now");
echo $timestamp; // Menampilkan timestamp untuk waktu saat ini

$timestamp = strtotime("10 September 2000");
echo $timestamp; // Menampilkan timestamp untuk tanggal 10 September 2000
echo "<hr>";

//Format Tanggal yang Didukung
$nextWeek = strtotime("+1 week");
echo date("Y-m-d", $nextWeek); // Menampilkan tanggal satu minggu dari waktu saat ini
echo "<hr>";

//Penanganan Zona Waktu
date_default_timezone_set('Asia/Jakarta');
$localTime = strtotime("now");
echo $localTime; // Menampilkan timestamp dengan zona waktu Asia/Jakarta
echo "<hr>";

//Memformat Ulang Tanggal
$formatTanggal = date("d-M-Y", strtotime("16 Maret 2008"));
echo $formatTanggal; // Menampilkan "10-Sep-2000"
echo "<hr>";

//Menghitung Selisih Waktu
$tanggalAwal = strtotime("1 January 2020");
$tanggalAkhir = strtotime("1 January 2022");
$selisihHari = ($tanggalAkhir - $tanggalAwal) / 60 / 60 / 24;
echo "Selisih hari: " . $selisihHari; // Menampilkan selisih hari antara dua tanggal
echo "<hr>";
echo "<p><strong>By:Dara Maulida";

