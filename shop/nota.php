<?php
    include "../assets/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detail Pembelian</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    <style>
        .daftar th,
        .daftar td{
            text-align:center;
            border:1px solid grey;
            padding:10px;
        }
        table{
            display:relative;
            width:100%;
            margin-bottom:20px;
        }
        .daftar th{
            border-bottom:2px solid black;
        }
        .delete
        {
            background:red;
            color:white;
            padding: 5px 20px 5px 20px;
            border-radius:20px;
        }
        .lanjut{
            color:black;
            border: 1px solid black;
            border-radius: 5px;
            padding:5px 10px 5px 10px;
            margin-right: 10px;
        }
        .checkout{
            color:white;
            background:steelblue;
            border-radius:5px;
            padding:6px 10px 6px 10px;
        }
        .lebih{
            margin-left:10px;
        }
        .konten{
            margin-bottom:100px;
        }
        .datauser
        {
            display:flex;
            width: 100%;
            justify-content: space-between;
        }
        .data input
        {
            border:1px solid grey;
            width : 59vh;
            border-radius:4px;
            padding-left:10px;
            background:gainsboro;
            height:5vh;
        }
        .data select
        {
            width:59vh;
            height:5vh;
            border-radius:4px;
        }
        .detail{
            display: flex;
            justify-content:space-between;
            width: 90%;
            margin-bottom: 10px;
        }
        .detail div{
            width: 80%;
        }
        .pembayaran{
            border-radius:10px;
            background-color: lightblue;
            color: steelblue;
            padding: 10px;
            width : 55%;
        }
        .bayar
        {
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        .bayar .selesai
        {
            border:1px solid black;
            display:flex;
            align-items:center;
            background:lightblue;
            border-radius:5px;
            padding: 20px 25px 20px 25px;
            height: 20px;
        }
        .selesai a
        {
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <section class="konten">
        <div class="container">
            <center><h1>Detail Belanja</h1></center>
            <hr>
            <div class="detail">
                <?php
                    $nomor = 1;
                    $total=0;
                
                    $ambil = $conn->query("SELECT * FROM detailplantservices JOIN headerplantservices ON detailplantservices.TransactionId=headerplantservices.TransactionId
                                            JOIN plants ON detailplantservices.PlantId=plants.PlantId
                                            JOIN user ON headerplantservices.UserId=user.UserId
                                            JOIN ongkir ON headerplantservices.OngkirId=ongkir.OngkirId
                                            WHERE detailplantservices.TransactionId=$_GET[id]");
                    $pecah = $ambil->fetch_assoc();
                ?>
                <div>
                    <h3>Pembelian</h3>
                    <?= $pecah['TransactionDate']; ?><br>
                    Total Pembelian : Rp<?= number_format($pecah['TotalPembelian']); ?>
                </div>
                <div>
                    <h3>Pelanggan</h3>
                    <strong><?= $pecah['UserName']?></strong><br>
                    <?= $pecah['NomorTelepon']; ?> <br>
                </div>
                <div>
                    <h3>Pengiriman</h3>
                    <strong><?= $pecah['NamaKota']; ?></strong><br>
                    Ongkos Kirim : Rp<?= number_format($pecah['HargaOngkir']); ?> <br>
                    <?= $pecah['Address']; ?>
                </div>
            </div>
            <center>
                <table class="daftar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tanaman</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                
                    <?php 
                        $ambil = $conn->query("SELECT * FROM detailplantservices JOIN headerplantservices ON detailplantservices.TransactionId=headerplantservices.TransactionId
                        JOIN plants ON detailplantservices.PlantId=plants.PlantId
                        WHERE detailplantservices.TransactionId=$_GET[id]");

                        while($pecah = $ambil->fetch_assoc()):
                            $Subtotal = $pecah["Price"]*$pecah['JumlahProduk'];
                    ?>

                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $pecah["PlantName"]; ?></td>
                            <td>Rp. <?= number_format($pecah["Price"]); ?></td>
                            <td><?= $pecah["JumlahProduk"]; ?></td>
                            <td>Rp. <?= number_format($Subtotal); ?></td>
                        </tr>
                    <?php
                        $total+=$Subtotal;
                        endwhile;
                    ?>
                    <tr>
                        <td colspan=4>Total Belanja</td>
                        <td>Rp. <?= number_format($total); ?></td>
                    </tr>
                </table>
                
            </center>
            <div class="bayar">
                <div class="pembayaran">
                    <?php
                        $ambil = $conn->query("SELECT * FROM headerplantservices WHERE TransactionId=$_GET[id]");
                        $pecah = $ambil->fetch_assoc();
                    ?>
                        Silahkan melakukan pembayaran Rp<?= number_format($pecah["TotalPembelian"]) ?> ke <br>
                        <strong>BANK MANDIRI XXX-XXXXXX-XXXX a/n Alken Richard Ho </strong>
                </div>
                <a href="riwayat.php" style="text-decoration:none; color: black">
                    <div class="selesai">
                        Selesai 
                    </div>
                </a>
            </div>
            
</body>
</html>