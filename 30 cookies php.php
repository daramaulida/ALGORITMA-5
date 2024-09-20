<?php

//Mengambil Nilai Cookie
if(isset($_COOKIE["user"])) {
    echo "Selamat datang " . $_COOKIE["user"];
} else {
    echo "Selamat datang, tamu!";
    echo "<hr>";
}

//Menghapus Cookies
// Mengatur expiry time ke satu jam yang lalu
setcookie("user", "", time() - 3600);
echo "<p><strong>By:Dara Maulida";
