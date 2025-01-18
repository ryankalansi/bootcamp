<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kontrol dan Fungsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        pre {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Struktur Kontrol dan Fungsi</h1>
            <p>Belajar memahami logika program menggunakan JavaScript.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Struktur Kontrol -->
        <section id="struktur-kontrol">
            <h2 class="text-primary">Struktur Kontrol</h2>
            <p>
                Struktur kontrol digunakan untuk mengatur alur program berdasarkan kondisi tertentu. JavaScript memiliki beberapa jenis struktur kontrol utama:
            </p>
            <ul>
                <li><strong>Conditional Statements (Pernyataan Bersyarat):</strong> Menjalankan blok kode berdasarkan kondisi.</li>
                <li><strong>Loops (Perulangan):</strong> Menjalankan blok kode berulang kali selama kondisi terpenuhi.</li>
            </ul>

            <h3>Conditional Statements</h3>
            <p>Contoh penggunaan <code>if</code>, <code>else</code>, dan <code>else if</code>:</p>
            <pre>
let nilai = 85;
if (nilai >= 90) {
    console.log("Nilai Anda A");
} else if (nilai >= 80) {
    console.log("Nilai Anda B");
} else {
    console.log("Nilai Anda C");
}
            </pre>

            <h3>Loops</h3>
            <p>Contoh penggunaan <code>for</code> loop:</p>
            <pre>
for (let i = 1; i <= 5; i++) {
    console.log("Perulangan ke-" + i);
}
            </pre>

            <p>Contoh penggunaan <code>while</code> loop:</p>
            <pre>
let i = 1;
while (i <= 5) {
    console.log("Perulangan ke-" + i);
    i++;
}
            </pre>
        </section>

        <hr>

        <!-- Fungsi -->
        <section id="fungsi">
            <h2 class="text-primary">Fungsi</h2>
            <p>
                Fungsi adalah blok kode yang dirancang untuk melakukan tugas tertentu. Fungsi mempermudah pengelolaan kode dan memungkinkan penggunaan ulang kode.
            </p>

            <h3>Mendefinisikan Fungsi</h3>
            <p>Contoh fungsi sederhana:</p>
            <pre>
function sapa(nama) {
    console.log("Halo, " + nama + "!");
}

sapa("Ryan"); // Output: Halo, Ryan!
            </pre>

            <h3>Fungsi dengan Return Value</h3>
            <p>Contoh fungsi yang mengembalikan nilai:</p>
            <pre>
function tambah(a, b) {
    return a + b;
}

let hasil = tambah(5, 3);
console.log(hasil); // Output: 8
            </pre>

            <h3>Fungsi Panah (Arrow Function)</h3>
            <p>Contoh penggunaan fungsi panah:</p>
            <pre>
const kali = (a, b) => a * b;

let hasilKali = kali(4, 3);
console.log(hasilKali); // Output: 12
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
        localStorage.setItem("materiFE8", true);
        <?php
        // Tandai materi Struktur Kontrol dan Fungsi sebagai selesai
        $_SESSION['completed_struktur_kontrol_fungsi'] = true;
        ?>
        alert("Terima kasih telah membaca materi Struktur Kontrol dan Fungsi! Anda akan melanjutkan ke Latihan 3.");
        window.location.href = 'latihan3.php'; // Redirect ke latihan berikutnya
    }
    </script>
</body>
</html>
