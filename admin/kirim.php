<?php
    include '../assets/connect.php';

    $id = $_GET['id'];

    $ambil = $conn->query("SELECT * FROM `detailplantservices` 
                            JOIN headerplantservices ON detailplantservices.TransactionId = headerplantservices.TransactionId
                            JOIN plants ON detailplantservices.PlantId = plants.PlantId
                            JOIN ongkir ON headerplantservices.OngkirId = ongkir.OngkirId
                            JOIN user ON headerplantservices.UserId = user.UserId
                            WHERE detailplantservices.TransactionId = $id;");
    $pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <center>
    <h1>Masukkan Resi</h1>
  </center>
  <table class="table table-light table-hover">
    <tr>
      <td>Nama Tanaman</td>
      <td>
        <?php
          $name = $conn->query("SELECT * FROM detailplantservices
                                  JOIN plants ON detailplantservices.PlantId = plants.PlantId
                                  WHERE detailplantservices.TransactionId = $id");
          while($pecahname = $name->fetch_assoc()):
            echo $pecahname['PlantName'];
            echo "<br><br>";
          endwhile;
        ?>
      </td>
    </tr>
    <tr>
      <td>Jumlah Produk</td>
      <td>
        <?= $pecah['JumlahProduk'] ?>
      </td>
    </tr>
    <tr>
      <td>Alamat Tujuan</td>
      <td>
        <?= $pecah['Address'] ?>
      </td>
    </tr>
    <tr>
      <td>Kota Tujuan</td>
      <td>
        <?= $pecah['NamaKota'] ?>
      </td>
    </tr>
    <tr>
      <td>Total Pembayaran</td>
      <td>
        Rp<?= number_format($pecah['TotalPembelian']) ?>
      </td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td>
        <?= $pecah['NomorTelepon'] ?>
      </td>
    </tr>
  </table>
  <form action="input.php?id=<?=$pecah['TransactionId']?>" method="POST">
    <label for="recipient-name" class="col-form-label">Resi Pengiriman</label><br>
    <input type="text" name="resi" class="form-control">
    <label for="recipient-name" class="col-form-label"></label>
    <button type="submit" class="form-control" style="background:grey; color:white; width:40%">Kirim</button>
  </form>
</body>
</html>