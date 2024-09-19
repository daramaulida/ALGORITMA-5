<?php
function sapa($nama) {
    echo "Halo, " . $nama . "!";
}
sapa("Dinda");
echo "<hr>";

//Mendefinisikan Parameter
function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}
echo tambah(5, 10); // Output: 15
echo "<hr>";

//Tipe Parameter
function setNilai(int $nilai) {
    echo $nilai;
}
setNilai(10); // Output: 10
echo "<hr>";

//Argumen Default
function salam($waktu = "pagi") {
    echo "Selamat $waktu!<br>";
}
salam(); // Output: Selamat pagi!
salam("sore"); // Output: Selamat sore!
echo "<hr>";

//Passing by Reference
function tambahSatu(&$nilai) {
    $nilai++;
}
$angka = 10;
tambahSatu($angka);
echo $angka; // Output: 11
echo "<hr>";

//Jumlah Argumen Dinamis
function jumlahkan() {
    $total = 0;
    $args = func_get_args();

    foreach ($args as $arg) {
        $total += $arg;
    }

    return $total;
}

echo jumlahkan(1, 2, 3, 4); // Output: 10
echo "<hr>";
echo "<p><strong>By:Dara Maulida";