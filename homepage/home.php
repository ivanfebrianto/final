<!DOCTYPE html>
<?php
    SESSION_START();
    include '../assets/connect.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Plant.Ind</title>
    <link href="../css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <style>
        #team 
        {
            padding: 60px 0;
            text-align: center;
            background-color: white;
            color: #145889;
        }

        #team h2 
        {
            position: relative;
            padding: 0px 0px 15px;
        }

        #team p 
        {
            font-size: 15px;
            font-style: italic;
            padding: 0px;
            margin: 25px 0px 40px;
        }

        #team h2::after 
        {
            content: "";
            border-bottom: 2px solid #fff;
            position: absolute;
            bottom: 0px;
            right: 0px;
            left: 0px;
            width: 90px;
            margin: 0 auto;
            display: block;
        }

        #team .member 
        {
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 15px 0px 15px 0px;
            -webkit-box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
                    box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
        }

        #team .member .member-info 
        {
            display: block;
            position: absolute;
            bottom: 0px;
            left: -200px;
            -webkit-transition: 0.4s;
            transition: 0.4s;
            padding: 15px 0;
            background: rgba(0, 0, 0, 0.4);
        }

        #team .member:hover .member-info 
        {
            left: 0px;
            right: 0px;
        }

        #team .member h4 
        {
            font-weight: 700;
            margin-bottom: 2px;
            font-size: 18px;
            color: #fff;
        }

        #team .member span 
        {
            font-style: italic;
            display: block;
            font-size: 13px;
        }

        #team .member .social-links 
        {
            margin-top: 15px;
        }

        #team .member .social-links a 
        {
            -webkit-transition: none;
            transition: none;
            color: #fff;
        }

        #team .member .social-links a:hover 
        {
            color: #ffc107;
        }

        #team .member .social-links i 
        {
            font-size: 18px;
            margin: 0 2px;
        }
        
        .tampil
        {
            position: relative!important;
            transform: translateY(0px)!important;
            opacity: 1!important;
        }
        .tampil1
        {
            position: relative!important;
            transform: translateY(0px)!important;
            opacity: 1!important;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../homepage/home.php#home"><img src="../assets/logo.png" width="200px"></a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../homepage/home.php#home">Beranda</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#shop">Toko</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#ensiklopedia" tabindex="-1">Ensiklopedia</a>
                    </li>
                
                    <li clas="nav-item">
                        <a class="nav-link" href="#consultation"> Konsultasi </a>
                    </li>
                
                </ul>
                
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        $banyak=0; 
                        if(!isset($_SESSION["keranjang"]))
                        {
                            $banyak=0;
                        }
                        else
                        {
                            foreach ($_SESSION["keranjang"] as $jumlah) :
                                $banyak+=$jumlah;
                            endforeach;
                        }
                ?>
                        <a href="profile.php"><img src="../assets/user.png" width="30px" style="margin-right:10px"></a>
                        <a href="../shop/keranjang.php">
                            <button class="btn btn-outline-dark" type="submit" style="margin-right:15px">
                                <i class="bi-cart-fill me-1"></i>
                                Keranjang
                                <span class="badge bg-dark text-white ms-1 rounded-pill"><?= $banyak; ?></span>
                            </button>
                        </a>
                        <a href=../login/logout.php class="btn btn-outline-dark"> Keluar </a>
                <?php    
                    }
                    else
                    {
                ?>
                        <a href="../login/template.php?page=login" class="btn btn-outline-success"> Masuk </a>        
                <?php
                    } 
                ?>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead" style="background:linear-gradient(rgba(248,249,250,255),white)" id="home">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" style="
            display: flex;
            flex-direction:column;
            max-width:100%;"
        >
            <div class="col-lg-8 align-self-end col-lg-8 align-self-baseline" style="
                width: 40%;
                display: flex;
                text-align:left;
                justify-content: center;
                flex-direction:column;
                padding-left: 100px"
            >
                <h1 class="text-black font-weight-bold" style="color:black; font-size:50px;">Tempat yang Cocok 
                                                                            <br>
                                                                            Untuk Tanamanmu</h1>
                <br><br>
                <p class="text-black-75 mb-5">Plant.ind adalah sebuah platform untuk kamu dalam mengecek kondisi, membeli, dan menjual tanaman</p>
            </div>
            <div class="col-lg-8 align-self-baseline" style="
                width: 60%;"
            >
                <img src="../assets/illustration.png" width=600px;>
            </div>
        </div>
    </header>

    <!-- slideshow-->
    <div style="margin-top:100px">
        <h2 class="text-center mt-0" id="ensiklopedia" >Ensiklopedia Tumbuhan</h2>
        <!-- Indicators -->
        <div>
            <?php
                include 'slider.php';
            ?>
        </div>
    </div>

    <!-- Produk-->
    <div class=content1 style="
        margin-top:500px;
        position: relative;" 
    id="shop">
        <h2 class="text-center mt-0">Produk Kami</h2>
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/alpukat.jpg" alt="..." />
                            <div class="portfolio-box-caption" style="background:rgba(83,195,81,0.5);">
                                <div class="project-name">Alpukat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/anggur.jpg" alt="..." />
                            <div class="portfolio-box-caption"  style="background:rgba(35,45,49,0.5);">
                                <div class="project-name">Anggur</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/apel.jpg" alt="..." />
                            <div class="portfolio-box-caption"  style="background:rgba(189,35,49,0.5);">
                                <div class="project-name">Apel</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/durian.jpg" alt="..." />
                            <div class="portfolio-box-caption"  style="background:rgba(115,98,22,0.5);">
                                <div class="project-name">Durian</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/jambu.jpg" alt="..." />
                            <div class="portfolio-box-caption"  style="background:rgba(193,48,17,0.5);">
                                <div class="project-name">Jambu Air</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../shop/shop.php" title="Project Name">
                            <img class="img-fluid" src="../assets/slider/mangga.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3"  style="background:rgba(253,231,124,0.5);">
                                <div class="project-name">Mangga</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <a class="btn btn-light btn-xl" href="../shop/shop.php" style="
                margin-top:30px;
                border: 1px solid black;
                width:150px;
                height: 43px;
                font-size: 20px"
            > 
                Lainnya 
            </a>
        </center>
    </div>

    <!-- consultasi -->
    <div id="consultation" style="margin-top:100px">
        <h2 class="text-center mt-0">Periksa Tanamanmu</h2>
        <div style="
            display:flex;
            justify-content:center;"
        >
            <div class="row g-0" style="
                border: 1px solid black;
                margin-left:10px;
                padding:20px; 
                width: 1000px;
                border-radius: 10px;
                display:flex;
                align-items:center;
                justify-content: space-around"
            >
                <div style="
                    width: 50%"
                >
                    <form action="../homepage/home.php?halaman=hasil#consultation" method="POST">
                        <select name="plant" id="plant" class="form-control" >
				    		<option value="">-- Nama Tanaman --</option>
					   		<?php
                                $plant = $conn->query("SELECT * FROM plants");
                                while($p=$plant->fetch_array()):
                            ?>
                                    <option value="<?= $p['PlantId']?>"> 
                                        <?=$p['PlantName']?> 
                                    </option>;
                            <?php 
                                endwhile;
                            ?>
						</select>
                        <label for="recipient-name" class="col-form-label"></label>
                        <select name="daun" id="daun" class="form-control" >
                            <option value="0">-- Gejala Daun --</option>
                        </select>
                        <label for="recipient-name" class="col-form-label"></label>
                        <select name="batang" id="batang" class="form-control" >
                            <option value="0">-- Gejala Batang --</option>
                        </select>
                        <label for="recipient-name" class="col-form-label"></label>
                        <button type="submit" name="submit" class="form-control" style="background:grey; color:white">Cek</button>
                    </form>
                </div>
                <?php
                    if(isset($_GET['halaman'])):
                        if($_GET['halaman']=="hasil"):
                ?>  
                            <div style="
                                width: 45%;
                                height: 80%;
                                display:flex;
                                justify-content:space-around;
                                flex-direction: column;"
                            >
                                <div style="
                                    height: 100px;
                                    background:lightgreen;
                                    border-radius: 10px;
                                    align-items:center;"
                                >
                                    <?php
                                        include '../consultation/consul.php';  
                                    ?>  
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#maintenance" style="background:#4c6602; color:white">
                                        Perawatan
                                    </button>
                                    <!-- Modal -->
                                    <?php
                                        $plant = $_POST['plant'];

                                        $ambil = $conn->query("SELECT * FROM maintenance JOIN plants ON maintenance.PlantId = plants.PlantId WHERE maintenance.PlantId = $plant;");
                                        $pecah = $ambil->fetch_assoc();
                                    ?>
                                    <div class="modal fade" id="maintenance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" width="300px">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Perawatan <?= $pecah['PlantName']?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                Tipe Pupuk
                                                            </td>
                                                            <td>
                                                                : <?=$pecah['TypeOfFertilizer']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Temperatur
                                                            </td>
                                                            <td>
                                                                : <?=$pecah['Temperature']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Kelembapan Tanah
                                                            </td>
                                                            <td>
                                                                : <?= $pecah['Humidity']?>%
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <br>
                                                    <div class="alert alert-danger">
                                                        <strong> PERINGATAN!!</strong> Semua informasi merupakan rekomendasi dari tim kami
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                                                </div>                                 
                                            </div>        
                                        </div>
                                    </div>  

                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#breed" style="background:#4c6602; color:white">
                                        Perkembangbiakan
                                    </button>
                                    <!-- Modal -->
                                    <?php
                                        $plant = $_POST['plant'];

                                        $ambil = $conn->query("SELECT * FROM breedingtype JOIN plants ON breedingtype.PlantId = plants.PlantId
                                                                JOIN breeding ON breedingtype.BreedType = breeding.BreedType WHERE plants.PlantId = $plant;");
                                        $pecah = $ambil->fetch_assoc();
                                    ?>
                                    <div class="modal fade" id="breed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" width="300px">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Tipe Perkembangbiakan dari <?= $pecah['PlantName']?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            <div class="modal-body">
                                            <table>
                                                <tr>
                                                    <td style="width:50%">
                                                        Tipe Perkembangbiakan
                                                    </td>
                                                    <td>
                                                        : <?=$pecah['Breeding']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Alat dan Bahan
                                                    </td>
                                                    <td>
                                                        : <?=$pecah['Materials']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Langkah
                                                    </td>
                                                    <td>
                                                        : <?= $pecah['Step']?>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <div class="alert alert-danger">
                                                <strong> PERINGATAN!!</strong> Semua informasi merupakan rekomendasi dari tim kami
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                                        </div>                                 
                                    </div>        
                                </div>
                            </div> 
                        </div>
                    </div>
            <?php 
                    endif;
                endif;
            ?>
            </div>
        </div> 
    </div>

    <!-- Our Team -->
    <section id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>Tim Kami</h2>
                </div>
            </div>
            <div class="row justify-content-evenly">

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="member-img">
                            <img src="../assets/ivan.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ivan Febrianto</h4>
                            <h6 style="color:white">2440032644</h6>
                            <span style="color:white">Backend Developer</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="member-img">
                            <img src="../assets/michelle.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Michelle Angela G.</h4>
                            <h6 style="color:white">2440006910</h6>
                            <span style="color:white">Frontend Developer</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="member-img">
                            <img src="../assets/alken.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Alken Richard Ho</h4>
                            <h6 style="color:white">2440006412</h6>
                            <span style="color:white">Backend Developer</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Plant.Ind</div></div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> 
    <script>
        window.addEventListener("scroll",function(){
            var header = document.querySelector(".content");
            header.classList.toggle("tampil", window.scrollY > 350)
        })
    </script> 
    <script>
        window.addEventListener("scroll",function(){
            var header = document.querySelector(".content1");
            header.classList.toggle("tampil1", window.scrollY > 900)
        })
    </script> 
    <script src="jquery.js"></script>
    <script>
        var htmlobjek;
        $(document).ready(function(){
        //apabila terjadi event onchange terhadap object <select id=propinsi>
            $("#plant").change(function(){
                var plant = $("#plant").val();
                $.ajax({
                    url: "ambildaun.php",
                    data: "plant="+plant,
                    cache: false,
                    success: function(msg){
                        //jika data sukses diambil dari server kita tampilkan
                        //di <select id=kota>
                        $("#daun").html(msg);
                    }
                });
            });

            $("#plant").change(function(){
                var plant = $("#plant").val();
                $.ajax({
                    url: "ambilbatang.php",
                    data: "plant="+plant,
                    cache: false,
                    success: function(msg){
                        //jika data sukses diambil dari server kita tampilkan
                        //di <select id=kota>
                        $("#batang").html(msg);
                    }
                });
            });
        });   
    </script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/61d7c70ff7cf527e84d0dbbe/1fope35sj';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</body>
</html>