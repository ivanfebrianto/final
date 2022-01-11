<?php
    include 'connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    <style>
        .bd-placeholder-img 
        {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
   
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../homepage/home.php"><img src="../assets/logo.png" width=200px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../homepage/home.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../shop/shop.php">Toko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../homepage/home.php#ensiklopedia" tabindex="-1">Ensiklopedia</a>
                    </li>
                    <li clas="nav-item">
                            <a class="nav-link" href="../homepage/home.php#consultation"> Konsultasi </a>
                    </li>
                </ul>
                <a href="../homepage/profile.php"><img src="../assets/user.png" width="30px" style="margin-right:10px"></a>
                <a href="../addmin/index.php?halaman=pembelian" class="btn btn-outline-dark" style="margin-right:10px">Jadi Penjual</a>
                
                <?php
                    $banyak=0; 
                    if(!isset($_SESSION["keranjang"]))
                    {
                        $banyak=0;
                    }
                    else
                    {
                        foreach ($_SESSION["keranjang"] as $jumlah) :
                            $banyak+=$jumlah;
                        endforeach;
                    }
                ?>
                    <a href="keranjang.php">
                        <button class="btn btn-outline-dark" type="submit" style="margin-right:15px">
                            <i class="bi-cart-fill me-1"></i>
                            Keranjang
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?= $banyak; ?></span>
                        </button>
                    </a>
                    <?php
                        if(isset($_SESSION['userid']))
                        {
                    ?>
                            <a href=../login/logout.php class="btn btn-outline-dark"> 
                                Keluar
                            </a>
                    <?php    
                        }
                        else
                        {
                    ?>
                            <a href="../login/template.php?page=login" class="btn btn-outline-success"> 
                                Masuk 
                            </a>
                    <?php 
                        } 
                    ?>
            </div>
        </div>
    </nav>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>      
</body>
</html>