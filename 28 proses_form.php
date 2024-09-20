<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Cek jika field nama dan email telah terisi
  if (empty($_POST["nama"])) {
    echo "Nama harus diisi.";
  } else {
    $nama = $_POST["nama"];
    // Lanjutkan dengan proses $nama
  }

  if (empty($_POST["email"])) {
    echo "Email harus diisi.";
  } else {
    $email = $_POST["email"];
    // Lanjutkan dengan proses $email
  }
}
?>
