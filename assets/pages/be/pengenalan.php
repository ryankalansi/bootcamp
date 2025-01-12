<?php
// Data tutorial
$tutorials = [
    [
        'judul' => 'Bagaimana Server Bekerja',
        'konten' => '<p>Server adalah komputer atau sistem yang menyediakan layanan untuk klien. Ketika klien mengirim permintaan (request), server akan memprosesnya dan memberikan tanggapan (response). Berikut adalah cara kerja server secara umum:</p>
<ol>
    <li>Menerima Permintaan</li>
    <li>Memproses Permintaan</li>
    <li>Mengirimkan Tanggapan</li>
    <li>Menjaga Koneksi</li>
</ol>',
        'gambar' => '../../img/server.jpg',
    ],
    [
        'judul' => 'Dasar-Dasar Server-Side Scripting',
        'konten' => '<p>Server-side scripting memungkinkan pembuatan aplikasi web dinamis. Contoh bahasa pemrograman server-side: PHP, Node.js, Python, Ruby.</p>',
    ],
    [
        'judul' => 'Membangun Server dengan Node.js',
        'konten' => '<p>Node.js adalah runtime JavaScript yang memungkinkan kita menjalankan JavaScript di sisi server. Berikut adalah contoh server sederhana menggunakan Node.js:</p>',
        'kode' => 'const http = require(\'http\'); 
const server = http.createServer((req, res) => {
    res.writeHead(200, { \'Content-Type\': \'text/plain\' });
    res.end(\'Hello, World!\');
});
server.listen(3000, () => console.log(\'Server berjalan di http://localhost:3000\'));',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Pemrograman Server</title>
    <link rel="stylesheet" href="../../css/pengenalan.css">
</head>
<body>
    <header>
        <h1>Pengenalan Pemrograman Server</h1>
        <nav>
            <ul>
                <li><a href="#intro">Intro</a></li>
                <li><a href="#concepts">Bagaimana Server Bekerja</a></li>
                <li><a href="#scripting">Server-Side Scripting</a></li>
                <li><a href="#nodejs">Node.js</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php foreach ($tutorials as $tutorial): ?>
            <section>
                <h2><?php echo $tutorial['judul']; ?></h2>
                <div><?php echo $tutorial['konten']; ?></div>
                <?php if (!empty($tutorial['gambar'])): ?>
                    <img src="<?php echo $tutorial['gambar']; ?>" alt="<?php echo $tutorial['judul']; ?>">
                <?php endif; ?>
                <?php if (!empty($tutorial['kode'])): ?>
                    <pre><?php echo htmlspecialchars($tutorial['kode']); ?></pre>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>

        <!-- Tombol Selesai -->
        <div class="button-container">
            <button onclick="alert('Terima kasih telah membaca materi!')">Selesai</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Pengenalan Pemrograman Server. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
