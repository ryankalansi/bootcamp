<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Responsive Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-fluid {
            background-color: lightgray;
            padding: 20px;
        }

        .box {
            background-color: deepskyblue;
            color: white;
            padding: 20px;
            margin: 10px;
        }

        /* Responsif: Mengubah layout untuk layar kecil */
        @media (max-width: 768px) {
            .box {
                background-color: orange;
            }

            .container-fluid {
                background-color: lightblue;
            }
        }

        /* Responsif: Mengubah layout untuk layar besar */
        @media (min-width: 768px) {
            .box {
                background-color: seagreen;
            }

            .container-fluid {
                background-color: lightgray;
            }
        }

        /* Layout untuk smartphone (hingga 576px) */
        @media (max-width: 576px) {
            .box {
                background-color: coral;
            }
        }

        /* Menambahkan elemen grid yang responsif */
        .row {
            margin-bottom: 20px;
        }

        .col-md-4 {
            margin-bottom: 10px;
        }

        /* Menambahkan animasi pada elemen */
        .animated-box {
            background-color: palevioletred;
            color: white;
            padding: 20px;
            text-align: center;
            animation: bounce 1s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Belajar Responsive Design</h1>
            <p>Materi ini akan menjelaskan konsep dasar dan teknik untuk membuat halaman web yang responsif menggunakan CSS.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Materi Responsive Design -->
        <section id="responsive-design">
            <h2 class="text-primary">Apa itu Responsive Design?</h2>
            <p>Responsive Web Design (RWD) adalah pendekatan dalam desain web untuk membuat tampilan situs web berfungsi dengan baik di berbagai perangkat (desktop, tablet, ponsel) dengan menggunakan teknik CSS dan HTML.</p>
            <h3>Media Queries</h3>
            <p>Media queries digunakan untuk mengubah gaya halaman web berdasarkan lebar perangkat atau ukuran tampilan. Contohnya adalah sebagai berikut:</p>
            <pre class="bg-light p-3 border">
/* Media Query untuk layar dengan lebar maksimum 768px */
@media (max-width: 768px) {
    /* Gaya CSS khusus untuk layar kecil */
}

/* Media Query untuk layar dengan lebar minimum 768px */
@media (min-width: 768px) {
    /* Gaya CSS khusus untuk layar besar */
}
            </pre>

            <h3>Contoh Responsive Layout</h3>
            <p>Berikut adalah contoh halaman yang responsif, di mana elemen-elemen diatur berdasarkan ukuran layar:</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 box">Box 1</div>
                    <div class="col-md-4 box">Box 2</div>
                    <div class="col-md-4 box">Box 3</div>
                </div>
                <div class="row">
                    <div class="col-md-4 box">Box 4</div>
                    <div class="col-md-4 box">Box 5</div>
                    <div class="col-md-4 box">Box 6</div>
                </div>
            </div>

            <h3>Animasi Responsif</h3>
            <p>Animasi dapat digunakan untuk memberikan feedback visual pada elemen, yang juga dapat dikombinasikan dengan desain responsif.</p>
            <div class="animated-box">Animasi Responsif!</div>
        </section>

        <!-- Tombol Selesai -->
        <div class="text-center mt-5">
            <button class="btn btn-success" onclick="markAsComplete()">Selesai</button>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Belajar Responsive Design. Semua hak cipta dilindungi.</p>
    </footer>

    <script>
        function markAsComplete() {
            <?php
            // Tandai materi Responsive Design sebagai selesai
            $_SESSION['completed_responsive_design'] = true;
            ?>
            alert("Terima kasih telah membaca materi Responsive Design! Anda akan melanjutkan ke latihan 2.");
            window.location.href = 'latihan2.php'; // Redirect ke halaman latihan
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
