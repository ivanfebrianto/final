<?php
    SESSION_START();
    include '../assets/connect.php';

    $pelanggan = $_SESSION['userid'];
    $ambil = $conn->query("SELECT * FROM user WHERE UserId = '$pelanggan'");
    $pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Riwayat</title>

    <!-- Fontfaces CSS-->
    <link href="../bootstrap/css/font-face.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../bootstrap/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../bootstrap/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../bootstrap/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../bootstrap/css/theme.css" rel="stylesheet" media="all">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="animsition">
    <br>
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <a href="../homepage/home.php"><img src="https://img.icons8.com/ios-glyphs/24/000000/circled-left-2.png"/></a>
        <h3 class="title-5 m-b-35"><center>data table <?= $pecah['UserName'] ?></center></h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>tanggal</th>
                        <th>status</th>
                        <th>total</th>
                        <th style="width:320px">opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        $id_pelanggan = $_SESSION['userid'];
                        $ambil = $conn->query("SELECT DISTINCT headerplantservices.TransactionId,TransactionDate,Status,Resi,TotalPembelian FROM headerplantservices 
                                                JOIN user ON headerplantservices.UserId = user.UserId
                                                JOIN detailplantservices ON headerplantservices.TransactionId = detailplantservices.TransactionId
                                                WHERE headerplantservices.UserId = $id_pelanggan;");
                        while ($pecah = $ambil->fetch_assoc()){
                            $_SESSION['pelanggan'] = $pecah['TransactionId'];
                    ?>

                    <tr class="tr-shadow">
                        <td><?= $nomor ?></td>
                        <td>
                            <span class="block-email"><?= $pecah['TransactionDate'] ?></span>
                        </td>
                        <td>
                            <?php
                                if($pecah['Status']=="MEMBAYAR"){
                            ?>
                                    <span class="status--success" style="color:green"> <?= $pecah['Status'] ?> </span>
                            <?php
                                }
                                elseif($pecah['Status']=="DIKIRIM"){
                            ?>
                                    <span class="status--success" style="color:green"> <?= $pecah['Status'] ?> </span><br>
                                    <?= $pecah['Resi'] ?>
                            <?php
                                }
                                else {
                            ?>
                                <span class="status--denied"> <?= $pecah['Status'] ?> </span>
                            <?php   
                                }
                            ?>
                        </td>
                        <td>Rp <?= number_format($pecah['TotalPembelian']) ?></td>
                        <td>
                            <a href = "nota.php?id=<?=$_SESSION['pelanggan']?>"class="au-btn au-btn-icon au-btn--green au-btn--small" style="background:darkcyan; text-decoration: none">
                                Nota
                            </a>
                            <?php
                                if($pecah['Status']=="MENUNGGU KONFIRMASI" || $pecah['Status']=="PENDING" || $pecah['Status']=="DITOLAK")
                                {
                            ?>
                                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$_SESSION['pelanggan']?>" style="color:white">
                                        Pembayaran
                                    </a>
                                    <form method="POST" enctype="multipart/form-data" action="proses.php?id=<?=$_SESSION['pelanggan']?>">
                                        <div class="modal fade" id="staticBackdrop<?=$_SESSION['pelanggan']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Pembayaran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                                            Total Tagihan Anda <?= number_format($pecah['TotalPembelian']);?>
                                                        </div>
                                                        <br>
                                                    </div>
                                        
                                                    <input type="file" name="bukti" style="margin-left:18px">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <input type="submit" class="btn btn-primary" name="kirim" value="Upload"></input>
                                                    </div>
                                                </div>
                                            </div>        
                                        </div>
                                    </form>
                            <?php
                                }
                                if($pecah['Status']=="MEMBAYAR")
                                {
                            ?>
                                    <a href="batal.php?id=<?=$pecah['TransactionId']?>" class="au-btn au-btn-icon au-btn--green au-btn--small" style="background:darkred; text-decoration: none">Batal</a>
                            <?php
                                }
                            ?>      
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>

    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Jquery JS-->
    <script src="../bootstrap/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../bootstrap/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../bootstrap/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../bootstrap/vendor/slick/slick.min.js">
    </script>
    <script src="../bootstrap/vendor/wow/wow.min.js"></script>
    <script src="../bootstrap/vendor/animsition/animsition.min.js"></script>
    <script src="../bootstrap/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../bootstrap/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../bootstrap/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../bootstrap/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../bootstrap/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../bootstrap/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../bootstrap/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../bootstrap/js/main.js"></script>

</body>

</html>
<!-- end document-->
