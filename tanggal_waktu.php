<?php
# prosedural
echo "<h4 style='color : blue'>Prosedural</h4>";
echo date('d-m-y') . "<br>";
echo date('D-M-Y') . "<br>";
echo date('d m y') . "<br>";
echo date('d/m/y') . "<br>";
echo date('d, F Y') . "<br>";
echo date('d \wk\wk m \wk\wk Y') . "<br>";
echo date('l, m Y') . "<br>";

echo "<h4 style='color : blue'>Pendekatan Objek</h4>";

# pendekatan objek
$tanggalHariIni = new DateTime();
echo $tanggalHariIni -> format('d-m-y');

echo "<h4 style='color : blue'>Date dengan timestamp</h4>";

echo time() . "<br>";

$timestamp = time();
$stringDate = date('d-m-Y H:i', $timestamp);

echo "Timestamp: {$timestamp} <br>";
echo "String date: {$stringDate} <br>";
