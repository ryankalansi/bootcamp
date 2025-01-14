<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/css/landing.css">
</head>

<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
?>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
        <div class="d-flex align-items-center">
    <div class="logo">
        <img src="https://i.ibb.co.com/Pcj6w0D/Logo-bobootcamp1.png" class="px-1" width="50" alt="Logo">
    </div>
    <a class="navbar-brand ms-2" href="../../../index.php">Bobootcamp</a>
</div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../../index.php"
                  >Beranda</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../../index.php#about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../../index.php#program">Program</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <main class="main">
    <section id="hero" class="hero section" style="background-color: #36827F;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-1">
                <div class="hero-content pt-5 pb-5">
                    <h1 class="text-warning">Belajar HTML, CSS & Javascript</h1>
                    <p class="text-light">Ilmu fundamental web development yang wajib dipelajari</p>
                    <a href="html-css.php" class="btn btn-warning mt-5" id="pelajariMateriBtn">Pelajari Materi</a>
                </div>
            </div>
            <div class="col-md-6 order-2 order-md-2 text-center">
                <div class="hero-image">
                    <img src="../../../assets/img/landing.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



        <section id="timeline" class="timeline section m-5">
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Pengenalan HTML & CSS</h5>
                            <p class="card-text">Belajar ilmu dasar pengembangan halaman web. Pelajaran ini melingkupi dasar-dasar HTML (struktur dokumen, tag dan elemen), dasar-dasar CSS (selector, property dan nilai (value)), serta bagaimana mengkombinasikan HTML dan CSS untuk membuat halaman web yang menarik.</p>
                            <a href="html-css.php" class="btn btn-success" id="memulaiMateriBtn">Memulai Materi</a>
                        </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                        Box Model & Layout
                        <?php if (!isset($_SESSION['completed_html_css']) || !$_SESSION['completed_html_css']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Belajar konsep dan teknik-teknik mengontrol tata letak dan kustomisasi yang lebih kompleks. Pelajaran ini merangkum Box Model, lebih banyak property CSS, Flexbox dan Grid Layout.</p>
                        <?php if (isset($_SESSION['completed_html_css']) && $_SESSION['completed_html_css']): ?>
                            <a href="box-model-layout.php" class="btn btn-success">Memulai Materi</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                       Latihan
                        <?php if (!isset($_SESSION['completed_box_model_layout']) || !$_SESSION['completed_box_model_layout']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Anda akan mengerjakan latihan dengan materi yang dibawakan sebelumnya.</p>
                        <?php if (isset($_SESSION['completed_box_model_layout']) && $_SESSION['completed_box_model_layout']): ?>
                            <a href="latihan.php" class="btn btn-success">Memulai Latihan</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Latihan</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                       Interaktivitas CSS
                        <?php if (!isset($_SESSION['completed_latihan']) || !$_SESSION['completed_latihan']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Disini yang di maksud adalah kemampuan mengubah gaya sebuah elemen berdasarkan aksi yang dilakukan pengguna, seperti hover, klik, atau fokus. Ini membuat situs web Anda lebih interaktif dan ramah pengguna.</p>
                        <?php if (isset($_SESSION['completed_latihan']) && $_SESSION['completed_latihan']): ?>
                            <a href="interaktivitas-css.php" class="btn btn-success">Memulai Materi</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                       Responsive Design
                        <?php if (!isset($_SESSION['completed_interaktivitas_css']) || !$_SESSION['completed_interaktivitas_css']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Desain responsif memastikan bahwa situs web Anda akan terlihat bagus dan berfungsi denga baik pada semua jenis gawai, dari komputer desktop hingga ponsel. Dengan pelajaran ini, Anda bisa membuat situs web yang secara otomatis menyesuaikan tampilan dan desainnya ke berbagai ukuran layar yang berbeda.</p>
                        <?php if (isset($_SESSION['completed_interaktivitas_css']) && $_SESSION['completed_interaktivitas_css']): ?>
                            <a href="responsive-design.php" class="btn btn-success">Memulai Materi</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                       Latihan 2
                        <?php if (!isset($_SESSION['completed_responsive_design']) || !$_SESSION['completed_responsive_design']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Anda akan mengerjakan latihan dengan materi yang dibawakan sebelumnya.</p>
                        <?php if (isset($_SESSION['completed_responsive_design']) && $_SESSION['completed_responsive_design']): ?>
                            <a href="latihan2.php" class="btn btn-success">Memulai Latihan</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Latihan</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                    Pengantar JavasScript
                        <?php if (!isset($_SESSION['completed_latihan2']) || !$_SESSION['completed_latihan2']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Pelajari dasar-dasar JavaScript, bahasa pemrograman yang digunakan untuk menambahkan interaktivitas pada website.</p>
                        <?php if (isset($_SESSION['completed_latihan2']) && $_SESSION['completed_latihan2']): ?>
                            <a href="pengantar-javascript.php" class="btn btn-success">Memulai Materi</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                    Struktur Kontrol dan Fungsi
                        <?php if (!isset($_SESSION['completed_pengantar_javascript']) || !$_SESSION['completed_pengantar_javascript']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Belajar memahami logika program menggunakan JavaScript</p>
                        <?php if (isset($_SESSION['completed_pengantar_javascript']) && $_SESSION['completed_pengantar_javascript']): ?>
                            <a href="struktur-kontrol-fungsi.php" class="btn btn-success">Memulai Materi</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
                        <?php endif; ?>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                    Latihan 3
                        <?php if (!isset($_SESSION['completed_struktur_kontrol_fungsi']) || !$_SESSION['completed_struktur_kontrol_fungsi']): ?>
                             <span class="float-right"><i class="fas fa-lock"></i></span>
                        <?php endif; ?>
                    </h5>
                    <p class="card-text">Anda akan mengerjakan latihan dengan materi yang dibawakan sebelumnya.</p>
                        <?php if (isset($_SESSION['completed_struktur_kontrol_fungsi']) && $_SESSION['completed_struktur_kontrol_fungsi']): ?>
                            <a href="latihan3.php" class="btn btn-success">Memulai Latihan</a>
                        <?php else: ?>
                            <a href="#" class="btn btn-success disabled">Memulai Latihan</a>
                        <?php endif; ?>
                </div>
            </div>

           
        </section>
    </main>

    <footer id="footer" class="footer section">
      <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span>
          <strong class="px-1 sitename">Bobootcamp</strong
          ><span>All Rights Reserved</span></p>
        <div class="credits">Designed by Kelompok 4</div>
      </div>
    </footer>

    

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<script>
    // Fungsi untuk mengecek login dan mengarahkan ke halaman login
    function checkLoginStatus(event) {
        event.preventDefault(); // Mencegah link langsung diakses
        
        <?php if (!isLoggedIn()): ?>
            alert("Anda harus login terlebih dahulu untuk mengakses materi!");
            window.location.href = '../../../login.php';
            return false;
        <?php else: ?>
            // Jika sudah login, lanjutkan ke halaman yang dituju
            window.location.href = event.target.href;
        <?php endif; ?>
    }

    // Menambahkan event listener pada tombol-tombol
    document.getElementById('pelajariMateriBtn').addEventListener('click', checkLoginStatus);
    
    // Untuk tombol "Memulai Materi"
    var memulaiMateriBtn = document.getElementById('memulaiMateriBtn');
    if (memulaiMateriBtn) {
        memulaiMateriBtn.addEventListener('click', checkLoginStatus);
    }
</script>

</body>
</html>
