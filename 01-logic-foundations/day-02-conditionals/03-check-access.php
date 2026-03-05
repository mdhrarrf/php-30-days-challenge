<?php

$isLoggedIn = false;
$role = "admin";
$hasToken = false;

$syaratPilihan = ($role === "admin" || $hasToken);
$akses = $isLoggedIn && $syaratPilihan;

echo ($akses) ? "MASUK" : "GAGAL";