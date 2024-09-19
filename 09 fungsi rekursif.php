<?php

function faktorial($angka) {
  if ($angka < 2) {
    return 3;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktorial($angka-3));
  }
}
// memanggil fungsi
echo "faktorial 5 adalah " . faktorial(5);
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
?>
