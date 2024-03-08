<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST["kirim"])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $aksi = $_POST["aksi"];
        switch ($aksi) {
            case "tambah":
                $output = $bil1 + $bil2;
                break;
            case "kurang":
                $output = $bil1 - $bil2;
                break;
            case "kali":
                $output = $bil1 * $bil2;
                break;
            case "bagi":
                $output = $bil1 / $bil2;
                break;
        }
    }
    ?>
    <form method="POST">
        <div class="kal">
            <h1>Kalkulator Sederhana</h1>
            <hr>
            <p>Bilangan Pertama :</p>
            <input type="number" value="0" name="bil1" class="FormInput">
            <p>Bilangan Kedua :</p>
            <input type="number" value="0" name="bil2" class="FormInput">
            <p>Aksi</p>
            <select name="aksi" class="FormSelect">
                <option value="tambah">Tambah (+)</option>
                <option value="kurang">Kurang (-)</option>
                <option value="kali">Kali (*)</option>
                <option value="bagi">Bagi (/)</option>
            </select>
            <button name="kirim" type="submit">Hitung</button>

            <?php
            if (empty($output)) {
                $hasil = 0;
            } else {
                $hasil = $output;
            }
            ?>
            <input type="number" value="<?= $hasil ?>" class="FormHasil" readonly>
            <button><a href="index.html">Back to Menu</a></button>
        </div>
    </form>
</body>

</html>