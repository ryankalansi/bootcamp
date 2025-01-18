<?php
session_start();
?>

<!DOCTYPE html>
<hlang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Interaktivitas CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hover-box {
            background-color: lightblue;
            padding: 20px;
            text-align: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .hover-box:hover {
            background-color: deepskyblue;
            transform: scale(1.1);
        }

        .clickable-box {
            background-color: lightcoral;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .clickable-box:active {
            background-color: darkred;
            color: white;
        }

        .focus-input {
            padding: 10px;
            border: 2px solid gray;
            outline: none;
        }

        .focus-input:focus {
            border-color: blue;
            box-shadow: 0 0 5px blue;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .animation-box {
            background-color: palegreen;
            padding: 20px;
            text-align: center;
            animation: bounce 1s infinite;
        }
    </style>
</head>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Belajar Interaktivitas CSS</h1>
            <p>Materi ini akan menjelaskan berbagai konsep interaktivitas menggunakan CSS.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Materi Efek Hover -->
        <section id="hover">
            <h2 class="text-primary">Efek Hover</h2>
            <p>Efek <strong>hover</strong> terjadi ketika kursor diarahkan ke elemen. Ini digunakan untuk memberikan feedback visual pada pengguna.</p>
            <h3>Contoh Efek Hover</h3>
            <div class="hover-box">Arahkan kursor ke saya!</div>
            <pre class="bg-light p-3 border">
.hover-box {
    background-color: lightblue;
    transition: background-color 0.3s, transform 0.3s;
}

.hover-box:hover {
    background-color: deepskyblue;
    transform: scale(1.1);
}
            </pre>
        </section>

        <hr>

        <!-- Materi Efek Klik -->
        <section id="klik">
            <h2 class="text-primary">Efek Klik</h2>
            <p>Efek <strong>klik</strong> terjadi ketika pengguna mengklik elemen. Biasanya digunakan pada tombol dan elemen interaktif lainnya.</p>
            <h3>Contoh Efek Klik</h3>
            <div class="clickable-box">Klik saya!</div>
            <pre class="bg-light p-3 border">
.clickable-box {
    background-color: lightcoral;
    cursor: pointer;
}

.clickable-box:active {
    background-color: darkred;
    color: white;
}
            </pre>
        </section>

        <hr>

        <!-- Materi Efek Fokus -->
        <section id="fokus">
            <h2 class="text-primary">Efek Fokus</h2>
            <p>Efek <strong>fokus</strong> terjadi pada elemen input ketika pengguna berinteraksi dengan elemen tersebut, biasanya digunakan untuk form.</p>
            <h3>Contoh Efek Fokus</h3>
            <input type="text" class="focus-input" placeholder="Ketik sesuatu di sini">
            <pre class="bg-light p-3 border">
.focus-input {
    padding: 10px;
    border: 2px solid gray;
}

.focus-input:focus {
    border-color: blue;
    box-shadow: 0 0 5px blue;
}
            </pre>
        </section>

        <hr>

        <!-- Materi Animasi -->
        <section id="animasi">
            <h2 class="text-primary">Animasi</h2>
            <p>CSS memungkinkan pembuatan animasi sederhana dengan menggunakan <code>@keyframes</code> untuk menentukan gerakan atau perubahan elemen.</p>
            <h3>Contoh Animasi</h3>
            <div class="animation-box">Saya melompat!</div>
            <pre class="bg-light p-3 border">
@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.animation-box {
    animation: bounce 1s infinite;
}
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
            localStorage.setItem("materiFE4", true);
            <?php
            // Tandai materi Interaktivitas CSS sebagai selesai
            $_SESSION['completed_interaktivitas_css'] = true;
            ?>
            alert("Terima kasih telah membaca materi Interaktivitas CSS! Anda akan melanjutkan ke materi berikutnya.");
            window.location.href = 'responsive-design.php'; // Redirect ke halaman latihan
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
