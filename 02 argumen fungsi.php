<?php
// Tanpa argumen
function nama_bulan() {
	echo 'Agustus';
}
nama_bulan(); // Hasil Agustus

//tanpa argumen
echo "<hr>";
function nama_bulan1 ($bulan) {
	echo $bulan;
}
nama_bulan1 ('Januari'); // Hasil Januari

//tanpa argumen
echo "<hr>";
function nama_bulan2 ($bulan, $tahun) {
	echo $bulan . ' ' . $tahun;
}
nama_bulan2 ('Januari', 2016); // Hasil Januari 2016
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
