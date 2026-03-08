<?php

$siswa = ["Haidar", "Budi", "Siti", "Andi", "Agus"];
$no = 1;

foreach ($siswa as $nama) {
    echo "Siswa ke-$no: $nama" . PHP_EOL;
    $no++;
}