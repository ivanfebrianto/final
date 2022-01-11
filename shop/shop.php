<?php
    SESSION_START();
    include "../assets/connect.php";
    if(!isset($_SESSION['userid']))
    {
        echo "<script>alert('Silahkan login terlebih dahulu!')</script>";
        echo "<script>location='../login/template.php?page=login';</script>";
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Toko Tanaman</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body style="min-height:100px">
    <!-- Navigation-->
    <?php
        include '../assets/navbar.php';
    ?>

    <!-- Header-->
    <header class="bg-dark py-5" style="background:linear-gradient(rgba(248,249,250,255),white)!important">
        <div class="container px-4 px-lg-5 my-5" >
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder" style="color:black">Toko Plant.Ind</h1>
                <p class="text-muted mb-5">Tempat untuk belanja hasil tanaman</p>
            </div>
        </div>
    </header>
    <hr style="height:5px">

    <!-- Section-->
    <?php
        include 'belanja.php';    
    ?>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
    </footer>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>
</html>