<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rupiah to Coin Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Rupiah to Coin Converter</h2>
    <form method="post">
        <label for="rupiah">Masukkan Jumlah Rupiah:</label>
        <input type="number" name="rupiah" id="rupiah" required><br><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rupiah = $_POST['rupiah'];

        if (!is_numeric($rupiah)) {
            echo "<p>Invalid input. Please enter a valid number.</p>";
            return;
        }

        $coins = [1000, 500, 200, 100];
        $result = [];

        foreach ($coins as $coin) {
            $result[$coin] = intdiv($rupiah, $coin); // Menghitung jumlah koin
            $rupiah = $rupiah % $coin; // Sisa rupiah setelah diambil koin
        }

        ?>
        <h3>Hasil Konversi:</h3>
        <ul>
            <?php foreach ($result as $coin => $count) { ?>
                <li>Koin Rp<?= $coin ?>: <?= $count ?></li>
            <?php } ?>
        </ul>
        <?php if ($rupiah > 0) { ?>
            <p>Sisa Rupiah: Rp<?= $rupiah ?> (Tidak dapat dikonversi ke koin)</p>
        <?php } ?>
    <?php } ?>
</body>
</html>