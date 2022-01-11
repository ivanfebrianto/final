<?php
    SESSION_START();
    include "../assets/connect.php";
    $id = $_SESSION['userid'];
    if(!isset($_SESSION['userid']))
    {
        echo "<script>location='../homepage/home.php';</script>";
    }
    $result = mysqli_query($conn, "SELECT * FROM user WHERE UserId = '$id'");
    $hasil = mysqli_fetch_row($result);
    if(empty($_SESSION['keranjang']))
    {
        echo"<script>alert('Keranjang kosong! Silahkan kembali berbelanja');</script>";
        echo"<script>location='shop.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
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
        .lanjut{
            color:black;
            border: 1px solid black;
            border-radius: 5px;
            padding:5px 10px 5px 10px;
            margin-right: 10px;
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
        .datauser
        {
            display:flex;
            width: 100%;
            justify-content: space-between;
        }
        .data input
        {
            border:1px solid grey;
            width : 59vh;
            border-radius:4px;
            padding-left:10px;
            background:gainsboro;
            height:5vh;
        }
        .data select
        {
            width:59vh;
            height:5vh;
            border-radius:4px;
        }
        .alamat
        {
            margin-top:15px;
        }
        textarea
        {
            padding-left:10px;
        }
    </style>
</head>
<body>
<?php
    include '../assets/navbar.php';
?>
    <section class="konten">
        <div class="container">
            <center><h1>Detail Belanja</h1></center>
            <hr>
            <center>
                <table class="daftar">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tanaman</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                
                    <?php 
                        $nomor = 1;
                        $total=0;
                        foreach ($_SESSION["keranjang"] as $id => $jumlah) :
                    
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
                        </tr>
                    </tbody>

                    <?php 
                        $total+=$subtotal;
                        endforeach ?>

                    <tr>
                        <td colspan=4>Total Belanja</td>
                        <td>Rp. <?= number_format($total); ?></td>
                    </tr>

                </table>
            </center>
            <form method="POST">
                <div class="datauser">
                    <div class="data">
                        <input type="text" readonly value="<?= $hasil[1];?>">                    
                    </div>
                    <div class="data">
                        <input type="text" readonly value="<?= $hasil[4]; ?>">
                    </div>
                    <div class="data">
                        <select name="ongkir">
                            <option value="0">Pilih Ongkos Kirim</option>
                                <?php
                                    $ongkir = mysqli_query($conn, "SELECT * FROM ongkir");
                                    while($pecah = $ongkir->fetch_assoc()):
                                ?>
                                <option value="<?= $pecah['OngkirId']?>"><?= $pecah['NamaKota']?> - Rp. 
                                <?= number_format($pecah['HargaOngkir'])?></option>    
                            <?php endwhile ?>
                        </select>
                    </div>
                </div>
                <div class="alamat">
                    <strong>Alamat Lengkap Pengiriman</strong> <br>
                        <select name="alamatlama" style="width:300px">
                            <option value="1">
                                <?= $hasil[3] ?>
                            </option>
                            <option value="2">
                                Alamat baru
                            </option>
                        </select>
                        <br><br>
                        <textarea name="alamatbaru" cols="174%" rows="2" placeholder="Masukkan alamat tujuan pengiriman baru"></textarea>
                </div>
                <a href="shop.php?halaman=keranjang" style="
                text-decoration:none;
                color: black;
                padding: 8px 15px 8px 15px;
                border: 1px solid black;
                border-radius: 4px">Kembali</a>
                <button class="checkout" name="checkout" style="margin-top : 20px; border: 1px solid black">Checkout</button>
            </form><br>
            
            <?php
                if(isset($_POST["checkout"]))
                {
                    if($_POST["ongkir"]==0)
                    {
            ?>
                        <script>alert('Silahkan memilih ongkir terlebih dahulu!!')</script>
                        <script>location='checkout.php'</script>
                    <?php
                        exit();
                    }
                    else {
                        if($_POST["alamatlama"]==1)
                        {
                            if($_POST["alamatbaru"]==NULL){
                                    $alamat = $hasil['3'];
                                    $UserId = $hasil['0'];
                                    $TransactionDate = date("Y-m-d");
                                    $OngkirId = $_POST["ongkir"];
        
                                    $ambil = mysqli_query($conn, "SELECT * FROM ongkir WHERE OngkirId = '$OngkirId'");
                                    $arrayongkir = mysqli_fetch_assoc($ambil);
                                    $tarif = $arrayongkir['HargaOngkir'];
        
                                    $TotalPembelian = $total+$tarif;
        
                                    mysqli_query($conn, "INSERT INTO headerplantservices (
                                        UserId, OngkirId, TransactionDate, Address, TotalPembelian)
                                        VALUES
                                        ('$UserId','$OngkirId','$TransactionDate','$alamat','$TotalPembelian')"
                                        );
                                    
                                    $transaction = mysqli_insert_id($conn);
        
                                    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
                                    {
                                        $conn->query("INSERT INTO DetailPlantServices (
                                            TransactionId, PlantId, JumlahProduk)
                                            VALUES
                                            ('$transaction','$id_produk','$jumlah')");
                                    }
        
                                    unset($_SESSION['keranjang']);
        
                                    echo "<script>alert('Pembelian Berhasil')</script>";
                                    echo "<script>location='nota.php?id=$transaction';</script>";
                            }
                            else{
                                echo "<script>alert('Alamat tidak sah!!')</script>";
                                echo "<script>location:'checkout.php'</script>";
                            }
                        }
                        elseif($_POST["alamatlama"]==2)
                        {
                            if($_POST['alamatbaru']==NULL)
                            {
                                echo "<script>alert('Silahkan masukkan alamat baru!!')</script>";
                                echo "<script>location:'checkout.php'</script>";
                            }
                            else {
                                $alamat = $_POST["alamatbaru"];
                                $UserId = $hasil['0'];
                                $TransactionDate = date("Y-m-d");
                                $OngkirId = $_POST["ongkir"];

                                $ambil = mysqli_query($conn, "SELECT * FROM ongkir WHERE OngkirId = '$OngkirId'");
                                $arrayongkir = mysqli_fetch_assoc($ambil);
                                $tarif = $arrayongkir['HargaOngkir'];

                                $TotalPembelian = $total+$tarif;

                                mysqli_query($conn, "INSERT INTO headerplantservices (
                                    UserId, OngkirId, TransactionDate, Address, TotalPembelian)
                                    VALUES
                                    ('$UserId','$OngkirId','$TransactionDate','$alamat','$TotalPembelian')"
                                    );
                                
                                $transaction = mysqli_insert_id($conn);

                                foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
                                {
                                    mysqli_query($conn, "INSERT INTO detailplantservices (
                                        TransactionId, PlantId, JumlahProduk)
                                        VALUES
                                        ('$transaction','$id_produk','$jumlah')"
                                        );
                                }

                                unset($_SESSION['keranjang']);

                                echo "<script>alert('Pembelian Berhasil')</script>";
                                echo "<script>location='nota.php?id=$transaction';</script>";
                            }
                        }
                    }
                    
                }
            ?>
        </div>
    </section>
</body>
</html>