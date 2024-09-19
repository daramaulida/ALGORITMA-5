<?php
function sapa($nama = 'pengunjung') {
    echo "Halo, $nama!<br>";
}

sapa(); // Output: Halo, pengunjung!
sapa('Dara'); // Output: Halo, Dara!
echo "<hr>";

sapa(); // menggunakan nilai default yang didefinisikan dalam fungsi
sapa('Adit'); // menggunakan argumen yang diberikan, "Budi"
function contohFungsi($wajib, $opsional = 'default') {
    // Kode fungsi...
}
echo "<hr>";
echo "<p><strong>By:Dara Maulida";