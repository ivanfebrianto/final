<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ajax CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!-- Login Page -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../homepage/home.php"><img src="../assets/logo.png" width=200px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../homepage/home.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../homepage/home.php#shop">Toko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../homepage/home.php#ensiklopedia" tabindex="-1">Ensiklopedia</a>
                    </li>
                    <li clas="nav-item">
                            <a class="nav-link" href="../homepage/home.php#consultation"> Konsultasi </a>
                        </li>
                </ul>
                <a href="profile.php"><img src="../assets/user.png" width="30px" style="margin-right:10px"></a>
            </div>
        </div>
    </nav>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>  
  <section style="margin-top: 50px;height:100%!important;background:linear-gradient(rgba(248,249,250,255),white)">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <?php
                if(isset($_GET['page']))
                {
                    if($_GET['page']=="login")
                    {
                        include 'login.php';
                    }
                }
                else
                {
                    include 'signup.php';
                }
            ?>
        </div>
      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/toggle.js"></script>
  <script>
      var hapus = document.getElementById("body");
      hapus.style.removeProperty('height');
  </script>
  
</body>
</html>