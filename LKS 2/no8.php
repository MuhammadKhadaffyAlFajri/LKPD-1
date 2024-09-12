<?php 

// Fungsi menerima beberapa jurusan dan menyimpannya dalam array unik dengan huruf besar.
function createArray(...$jurusan) {
    $arr = []; // Array kosong untuk menyimpan jurusan

    foreach ($jurusan as $value) {
        // Cek apakah jurusan sudah ada, jika belum tambahkan dalam huruf besar
        if (!in_array(strtoupper($value), $arr)) {
            array_push($arr, strtoupper($value));
        }
    }
    
    return $arr; // Kembalikan array hasil
}

// Panggil fungsi dan cetak hasil
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>