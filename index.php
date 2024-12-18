<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>AURORA STMKG</title>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="aurora.ico" type="image/x-icon">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body id="top">

     <!--navbar-->
     <nav class="navbar sticky-top navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand me-auto display-5 active" href="https://www.instagram.com/aurora.stmkg?igsh=MW1mODVnOGhhNzh0Mg==" target="_blank"><img src="aurora.png" alt="" width="70" height="70" class="d-inline-block "> AURORA <b>STMKG</b></a>
        <div
          class="offcanvas offcanvas-end"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title " id="offcanvasNavbarLabel">AURORA STMKG</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <div class="mobile-datetime d-lg-none mb-3">
              <div class="time h5">
                <span id="currentTime"><?php echo date('H:i:s'); ?></span>
              </div>
              <div class="date">
                <?php echo date('l, d F Y'); ?>
              </div>
            </div>
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#top">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#sensor">Sensor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 dropdown-item" href="#grafik">Grafik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2 dropdown-item" href="#anggota">Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#dokumentasi">Dokumentasi</a>
              </li></ul>
              </li>
            </ul>
          </div>
        </div>
        <button
          class="navbar-toggler pe-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-none d-lg-flex justify-content-end">
          <div class="col-auto">
            <div class="time h5">
              <span id="currentTime2"><?php echo date('H:i:s'); ?></span>
            </div>
            <div class="date">
              <?php echo date('l, d F Y'); ?>
            </div>
          </div>
        </div>
        </button>
      </div>
    </nav>
<!--end navbar-->

    <!-- Hero Section -->
    <div class="position-relative">
        <!-- Background Carousel -->
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-section" style="background-image: url('foto/projek 1.jpg');"></div>
                </div>
                <div class="carousel-item">
                    <div class="hero-section" style="background-image: url('foto/projek 2.jpg');"></div>
                </div>
                <div class="carousel-item">
                    <div class="hero-section" style="background-image: url('foto/projek 3.jpg');"></div>
                </div>
            </div>
        </div>

        <!-- Static Content Overlay -->
        <div class="hero-overlay"></div>
        <div class="container hero-content position-absolute top-50 start-50 translate-middle w-100">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center text-white">
                    <h1 class="hero-title mb-4">Welcome to Monitoring Lab</h1>
                    <p class="hero-subtitle mb-4">Your trusted platform for monitoring laboratory equipment and environments</p>
                    <div class="hero-buttons">
                        <a href="#sensor" class="btn btn-success btn-lg me-3">View Sensors</a>
                        <a href="#grafik" class="btn btn-outline-light btn-lg">Live Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sensor-->
    <div class="pt-5 pb-5 text-white"  style="text-align: center;" id="sensor" >
      <h3 class="display-4 ">Sensor Yang Digunakan</h3>
      <p>Beberapa Sensor Yang Kami Gunakan Dalam Projek Kami</p>
    </div>
   
</div>
<div class="container" style="width: 50%; height:auto; text-align: center;">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh7FTK0RCMiMrBNrnh19Clw1AtqnYTH9Vbm-hK4e0lEVcwKkBpzK0Al0kFypdSzfpGphlkS1e_N7qKouM9pKzQeG744OCyoEyQUmp5sgK3lfP0SIfjxOHAzspNfH8tGry-qsGrFcW1Wbg0tnXrzKs3SJZkg6XVqy2ulMZ5ZVVPI5uPKKCUOCTC6bkKa/s500/ultrasonic.jpg" class="card-img-top" alt="...">
      <div class="card-body style="width: 15rem;"">
        <h5 class="card-title">Sensor Ultrasonik HC-SR04</h5>
        <p class="card-text">Sensor Cahaya LDR (Light Dependent Resistor) adalah salah satu jenis resistor yang dapat mengalami perubahan resistansinya apabila mengalami perubahan penerimaan cahaya. 
          Modul sensor cahaya bekerja manghasilkan output yang mendeteksi nilai intensitas cahaya.</p>
        <a href="https://www.arduinoindonesia.id/2022/10/pengertian-dan-cara-kerja-sensor-ultrasonik-HC-SR04.html?m=1" target="_blank" class="btn btn-secondary">Selengkapnya...</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjzzdpvwDMx_udNgfUHIxj8KhbB215Jzg1aQPGb3lgoapVt4wqY00t-Th2rIW8XqHNQ1IOwoeEdDCJNOY96XhWVv1I--SD72e4bfwr76-7OgupH09kV8NsL-YnzKLzK8t_qVR2RE8ib4LeFs3f4ESJ4usE3bDjO10zhDysX-Oz7pF_GSiWYrXRw6SoE/s500/LDR.jpg" class="card-img-top" alt="...">
      <div class="card-body style="width: 15rem;"">
        <h5 class="card-title">Sensor Cahaya LDR</h5>
        <p class="card-text">Sensor Cahaya LDR (Light Dependent Resistor) adalah salah satu jenis resistor yang dapat mengalami perubahan resistansinya apabila mengalami perubahan penerimaan cahaya. 
          Modul sensor cahaya bekerja manghasilkan output yang mendeteksi nilai intensitas cahaya.</p>
        <a href="https://www.arduinoindonesia.id/2022/11/sensor-cahaya-ldr-pengertian-dan-cara-kerjanya.html?m=1" target="_blank" class="btn btn-secondary">Selengkapnya...</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

    <!-- tampilan grafik -->
    <div class="pt-5 pb-5 text-white" style="text-align: center;" id="grafik">
        <h3 class="display-4">Grafik Sensor Secara Realtime</h3>
        <p>Data yang ditampilkan adalah Per-15 detik</p>
    </div>
    <div class="graphs-container">
        <div class="row justify-content-center">
            <!-- Chart 1 -->
            <div class="col-md-6">
                <div class="graph-panel">
                    <h4>Sensor Jarak</h4>
                    <iframe height="260" style="border: 1px solid #cccccc;" 
                    src="https://thingspeak.com/channels/2753497/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                </div>
            </div>
            <!-- Chart 2 -->
            <div class="col-md-6">
                <div class="graph-panel">
                    <h4>Sensor Intensitas Cahaya</h4>
                    <iframe height="260" style="border: 1px solid #cccccc;" 
                    src="https://thingspeak.com/channels/2753497/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Chart 3 -->
            <div class="col-md-6">
                <div class="graph-panel">
                    <h4>Sensor Suhu</h4>
                    <iframe height="260" style="border: 1px solid #cccccc;" 
                    src="https://thingspeak.com/channels/2753497/widgets/973000"></iframe>
                </div>
            </div>
            <!-- Chart 4 -->
            <div class="col-md-6">
                <div class="graph-panel">
                    <h4>Sensor</h4>
                    <iframe height="260" style="border: 1px solid #cccccc;" 
                    src="https://thingspeak.com/channels/2753497/widgets/973001"></iframe>
                </div>
            </div>
        </div>
    </div>

    <section class="product" id="anggota">
    <div class="container-fluid About pt-5 pb-5" >
      <div class="container text-center"> 
        <h3 class="display-4 text-white" id="anggota">Anggota Kelompok</h3><br>
        <div class="row mx-auto gap-5 justify-content-center ">
          <!--anggota 1-->
      <div class="card" style="width: 15rem;">
        <img src="foto/rosid.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title" > Faqih Rosiddin</h5>
          <p class="card-text">UI Design</p>
          <a href="#" class="btn btn-success" data-bs-target="#Anggota1" data-bs-toggle="modal">Profile </a>
        </div>
      </div>
      <!--modal anggota1-->
    <div class="modal fade" id="Anggota1" tabindex="-1" aria-labelledby="Anggota1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Anggota</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="foto/rosyid.jpg" class="card-img-top" alt="..." alt="">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                      <th>Nama </th>
                      <td>Faqih Rosiddin</td>
                    </tr>
                    <tr>
                      <th>Job Desk</th>
                      <td>UI Design </td>
                    </tr>
                    <tr>
                      <th>NPT</th>
                      <td>41.24.0011</td>
                    </tr>
                    <tr>
                      <th>Kelas</th>
                      <td>Instrumentasi 1A</td>
                    </tr>
                    <tr>
                  <th>Kontribusi</th>
                  <td>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </td>
                </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <!--anggota 2-->
      <div class="card" style="width: 15rem;">
        <img src="foto/ulil 1.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title"> Filial Ulil Albab</h5>
          <p class="card-text">Arduino Developer</p>
          <a href="#" class="btn btn-success" data-bs-target="#Anggota2" data-bs-toggle="modal">Profile </a>
        </div>
      </div>
      <!--modal anggota2-->
    <div class="modal fade" id="Anggota2" tabindex="-1" aria-labelledby="Anggota2" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Anggota</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="foto/ulil.jpg" class="card-img-top" alt="..." alt="">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                      <th>Nama </th>
                      <td>Filial Ulil Albab</td>
                    </tr>
                    <tr>
                      <th>Job Desk</th>
                      <td>Developer Hardware </td>
                    </tr>
                    <tr>
                      <th>NPT</th>
                      <td>41.24.0013</td>
                    </tr>
                    <tr>
                      <th>Kelas</th>
                      <td>Instrumentasi 1A</td>
                    </tr>
                    <tr>
                  <th>Kontribusi</th>
                  <td>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                  </td>
                </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <!--anggota 3-->
      <div class="card" style="width: 15rem;">
        <img src="foto/reven.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title"> Nathaniel Slim Reuven</h5>
          <p class="card-text">Arduino </p>
          <a href="#" class="btn btn-success" data-bs-target="#Anggota3" data-bs-toggle="modal">Profile </a>
        </div>
      </div>
      <!--modal anggota 3-->
    <div class="modal fade" id="Anggota3" tabindex="-1" aria-labelledby="Anggota3" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Anggota</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="foto/repen 2.jpg" class="card-img-top" alt="..." alt="">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                      <th>Nama </th>
                      <td>Nathaniel Slim Reuven</td>
                    </tr>
                    <tr>
                      <th>Job Desk</th>
                      <td>Developer Hardware</td>
                    </tr>
                    <tr>
                      <th>NPT</th>
                      <td>41.24.0029</td>
                    </tr>
                    <tr>
                      <th>Kelas</th>
                      <td>Instrumentasi 1A</td>
                    </tr>
                    <tr>
                  <th>Kontribusi</th>
                  <td>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <!--anggota4-->
      <div class="card" style="width: 15rem;">
        <img src="foto/lala.jpg" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="card-title"> Zahra Aulia</h5>
          <p class="card-text">UX website</p>
          <a href="#" class="btn btn-success" data-bs-target="#Anggota4" data-bs-toggle="modal">Profile </a>
        </div>
      </div>
      <!--modal anggota4-->
    <div class="modal fade" id="Anggota4" tabindex="-1" aria-labelledby="Anggota4" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Anggota</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="foto/zara.jpg" class="card-img-top" alt="..." alt="">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                      <th>Nama </th>
                      <td>Zahra Aulia</td>
                    </tr>
                    <tr>
                      <th>Job Desk</th>
                      <td>UX website </td>
                    </tr>
                    <tr>
                      <th>NPT</th>
                      <td>41.24.0037</td>
                    </tr>
                    <tr>
                      <th>Kelas</th>
                      <td>Instrumentasi 1A</td>
                    </tr>
                    <tr>
                  <th>Kontribusi</th>
                  <td>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </td>
                </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>
      </section>

<!--dokumentasi-->
      <section class="product" id="dokumentasi">
    <div class="container-fluid About pt-5 pb-5" >
      <div class="container text-center"> 
        <h3 class="display-4 text-white" id="dokumentasi">Dokumentasi Projek</h3>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="foto/projek 1.jpg" class="d-block w-100 mx-auto" style="max-width: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Diskusi Tim Hengker</h5>
        <p>Pembahasan Final Arduino dan Website.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="foto/day 2.jpg" class="d-block w-100 mx-auto" style="max-width: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tim Developer Hadware</h5>
        <p>In frame: Filial Ulil Albab & Nathaniel Slim Reuven.</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="foto/day 3.jpg" class="d-block w-100 mx-auto" style="max-width: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tim UI & UX Designer</h5>
        <p>In frame: Faqih Rosiddin & Zahra Aulia.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
      </div>
    </div>
    </section>
      

      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
      function updateTime() {
          const now = new Date();
          const timeString = now.toLocaleTimeString();
          
          // Update both mobile and desktop time displays
          document.getElementById('currentTime').textContent = timeString;
          document.getElementById('currentTime2').textContent = timeString;
      }

      // Update time every second
      setInterval(updateTime, 1000);

      // Initial call to display time immediately
      updateTime();
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Populate date dropdown
        const dateSelect = document.getElementById('date');
        const today = new Date();
        
        for(let i = 0; i < 7; i++) {
            const date = new Date();
            date.setDate(today.getDate() + i);
            const option = document.createElement('option');
            option.value = date.toISOString().split('T')[0];
            option.text = date.toLocaleDateString();
            dateSelect.appendChild(option);
        }

        // Populate hours dropdown
        const hoursSelect = document.getElementById('hours');
        for(let i = 0; i < 24; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.text = i.toString().padStart(2, '0');
            hoursSelect.appendChild(option);
        }

        // Populate minutes dropdown
        const minutesSelect = document.getElementById('minutes');
        for(let i = 0; i < 60; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.text = i.toString().padStart(2, '0');
            minutesSelect.appendChild(option);
        }
    });
  </script>
  </body>
  <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 I AURORA STMKG.</p>
      </footer>
</html>
