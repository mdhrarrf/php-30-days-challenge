<?php

$metodePembayaran = "GOPAY";
$totalBelanja = 50000;
$biayaAdmin = 0;

switch ($metodePembayaran) {
    case "GOPAY":
        $biayaAdmin = 2000;
        break;
    case "VA_BANK":
        $biayaAdmin = 5000;
        break;
    case "COD":
        $biayaAdmin = 10000;
        break;
    default :
        $biayaAdmin = 0;
        break;
}

$totalBayar = $totalBelanja + $biayaAdmin;
echo "Total yang harus dibayar: $totalBayar" . PHP_EOL;