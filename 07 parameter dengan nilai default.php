<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum<br>"){
  echo $salam." ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Dara", "Hi<br>");

echo "<hr>";

$kita = "Dara";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($kita);
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
?>
