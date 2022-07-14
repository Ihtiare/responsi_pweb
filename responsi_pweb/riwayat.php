<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pom Bensin Mini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
    <?php include 'navbar.php'; ?>
    <br><br>
    <div align="center"><strong><font size="6" face="Courier New, Courier, mono">RIWAYAR PEMBELIAN BAHAN BAKAR</font></strong></div><br>
    <?php
        $fp = fopen("struk.txt","r");
        echo "<table width=1000px height=200px align=center border=0 bordercolor=black>";
        echo "<tr>
        <th>Tanggal Pembelian</th>
        <th>Nama</th>
        <th>Jumlah Liter</th>
        <th>Jenis Bahan Bakar</th>
        <th>Jumlah Bayar</th>
        <th>Uang Bayar</th>
        <th>Uang Kembalian</th></tr>";
        while($isi = fgets($fp,80)){
            $pisah = explode("|",$isi);   
            echo "<tr>";
                echo "<td align=center >";
                echo (date("Y-m-d"));
                echo "</td>";
                echo "<td align=center > $pisah[0] </td>";
                echo "<td align=center > $pisah[1] </td>";
                echo "<td align=center > $pisah[2] </td>";
                echo "<td align=center > $pisah[3] </td>";
                echo "<td align=center > $pisah[4] </td>";
                echo "<td align=center > $pisah[5] </td>";
            echo "</tr>";
        }
        fclose($fp);
        echo "</table>";
        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

</html>
