<?php

for ($i = 1; $i <= 20; $i++) {
    echo "Mengecek angka $i..." . PHP_EOL;
    if ($i === 13) {
        echo "ANGKA 13 DITEMUKAN" .  PHP_EOL;
        break;
    }
}