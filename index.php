<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data dari tabel gallery
$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fan Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        body {
            /* background-color: #f8f9fa; */
            transition: background-color 0.3s, color 0.3s;
        }
        
        .about {
            max-width: 800px;
            margin: auto;
        }
        
        .card {
            margin: 10px;
            flex: 1;
        }
        
        footer {
            background-color: #e9ecef;
            transition: background-color 0.3s;
        }
        
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 5px;
        }
        
        .btn-next {
            margin-top: 20px;
        }
        
        .info-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0;
        }
        
        .info-section img {
            width: 300px;
            height: 250px;
            object-fit: cover;
        }
        
        .info-section .text-content {
            flex: 1;
            margin-left: 20px;
        }
        
        .navbar {
            background-color: #343a40;
            transition: background-color 0.3s;
        }
        
        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }
        
        .nav-link:hover {
            color: #f8f9fa !important;
        }
        
        body[data-bs-theme="dark"] {
            background-color: black;
            color: white;
        }
        
        body[data-bs-theme="dark"] .card {
            background-color: #495057;
            /* Dark background for cards */
            color: white;
            /* Light text color */
        }
        
        body[data-bs-theme="dark"] footer {
            background-color: #343a40;
            /* Dark background for footer */
        }
        
        .article-title {
            margin: 20px 0;
        }
        
        .article {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .article:hover {
            transform: scale(1.02);
        }
        
        .article img {
            float: left;
            margin-right: 15px;
            border-radius: 5px;
            width: 100px;
            height: auto;
        }
        
        body[data-bs-theme="dark"] {
            background-color: black;
            color: white;
        }
        
        body[data-bs-theme="dark"] .container {
            color: black;
        }
        
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }
        
        .gallery-item {
            position: relative;
            margin: 10px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        
        .gallery-item img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            border-radius: 8px;
        }
        
        .gallery-item:hover .overlay {
            opacity: 1;
        }
        
        footer {
            background-color: #e9ecef;
            padding: 20px 0;
            background: linear-gradient(to right, #6c757d, #f8f9fa);
        }
        
        .footer-section {
            padding: 10px;
            margin: 10px 0;
        }
        
        .gallery-caption {
            text-align: center;
            margin-top: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body data-bs-theme="light">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Football Fan Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#aboutme">About Me</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                    <button
                    type="button"
                    class="btn btn-dark theme"
                    id="dark"
                    title="dark"
                    >
                    <i class="bi bi-moon-stars-fill"></i>
                    </button>
                    <button
                    type="button"
                    class="btn btn-danger theme"
                    id="light"
                    title="light"
                    >
                    <i class="bi bi-brightness-high"></i>
                    </button>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://tmssl.akamaized.net//images/foto/galerie/mykhaylo-mudryk-chelsea-2024-2025-1050900214h-1727778553-149993.jpg?lm=1727778563" class="d-block w-100" height="600" alt="El Dear God">
                <div class="carousel-caption">
                    <h5>El Dear God</h5>
                    <p>Ambil jalur kanan, kiri punya Mudryk.</p>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://akcdn.detik.net.id/community/media/visual/2023/01/12/antony_169.jpeg?w=600&q=90" class="d-block w-100" height="600" alt="El Gasing">
                <div class="carousel-caption">
                    <h5>El Gasing</h5>
                    <p>GOAT dari segala GOAT.</p>
                    <a href="#" class="btn btn-light">Learn More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://assets.goal.com/images/v3/bltbbe82fa82ee1b57c/GOAL%20-%20Blank%20WEB%20-%20Facebook%20-%202024-09-19T144355.857.png?auto=webp&format=pjpg&width=3840&quality=60" class="d-block w-100" height="600" alt="El Marmut">
                <div class="carousel-caption">
                    <h5>El Marmut</h5>
                    <p>Marmut imut mematikan.</p>
                    <a href="#" class="btn btn-light">Learn More</a>
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

    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Kumpulan para lord.</p>
        </blockquote>
    </figure>

    <div class="card-group d-flex flex-wrap justify-content-center">
        <div class="card">
            <img src="https://www.ligaolahraga.com/storage/images/news/2024/08/12/situasi-mu-makin-gawat-kini-giliran-harry-maguire-yang-cedera.jpg" class="card-img-top" alt="Maguire">
            <div class="card-body">
                <h5 class="card-title">Maguire</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://image-service.onefootball.com/transform?w=280&h=210&dpr=2&image=https%3A%2F%2Ficdn.chelsea.news%2Fwp-content%2Fuploads%2F2024%2F08%2FNoni-Madueke-cups-his-ear-to-the-haters..jpg" class="card-img-top" alt="Madueke">
            <div class="card-body">
                <h5 class="card-title">Madueke</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://icdn.chelsea.news/wp-content/uploads/2024/04/Nicolas-Jackson-1200x900.jpg" class="card-img-top" alt="Jackson">
            <div class="card-body">
                <h5 class="card-title">Jackson</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-4">
        <a href="#" class="btn btn-primary btn-next">Next Page</a>
    </div>

    <div class="about">
        <div class="info-section">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/7/7a/Manchester_United_FC_crest.svg/1200px-Manchester_United_FC_crest.svg.png" alt="Manchester United Logo">
            <div class="text-content">
                <h1>MANCHESTER UNITED</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, reprehenderit quod. Maiores quis commodi molestiae quia, doloremque sed veniam et? Iste est minima laboriosam, numquam amet libero explicabo? Qui, tempora.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="article-title text-center">Berita Bola anyar</h1>
        <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()) :
      ?>
        <div class="article bg-light">
            <img src="img/<?= $row["gambar"]?>" alt="<?= $row["judul"] ?>">
            <h2><?= $row["judul"] ?></h2>
            <p><?= $row["isi"]?></p>
            <p><strong>Published on:</strong> <?= date("j F Y", strtotime($row["tanggal"]));?></p>
        </div>
    <?php endwhile; ?>
    </div>
    <h1 class="text-center mt-4">Football Gallery</h1>

    <div class="gallery-container">
    <?php
        // Cek apakah ada data gambar di tabel gallery
        if ($result->num_rows > 0) :
          $active = "active"; // Menandai gambar pertama sebagai yang aktif
          while ($row = $result->fetch_assoc()) :
            $id = $row['id'];
            $gambar = $row['gambar']; // Nama file gambar
            $nama_gambar = $row['nama']; // Nama gambar yang akan ditampilkan saat di-hover
        ?>
        <div class="gallery-item" onmouseover="showText(<?= $nama_gambar ?>, `gallery<?= $id ?>`)" onmouseout="hideText(`gallery<?= $id ?>`)">
            <img src="img/<?= $gambar ?>" alt="<?= $nama_gambar ?>">
            <div class="overlay" id="gallery<?= $id ?>">Hover me!</div>
            <div class="gallery-caption"><?= $nama_gambar ?></div>
        </div>

        <?php 
            $active = ""; // Set active hanya untuk gambar pertama
          endwhile;
        ?>
        <?php else : ?>
            <p>tidak ada gambar di gallery</p>
        <?php endif; ?>
        
    </div>

    <footer class="text-center bg-body-tertiary">
        <div class="container pt-4">
            <section class="mb-4">
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-linkedin"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="container mt-4">
            <h2 class="text-center fw-bold">Schedule</h2>
            <div class="row">
                <!-- Senin -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Senin</div>
                        <div class="card-body">
                            <p>Rekayasa perangka lunak<br>09:30-12:00 | H.5.13</p>
                            <p>Logika informatika<br>12:30-15:00 | H.4.10</p>
                        </div>
                    </div>
                </div>
                <!-- Selasa -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Selasa</div>
                        <div class="card-body">
                            <p>Basis Data<br>07:00-08:40 | H.5.4</p>
                            <p>Pendidikan Kewarganegaraan<br>10:20-12:00 | Aula E.3.1</p>
                        </div>
                    </div>
                </div>
                <!-- Rabu -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Rabu</div>
                        <div class="card-body">
                            <p>Pemograman Berbasis WEB<br>07:00-08:40 | D.2.J</p>
                            <p>Technopreneurship<br>14:10-15:50 | Kulino</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Kamis -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Kamis</div>
                        <div class="card-body">
                            <p>Sistem Operasi<br>07:00-09:30 | H.4.9</p>
                            <p>Probabilitas dan Statistik<br>09:30-12:00 | H.3.2</p>
                        </div>
                    </div>
                </div>
                <!-- Jumat -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Jumat</div>
                        <div class="card-body">
                            <p>Basis Data<br>08:40-10:20 | D.3.M</p>
                        </div>
                    </div>
                </div>
                <!-- Sabtu -->
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white fw-bold">Sabtu</div>
                        <div class="card-body">
                            <p>FREE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <section id="about me" class="text-center p-5">
            <div class="container">
                <h1 class="fw-bold display-4 pb-3">About Me</h1>
                <div class="row">
        
          <style>
            .wrapper {
              background-color: rgb(128, 0, 0);
            }
            .about {
              background-color: rgb(128, 0, 0);
              display: flex;
              justify-content: center;
              align-items: center;
              gap: 50px;
            }
            .img img {
              border-radius: 50%;
              height: 300px;
              width: 300px;
            }
            .about-text {
              line-height: 15px;
            }
            @media (max-width: 768px) {
              .about {
                display: grid;
                grid-template-columns: 1fr;
              }
            }
          </style>
          <body>
            <div class="wrapper">
              <div class="about">
                <div class="about-text">
                <div class="img">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5cpieYzjL-o5xyUDJh6DJEOC-BD7Ez1ycsA&s"alt="" />
                  <div class="about-text"></div>
                  <span>A11.2023.15464</span>
                  <h1>BAMBANG AGUS SUPRIYANTO</h1>
                  <h4>Universitas Dian Nuswantoro</h4>
                </div>
              </div>
            </div>
          </body>
        </html>
        </section>
            <!-- Footer -->
            <footer class="text-center p-5">
                <div>
                    <a href="Bambang"><i class="bi bi-instagram h2 p-2 text-light"></i></a>
                    <a href="Bambang"><i class="bi bi-twitter-x h2 p-2 text-light"></i></a>
                    <a href="https://wa.me/62895359671197"><i class="bi bi-whatsapp h2 p-2 text-light"></i></a>
                </div>
                <div>Bambang &copy; 2024</div>
            </footer>
        
            <!-- JavaScript Custom Styles -->
            <script>
                //update date and time
                function updateDateTime() {
                    const now = new Date();
                    const optionsDate = { year: 'numeric', month: 'long', day: 'numeric' };
                    const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
                    document.getElementById("tanggal").innerText = now.toLocaleDateString('id-ID', optionsDate);
                    document.getElementById("jam").innerText = now.toLocaleTimeString('id-ID', optionsTime);
                }
        
                // Apply colors on load
                window.onload = function () {
                    updateDateTime(); // Update date and time on page load
                    setInterval(updateDateTime, 1000); // Update every second
                    document.getElementById("hero").style.backgroundColor = "#1a1a1a"; // Darker background for the hero section
                    document.getElementById("page-title").style.color = "#ffffff"; // White for title
                    document.getElementById("hero-title").style.color = "#ffffff"; // White for hero title
                    document.getElementById("hero-title").style.transition = "all 0.5s ease-in-out";
                    document.getElementById("hero-title").style.transform = "scale(1.05)";
                    document.getElementById("page-title").style.textShadow = "2px 2px 5px rgba(0,0,0,0.5)";
                };
            </script>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            ©️ 2024 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">Bambang.com</a>
        </div>
    </footer>

    <script>
        function showText(text, overlayId) {
            document.getElementById(overlayId).textContent = text;
        }

        function hideText(overlayId) {
            document.getElementById(overlayId).textContent = 'Hover me!';
        }

        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");

            // Store the current mode in localStorage
            if (element.classList.contains("dark-mode")) {
                localStorage.setItem("darkMode", "enabled");
            } else {
                localStorage.setItem("darkMode", "disabled");
            }
        }

        // Check localStorage for dark mode setting on page load
        window.onload = function() {
            if (localStorage.getItem("darkMode") === "enabled") {
                document.body.classList.add("dark-mode");
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $("#dark").click(()=>{
        $(document.body).attr('data-bs-theme', 'dark');
    })
    $("#light").click(()=>{
        $(document.body).attr('data-bs-theme', 'light');
    })
</script>
</html>