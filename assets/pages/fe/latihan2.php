<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Interaktivitas CSS & Responsive Design</title>
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
            <h1>Latihan Interaktivitas CSS & Responsive Design</h1>
            <p>Jawab 5 soal berikut ini! Anda harus menjawab minimal 4 soal dengan benar untuk melanjutkan ke materi berikutnya.</p>
        </div>
    </header>

    <main class="container my-5">
        <form>
            <!-- Soal 1 -->
            <div>
                <p>1. Apa properti CSS yang digunakan untuk mengubah warna elemen ketika cursor diarahkan?</p>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">:hover</label> <span id="q1a-indicator" class="indicator"></span><br>

                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">:focus</label> <span id="q1b-indicator" class="indicator"></span><br>

                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">transition</label> <span id="q1c-indicator" class="indicator"></span><br>

                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">:active</label> <span id="q1d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 2 -->
            <div>
                <p>2. Media query digunakan untuk apa?</p>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">Mengubah warna elemen secara otomatis</label> <span id="q2a-indicator" class="indicator"></span><br>

                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">Mengatur style berdasarkan ukuran layar</label> <span id="q2b-indicator" class="indicator"></span><br>

                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">Membuat elemen bergerak</label> <span id="q2c-indicator" class="indicator"></span><br>

                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">Mengubah warna teks</label> <span id="q2d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 3 -->
            <div>
                <p>3. Apa kegunaan properti CSS <code>transition</code>?</p>
                <input type="radio" id="q3a" name="q3" value="a">
                <label for="q3a">Menentukan animasi warna teks</label> <span id="q3a-indicator" class="indicator"></span><br>

                <input type="radio" id="q3b" name="q3" value="b">
                <label for="q3b">Menambahkan efek transisi antar nilai properti</label> <span id="q3b-indicator" class="indicator"></span><br>

                <input type="radio" id="q3c" name="q3" value="c">
                <label for="q3c">Mengubah posisi elemen</label> <span id="q3c-indicator" class="indicator"></span><br>

                <input type="radio" id="q3d" name="q3" value="d">
                <label for="q3d">Menentukan ukuran border</label> <span id="q3d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 4 -->
            <div>
                <p>4. Atribut apa yang digunakan untuk membuat layout responsif di Bootstrap?</p>
                <input type="radio" id="q4a" name="q4" value="a">
                <label for="q4a">.fixed</label> <span id="q4a-indicator" class="indicator"></span><br>

                <input type="radio" id="q4b" name="q4" value="b">
                <label for="q4b">.container</label> <span id="q4b-indicator" class="indicator"></span><br>

                <input type="radio" id="q4c" name="q4" value="c">
                <label for="q4c">.row</label> <span id="q4c-indicator"></span><br>

                <input type="radio" id="q4d" name="q4" value="d">
                <label for="q4d">Semua benar</label> <span id="q4d-indicator"></span>
            </div>
            <hr>

            <!-- Soal 5 -->
            <div>
                <p>5. Manakah teknik terbaik untuk menyembunyikan elemen sementara pada layar kecil?</p>
                <input type="radio" id="q5a" name="q5" value="a">
                <label for="q5a">display: none</label> <span id="q5a-indicator" class="indicator"></span><br>

                <input type="radio" id="q5b" name="q5" value="b">
                <label for="q5b">visibility: hidden</label> <span id="q5b-indicator" class="indicator"></span><br>

                <input type="radio" id="q5c" name="q5" value="c">
                <label for="q5c">opacity: 0</label> <span id="q5c-indicator" class="indicator"></span><br>

                <input type="radio" id="q5d" name="q5" value="d">
                <label for="q5d">Semua benar</label> <span id="q5d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="checkAnswers()">Submit</button>
            </div>
        </form>

        <!-- Hasil -->
        <div id="result" class="hidden mt-4">
            <h4 id="result-message"></h4>
            <button id="next-button" class="hidden btn btn-success mt-3" onclick="goToNext()">Lanjutkan ke Materi Berikutnya</button>
        </div>
    </main>

    <script>
        function checkAnswers() {
            const correctAnswers = {
                q1: 'a',
                q2: 'b',
                q3: 'b',
                q4: 'd',
                q5: 'a'
            };

            let score = 0;

            for (const [question, answer] of Object.entries(correctAnswers)) {
                const options = document.getElementsByName(question);

                options.forEach(option => {
                    const indicator = document.getElementById(`${option.id}-indicator`);
                    indicator.textContent = ''; // Reset indikator

                    if (option.checked) {
                        if (option.value === answer) {
                            indicator.textContent = '✔️'; // Benar
                            indicator.style.color = 'green';
                            score++;
                        } else {
                            indicator.textContent = '❌'; // Salah
                            indicator.style.color = 'red';
                        }
                    }
                });
            }

            const resultDiv = document.getElementById('result');
            const resultMessage = document.getElementById('result-message');
            const nextButton = document.getElementById('next-button');

            resultDiv.classList.remove('hidden');

            if (score >= 4) { // Minimal 4 benar
                <?php
                    // Tandai materi Box Model sebagai selesai
                    $_SESSION['completed_latihan2'] = true;
                ?>          
                resultMessage.textContent = `Selamat! Anda menjawab ${score} soal dengan benar.`;
                nextButton.classList.remove('hidden');
            } else {
                resultMessage.textContent = `Anda hanya menjawab ${score} soal dengan benar. Jawab minimal 4 soal benar untuk melanjutkan.`;
            }

            resultDiv.scrollIntoView({ behavior: 'smooth' });
        }

        function goToNext() {
            window.location.href = 'pengantar-javascript.php'; // Redirect ke materi berikutnya
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
