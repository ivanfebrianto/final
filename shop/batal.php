<?php
    include '../assets/connect.php';

    $id = $_GET['id'];

    $conn->query("DELETE FROM `headerplantservices` WHERE `headerplantservices`.`TransactionId` = $id");
    
    echo "<script> alert('Pesanan telah dibatalkan') </script>";
    echo "<script>location='riwayat.php'</script>"
?>