<?php
// Definisikan dua array
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 98];

// Gabungkan kedua array
$combined_array = array_merge($array1, $array2);

// Hilangkan duplikat
$unique_array = array_unique($combined_array);

// Urutkan array dari terbesar ke terkecil
rsort($unique_array);

// Tampilkan hasil
foreach ($unique_array as $value) {
    echo $value . "\n";
}
?>