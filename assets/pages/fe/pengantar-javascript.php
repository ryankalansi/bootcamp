<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengantar JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .content-section {
            margin-bottom: 2rem;
        }
        .code-block {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 1rem;
            border-radius: 5px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Pengantar JavaScript</h1>
            <p>Pelajari dasar-dasar JavaScript, bahasa pemrograman yang digunakan untuk menambahkan interaktivitas pada website.</p>
        </div>
    </header>

    <main class="container my-5">
        <section class="content-section">
            <h2>Apa itu JavaScript?</h2>
            <p>JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web menjadi lebih interaktif dan dinamis. Dengan JavaScript, Anda dapat membuat elemen website yang dapat bereaksi terhadap input pengguna, seperti tombol, form, atau animasi.</p>
        </section>

        <section class="content-section">
            <h2>Mengapa Menggunakan JavaScript?</h2>
            <ul>
                <li>Menambahkan interaktivitas pada website</li>
                <li>Mengontrol perilaku elemen HTML</li>
                <li>Mengolah data langsung di browser</li>
                <li>Membuat aplikasi web modern</li>
            </ul>
        </section>

        <section class="content-section">
            <h2>Cara Menambahkan JavaScript ke Website</h2>
            <p>JavaScript dapat ditambahkan ke halaman HTML dengan cara:</p>
            <ol>
                <li>Menulis kode JavaScript langsung di dalam tag <code>&lt;script&gt;</code> pada file HTML.</li>
                <li>Menghubungkan file JavaScript eksternal menggunakan tag <code>&lt;script&gt;</code> dengan atribut <code>src</code>.</li>
            </ol>
            <div class="code-block">
                <p>Contoh di dalam HTML:</p>
                <pre>
&lt;script&gt;
    alert('Hello, JavaScript!');
&lt;/script&gt;
                </pre>
                <p>Contoh file eksternal:</p>
                <pre>
&lt;script src="script.js"&gt;&lt;/script&gt;
                </pre>
            </div>
        </section>

        <section class="content-section">
            <h2>Variabel dalam JavaScript</h2>
            <p>Variabel digunakan untuk menyimpan data yang dapat digunakan di dalam program. Anda dapat membuat variabel dengan menggunakan kata kunci <code>var</code>, <code>let</code>, atau <code>const</code>.</p>
            <div class="code-block">
                <pre>
// Menggunakan var
var nama = 'Ryan';
console.log(nama);

// Menggunakan let
let umur = 20;
console.log(umur);

// Menggunakan const
const pi = 3.14;
console.log(pi);
                </pre>
            </div>
        </section>

        <section class="content-section">
            <h2>Kondisional dalam JavaScript</h2>
            <p>Kondisional digunakan untuk membuat keputusan berdasarkan kondisi tertentu. Struktur kondisional yang sering digunakan adalah <code>if</code>, <code>else</code>, dan <code>else if</code>.</p>
            <div class="code-block">
                <pre>
let nilai = 85;

if (nilai >= 90) {
    console.log('Grade: A');
} else if (nilai >= 80) {
    console.log('Grade: B');
} else {
    console.log('Grade: C');
}
                </pre>
            </div>
        </section>

        <section class="content-section">
            <h2>Looping dalam JavaScript</h2>
            <p>Looping digunakan untuk mengulangi kode tertentu beberapa kali. Contoh looping yang sering digunakan adalah <code>for</code> dan <code>while</code>.</p>
            <div class="code-block">
                <pre>
// Menggunakan for
for (let i = 0; i < 5; i++) {
    console.log('Iterasi ke-' + i);
}

// Menggunakan while
let j = 0;
while (j < 5) {
    console.log('Iterasi ke-' + j);
    j++;
}
                </pre>
            </div>
        </section>

        <section class="content-section">
            <h2>Interaksi dengan DOM</h2>
            <p>JavaScript dapat digunakan untuk mengakses dan memanipulasi elemen HTML menggunakan DOM (Document Object Model). Contoh:</p>
            <div class="code-block">
                <pre>
// Mengubah teks elemen
const heading = document.getElementById('judul');
heading.textContent = 'Judul Baru';

// Menambahkan event listener
const button = document.getElementById('tombol');
button.addEventListener('click', function() {
    alert('Tombol diklik!');
});
                </pre>
            </div>
        </section>

        <<div class="text-center mt-5">
            <button class="btn btn-success" onclick="markAsComplete()">Selesai</button>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Pengantar JavaScript. Semua hak cipta dilindungi.</p>
    </footer>

    <script>
    function markAsComplete() {
        <?php
        // Tandai materi Box Model sebagai selesai
        $_SESSION['completed_pengantar_javascript'] = true;
        ?>
        alert("Terima kasih telah membaca materi! Anda akan melanjutkan ke materi berikutnya.");
        window.location.href = 'struktur-kontrol-fungsi.php'; // Redirect ke latihan.php
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
