<?php
    SESSION_START();
    include "../assets/connect.php";
    $id = $_GET["id"];
    $satuan = $_POST["satuan"];

    if(isset($_SESSION['keranjang'][$id]))
    {
        $_SESSION['keranjang'][$id]+=$satuan;
    }
    else
    {
        $_SESSION['keranjang'][$id]=$satuan;
    }
    
    echo"<script>location='shop.php';</script>";
?>