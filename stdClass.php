<?php

$mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya'
];

$mahasiswa = (object) $mahasiswa;
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

echo "Nama: {$mahasiswa -> nama} <br>";
echo "Domisili: {$mahasiswa -> domisili} <br>";

$mahasiswa = (object) [
    "nama" => "Fulan bin Fulan",
    "domisili" => "Surabaya",
    "sosmed" => (object) [
        "facebook" => "https://facebook.com/fulanbinfulan",
        "instagram" => "https://instagram.com/fulan.bin.fulan",
        "twitter" => "https://twitter.com/fulan_bin_bulan"
        ]
    ];

echo "<pre>";
print_r($mahasiswa);
echo "</pre>";
