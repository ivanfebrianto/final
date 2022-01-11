<?php
    SESSION_START();
    include "../assets/connect.php";
    $id_pelanggan = $_GET['id'];
    $ambil = $conn->query("SELECT * FROM detailplantservices WHERE TransactionId = '$id_pelanggan'");
    $pecah = $ambil->fetch_assoc();
    
    if(isset($_POST['kirim']))
    {
        $direktori = "../pembayaran/";
        $file_name = $_FILES['bukti']['name'];
        move_uploaded_file($_FILES['bukti']['tmp_name'],$direktori.$file_name);
        $pelanggan = $id_pelanggan;

        $conn->query("UPDATE headerplantservices SET Bukti='$file_name' WHERE TransactionId = '$pelanggan'");

        $conn->query("UPDATE headerplantservices SET Status='MENUNGGU KONFIRMASI' WHERE TransactionId = '$pelanggan'");

        echo"<script> location = 'riwayat.php'</script>";
    }
?>