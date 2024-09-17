<?php
function report($bulan) {
	if ($bulan < 3) {
		$status = 'Report belum tersedia';
	} else {
		$status = ' Report sudah tersedia';
	}
	return $status;
}
echo report(2); // Hasil Report belum tersedia;
echo "<hr>";
echo report(5); // Hasil Report sudah tersedia;
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
