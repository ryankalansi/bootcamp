<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OneBootcamp</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <header id="header" class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">OneBootcamp</a>
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
                <a class="nav-link active" aria-current="page" href="#hero"
                  >Beranda</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#program">Program</a>
              </li>
              <?php if (isset($_SESSION['username'])): ?>
                            <!-- Jika sudah login -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <?= htmlspecialchars($_SESSION['username']); ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="dashboard.php">Dasboard</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <!-- Jika belum login -->
                            <li class="nav-item">
                                <a class="btn btn-info" href="login.php">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <img
          src="assets/img/hero.jpg"
          class="img-fluid hero-img"
          alt=""
          data-aos="zoom-out"
          data-aos-delay="300"
        />
      </section>
      <!-- End Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4">
            <div
              class="col-lg-6 content"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <p class="who-we-are">OneBootcamp</p>
              <h3>Membuka Pintu Teknologi untuk Semua</h3>
              <p>
                <i> Belajar Koding di Mana Saja, Kapan Saja, Tanpa Biaya.</i>
              </p>
              <p>
                OneBootcamp adalah platform belajar mandiri yang menyediakan
                materi lengkap dan terstruktur secara gratis untuk pengembangan
                web front-end dan back-end. Kami berkomitmen untuk membantu para
                pemula dalam memperdalam keterampilan coding, dengan akses tanpa
                biaya, kapan pun dan di mana pun.
              </p>
            </div>

            <div
              class="col-lg-6 about-images"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="row">
                <div class="col-lg-6">
                  <img
                    src="assets/img/about-company-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-lg-6">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <img
                        src="assets/img/about-company-2.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="col-lg-12">
                      <img
                        src="assets/img/about-company-3.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Clients Section -->
      <section id="clients" class="clients section">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/tokopedia.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/gojek.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/grab.png" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/blibli.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/agoda.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/traveloka.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->
          </div>
        </div>
      </section>
      <!-- End Clients Section -->

      <!-- Features Section -->
      <section id="program" class="program section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Program</h2>
          <p>
            Temukan Program yang Sesuai untuk Meningkatkan Keterampilan Coding
            Anda
          </p>
        </div>
        <!-- End Section Title -->
      </section>
      <!-- /Features Section -->

      <!-- Features Details Section -->
      <section id="features-details" class="features-details section">
        <div class="container">
          <div class="row gy-4 justify-content-between features-item">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/features-1.jpg" class="img-fluid" alt="" />
            </div>

            <div
              class="col-lg-5 d-flex align-items-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="content">
                <h3>Front-end Development</h3>
                <p>
                  Bootcamp Front-end yang mengajarkan HTML, CSS, JavaScript,
                  untuk menciptakan website responsif yang menarik secara visual
                </p>
                <a href="assets/pages/fe/landing.php" class="btn more-btn">Dapatkan Materi</a>
              </div>
            </div>
          </div>
          <!-- Features Item -->

          <div class="row gy-4 justify-content-between features-item">
            <div
              class="col-lg-5 d-flex align-items-center order-2 order-lg-1"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="content">
                <h3>Back-end Development</h3>
                <p>
                  Pelajari dasar pemrograman server, pengelolaan database, dan
                  API untuk membangun sistem web yang kuat dan terstruktur.
                </p>

                <a href="assets/pages/be/landing.php" class="btn more-btn">Dapatkan Materi</a>
              </div>
            </div>

            <div
              class="col-lg-6 order-1 order-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img src="assets/img/features-2.jpg" class="img-fluid" alt="" />
            </div>
          </div>
          <!-- Features Item -->
        </div>
      </section>
      <!-- /Features Details Section -->
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

    <!-- JS -->
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

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
