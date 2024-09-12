<?php
// Array daftar belanjaan (nama item dan harganya)
$belanjaan = [
    ["nama" => "Beras", "harga" => 50000, "jumlah" => 2],
    ["nama" => "Minyak Goreng", "harga" => 30000, "jumlah" => 1],
    ["nama" => "Gula", "harga" => 20000, "jumlah" => 3]
];

// Variabel untuk menyimpan total harga
$totalHarga = 0;
$diskon = 0;
$pajak = 0;
$pajakPersen = 10; // Pajak 10%

// Menghitung total harga belanjaan
foreach ($belanjaan as $item) {
    $totalHarga += $item["harga"] * $item["jumlah"];
}

// Menetapkan diskon jika total belanjaan lebih dari Rp100.000
if ($totalHarga > 100000) {
    $diskon = $totalHarga * 0.1; // Diskon 10%
}

// Menghitung pajak
$pajak = ($totalHarga - $diskon) * $pajakPersen / 100;

// Total akhir setelah diskon dan pajak
$totalAkhir = ($totalHarga - $diskon) + $pajak;

// Menampilkan rincian belanjaan
echo "Rincian Belanjaan:\n";
foreach ($belanjaan as $item) {
    echo "{$item['nama']} - Rp. " . number_format($item["harga"], 0, ',', '.') . " x {$item['jumlah']}\n";
}

echo "\nTotal Harga: Rp. " . number_format($totalHarga, 0, ',', '.') . "\n";
echo "Diskon: Rp. " . number_format($diskon, 0, ',', '.') . "\n";
echo "Pajak ({$pajakPersen}%): Rp. " . number_format($pajak, 0, ',', '.') . "\n";
echo "Total Akhir: Rp. " . number_format($totalAkhir, 0, ',', '.') . "\n";
?>
