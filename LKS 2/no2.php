<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Bayar</title>
</head>
<body>
    <form method="post">
        <label for="item">Harga Barang (Rp):</label>
        <input type="number" name="item" id="item" required><br><br>

        <label for="tanggal">Tanggal Pembelian:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <input type="submit" value="Hitung Total Bayar">
    </form>

    <?php
    function hitungTotalBayar($totalPembelian, $tanggalPembelian)
    {
        $hariIni = date('l', strtotime($tanggalPembelian));

        $diskon = 0;

        // Diskon 5% jika hari Selasa
        if ($hariIni == "Tuesday") {
            $diskon = 0.05;
        }

        // Diskon 7% jika total pembelian lebih dari 100.000
        if ($totalPembelian > 100000) {
            $diskon = 0.07;
        }

        $totalDiskon = $totalPembelian * $diskon;
        $totalBayar = $totalPembelian - $totalDiskon;

        return $totalBayar;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalPembelian = $_POST['item'];
        $tanggalPembelian = $_POST['tanggal'];
        $totalBayar = hitungTotalBayar($totalPembelian, $tanggalPembelian);

        $hariIni = date('l', strtotime($tanggalPembelian));

        echo "Tanggal pembelian: <strong>$tanggalPembelian ($hariIni)</strong><br>";
        echo "Total pembelanjaan: <strong>Rp" . number_format($totalPembelian, 0, ',', '.') . "</strong><br>";
        echo "Total yang harus dibayar: <strong>Rp" . number_format($totalBayar, 0, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>
