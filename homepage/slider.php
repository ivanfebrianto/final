
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Bootstrap 4 Carousel - Random Slide</title>
    <meta name="description" content="Bootstrap 4 Carousel - Random Slide" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .carousel{
        width:1000px;
        max-width:100%;
      }
      .transparent{
        opacity: 0!important;
      }
      .slider
      {
        display:flex;
        align-items: center;
        justify-content: center;
      }
      .deskripsi
      {
        width: 300px;
      }
      table{
        width:400px;
      }
    </style>
  </head>
  <body>
    
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="position:absolute; left: 18%;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider">
              <img src="../assets/slider/alpukat.jpg" class="d-block w-50" alt="...">
              <div class="deskripsi">
                <center><h2>Alpukat</h2>
                <table>
                  <tr>
                    <td>Kingdom</td>
                    <td>: Plantae</td>
                  </tr>
                  <tr>
                    <td>Divisi</td>
                    <td>: Streptophyta</td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>: Magnoliopsida</td>
                  </tr>
                  <tr>
                    <td>Ordo</td>
                    <td>: Laurales</td>
                  </tr>
                  <tr>
                    <td>Famili</td>
                    <td>: Lauraceae</td>
                  </tr>
                  <tr>
                    <td>Genus</td>
                    <td>: Persea Mill.</td>
                  </tr>
                  <tr>
                    <td>Spesies</td>
                    <td>: Persea americana Mill.</td>
                  </tr>
                </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi1" style="background:#4c6602; color:white">
                  Selengkapnya
              </button>
              </center>
              </div>
          </div>
        </div>
        <!-- Modal -->
              <div class="modal fade" id="deskripsi1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Alpukat</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Alpukat (Persea americana) berasal dari Meksiko tengah-selatan, antara 7.000 dan 5.000 SM. Tapi itu beberapa milenium sebelum varietas liar ini dibudidayakan.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                          Alpukat berada dalam keluarga yang sama dengan kayu manis
                        </li>
                        <li>
                          Alpukat memiliki lebih banyak potasium daripada pisang. Alpukat memiliki 975 miligram potasium, sedangkan pisang biasanya memiliki 544 miligram.
                        </li>
                        <li>
                          Sebuah studi 2018 yang diterbitkan dalam Journal of American Heart Association menemukan bahwa makan alpukat sehari dapat membantu meningkatkan kadar LDL pada orang yang kelebihan berat badan.
                        </li>
                        <li>
                          Setengah dari alpukat berukuran rata-rata memiliki 4,6 gram serat paling banyak dari buah apa pun!
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>        

        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/anggur.jpg" class="d-block w-50" alt="...">
            <div class="deskripsi">
              <center><h2>Anggur</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Streptophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Vitales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Vitaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Vitis L.</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Vitis vinifera L.</td>
                </tr>
              </table><br>
              <button type="button" class="btn" "data-bs-toggle="modal" data-bs-target="#deskripsi2" style="background:#6d777f; color:white">
                  Selengkapnya
              </button>
              </center>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Anggur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                  Budaya anggur (atau pemeliharaan anggur) mungkin setua peradaban itu sendiri. Bukti arkeologis menunjukkan bahwa manusia mulai menanam anggur sejak 6500 SM. pada zaman Neolitikum. Pada 4000 SM, penanaman anggur meluas dari Transcaucasia ke Asia Kecil dan melalui Delta Nil Mesir.
                  <br><br>
                  Fun Facts: <br>
                  <ul>
                    <li>
                      Anggur Sebenarnya Berries
                    </li>
                    <li>
                      Anggur wine dan buah anggur berbeda
                    </li>
                    <li>
                      Ada 8.000 varietas anggur yang berbeda
                    </li>
                    <li>
                      Buah anggur lebih manis dari anggur wine
                    </li>
                  </ul>
                </div>
                <br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
              </div>                                 
            </div>        
          </div>
        </div>

        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/apel.jpg" class="d-block w-50"  alt="...">
            <div class="deskripsi">
              <center><h2>Apel</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Magnoliophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Rosales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Rosaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Malus</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: M. domestica</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi3" style="background:#ac0906; color:white">
                  Selengkapnya
              </button>
              </center> 
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Apel</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Buah apel dapat bertahan hingga 1 tahun lamanya asal penyimpanannya tepat
                        </li>
                        <li>
                        Apel berasal dari Asia Tengah
                        </li>
                        <li>
                        Apel memiliki lebih dari 8.000 varietas
                        </li>
                        <li>
                        Apel mengandung 13 gram fruktosa alami sehingga dapat membantu menghilangkan rasa kantukmu
                        </li>
                        <li>
                        Apel membutuhkan 4-5 tahun untuk memproduksi buah pertamanya
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/durian.jpg" class="d-block w-50"  alt="...">
            <div class="deskripsi">
              <center><h2>Durian</h2>     
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Streptophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Malvales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Malvaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Durio Adans.</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Durio zibethinus Murray</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi4" style="background:#7e621b; color:white">
                 Selengkapnya
              </button>
              </center> 
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Durian</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Durian diyakini berasal dari wilayah Kalimantan dan Sumatera, tumbuh liar di sepanjang semenanjung Melayu, dan banyak dibudidayakan di wilayah yang luas mulai dari India hingga New Guinea. 400 tahun yang lalu, itu diperdagangkan di seluruh Myanmar saat ini, dan secara aktif dibudidayakan terutama di Thailand dan Vietnam Selatan.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Ada 30 spesies durian yang diakui tetapi hanya 11 di antaranya yang bisa dimakan
                        </li>
                        <li>
                        Durian "tanpa duri" ada dan benar-benar alami
                        </li>
                        <li>
                        Biji durian bisa dimakan
                        </li>
                        <li>
                        Durian Merah atau durian berdaging merah adalah spesies liar yang paling populer
                        </li>
                        <li>
                        Pohon durian bisa hidup hingga 100 tahun atau lebih
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/jambu.jpg" class="d-block w-50"  alt="...">
            <div class="deskripsi">
              <center><h2>Jambu Air</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Spermatophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Dicotyledonae</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Myrtales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Myrtaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Syzygium</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Syzygium samarangense</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi5" style="background:#b73713; color:white">
                  Selengkapnya
              </button>
              </center> 
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Jambu Air</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Jambu air tumbuh secara alami dari India selatan hingga Malaysia timur. Hal ini umumnya dibudidayakan di India, Asia Tenggara, dan Indonesia.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Jambu air mengandung jumlah kalori yang rendah
                        </li>
                        <li>
                        Jambu air mengandung air hingga mencapai 91.6%
                        </li>
                        <li>
                        Buah jambu yang masih mentah sering digunakan untuk membuat acar, jeli atau sirup.
                        </li>
                        <li>
                        Pohon jambu air yang setinggi 3 - 9 meter memproduksi buah 2 kali dalam satu tahun
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/mangga.jpg" class="d-block w-50"  alt="...">
              <div class="deskripsi">
                <center><h2>Mangga</h2>
                <table>
                  <tr>
                    <td>Kingdom</td>
                    <td>: Plantae</td>
                  </tr>
                  <tr>
                    <td>Divisi</td>
                    <td>: Spermatophyta</td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>: Dicotyledonae</td>
                  </tr>
                  <tr>
                    <td>Ordo</td>
                    <td>: Sapindales</td>
                  </tr>
                  <tr>
                    <td>Famili</td>
                    <td>: Anacardiaceae</td>
                  </tr>
                  <tr>
                    <td>Genus</td>
                    <td>: Mangifera</td>
                  </tr>
                  <tr>
                    <td>Spesies</td>
                    <td>: Mangifera indica L.</td>
                  </tr>
                </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi6" style="background:#fee57b; color:black">
                  Selengkapnya
              </button>
              </center> 
              </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Mangga</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Mangga berasal dari India lebih dari 4000 tahun yang lalu dan dianggap sebagai buah suci di India.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Mangga masih mempunyai hubungan dengan pistachio dan kacang mete
                        </li>
                        <li>
                        Di India, ada cerita rakyat yang menyatakan bahwa pohon mangga dapat mengabulkan keinginan
                        </li>
                        <li>
                        Mangga menjadi buah yang paling banyak dimakan daripada buah lainnya
                        </li>
                        <li>
                        Mangga mengandung lebih banyak Vitamin  A saat matang
                        </li>
                        <li>
                        Mangga disebut sebagai raja buah karena rasanya campuran dari buah jeruk, persik, dan nanas
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/mawar.jpg" class="d-block w-50"  alt="...">
            <div class="deskripsi">
              <center><h2>Mawar</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Streptophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Sapindales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Rosaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Rosa L.</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Rosa</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi7" style="background:#d60602; color:white">
                  Selengkapnya
              </button>
              </center>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Mawar</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Menurut bukti fosil, berusia 35 juta tahun. Budidaya taman mawar dimulai sekitar 5.000 tahun yang lalu, mungkin di Cina. Selama periode Romawi, mawar ditanam secara luas di Timur Tengah. Mereka digunakan sebagai confetti pada perayaan, untuk tujuan pengobatan, dan sebagai sumber parfum.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Mawar adalah salah satu Bunga tertua
                        </li>
                        <li>
                        Mawar bisa untuk dimakan
                        </li>
                        <li>
                        Bau harum mawar digunakan dalam parfum
                        </li>
                        <li>
                        Setiap warna mawar memiliki arti yang berbeda
                        </li>
                        <li>
                        Mawar adalah Bunga Nasional Amerika Serikat
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/nipis.jpg" class="d-block w-50"  alt="...">
            <div class="deskripsi">
              <center><h2>Jeruk Nipis</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Magnoliophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Sapindales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Rutaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Citrus</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Citrus aurantifolia</td>
                </tr>
              </table>
              <br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi8" style="background:#79a919; color:white">
                  Selengkapnya
              </button>
              </center>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Jeruk Nipis</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Jeruk nipis diperkenalkan ke negara-negara Mediterania barat dengan mengembalikan Tentara Salib pada abad ke-12 dan ke-13. Christopher Columbus membawa biji jeruk, mungkin termasuk jeruk limau, ke Hindia Barat pada pelayaran keduanya pada tahun 1493, dan pohon-pohon itu segera tersebar luas di Hindia Barat, Meksiko, dan Florida.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Satu pohon jeruk nipis dapat menghasilkan lebih dari 1000 buah setiap tahunnya
                        </li>
                        <li>
                        Semakin besar daunnya semakin kecil jeruknya
                        </li>
                        <li>
                        Minyak jeruk nipis sering digunakan dalam parfum dan kosmetik
                        </li>
                        <li>
                        Jeruk nipis kaya akan potassium
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/singkong.jpg" class="d-block w-50" alt="...">
            <div class="deskripsi">
              <center><h2>Singkong</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Streptophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Magnoliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Malpighiales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Euphorbiaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Manihot Mill</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Manihot esculenta Crantz</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi9" style="background:#b48670; color:black">
                  Selengkapnya
              </button>
              </center>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Singkong</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Singkong adalah spesies umbi yang didomestikasi, tanaman umbi-umbian yang awalnya didomestikasi mungkin sekitar 8.000-10.000 tahun yang lalu, di Brasil selatan dan Bolivia timur di sepanjang barat daya perbatasan lembah Amazon
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Singkong dapat memakan waktu hingga 18 bulan untuk dipanen dan membutuhkan 8+ bulan cuaca hangat untuk tumbuh.
                        </li>
                        <li>
                        Singkong mampu mentolerir kekeringan dan tumbuh di tanah yang buruk, dan secara alami tahan terhadap hama dan penyakit tanaman.
                        </li>
                        <li>
                        Singkong dapat disimpan selama dua tahun di tanah tanpa membusuk!
                        </li>
                        <li>
                        Singkong tinggi kalori dan karbohidrat.
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
        <div class="carousel-item">
          <div class="slider">
            <img src="../assets/slider/tebu.jpg" class="d-block w-50" alt="...">
            <div class="deskripsi">
              <center><h2>Tebu</h2>
              <table>
                <tr>
                  <td>Kingdom</td>
                  <td>: Plantae</td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td>: Magnoliophyta</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: Liliopsida</td>
                </tr>
                <tr>
                  <td>Ordo</td>
                  <td>: Poales</td>
                </tr>
                <tr>
                  <td>Famili</td>
                  <td>: Poaceae</td>
                </tr>
                <tr>
                  <td>Genus</td>
                  <td>: Saacharum</td>
                </tr>
                <tr>
                  <td>Spesies</td>
                  <td>: Saccharum officinarum L.</td>
                </tr>
              </table><br>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deskripsi10" style="background:#faf7a9; color:black">
                  Selengkapnya
              </button>
              </center>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deskripsi10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Tebu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="au-btn au-btn-icon au-btn--blue au-btn--small">
                      Tebu merupakan tanaman rerumputan yang berasal dari daerah tropis Asia Tenggara (Hortus Ketiga). Batang yang tebal menyimpan energi sebagai sukrosa di dalam getah. Dari sari buah ini, gula diekstraksi dengan cara menguapkan airnya. Gula mengkristal dilaporkan 2500 tahun yang lalu di India. Sekitar abad kedelapan M, orang Arab memperkenalkan gula ke Mediterania dan dibudidayakan di Spanyol. Itu adalah salah satu tanaman awal yang dibawa ke Amerika oleh orang Spanyol.
                      <br><br>
                      Fun Facts: <br>
                      <ul>
                        <li>
                        Lebih dari 75 persen gula dunia berasal dari tebu
                        </li>
                        <li>
                        Tanaman tebu membutuhkan waktu 9 hingga 24 bulan untuk tumbuh hingga dewasa, tergantung pada iklim
                        </li>
                        <li>
                        Batang tebu mayoritasnya terbuat dari air bisa sampai tiga perempatnya. sedangkan gula dan kandungan seranya bisa sampai 16%
                        </li>
                        <li>
                        Tinggi tebu bisa mencapai 2 hingga 6 meter dan berdiameter 5 centimeter
                        </li>
                        <li>
                        Serat dari tanaman tebu dapat ditenun menjadi tikar
                        </li>
                      </ul>
                      </div>
                      <br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                    </div>                                 
                  </div>        
                </div>
              </div>
      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/chevron-left.png"/>
        <span class="sr-only" >Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/chevron-right.png"/>
        <span class="sr-only" >Next</span>
      </a>
    </div>

    <script>
      $(document).ready(function(){
        var slideNum = $('.carousel-inner .carousel-item').length;
        var randomNum = Math.floor(Math.random() * slideNum) + 1;
        var randomNumIndex = randomNum - 1;
        $('.carousel').carousel( randomNumIndex );
        $('.carousel-item').removeClass('transparent');
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107386983-1"></script>
  </body>
</html>
