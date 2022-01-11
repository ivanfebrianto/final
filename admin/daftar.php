<?php
    include '../assets/connect.php';

    $id = $_SESSION['userid'];

    $ambil = $conn->query("SELECT DISTINCT detailplantservices.TransactionId FROM `detailplantservices` 
                            JOIN headerplantservices ON detailplantservices.TransactionId = headerplantservices.TransactionId
                            JOIN plants ON detailplantservices.PlantId = plants.PlantId
                            JOIN ongkir ON headerplantservices.OngkirId = ongkir.OngkirId
                            JOIN user ON headerplantservices.UserId = user.UserId
                            WHERE SellerId = $id;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pembelian</title>
    <style>
        .content{
            background:white;
            border-radius:10px;
            height: 100%;
            padding: 10px;
        }
        .content table
        {
            margin-top: 30px;
        }
        .action{
            text-decoration: none;
            color: black;
            background: lightblue;
            padding: 10px 15px 10px 15px;
            border-radius: 5px;
        }
    </style>
        
</head>
<body>
    <div class=content>
        <center>
            <h1>Daftar Penjualan</h1>
        </center>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Nama Tanaman
                    </th>
                    <th>
                        Jumlah Produk
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Kota Tujuan
                    </th>
                    <th>
                        Status Pesanan
                    </th>
                    <th>
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $nomor = 1;
                while($pecah = $ambil->fetch_assoc()){
                    $transaction = $pecah['TransactionId'];
            ?>
                <tr>
                    <td>
                        <?= $nomor++; ?>
                    </td>
                    <td>
                        <?php
                            $name = $conn->query("SELECT * FROM detailplantservices
                                                    JOIN plants ON detailplantservices.PlantId = plants.PlantId
                                                    WHERE detailplantservices.TransactionId = $transaction");
                            while($pecahname = $name->fetch_assoc()):
                                echo $pecahname['PlantName'];
                                echo"<br><br>"; 
                            endwhile;
                        ?>
                    </th>
                    <td>
                        <?php
                            $jumlah = $conn->query("SELECT * FROM detailplantservices
                                                    WHERE detailplantservices.TransactionId = $transaction");
                            while($pecahjumlah = $jumlah->fetch_assoc()):
                                echo $pecahjumlah['JumlahProduk']; echo" Kg";
                                echo "<br> <br>";
                            endwhile;
                        ?>
                    </td>
                    <td>
                        <?php
                            $address = $conn->query("SELECT * FROM headerplantservices
                                                    WHERE headerplantservices.TransactionId = $transaction");
                            $pecahaddress = $address->fetch_assoc();
                            
                            echo $pecahaddress['Address']; ?>
                    </td>
                    <td>
                        <?php 
                            $kota = $conn->query("SELECT * FROM headerplantservices
                                                    JOIN ongkir ON headerplantservices.OngkirId = ongkir.OngkirId
                                                    WHERE headerplantservices.TransactionId = $transaction");
                            $pecahkota = $kota->fetch_assoc();
                        
                            echo $pecahkota['NamaKota'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $status = $conn->query("SELECT * FROM headerplantservices
                                                    WHERE headerplantservices.TransactionId = $transaction");
                            $pecahstatus = $status->fetch_assoc();
                            if($pecahstatus['Status']=="DIKIRIM"){
                        ?>
                            <span style="color:green;"> Telah Dikirim </span>
                        <?php }
                        else { 
                        ?>
                            <span style="color:red;"> Dalam Proses </span>
                        <?php } ?>
                    </td>
                    <td style="width:100px">
                        <?php
                            if($pecahstatus['Status']=="DIKIRIM"){
                        ?>
                            <div class="btn-group">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#resi<?=$transaction?>" style="pointer:cursor; border:none" class="action">
                                    <strong>Cek Resi</strong>
                                </button>
                            </div>
                            <!-- Modal -->
                            <?php
                                $resi = $conn->query("SELECT * FROM detailplantservices
                                                        WHERE TransactionId = $transaction");
                                $pecahresi = $resi->fetch_assoc();  
                            ?>
                            <div class="modal fade" id="resi<?=$transaction?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Resi Pengiriman</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?= $pecahresi['Resi'] ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            }
                            if($pecahstatus['Status']=="MEMBAYAR") { 
                        ?>
                                <div class="btn-group">
                                    <a href="index.php?halaman=kirim&&id=<?= $transaction?>" style="pointer:cursor;" class="action"><strong>Input Pengiriman</strong></a>
                                </div>
                                <div class="btn-group">
                                    <a href="batal.php?id=<?= $transaction?>" style="pointer:cursor; background:darkred; color:white" class="action"><strong>Batalkan Pesanan</strong></a>
                                </div>
                        <?php } ?>
                        <div class="btn-group">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#info<?=$transaction?>" style="pointer:cursor; border:none; background:#00a000; color:white" class="action">
                                <strong>Info Pembeli</strong>
                            </button>
                        </div>

                        <!-- Modal -->
                        <?php
                                $resi = $conn->query("SELECT * FROM headerplantservices
                                                        JOIN user ON headerplantservices.UserId = user.UserId
                                                        WHERE TransactionId = $transaction");
                                $pecahresi = $resi->fetch_assoc();  
                            ?>
                            <div class="modal fade" id="info<?=$transaction?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Informasi Pembeli</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table>
                                            <tr>
                                                <td>
                                                    Username
                                                </td>
                                                <td>
                                                    : <?=$pecahresi['UserName'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    : <?= $pecahresi['UserEmail']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Alamat
                                                </td>
                                                <td>
                                                    : <?= $pecahresi['Address'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nomor telepon
                                                </td>
                                                <td>
                                                    : <?= $pecahresi['NomorTelepon'] ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>