<?php

//Fungsi time()
$sekarang = time();
echo $sekarang;
echo "<hr>";

//Fungsi date()
echo date('Y-m-d H:i:s');
echo "<hr>";

//Menyetel Zona Waktu
date_default_timezone_set('Asia/Jakarta');
echo date('Y-m-d H:i:s');
echo "<hr>";

//Manipulasi Tanggal dan Waktu dengan strtotime()
$tomorrow = strtotime("tomorrow");
echo date('Y-m-d', $tomorrow);

$nextWeek = strtotime("+1 week");
echo date('Y-m-d', $nextWeek);
echo "<hr>";

//Menggunakan DateTime dan DateInterval
$date = new DateTime();
$date->add(new DateInterval('P10D')); // menambahkan 10 hari
echo $date->format('Y-m-d');
echo "<hr>";

//Mengecek Tanggal Valid dengan checkdate()
if (checkdate(02, 29, 2024)) {
    echo "Tanggal valid!";
  } else {
    echo "Tanggal tidak valid!";
  }
  echo "<br>";
  if (checkdate(02, 29, 2023)) {
    echo "Tanggal valid!";
  } else {
    echo "Tanggal tidak valid!";
  }
  echo "<hr>";
  echo "<p><strong>By:Dara Maulida";
