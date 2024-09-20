<!DOCTYPE html>
<html>

<head>
    <title>WAKTU TEMPUH</title>
</head>

<body>

    <form action="" method="post">
        <h1>Program Hitung Waktu Tempuh</h1>
        Jarak Tempuh (km) : <br>
        <input type="text" name="jarak"><br><br>
        Kecepatan (km/jam): <br>
        <input type="text" name="cepat"><br><br>
        <input type="submit" value="Hitung Waktu">
    </form>

</body>

</html>

<?php
if (isset($_POST['jarak']) && isset($_POST['cepat'])) {

    $jarak = $_POST['jarak'];
    $cepat = $_POST['cepat'];

    $waktu = $jarak / $cepat;

    echo

    "
    <h1>Program Hitung Waktu Tempuh</h1>
    <p>Jarak : <b>$jarak</b> km</p>
    <p>Kecepatan : <b>$cepat</b> km/jam</p>
    <h3>Waktu Tempuh : $waktu jam</h3>
    ";
}
echo "<p><strong>By:Dara Maulida";
?>

 
