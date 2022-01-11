<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <title>Masuk</title>
</head>

<body>
  <div class="card bg-dark text-white" style="border-radius: 1rem;">
    <div class="card-body p-5 text-center">
      <div class="mb-md-5 mt-md-4 pb-5">  

        <form action="includes/login.inc.php" method="POST">
          <h2 class="fw-bold mb-2 text-uppercase">Masuk</h2>
          <p class="text-white-50 mb-5">Masukan data diri anda!</p>
          <div class="form-outline form-white mb-4">
            <input type="text" id="name" class="form-control form-control-lg" name="username" placeholder="Enter Username" required />
            <label class="form-label" for="name">Username/Email</label>
          </div>

          <div class="form-outline form-white mb-4">
            <input type="password" id="id_password" class="form-control form-control-lg" name="pwd" pattern="(?=.*\d)(?=.*[\W_]).{7,}" placeholder="Minimum of 7 characters. Should have at least one special character and one number." required />
            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            <label class="form-label" for="id_password">Password</label>
          </div>

          <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Masuk</button>
        </form>
            
        <?php
          if(isset($_GET['error']))
          {
            if($_GET['error'] == 'wronglogin')
            {
              echo "<p style='color:red;'> Email atau Password Salah!</p>";
            }
          }
        ?>

      </div>
      <div>
        <p class="mb-0">Belum memiliki akun? <a href="template.php" class="text-white-50 fw-bold">Daftar</a></p>
      </div>
    </div>
  </div> 
</body>
</html>