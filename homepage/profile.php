<?php
  session_start();
  include '../assets/connect.php';
?>  

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style2.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>profile</title>
</head>

<body>
  <div class="container mt-3">
    <div class="row gutters">
      <?php
        if(isset($_GET['error']))
        {
          if($_GET['error']=='emptyinput')
          {
      ?>
            <small class="alert alert-danger">Tolong isi semua kolom!</small>
      <?php
          }
          elseif($_GET['error']=='none')
          {
      ?>
            <small class="alert alert-success">Akun telah dibuat!</small>
      <?php
          }
        }
      ?>

      <form action="profile.inc.php" method="POST" enctype="multipart/form-data">
      <?php
        $currentUser = $_SESSION['userid'];
        $sql = "SELECT * FROM user WHERE UserId ='$currentUser';";

        $gotResults=mysqli_query($conn,$sql);

        if($gotResults)
        {
          if(mysqli_num_rows($gotResults)>0)
          {
            while($row = mysqli_fetch_array($gotResults))
            {
      ?>
              <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="account-settings text-center">
                      <div class="user-profile">
                        <div class="user-avatar">
                          <img src="../assets/user.png" width="30px" style="margin-right:10px">
                        </div>
                        <h5 class="user-name">  <?php echo $row['UserName'];?>  </h5>
                        <h6 class="user-email"> <?php echo $row['UserEmail'];?> </h6><br>
                        <h6><a href="../shop/riwayat.php"type="button" id="submit" name="submit" class="btn btn-success"> Riwayat Belanja </a></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Profil</h6>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Username</label>
                          <input type="text" class="form-control" id="fullName" placeholder="Enter full name" name="newUsername" value="<?php echo $row['UserName']?>" disabled>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email ID" name="newEmail" value="<?php echo $row['UserEmail']?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="phone">Nomor Telepon</label>
                          <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="newPhone" value="<?php echo $row['NomorTelepon']?>">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="address">Alamat</label>
                          <input type="text" class="form-control" id="address" placeholder="Address" name="newAddress" value="<?php echo $row['UserAddress']?>" >
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $row['UserId']?>">
                    </div>
                    <br><br>
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-left">
                          <a href="home.php"><button  type="button"name="back" class="btn btn-success">Kembali</button></a>
                          <input type="submit" id="update" name="update" class="btn btn-primary" value="Perbarui">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <?php
            }
          }
        }
      ?>
    </form>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>