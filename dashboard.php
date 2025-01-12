<?php
// Data progres belajar (bisa diganti dengan data dari database)
$progress_data = [
    [
        "judul" => "Front-end Development",
        "progres" => 12,
        "gambar" => "assets/img/fe.jpg", // Ganti dengan URL gambar asli
    ],
    
    [
        "judul" => "Back-end Development",
        "progres" => 25,
        "gambar" => "assets/img/be.jpg", // Ganti dengan URL gambar asli
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progres Belajar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .progress-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-radius: 8px;
        }
        .progress-bar {
            background-color: #17a2b8;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lanjutkan Belajar</h1>
        <div class="row">
            <?php foreach ($progress_data as $data): ?>
                <div class="col-md-6 mb-4">
                    <div class="card progress-container">
                        <div class="row g-0 align-items-center">
                            <div class="col-3 text-center">
                                <img src="<?= $data['gambar']; ?>" alt="Thumbnail" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data['judul']; ?></h5>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $data['progres']; ?>%;" aria-valuenow="<?= $data['progres']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">Progres: <?= $data['progres']; ?>%</small>
                                    <div class="mt-2">
                                        <a href="#" class="btn btn-primary btn-sm">Lanjutkan Belajar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
