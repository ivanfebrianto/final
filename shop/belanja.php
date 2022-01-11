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
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <style>
        .banyak{
            display:flex;
            justify-content:center;
        }
        .banyak input{
            width: 50px;
            margin-bottom:10px;
            border-radius:5px;
            border:1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT * FROM plants";
        $query = mysqli_query ($conn,$sql);
    ?>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                while($hasil = mysqli_fetch_object ($query)){
            ?>
                <div class="col mb-5">
                    <div class="card h-100">
                    <!-- Product image-->
                        <img class="card-img-top" src=../assets/slider/<?= $hasil->Gambar ?> alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                            <!-- Product name-->
                                <h5 class="fw-bolder"><?= $hasil->PlantName ?></h5>
                                <!-- Product price-->
                                Rp. <?= number_format($hasil->Price)?> / Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <form action="tambah.php?id=<?= $hasil->PlantId ?>" method="POST">
                            <div class="banyak">
                                <input type="number" name="satuan" min=1 value=1>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto">Masuk Keranjang</button></div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
</body>
</html>
