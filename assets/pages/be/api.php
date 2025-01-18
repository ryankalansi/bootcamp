<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Backend: RESTful API dengan Express.js</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-4">
        <div class="container text-center">
            <h1>Belajar Backend</h1>
            <p>Materi ini membahas cara membuat RESTful API menggunakan Express.js.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Pengantar API -->
        <section id="pengantar-api">
            <h2 class="text-primary">Pengantar API</h2>
            <p>
                API (Application Programming Interface) adalah antarmuka yang memungkinkan aplikasi untuk saling berkomunikasi.
                RESTful API adalah standar API berbasis HTTP yang digunakan untuk menghubungkan frontend dan backend.
            </p>
            <h3>Ciri-Ciri RESTful API</h3>
            <ul>
                <li>Menggunakan protokol HTTP.</li>
                <li>Berbasis sumber daya (resources) seperti pengguna, produk, dll.</li>
                <li>Mendukung operasi CRUD (Create, Read, Update, Delete).</li>
            </ul>
        </section>

        <hr>

        <!-- Membuat RESTful API dengan Express.js -->
        <section id="express-api">
            <h2 class="text-primary">Membuat RESTful API dengan Express.js</h2>
            <p>
                Express.js adalah kerangka kerja minimalis untuk Node.js yang sering digunakan untuk membuat RESTful API.
                Berikut langkah-langkah membuat RESTful API sederhana.
            </p>

            <h3>1. Instalasi Express.js</h3>
            <pre class="bg-light p-3 border">
npm install express
            </pre>

            <h3>2. Membuat Server dengan Express.js</h3>
            <pre class="bg-light p-3 border">
const express = require('express');
const app = express();
const port = 3000;

app.use(express.json()); // Middleware untuk parsing JSON

// Endpoint root
app.get('/', (req, res) => {
    res.send('Selamat datang di RESTful API kami!');
});

app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
            </pre>

            <h3>3. Menambahkan Routing untuk Resources</h3>
            <p>
                Tambahkan endpoint CRUD untuk resource <code>users</code>.
            </p>
            <pre class="bg-light p-3 border">
let users = [
    { id: 1, name: 'Ryan', email: 'ryan@example.com' },
    { id: 2, name: 'John', email: 'john@example.com' }
];

// Ambil semua pengguna
app.get('/users', (req, res) => {
    res.json(users);
});

// Tambah pengguna baru
app.post('/users', (req, res) => {
    const newUser = req.body;
    newUser.id = users.length + 1;
    users.push(newUser);
    res.status(201).json(newUser);
});

// Ambil pengguna berdasarkan ID
app.get('/users/:id', (req, res) => {
    const user = users.find(u => u.id === parseInt(req.params.id));
    if (!user) return res.status(404).send('Pengguna tidak ditemukan');
    res.json(user);
});

// Perbarui pengguna
app.put('/users/:id', (req, res) => {
    const user = users.find(u => u.id === parseInt(req.params.id));
    if (!user) return res.status(404).send('Pengguna tidak ditemukan');
    Object.assign(user, req.body);
    res.json(user);
});

// Hapus pengguna
app.delete('/users/:id', (req, res) => {
    users = users.filter(u => u.id !== parseInt(req.params.id));
    res.status(204).send();
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
          <strong class="px-1 sitename">OneBootcamp</strong
          ><span>All Rights Reserved</span></p>
        <div class="credits">Designed by Kelompok 1</div>
    </footer>


    <script>
     function markAsComplete() {
        localStorage.setItem("materiBE3", true);
            <?php
            $_SESSION['completed_api'] = true;
            ?>
            alert("Terima kasih telah membaca materi Membuat Rest API! Anda akan melanjutkan ke Latihan.");
            window.location.href = 'latihan.php'; // Redirect ke halaman latihan
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
