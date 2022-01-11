<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Sign Up Page</title>
</head>
<body>
  <!-- Sing Up Page -->
  <div class="card bg-dark text-white" style="border-radius: 1rem;">
    <div class="card-body p-5 text-center">
      <div class="mb-md-5 mt-md-4 pb-5">
        <!-- Form -->
        <form action="includes/signup.inc.php" method="POST" onsubmit="return validate(this)">
          <h2 class="fw-bold mb-2 text-uppercase">Daftar</h2>
          <p class="text-white-50 mb-5">Masukan data diri anda!</p>

          <div class="form-outline form-white mb-4">
            <input type="text" id="name" class="form-control form-control-lg" name="username" placeholder="Enter Username" required />
            <label class="form-label" for="name">Username</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" placeholder="Enter Email" required />
            <label class="form-label" for="typeEmailX">Email</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="tel" id="phone" class="form-control form-control-lg" name="phone" placeholder="Enter Phone Number" required />
            <label class="form-label" for="name">Nomor Telepon</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="text" id="address" class="form-control form-control-lg" name="address" placeholder="Enter Address" required />
            <label class="form-label" for="address">Alamat</label>
          </div>
                
          <div class="form-outline form-white mb-4">
            <input type="password" id="id_password" class="form-control form-control-lg" name="pwd" pattern="(?=.*\d)(?=.*[\W_]).{7,}" 
            title="Minimum of 7 characters. Should have at least one special character and one number."
            placeholder="Enter Password" required />
            <label class="form-label" for="id_password">Password</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="password" id="pwdRepeat" class="form-control form-control-lg" placeholder="Confirm Password" name="pwdrepeat" required/>
            <label class="form-label" for="pwdRepeat">Ulangi Password</label>
          </div>

          <p><input type="checkbox" value="0" name="agree"> Saya menerima <u><b>syarat dan ketentuan</b></u></p>
          <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Daftar</button>
        </form>

        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == 'passworddontmatch'){
              echo "<p style='color:red;'> Password tidak sama!</p>";
            }
            else if($_GET['error'] == 'usernamealreadytaken'){
              echo "<p style='color:red;'> Username telah digunakan, Silahkan memilih username lain!</p>";
            }
          }
        ?>
      </div>
      <div>
        <p class="mb-0">Sudah memiliki akun? <a href="template.php?page=login" class="text-white-50 fw-bold">Masuk</a></p>
      </div>
    </div>
  </div>
  <script src="js/terms.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/toggle.js"></script>
</body>
</html>