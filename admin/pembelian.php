<?php
    include '../assets/connect.php';

    $id = $_SESSION['userid'];

    $ambil = $conn->query("SELECT DISTINCT detailplantservices.TransactionId FROM `detailplantservices` 
                            JOIN headerplantservices ON detailplantservices.TransactionId = headerplantservices.TransactionId
                            JOIN plants ON detailplantservices.PlantId = plants.PlantId
                            JOIN ongkir ON headerplantservices.OngkirId = ongkir.OngkirId
                            WHERE NOT headerplantservices.UserId = $id AND detailplantservices.SellerId = 0 AND headerplantservices.Status = 'MEMBAYAR';");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: lightgreen;
            padding: 10px 15px 10px 15px;
            border-radius: 5px;
        }
    </style>
        
</head>
<body>
    <div class=content>
        <center>
            <h1>Daftar Pembelian</h1>
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
                        <?= $nomor++;?>
                    </td>
                    <td>
                        <?php
                            $plant = $conn->query("SELECT * FROM detailplantservices
                                                        JOIN plants ON detailplantservices.PlantId = plants.PlantId
                                                        WHERE detailplantservices.TransactionId = $transaction");
                        while($pecahplant = $plant->fetch_assoc()):
                            echo $pecahplant['PlantName']; echo " - Rp"; echo number_format($pecahplant['Price']);
                            echo "<br> <br>";
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
                        <a href="terima.php?id=<?= $pecah['TransactionId'];?>" style="pointer:cursor;" class="action"><strong>Terima Pesanan</strong></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>