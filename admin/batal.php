<?php
    include '../assets/connect.php';
    $id = $_GET['id'];

    $conn->query("UPDATE `detailplantservices` SET `SellerId` = '0' WHERE `detailplantservices`.`TransactionId` = $id");

    echo"<script>alert('Transaksi anda telah dibatalkan!')</script>";
    echo"<script>location='index.php?halaman=daftar'</script>";
?>