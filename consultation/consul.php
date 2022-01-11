<?php
    include '../assets/connect.php';

    if(isset($_POST['submit']))
    {
        $id_daun = $_POST['daun'];
        $id_batang = $_POST['batang'];
    
        if($id_daun == 0)
        {
            if($id_batang == 0)
            {
                echo"<script> alert('Silahkan memilih gejala tanaman anda') </script>";
                echo"<script>location='../homepage/home.php#consultation'</script>";
            }
            else
            {
                $ambil = $conn->query("SELECT * FROM `condition` JOIN suggestion ON `condition`.`SymptomId` = suggestion.SymptomId WHERE suggestion.SymptomId = $id_batang;");
                $pecah = $ambil->fetch_assoc();
                $hasil = $pecah['Suggestion'];
                echo "<center>";
                echo "<b>";
                echo "TANAMAN ANDA SEDANG "; echo $pecah['Status'];
                echo "</b>";
                echo "<br>";
                echo "<br>";
                echo $hasil;
                echo "</center>";
            }
        }
        else 
        {
            if($id_batang=0)
            {
                $ambil = $conn->query("SELECT * FROM `condition` JOIN suggestion ON `condition`.`SymptomId` = suggestion.SymptomId WHERE suggestion.SymptomId = $id_daun;");
                $pecah = $ambil->fetch_assoc();
                $hasil = $pecah['Suggestion'];
                echo "<center>";
                echo "<b>";
                echo "TANAMAN ANDA SEDANG "; echo $pecah['Status'];
                echo "</b>";
                echo "<br>";
                echo "<br>";
                echo $hasil;
                echo "</center>";
            }
            else 
            {
                $ambil = $conn->query("SELECT * FROM `condition` JOIN suggestion ON `condition`.`SymptomId` = suggestion.SymptomId WHERE suggestion.SymptomId = $id_daun OR suggestion.SymptomId = $id_batang;");
                $pecah = $ambil->fetch_assoc();
                $hasil = $pecah['Suggestion'];
                echo "<center>";
                echo "<b>";
                echo "TANAMAN ANDA SEDANG "; echo $pecah['Status'];
                echo "</b>";
                echo "<br>";
                echo "<br>";
                echo $pecah['Suggestion'];
                echo "</center>";
            }
        }
    }
?>