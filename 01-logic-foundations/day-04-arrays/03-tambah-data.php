<?php

$keranjang = ["Laptop", "Mouse"];

$keranjang[] = "Keyboard"; 
array_push($keranjang, "Monitor", "Dll");

echo "Daftar Belanjaan:" . PHP_EOL;
foreach ($keranjang as $item) {
    echo "- $item" . PHP_EOL;
}