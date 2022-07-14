<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pom Bensin Mini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <?php include 'navbar.php' ?><br><br><br><br><br><br>

        <div align="center"><strong><font size="6" face="Courier New, Courier, mono">PEMBELIAN BAHAN BAKAR BERHASIL</font></strong></div><br><br><br><br>
        <div style="margin-left: 300px;"><strong><font size="4" face="Courier New, Courier, mono"><a href="riwayat.php" style="text-decoration:none">Lihat Riwayat Pembelian</a></font></strong></div>
        <div style="margin-left: 300px;"><strong><font size="4" face="Courier New, Courier, mono"><a href="index.php" style="text-decoration:none">Kembali Menginput Data</a></font></strong></div>
        <?php
        $nama = $_POST['nama'];
        $jumlah_liter = $_POST['jumlah_liter'];
        $bbm = $_POST['bbm'];
        $jumlah_bayar = $_POST['jumlah_bayar'];
        $uang_bayar = $_POST['uang_bayar'];
        $kembalian = $_POST['kembalian'];
        $fp = fopen("struk.txt", "a+");
        fputs($fp, "$nama|$jumlah_liter|$bbm|$jumlah_bayar|$uang_bayar|$kembalian\n");
        fclose($fp);
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>

