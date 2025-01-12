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
                    <h1 class="text-warning">Back-end Development</h1>
                    <p class="text-light"> Pelajari dasar pemrograman server, pengelolaan database, dan API untuk membangun sistem web yang kuat dan terstruktur.</p>
                    <a href="#" class="btn btn-warning mt-5" id="pelajariMateriBtn">Pelajari Materi</a>
                </div>
            </div>
            <div class="col-md-6 order-2 order-md-2 text-center">
                <div class="hero-image">
                    <img src="../../../assets/img/be.jpg" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

        <section id="timeline" class="timeline section m-5">
            <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Pengenalan Pemrograman Server</h5>
            <p class="card-text">
                Belajar bagaimana server bekerja, memahami konsep dasar server-side scripting, serta membangun server sederhana menggunakan Node.js.
            </p>
            <a href="pengenalan.php" class="btn btn-success" id="memulaiMateriBtn">Memulai Materi</a>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Pengelolaan Database <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
            <p class="card-text">
                Memahami perbedaan database SQL dan NoSQL, serta belajar mengelola data menggunakan MySQL dan MongoDB.
            </p>
            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Membuat REST API <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
            <p class="card-text">
                Pelajari cara membuat RESTful API untuk menghubungkan aplikasi frontend dengan backend, menggunakan Express.js dan konsep routing.
            </p>
            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Latihan <span class="float-right">
                                    <i class="fas fa-lock"></i>
                                </span></h5>
            <p class="card-text">
            Pelajaran ini akan memberi Anda praktik langsung mengenai back-end development dengan ilmu yang sudah Anda dapatkan sampai saat ini.
            </p>
            <a href="#" class="btn btn-success disabled">Memulai Materi</a>
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
