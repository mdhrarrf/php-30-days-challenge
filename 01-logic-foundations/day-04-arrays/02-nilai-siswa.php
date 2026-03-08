<?php

$nilai = [80, 90, 75, 85, 70, 100];

$total = array_sum($nilai);
$jumlahData = count($nilai);
$rataRata = $total / $jumlahData;

echo "Total Nilai: $total" . PHP_EOL;
echo "Jumlah Data: $jumlahData" . PHP_EOL;
echo "Rata-rata: $rataRata" . PHP_EOL;