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
          <a class="navbar-brand" href="../../../index.php">OneBootcamp</a>
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
                    <a href="#" class="btn btn-warning mt-5" id="pelajariMateriBtn">Pelajari Materi</a>
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
                                <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </h5>
                            <p class="card-text">Belajar konsep dan teknik-teknik mengontrol tata letak dan kustomisasi yang lebih kompleks. Pelajaran ini merangkum Box Model, lebih banyak property CSS, Flexbox dan Grid Layout.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Latihan <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Pelajaran ini akan memberi Anda praktik langsung membuat halaman web dengan ilmu yang sudah Anda dapatkan sampai saat ini.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Interaktivitas CSS <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Di sini yang di maksud adalah kemampuan mengubah gaya sebuah elemen berdasarkan aksi yang dilakukan pengguna, seperti hover, klik, atau fokus. Ini membuat situs web Anda lebih interaktif dan ramah pengguna.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Responsive Design <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Desain responsif memastikan bahwa situs web Anda akan terlihat bagus dan berfungsi denga baik pada semua jenis gawai, dari komputer desktop hingga ponsel. Dengan pelajaran ini, Anda bisa membuat situs web yang secara otomatis menyesuaikan tampilan dan desainnya ke berbagai ukuran layar yang berbeda.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Pengantar JavasScript <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Desain responsif memastikan bahwa situs web Anda akan terlihat bagus dan berfungsi denga baik pada semua jenis gawai, dari komputer desktop hingga ponsel. Dengan pelajaran ini, Anda bisa membuat situs web yang secara otomatis menyesuaikan tampilan dan desainnya ke berbagai ukuran layar yang berbeda.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Struktur Kontrol dan Fungsi <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Desain responsif memastikan bahwa situs web Anda akan terlihat bagus dan berfungsi denga baik pada semua jenis gawai, dari komputer desktop hingga ponsel. Dengan pelajaran ini, Anda bisa membuat situs web yang secara otomatis menyesuaikan tampilan dan desainnya ke berbagai ukuran layar yang berbeda.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
            <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Object Oriented Programming (OOP)<span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
                            <p class="card-text">Desain responsif memastikan bahwa situs web Anda akan terlihat bagus dan berfungsi denga baik pada semua jenis gawai, dari komputer desktop hingga ponsel. Dengan pelajaran ini, Anda bisa membuat situs web yang secara otomatis menyesuaikan tampilan dan desainnya ke berbagai ukuran layar yang berbeda.</p>
                            <a href="#" class="btn btn-success disabled" >Memulai Materi</a>
                        </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer section">
      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span>
          <strong class="px-1 sitename">OneBootcamp</strong
          ><span>All Rights Reserved</span>
        </p>
        <div class="credits">Designed by Kelompok 1</div>
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
