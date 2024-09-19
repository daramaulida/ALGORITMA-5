<?php

//Header Location: Pengalihan Halaman
header("Location:19 empty function.php");
exit; // Selalu panggil exit setelah header location untuk menghentikan eksekusi skrip

//Mengatur Konten Tipe Header
header("Content-Type: application/pdf");
// Kode untuk mengirimkan file PDF

//Mengontrol Cache dengan Header
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

//Menggunakan Lainnya Header
header("HTTP/1.1 404 Not Found"); // Mengirimkan status error 404

// Mengatur cookie melalui header
header("Set-Cookie: nama=nilai; expires=Wed, 17 Aug 2022 13:00:00 GMT; path=/");

