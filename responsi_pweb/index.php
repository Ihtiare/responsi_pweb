<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pom Bensin Mini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type='text/css'>
        .in{
            border-bottom: 100% solid #ccc;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            width:100%;
			margin-top: 10px;
        }
    </style> 
    <script language="javascript" type="text/javascript">
        function kali(){
            var y = document.getElementById("jumlah_liter").value;
            if (document.getElementById('pertamax').checked) {
                var x = 10000;
                var b = x * y;
                document.form1.jumlah_bayar.value = b;
            } else if (document.getElementById('pertalite').checked) {
                var x = 7000;
                var b = x * y;
                document.form1.jumlah_bayar.value = b;
            } else if (document.getElementById('solar').checked) {
                var x = 9000;
                var b = x * y;
                document.form1.jumlah_bayar.value = b;
            }
        }

        function bayar(){
            var x = document.getElementById("jumlah_bayar").value;
            var y = document.getElementById("uang_bayar").value;
            var b = y - x ;
            document.form1.kembalian.value = b;
        }
    </script>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    
    <br><br>
    <div align="center"><strong><font size="6" face="Courier New, Courier, mono">PEMBELIAN BAHAN BAKAR MINYAK</font></strong></div>
        <br><br>
        <form name="form1" method="post" action="tulis.php">
            <table width="60%" border="0" align="center">
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input name="nama" type="text" id="nama" class="in"></td>
                </tr>
                <tr>
                    <td><br>Jumlah Liter</td>
                    <td><input name="jumlah_liter" type="text" id="jumlah_liter" class="in"></td>
                </tr>  
                <tr>
                    <td><br>Jenis Bahan Bakar </td>
                    <td> <br>
                        <input type="radio" id="pertamax" name="bbm" value="pertamax" onclick="javascript:kali()">
                        <label for="Pertamax">Pertamax</label>
                        <input type="radio" id="pertalite" name="bbm" value="pertalite" onclick="javascript:kali()">
                        <label for="Pertalite">Pertalite</label>
                        <input type="radio" id="solar" name="bbm" value="solar" onclick="javascript:kali()">
                        <label for="Solar">Solar</label>
                    </td>
                </tr>
                <tr>
                    <td><br>Jumlah Bayar</td>
                    <td><input name="jumlah_bayar" type="text" id="jumlah_bayar" class="in"></td>
                </tr>  
                <tr>
                    <td><br>Uang Bayar</td>
                    <td><input name="uang_bayar" type="text" id="uang_bayar" class="in" > <input type="button" value="Bayar" onclick="javascript:bayar();"></td>
                </tr>
                <tr>
                    <td><br>Uang Kembalian</td>
                    <td><input type="text" name="kembalian" id="kembalian" class="in"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                    <br>
                    <input type="submit" name="Submit" value="Kirim" class="btn btn-info"></input>
                    <input type="reset" name="Submit2" value="Batal" class="btn btn-danger"></input>
                    </td>
                </tr>
            </table>
        </form>
        <div style="margin-left: 300px;"><strong><a href="riwayat.php" style="text-decoration:none">Lihat Riwayat Pembelian</a></strong></div>
        <br><br>
        <div class="infobbm" style="margin-right: 150px; text-align: right;"><h5>Info Harga Bahan Bakar</h5> 
            Pertamax : Rp.10.000 <br>
            Pertalite : Rp.7.000 <br>
            Solar : Rp.9.000 <br>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>