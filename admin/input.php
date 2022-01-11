<?php
    include '../assets/connect.php';
    $id = $_GET['id'];
    $resi = $_POST['resi'];

    $conn->query("UPDATE `detailplantservices` SET `Resi` = '$resi' WHERE `detailplantservices`.`TransactionId` = $id");
    $conn->query("UPDATE `headerplantservices` SET `Status` = 'DIKIRIM' WHERE `headerplantservices`.`TransactionId` = $id");

    echo"<script>alert('Resi berhasil diinput')</script>";
    echo"<script>location='index.php?halaman=pelanggan'</script>";
?>
