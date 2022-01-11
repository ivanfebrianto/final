<?php
    SESSION_START();
    include "../assets/connect.php";

    if(($_SESSION["keranjang"])==NULL)
    {
        echo"<script>alert('Keranjang kosong! Silahkan kembali berbelanja');</script>";
        echo"<script>location='shop.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
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
</head>

<style type="text/css">
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
    a
    {
        text-decoration:none!important;
    }
    .lanjut{
        color:black;
        border: 1px solid black;
        border-radius: 5px;
        padding:6px 10px 6px 10px;
        margin-right: 10px;
    }
    a:hover{
        color:black!important;
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
    .action{
        display:flex;
        width:40%;
    }
    </style>
<body>    
<?php
    include '../assets/navbar.php';
?>
    <section class="konten">
        <div class="container" style="margin-top:100px">
            <center><h1>Keranjang Belanja</h1></center>
            <hr>
            <center>
                <table class="daftar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tanaman</th>
                            <th>Hagra</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                
                    <?php $nomor = 1;
                        foreach ($_SESSION['keranjang'] as $id => $jumlah) :
                        $ambil = $conn->query("SELECT * FROM plants WHERE PlantId = '$id'");
                        $pecah = $ambil->fetch_assoc();
                        $subtotal = $pecah["Price"]*$jumlah;
                    ?>
                
                    <tbody>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $pecah["PlantName"]; ?></td>
                            <td>Rp. <?= number_format($pecah["Price"]); ?></td>
                            <td><?= $jumlah; ?></td>
                            <td>Rp. <?= number_format($subtotal); ?></td>
                            <td class="beda"><a href="hapus.php?id=<?=$id?>" style="pointer:cursor;" class="delete">Hapus</a>
                                <a href="lebih.php?id=<?=$id?>" class="lebih" style="pointer:cursor;">Tambah</a></td>
                        </tr>
                    </tbody>
                    <?php endforeach ?>
                </table>
            </center>
            <div class="action">
                <a href=shop.php class="lanjut" style="pointer:cursor;">Lanjutkan Belanja </a>
                <a href=checkout.php class="checkout" style="pointer:cursor;">Checkout</a>
                <form method="POST">
                    <button name="satuan" style="
                    border:none;
                    background: red;
                    color: white;
                    padding:6px 10px 9px 10px;
                    border-radius: 5px;
                    margin-left: 10px;">Hapus Semua</button>
                </form>
                <?php
                    if(isset($_POST["satuan"]))
                    {
                        unset($_SESSION['keranjang']);
                        echo "<script>location='keranjang.php';</script>";
                    }
                ?>
            </div>    
        </div>  
    </section>       
</body>
</html>