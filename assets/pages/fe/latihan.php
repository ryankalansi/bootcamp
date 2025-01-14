<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan HTML & CSS</title>
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
            <h1>Latihan HTML & CSS</h1>
            <p>Jawab 5 soal berikut ini! Anda harus menjawab minimal 4 soal dengan benar untuk melanjutkan ke materi berikutnya.</p>
        </div>
    </header>

    <main class="container my-5">
    <form>
            <!-- Soal 1 -->
            <div>
                <p>1. HTML digunakan untuk?</p>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">Mendesain database</label> <span id="q1a-indicator" class="indicator"></span><br>

                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">Menentukan fungsi backend</label> <span id="q1b-indicator" class="indicator"></span><br>

                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">Membuat struktur halaman web</label> <span id="q1c-indicator" class="indicator"></span><br>

                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">Membuat elemen interaktif</label> <span id="q1d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 2 -->
            <div>
                <p>2. Tag manakah yang digunakan untuk membuat hyperlink?</p>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">&lt;img&gt;</label> <span id="q2a-indicator" class="indicator"></span><br>

                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">&lt;a&gt;</label> <span id="q2b-indicator" class="indicator"></span><br>

                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">&lt;div&gt;</label> <span id="q2c-indicator" class="indicator"></span><br>

                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">&lt;p&gt;</label> <span id="q2d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 3 -->
            <div>
                <p>3. Apa kegunaan properti CSS <code>padding</code>?</p>
                <input type="radio" id="q3a" name="q3" value="a">
                <label for="q3a">Menentukan jarak antara elemen</label> <span id="q3a-indicator" class="indicator"></span><br>

                <input type="radio" id="q3b" name="q3" value="b">
                <label for="q3b">Menentukan jarak antara konten dan border</label> <span id="q3b-indicator" class="indicator"></span><br>

                <input type="radio" id="q3c" name="q3" value="c">
                <label for="q3c">Menentukan ketebalan border</label> <span id="q3c-indicator" class="indicator"></span><br>

                <input type="radio" id="q3d" name="q3" value="d">
                <label for="q3d">Menentukan warna latar belakang</label> <span id="q3d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 4 -->
            <div>
                <p>4. Tag apa yang digunakan untuk memasukkan gambar ke dalam halaman HTML?</p>
                <input type="radio" id="q4a" name="q4" value="a">
                <label for="q4a">&lt;a&gt;</label> <span id="q4a-indicator" class="indicator"></span><br>

                <input type="radio" id="q4b" name="q4" value="b">
                <label for="q4b">&lt;img&gt;</label> <span id="q4b-indicator" class="indicator"></span><br>

                <input type="radio" id="q4c" name="q4" value="c">
                <label for="q4c">&lt;div&gt;</label> <span id="q4c-indicator" class="indicator"></span><br>

                <input type="radio" id="q4d" name="q4" value="d">
                <label for="q4d">&lt;p&gt;</label> <span id="q4d-indicator" class="indicator"></span>
            </div>
            <hr>

            <!-- Soal 5 -->
            <div>
                <p>5. Apa kegunaan atribut <code>alt</code> pada tag <code>&lt;img&gt;</code>?</p>
                <input type="radio" id="q5a" name="q5" value="a">
                <label for="q5a">Menampilkan teks jika gambar tidak dapat dimuat</label> <span id="q5a-indicator" class="indicator"></span><br>

                <input type="radio" id="q5b" name="q5" value="b">
                <label for="q5b">Menambahkan deskripsi gambar di hover</label> <span id="q5b-indicator" class="indicator"></span><br>

                <input type="radio" id="q5c" name="q5" value="c">
                <label for="q5c">Mengatur ukuran gambar</label> <span id="q5c-indicator" class="indicator"></span><br>

                <input type="radio" id="q5d" name="q5" value="d">
                <label for="q5d">Menentukan posisi gambar</label> <span id="q5d-indicator" class="indicator"></span>
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
    </div>

    <script>
        function checkAnswers() {
            const correctAnswers = {
                q1: 'c',
                q2: 'b',
                q3: 'b',
                q4: 'b',
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
                localStorage.setItem("materiFE3", true);
                <?php
                    // Tandai materi Box Model sebagai selesai
                    $_SESSION['completed_latihan'] = true;
                ?>          
                resultMessage.textContent = `Selamat! Anda menjawab ${score} soal dengan benar.`;
                nextButton.classList.remove('hidden');
            } else {
                resultMessage.textContent = `Anda hanya menjawab ${score} soal dengan benar. Jawab minimal 4 soal benar untuk melanjutkan.`;
            }

            resultDiv.scrollIntoView({ behavior: 'smooth' });
        }

        function goToNext() {
            window.location.href = 'interaktivitas-css.php'; // Redirect ke materi berikutnya
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
