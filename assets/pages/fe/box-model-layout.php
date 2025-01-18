<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box Model & Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Box Model & Layout</h1>
            <p>Pelajari konsep Box Model dan teknik layout modern seperti Flexbox dan Grid.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Box Model Section -->
        <section id="box-model">
            <h2 class="text-primary">Apa itu Box Model?</h2>
            <p>
                Box Model adalah konsep dasar dalam CSS yang menjelaskan bagaimana elemen HTML disusun di layar. 
                Setiap elemen HTML terdiri dari beberapa lapisan:
            </p>
            <ul>
                <li><strong>Content:</strong> Konten elemen, seperti teks atau gambar.</li>
                <li><strong>Padding:</strong> Ruang antara konten dan border.</li>
                <li><strong>Border:</strong> Garis yang mengelilingi padding dan konten.</li>
                <li><strong>Margin:</strong> Ruang antara border elemen dengan elemen lain di sekitarnya.</li>
            </ul>
            <h3>Contoh Visual Box Model</h3>
            <div class="box-example border p-3 mb-4">
                <div class="box p-3 border bg-light" style="width: 300px;">
                    <p>Ini adalah elemen dengan Box Model</p>
                </div>
            </div>
        </section>

        <hr>

        <!-- Layout Section -->
        <section id="layout">
            <h2 class="text-primary">Teknik Layout</h2>
            <p>CSS menyediakan berbagai teknik untuk mengatur tata letak elemen pada halaman web. Berikut adalah beberapa teknik populer:</p>
            <ul>
                <li><strong>Float:</strong> Metode lama untuk membuat layout, kini kurang digunakan.</li>
                <li><strong>Flexbox:</strong> Digunakan untuk layout satu dimensi (baris atau kolom).</li>
                <li><strong>Grid:</strong> Digunakan untuk layout dua dimensi (baris dan kolom).</li>
            </ul>
        </section>

        <hr>

        <!-- Flexbox Section -->
        <section id="flexbox">
            <h2 class="text-primary">Flexbox</h2>
            <p>
                Flexbox adalah model layout modern yang memungkinkan pengaturan elemen secara fleksibel. 
                Elemen dalam Flexbox dapat diatur dalam satu baris (row) atau satu kolom (column).
            </p>
            <h3>Contoh Flexbox</h3>
            <div class="d-flex justify-content-between mb-4">
                <div class="flexbox-item border p-2 bg-light">Item 1</div>
                <div class="flexbox-item border p-2 bg-light">Item 2</div>
                <div class="flexbox-item border p-2 bg-light">Item 3</div>
            </div>
        </section>

        <hr>

        <!-- Grid Section -->
        <section id="grid">
            <h2 class="text-primary">CSS Grid</h2>
            <p>
                CSS Grid adalah alat yang kuat untuk menciptakan layout dua dimensi. 
                Dengan Grid, Anda dapat dengan mudah mengatur elemen dalam baris dan kolom.
            </p>
            <h3>Contoh Grid</h3>
            <div class="row row-cols-1 row-cols-md-3 g-3">
                <div class="col">
                    <div class="grid-item border p-3 bg-light">Item 1</div>
                </div>
                <div class="col">
                    <div class="grid-item border p-3 bg-light">Item 2</div>
                </div>
                <div class="col">
                    <div class="grid-item border p-3 bg-light">Item 3</div>
                </div>
            </div>
        </section>

        <!-- Tombol Selesai -->
        <div class="d-flex justify-content-between mt-5">
            <a href="landing.php" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-success" onclick="markAsComplete()">Selesai</button>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
    <p>© <span>Copyright</span>
          <strong class="px-1 sitename">OneBootcamp</strong
          ><span>All Rights Reserved</span></p>
        <div class="credits">Designed by Kelompok 1</div>
    </footer>

    <script>
    function markAsComplete() {
    // Tandai materi yang selesai
    localStorage.setItem("materiFE2", true); // Ganti dengan materi yang sesuai
    <?php
            // Tandai materi Responsive Design sebagai selesai
            $_SESSION['completed_box_model_layout'] = true;
            ?>
    alert("Terima kasih telah membaca materi HTML & CSS! Anda akan melanjutkan ke Latihan.");
    window.location.href = 'latihan.php'; // Redirect ke materi berikutnya
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



