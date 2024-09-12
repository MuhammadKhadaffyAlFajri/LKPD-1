<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencari Simbol</title>
</head>
<body>
    <form method="post">
        <label for="teks">Masukkan Teks:</label>
        <input type="text" name="teks" id="teks">
        <input type="submit" value="Cari Simbol">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teks = $_POST['teks'];
        // Mencari semua karakter non-alfanumerik (bukan huruf, angka, atau spasi)
        preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

        if (!empty($matches[0])) {
            // Mengambil simbol-simbol unik
            $uniqueSymbols = array_unique($matches[0]);
            // Menyusun pesan dengan simbol-simbol yang ditemukan
            echo "Karakter yang terdapat pada kalimat: " . implode(', ', $uniqueSymbols);
        } else {
            echo "Tidak terdapat simbol pada kalimat.";
        }
    }
    ?>
</body>
</html>