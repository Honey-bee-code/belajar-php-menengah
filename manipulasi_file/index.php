<?php
echo "<h4 style= 'color: blue'> If (file_exist())</h4>";

if (file_exists('buah.txt')) {
    echo "File buah.txt  ditemukan <br>";
} else {
    echo "File buah.txt tidak ditemukan <br>";
}
echo "<h4 style= 'color: blue'>readfile()</h4>";
echo readfile('buah.txt');
echo "<h4 style= 'color: blue'>file_get_contents()</h4>";
echo file_get_contents('buah.txt');
echo "<h4 style= 'color: blue'>nl2br(file_get_contents()</h4>";
echo nl2br(file_get_contents('buah.txt'));

echo "<h4 style= 'color: blue'>fopen(), fread(), dan fclose()</h4>";

$isiFileBuah = file('buah.txt');
echo '<pre>';
print_r($isiFileBuah);
echo '</pre>';

$file = fopen ('buah.txt', 'r');
if (!$file) {
    die ('File tidak ada');
}

# mulai baca file
echo fread ($file, filesize('buah.txt'));

# tutup file agar ia dihapus dari memory
fclose ($file);

echo "<h4 style= 'color: blue'>fopen(), fwrite()</h4>";
$namaFile = 'nama-bulan.txt';
$file = fopen($namaFile, 'w');

$konten = "Juni\nJuli\nAgustus\nSeptember\nOktober\n";
fwrite ($file, $konten);
fclose($file);

echo nl2br(file_get_contents('nama-bulan.txt'));
copy ('nama-bulan.txt', 'bulan.txt');
unlink ('bulan.txt');
