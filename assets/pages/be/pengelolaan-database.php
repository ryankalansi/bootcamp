<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Backend: Pengelolaan Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-4">
        <div class="container text-center">
            <h1>Belajar Backend</h1>
            <p>Materi ini membahas pengelolaan database menggunakan SQL dan Node.js.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Pengantar Database -->
        <section id="pengantar-database">
            <h2 class="text-primary">Pengantar Database</h2>
            <p>
                Database adalah tempat penyimpanan data yang digunakan untuk mengelola informasi secara efisien.
                Database biasanya digunakan untuk menyimpan informasi pengguna, produk, transaksi, dan lainnya dalam aplikasi web.
            </p>
            <h3>Jenis-Jenis Database</h3>
            <ul>
                <li><strong>Relasional:</strong> Data disimpan dalam tabel dengan hubungan (relasi), misalnya MySQL dan PostgreSQL.</li>
                <li><strong>NoSQL:</strong> Data disimpan dalam format non-relasional, misalnya MongoDB.</li>
            </ul>
        </section>

        <hr>

        <!-- SQL: Structured Query Language -->
        <section id="sql">
            <h2 class="text-primary">SQL: Structured Query Language</h2>
            <p>
                SQL adalah bahasa standar untuk mengakses dan mengelola database relasional.
                Berikut adalah contoh perintah SQL dasar:
            </p>
            <pre class="bg-light p-3 border">
-- Membuat tabel
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Menambahkan data ke tabel
INSERT INTO users (username, email, password)
VALUES ('ryan', 'ryan@example.com', 'password123');

-- Mengambil data dari tabel
SELECT * FROM users;

-- Memperbarui data
UPDATE users SET email = 'ryan_updated@example.com' WHERE id = 1;

-- Menghapus data
DELETE FROM users WHERE id = 1;
            </pre>
        </section>

        <hr>

        <!-- Menghubungkan Node.js ke Database -->
        <section id="node-database">
            <h2 class="text-primary">Menghubungkan Node.js ke Database</h2>
            <p>Langkah-langkah untuk menghubungkan aplikasi Node.js ke database MySQL:</p>
            <h3>1. Instalasi Paket</h3>
            <pre class="bg-light p-3 border">
npm install mysql2
            </pre>
            <h3>2. Membuat Koneksi</h3>
            <pre class="bg-light p-3 border">
const mysql = require('mysql2');

// Buat koneksi ke database
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'password',
    database: 'bootcamp'
});

// Periksa koneksi
connection.connect((err) => {
    if (err) {
        console.error('Koneksi gagal:', err);
    } else {
        console.log('Koneksi berhasil!');
    }
});
            </pre>
            <h3>3. Menjalankan Query</h3>
            <pre class="bg-light p-3 border">
// Menjalankan query untuk mengambil data
connection.query('SELECT * FROM users', (err, results) => {
    if (err) {
        console.error('Query gagal:', err);
    } else {
        console.log('Data:', results);
    }
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
        <p>&copy; 2025 Belajar Backend. Semua hak cipta dilindungi.</p>
    </footer>

    <script>
   function markAsComplete() {
    localStorage.setItem("materiBE2", true);
            <?php
            $_SESSION['completed_pengelolaan_database'] = true;
            ?>
            alert("Terima kasih telah membaca materi Pengelolaan Database! Anda akan melanjutkan ke materi Rest API.");
            window.location.href = 'api.php'; // Redirect ke halaman latihan
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
