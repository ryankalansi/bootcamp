<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan HTML & CSS</title>
    <link rel="stylesheet" href="../../css/html-css.css">
</head>
<body>
    <header>
        <h1>Pengenalan HTML & CSS</h1>
        <nav>
            <ul>
                <li><a href="#html">HTML</a></li>
                <li><a href="#css">CSS</a></li>
                <li><a href="#combine">Menggabungkan HTML & CSS</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="html">
            <h2>Dasar-dasar HTML</h2>
            <p>HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman web. Beberapa tag dasar dalam HTML:</p>
            <ul>
                <li><code>&lt;html&gt;</code>: Menandai awal dan akhir dari dokumen HTML</li>
                <li><code>&lt;head&gt;</code>: Menyimpan metadata seperti judul dan link ke stylesheet</li>
                <li><code>&lt;body&gt;</code>: Menyimpan konten utama halaman</li>
            </ul>
            <img src="../../img/struktur.png" alt="Contoh Struktur HTML">
        </section>

        <section id="css">
            <h2>Dasar-dasar CSS</h2>
            <p>CSS digunakan untuk memodifikasi tampilan HTML. Misalnya, untuk mengubah warna latar belakang, ukuran font, dan banyak lagi.</p>
            <ul>
                <li>Selector: Menentukan elemen HTML yang akan diberi gaya</li>
                <li>Property: Menentukan properti gaya yang akan diterapkan</li>
                <li>Value: Nilai dari properti gaya yang diterapkan</li>
            </ul>
            <img src="../../img/dasar-css.png" alt="Contoh CSS">
        </section>

        <section id="combine">
            <h2>Menggabungkan HTML & CSS</h2>
            <p>HTML dan CSS digunakan bersama untuk membuat halaman web yang lebih interaktif dan menarik.</p>
            <pre>
&lt;style&gt;
  body {
    background-color: lightblue;
  }
  h1 {
    color: red;
  }
&lt;/style&gt;
            </pre>
            <p>Dengan menambahkan CSS di dalam tag <code>&lt;style&gt;</code>, kamu dapat merubah tampilan HTML yang ada di halaman tersebut.</p>
        </section>

        <!-- Tombol Selesai -->
        <div style="text-align: center; margin-top: 40px;">
            <button onclick="alert('Terima kasih telah membaca materi!')">Selesai</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Pengenalan HTML & CSS. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
