<?php
    include '../assets/connect.php';

    $id = $_SESSION['userid'];

    $ambil = $conn->query("SELECT DISTINCT detailplantservices.TransactionId FROM `detailplantservices` 
                            JOIN headerplantservices ON detailplantservices.TransactionId = headerplantservices.TransactionId
                            JOIN user ON headerplantservices.UserId = user.UserId
                            JOIN plants ON detailplantservices.PlantId = plants.PlantId
                            WHERE SellerId = $id;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <style>
        .content{
            background:white;
            border-radius:10px;
            height: 100%;
            padding: 10px;
        }
        .content table
        {
            margin-top: 30px;
        }
        .action{
            text-decoration: none;
            color: black;
            background: lightgreen;
            padding: 10px 15px 10px 15px;
            border-radius: 5px;
        }
    </style>
        
</head>
<body>
    <div class=content>
        <center>
            <h1>Daftar Pelanggan</h1>
        </center>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Pembelian
                    </th>
                    <th>
                        Username
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Nomor Telepon
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $nomor = 1;
                while($pecah = $ambil->fetch_assoc()){
                    $transaction = $pecah['TransactionId'];
            ?>
                <tr>
                    <td>
                        <?= $nomor++; ?>
                    </td>
                    <td>
                        <?php
                            $name = $conn->query("SELECT * FROM detailplantservices
                                                    JOIN plants ON detailplantservices.PlantId = plants.PlantId
                                                    WHERE detailplantservices.TransactionId = $transaction");
                            while($pecahname = $name->fetch_assoc()):
                                echo $pecahname['PlantName'];
                                echo"<br><br>"; 
                            endwhile;
                        ?>
                    </th>
                    <td>
                        <?php
                            $username = $conn->query("SELECT * FROM headerplantservices
                                                        JOIN user ON headerplantservices.UserId = user.UserId
                                                        WHERE headerplantservices.TransactionId = $transaction");
                            $pecahname = $username->fetch_assoc();

                        echo $pecahname['UserName'] 
                        ?>
                    </td>
                    <td>
                        <?php
                            $username = $conn->query("SELECT * FROM headerplantservices
                                                                JOIN user ON headerplantservices.UserId = user.UserId
                                                                WHERE headerplantservices.TransactionId = $transaction");
                            $pecahname = $username->fetch_assoc();
                            echo $pecahname['UserEmail'] 
                        ?>
                    </td>
                    <td>
                        <?php
                            $username = $conn->query("SELECT * FROM headerplantservices
                                                                WHERE headerplantservices.TransactionId = $transaction");
                            $pecahname = $username->fetch_assoc();
                            echo $pecahname['Address'] 
                        ?>
                    </td>
                    <td>
                        <?php
                            $username = $conn->query("SELECT * FROM headerplantservices
                                                                JOIN user ON headerplantservices.UserId = user.UserId
                                                                WHERE headerplantservices.TransactionId = $transaction");
                            $pecahname = $username->fetch_assoc();
                            echo $pecahname['NomorTelepon'] 
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>