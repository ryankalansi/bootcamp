
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progres Belajar</title>
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
            <!-- Materi Front-End -->
            <div class="col-md-6 mb-4">
                <div class="card progress-container">
                    <div class="row g-0 align-items-center">
                        <div class="col-3 text-center">
                            <img src="assets/img/fe.jpg" alt="Thumbnail" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">Front-End Development</h5>
                                <div class="progress my-2">
                                    <div id="progress-bar-fe" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted" id="progress-text-fe">Progres: 0%</small>
                                <div class="mt-2">
                                    <a href="assets/pages/fe/landing.php" class="btn btn-primary btn-sm">Lanjutkan Belajar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Materi Back-End -->
            <div class="col-md-6 mb-4">
                <div class="card progress-container">
                    <div class="row g-0 align-items-center">
                        <div class="col-3 text-center">
                            <img src="assets/img/be.jpg" alt="Thumbnail" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">Back-End Development</h5>
                                <div class="progress my-2">
                                    <div id="progress-bar-be" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted" id="progress-text-be">Progres: 0%</small>
                                <div class="mt-2">
                                    <a href="assets/pages/be/landing.php" class="btn btn-primary btn-sm">Lanjutkan Belajar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tombol Kembali ke Halaman Utama -->
        <div class="mb-4">
            <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>
    

    <script>
        function updateProgress() {
            const progressBarFE = document.getElementById("progress-bar-fe");
            const progressTextFE = document.getElementById("progress-text-fe");
            const progressBarBE = document.getElementById("progress-bar-be");
            const progressTextBE = document.getElementById("progress-text-be");

            // Menghitung progress Front-End (9 materi, setiap materi 11.11%)
            let completedFE = 0;
            for (let i = 1; i <= 9; i++) {
                if(localStorage.getItem("materiFE" + i)) {
                    completedFE++;
                }
            }
            const progressFE = (completedFE / 9) * 100; // Hitung total progress Front-End
            progressBarFE.style.width = `${progressFE}%`;
            progressTextFE.textContent = `Progres: ${progressFE.toFixed(2)}%`;

            // Menghitung progress Back-End (4 materi, setiap materi 25%)
            let completedBE = 0;
            for (let i = 1; i <= 4; i++) {
                if(localStorage.getItem("materiBE" + i)) {
                    completedBE++;
                }
            }
            const progressBE = (completedBE / 4) * 100; // Hitung total progress Back-End
            progressBarBE.style.width = `${progressBE}%`;
            progressTextBE.textContent = `Progres: ${progressBE.toFixed(2)}%`;
        }

        window.onload = updateProgress;
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>
