<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTML dan CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Belajar HTML dan CSS</h1>
            <p>Materi ini adalah pengenalan dasar tentang HTML dan CSS.</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Materi HTML -->
        <section id="html">
            <h2 class="text-primary">HTML: Hypertext Markup Language</h2>
            <p>
                HTML adalah bahasa standar untuk membuat dan menyusun halaman web. 
                Dengan HTML, Anda dapat membuat teks, gambar, tautan, tabel, dan elemen lain yang membentuk struktur situs web.
            </p>
            <h3>Struktur Dasar HTML</h3>
            <p>Setiap dokumen HTML memiliki struktur berikut:</p>
            <pre class="bg-light p-3 border">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Judul Halaman&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Judul Utama&lt;/h1&gt;
    &lt;p&gt;Ini adalah paragraf.&lt;/p&gt;
    &lt;a href="https://example.com"&gt;Tautan ke Example.com&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>
            <h3>Tag HTML Umum</h3>
            <ul>
                <li><strong>&lt;h1&gt; - &lt;h6&gt;:</strong> Tag untuk heading atau judul.</li>
                <li><strong>&lt;p&gt;:</strong> Tag untuk paragraf.</li>
                <li><strong>&lt;a&gt;:</strong> Tag untuk tautan.</li>
                <li><strong>&lt;img&gt;:</strong> Tag untuk gambar.</li>
                <li><strong>&lt;table&gt;:</strong> Tag untuk tabel.</li>
            </ul>
        </section>

        <hr>

        <!-- Materi CSS -->
        <section id="css">
            <h2 class="text-primary">CSS: Cascading Style Sheets</h2>
            <p>
                CSS digunakan untuk menambahkan gaya pada halaman HTML. 
                Dengan CSS, Anda dapat mengontrol warna, tata letak, font, dan elemen lainnya untuk menciptakan tampilan yang menarik.
            </p>
            <h3>Contoh Dasar CSS</h3>
            <pre class="bg-light p-3 border">
/* Gaya dasar untuk elemen */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}
h1 {
    color: #007bff;
    text-align: center;
}
p {
    line-height: 1.6;
}
            </pre>
            <h3>Penerapan CSS</h3>
            <ul>
                <li><strong>Inline CSS:</strong> CSS ditulis langsung pada elemen HTML menggunakan atribut <code>style</code>.
                    <pre class="bg-light p-3 border">&lt;p style="color: red;"&gt;Paragraf merah&lt;/p&gt;</pre>
                </li>
                <li><strong>Internal CSS:</strong> Ditulis di dalam tag <code>&lt;style&gt;</code> di file HTML.
                    <pre class="bg-light p-3 border">
&lt;style&gt;
p {
    color: blue;
}
&lt;/style&gt;
                    </pre>
                </li>
                <li><strong>External CSS:</strong> Ditulis di file terpisah dengan ekstensi <code>.css</code> dan dihubungkan ke file HTML.
                    <pre class="bg-light p-3 border">
&lt;link rel="stylesheet" href="style.css"&gt;
                    </pre>
                </li>
            </ul>
        </section>

        <!-- Tombol Selesai -->
        <div class="text-center mt-5">
            <button class="btn btn-success" onclick="markAsComplete()">Selesai</button>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Belajar HTML dan CSS. Semua hak cipta dilindungi.</p>
    </footer>

    <script>
    function markAsComplete() {
        <?php
        session_start();
        // Tandai materi HTML & CSS sebagai selesai
        $_SESSION['completed_html_css'] = true;
        ?>
        alert("Terima kasih telah membaca materi HTML & CSS! Anda akan melanjutkan ke Box Model dan Layout.");
        window.location.href = 'box-model-layout.php'; // Redirect ke materi berikutnya
    }
    </script>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>