<?php
  session_start();
  require_once '../assets/connect.php';

  if(isset($_POST['update']))
  {
    $newname =  $_POST['newUsername'];
    $newemail =  $_POST['newEmail'];
    $newphone =  $_POST['newPhone'];
    $newaddress = $_POST['newAddress'];
    $newid = $_POST['id'];

   
    if(!empty($newname)&&!empty($newemail)&&!empty($newphone)&&!empty($newdob)&&!empty($newaddress))
      {
        $sql = "UPDATE user SET UserName ='$newname',UserEmail = '$newemail',NomorTelepon = '$newphone',UserAddress='$newaddress' WHERE UserId = '$newid';";
        if (mysqli_query($conn, $sql)) 
        {
          header("Location: profile.php?error=none");
          exit();
        } 
        else 
        {
          echo "Error updating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
      }
      else
      {
       header("Location: profile.php?error=emptyinput");
       exit();
      }
  }
?>