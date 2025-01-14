<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Backend: Pengenalan Pemrograman Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-4">
        <div class="container text-center">
            <h1>Belajar Backend</h1>
            <p>Materi ini membahas dasar-dasar pemrograman server menggunakan Node.js.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Pengantar -->
        <section id="pengantar">
            <h2 class="text-primary">Pengantar Pemrograman Server</h2>
            <p>
                Pemrograman server adalah proses membangun logika di sisi server untuk menangani permintaan (request) dari klien dan memberikan respons.
                Server berperan sebagai pengelola data dan logika utama aplikasi web.
            </p>
            <h3>Bagaimana Server Bekerja?</h3>
            <ul>
                <li><strong>Request:</strong> Klien (browser) mengirim permintaan ke server.</li>
                <li><strong>Processing:</strong> Server memproses permintaan, seperti mengambil data dari database.</li>
                <li><strong>Response:</strong> Server mengirimkan hasil (data atau halaman web) kembali ke klien.</li>
            </ul>
        </section>

        <hr>

        <!-- Konsep Dasar Server-Side Scripting -->
        <section id="konsep-dasar">
            <h2 class="text-primary">Konsep Dasar Server-Side Scripting</h2>
            <p>
                Server-side scripting adalah kode yang dijalankan di server untuk membuat aplikasi dinamis.
                Node.js adalah salah satu teknologi populer untuk pemrograman server karena performa cepat dan berbasis JavaScript.
            </p>
            <h3>Kenapa Memilih Node.js?</h3>
            <ul>
                <li>Non-blocking I/O untuk performa tinggi.</li>
                <li>JavaScript full-stack, memungkinkan penggunaan satu bahasa di frontend dan backend.</li>
                <li>Ekosistem kaya dengan ribuan paket melalui npm.</li>
            </ul>
        </section>

        <hr>

        <!-- Membangun Server Sederhana -->
        <section id="membangun-server">
            <h2 class="text-primary">Membangun Server Sederhana dengan Node.js</h2>
            <p>Langkah pertama adalah membuat server sederhana menggunakan Node.js:</p>
            <pre class="bg-light p-3 border">
const http = require('http');

const server = http.createServer((req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Halo, ini server pertama Anda!');
});

server.listen(3000, () => {
    console.log('Server berjalan di http://localhost:3000');
});
            </pre>
            <h3>Penjelasan Kode</h3>
            <ul>
                <li><code>require('http')</code>: Mengimpor modul HTTP bawaan Node.js.</li>
                <li><code>http.createServer()</code>: Membuat server baru.</li>
                <li><code>server.listen()</code>: Mengaktifkan server di port tertentu.</li>
            </ul>
        </section>

        <hr>

        <!-- Menambahkan Routing -->
        <section id="routing">
            <h2 class="text-primary">Menambahkan Routing</h2>
            <p>Routing memungkinkan server merespons URL yang berbeda dengan konten yang sesuai:</p>
            <pre class="bg-light p-3 border">
const http = require('http');

const server = http.createServer((req, res) => {
    if (req.url === '/') {
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end('Halaman Utama');
    } else if (req.url === '/about') {
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end('Halaman Tentang Kami');
    } else {
        res.writeHead(404, { 'Content-Type': 'text/plain' });
        res.end('Halaman Tidak Ditemukan');
    }
});

server.listen(3000, () => {
    console.log('Server berjalan di http://localhost:3000');
});
            </pre>
        </section>

        <!-- Tombol Selesai -->
        <div class="d-flex justify-content-between mt-5">
        <a href="landing.php" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-success" onclick="markAsComplete()">Selesai</button>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
    <p>© <span>Copyright</span>
          <strong class="px-1 sitename">Bobootcamp</strong
          ><span>All Rights Reserved</span></p>
    </footer>

    <script>
    function markAsComplete() {
        localStorage.setItem("materiBE1", true);
        <?php
        $_SESSION['completed_pengenalan'] = true;
        ?>
        alert("Terima kasih telah membaca materi Pengenalan! Anda akan melanjutkan ke Pengelolaan Database.");
        window.location.href = 'pengelolaan-database.php'; // Redirect ke materi berikutnya
    }
    </script>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
