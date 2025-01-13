<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Database dan RESTful API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h1>Latihan Database dan RESTful API</h1>
            <p>Jawab 5 soal berikut ini! Anda harus menjawab minimal 4 soal dengan benar untuk melanjutkan ke materi berikutnya.</p>
        </div>
    </header>

    <main class="container my-5">
        <form>
            <!-- Soal 1 -->
            <div>
                <p>1. Apa itu RDBMS?</p>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">Sebuah sistem database berbasis file</label> <span id="q1a-indicator" class="indicator"></span><br>

                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">Sebuah sistem database relasional</label> <span id="q1b-indicator" class="indicator"></span><br>

                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">Sebuah sistem untuk menyimpan file JSON</label> <span id="q1c-indicator" class="indicator"></span><br>

                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">Sebuah API untuk database</label> <span id="q1d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 2 -->
            <div>
                <p>2. Metode HTTP manakah yang digunakan untuk menghapus data dalam RESTful API?</p>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">GET</label> <span id="q2a-indicator" class="indicator"></span><br>

                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">POST</label> <span id="q2b-indicator" class="indicator"></span><br>

                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">PUT</label> <span id="q2c-indicator" class="indicator"></span><br>

                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">DELETE</label> <span id="q2d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 3 -->
            <div>
                <p>3. Apa itu endpoint dalam RESTful API?</p>
                <input type="radio" id="q3a" name="q3" value="a">
                <label for="q3a">Sebuah URL tempat data dapat diakses</label> <span id="q3a-indicator" class="indicator"></span><br>

                <input type="radio" id="q3b" name="q3" value="b">
                <label for="q3b">Nama metode API</label> <span id="q3b-indicator" class="indicator"></span><br>

                <input type="radio" id="q3c" name="q3" value="c">
                <label for="q3c">Database yang terhubung dengan server</label> <span id="q3c-indicator" class="indicator"></span><br>

                <input type="radio" id="q3d" name="q3" value="d">
                <label for="q3d">Jenis data yang dikirim melalui API</label> <span id="q3d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 4 -->
            <div>
                <p>4. Apa fungsi dari query `SELECT` dalam SQL?</p>
                <input type="radio" id="q4a" name="q4" value="a">
                <label for="q4a">Menambah data ke dalam tabel</label> <span id="q4a-indicator" class="indicator"></span><br>

                <input type="radio" id="q4b" name="q4" value="b">
                <label for="q4b">Menghapus data dari tabel</label> <span id="q4b-indicator" class="indicator"></span><br>

                <input type="radio" id="q4c" name="q4" value="c">
                <label for="q4c">Memperbarui data dalam tabel</label> <span id="q4c-indicator" class="indicator"></span><br>

                <input type="radio" id="q4d" name="q4" value="d">
                <label for="q4d">Mengambil data dari tabel</label> <span id="q4d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 5 -->
            <div>
                <p>5. Bagaimana cara membuat server RESTful API menggunakan Express.js?</p>
                <input type="radio" id="q5a" name="q5" value="a">
                <label for="q5a">Menggunakan library http bawaan</label> <span id="q5a-indicator" class="indicator"></span><br>

                <input type="radio" id="q5b" name="q5" value="b">
                <label for="q5b">Mengimpor dan menggunakan modul express</label> <span id="q5b-indicator" class="indicator"></span><br>

                <input type="radio" id="q5c" name="q5" value="c">
                <label for="q5c">Menggunakan query SQL langsung</label> <span id="q5c-indicator" class="indicator"></span><br>

                <input type="radio" id="q5d" name="q5" value="d">
                <label for="q5d">Mengimpor modul fs untuk membaca file</label> <span id="q5d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Tombol Submit -->
            <div class="d-flex justify-content-between mt-5">
        <a href="landing.php" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="checkAnswers()">Submit</button>
            </div>
        </form>

        <!-- Hasil -->
        <div id="result" class="hidden mt-4">
            <h4 id="result-message"></h4>
            <button id="next-button" class="hidden btn btn-success mt-3" onclick="goToNext()">Lanjutkan ke Materi Berikutnya</button>
        </div>
    </main>

       <!-- Tambahkan Modal di dalam Body -->
<div class="modal fade" id="completionModal" tabindex="-1" aria-labelledby="completionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="completionModalLabel">Selamat!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">🎉 Anda telah menyelesaikan semua materi Backend! 🎉</h4>
        <p class="mt-3">Anda mendapatkan skor <strong id="finalScore"></strong> dari 5.</p>
        <p>Terus belajar dan tingkatkan kemampuan Anda di tingkat berikutnya!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="redirectToLanding()">Kembali ke Halaman Utama</button>
      </div>
    </div>
  </div>
</div>

    <script>
        function checkAnswers() {
            const correctAnswers = {
                q1: 'b',
                q2: 'd',
                q3: 'a',
                q4: 'd',
                q5: 'b'
            };

            let score = 0;

            for (const [question, answer] of Object.entries(correctAnswers)) {
                const options = document.getElementsByName(question);

                options.forEach(option => {
                    const indicator = document.getElementById(`${option.id}-indicator`);
                    indicator.textContent = ''; // Reset indikator

                    if (option.checked) {
                        if (option.value === answer) {
                            indicator.textContent = '✔️';
                            indicator.style.color = 'green';
                            score++;
                        } else {
                            indicator.textContent = '❌';
                            indicator.style.color = 'red';
                        }
                    }
                });
            }

            const resultDiv = document.getElementById('result');
            const resultMessage = document.getElementById('result-message');
            const nextButton = document.getElementById('next-button');

            resultDiv.classList.remove('hidden');

            if (score >= 4) {
                localStorage.setItem("materiBE4", true);
            // Tampilkan modal notifikasi
            const finalScoreElement = document.getElementById('finalScore');
            finalScoreElement.textContent = `${score}/5`;
            const completionModal = new bootstrap.Modal(document.getElementById('completionModal'));
            completionModal.show();
        } else {
            resultMessage.textContent = `Anda hanya menjawab ${score} soal dengan benar. Jawab minimal 4 soal benar untuk melanjutkan.`;
            resultDiv.scrollIntoView({ behavior: 'smooth' });
        }
    }

    function redirectToLanding() {
        window.location.href = 'landing.php'; // Ganti dengan URL landing page Anda
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
