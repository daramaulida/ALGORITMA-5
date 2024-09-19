<?php
function nama_bulan($bulan, $callback) {
	$list_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret',4 => 'April');
	$nama = $list_bulan[$bulan];
	
	if (is_callable($callback)) {
		return $callback($nama);
	}
	return $nama;
}

$bulan = nama_bulan(1, function($val) {
		return strtoupper($val);
	});
echo $bulan; // Hasil: JANUARI
echo "<hr>";
$bulan = nama_bulan(2, function($val) {
    return strtoupper($val);
});
echo $bulan; // Hasil FEBRUARI
echo "<hr>";
$bulan = nama_bulan(3, function($val) {
    return strtoupper($val);
});
echo $bulan; // Hasil MARET
echo "<hr>";
$bulan = nama_bulan(4, function($val) {
    return strtoupper($val);
});
echo $bulan; // Hasil APRIL
echo "<hr>";
echo "<p><strong>By:Dara Maulida";