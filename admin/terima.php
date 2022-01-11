<?php
    SESSION_START();
    include '../assets/connect.php';

    $id = $_GET['id'];
    $seller = $_SESSION['userid'];

    $conn->query("UPDATE `detailplantservices` SET `SellerId` = '$seller' WHERE `detailplantservices`.`TransactionId` = $id");

    echo"<script>alert('Transaksi telah ditambahkan ke daftar penjualan anda')</script>";
    echo"<script>location='index.php?halaman=pembelian'</script>";
?>