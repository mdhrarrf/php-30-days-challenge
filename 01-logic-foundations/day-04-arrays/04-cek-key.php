<?php

$stok = [
    "Buku" => 15,
    "Pensil" => 10,
    "Penghapus" => 5
];

if (isset($stok['Pensil']) > 0) {
    echo "Stok Pensil tersedia: {$stok['Pensil']}.";
} else {
    echo "Maaf stok pensil habis.";
}