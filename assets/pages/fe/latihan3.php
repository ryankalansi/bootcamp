<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan JavaScript</title>
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
            <h1>Latihan JavaScript</h1>
            <p>Jawab 5 soal berikut ini dengan benar! Anda harus menjawab minimal 4 soal dengan benar untuk melanjutkan ke materi berikutnya.</p>
        </div>
    </header>

    <main class="container my-5">
        <form id="quiz-form">
            <!-- Soal 1 -->
            <div>
                <p>1. Apa itu JavaScript?</p>
                <input type="radio" id="q1a" name="q1" value="a">
                <label for="q1a">Bahasa markup untuk membuat struktur web</label><br>

                <input type="radio" id="q1b" name="q1" value="b">
                <label for="q1b">Bahasa pemrograman untuk membuat halaman web interaktif</label><br>

                <input type="radio" id="q1c" name="q1" value="c">
                <label for="q1c">Bahasa untuk mendesain halaman web</label><br>

                <input type="radio" id="q1d" name="q1" value="d">
                <label for="q1d">Bahasa pengaturan server</label>
            </div>
            <hr>

            <!-- Soal 2 -->
            <div>
                <p>2. Perintah JavaScript apa yang digunakan untuk mencetak pesan di konsol?</p>
                <input type="radio" id="q2a" name="q2" value="a">
                <label for="q2a">print()</label><br>

                <input type="radio" id="q2b" name="q2" value="b">
                <label for="q2b">log()</label><br>

                <input type="radio" id="q2c" name="q2" value="c">
                <label for="q2c">console.log()</label><br>

                <input type="radio" id="q2d" name="q2" value="d">
                <label for="q2d">alert()</label>
            </div>
            <hr>

            <!-- Soal 3 -->
            <div>
                <p>3. Apa hasil dari <code>2 + "2"</code> dalam JavaScript?</p>
                <input type="radio" id="q3a" name="q3" value="a">
                <label for="q3a">4</label><br>

                <input type="radio" id="q3b" name="q3" value="b">
                <label for="q3b">22</label><br>

                <input type="radio" id="q3c" name="q3" value="c">
                <label for="q3c">Error</label><br>

                <input type="radio" id="q3d" name="q3" value="d">
                <label for="q3d">Undefined</label>
            </div>
            <hr>

            <!-- Soal 4 -->
            <div>
                <p>4. Manakah yang merupakan cara mendeklarasikan fungsi di JavaScript?</p>
                <input type="radio" id="q4a" name="q4" value="a">
                <label for="q4a">function myFunction()</label><br>

                <input type="radio" id="q4b" name="q4" value="b">
                <label for="q4b">def myFunction()</label><br>

                <input type="radio" id="q4c" name="q4" value="c">
                <label for="q4c">func myFunction()</label><br>

                <input type="radio" id="q4d" name="q4" value="d">
                <label for="q4d">declare myFunction()</label>
            </div>
            <hr>

            <!-- Soal 5 -->
            <div>
                <p>5. Apa hasil dari kode berikut ini?</p>
                <pre>
const x = 5;
if (x > 3) {
    console.log("Besar");
} else {
    console.log("Kecil");
}
                </pre>
                <input type="radio" id="q5a" name="q5" value="a">
                <label for="q5a">Besar</label><br>

                <input type="radio" id="q5b" name="q5" value="b">
                <label for="q5b">Kecil</label><br>

                <input type="radio" id="q5c" name="q5" value="c">
                <label for="q5c">Error</label><br>

                <input type="radio" id="q5d" name="q5" value="d">
                <label for="q5d">Undefined</label>
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

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Latihan JavaScript. Semua hak cipta dilindungi.</p>
    </footer>

    <!-- Tambahkan Modal di dalam Body -->
<div class="modal fade" id="completionModal" tabindex="-1" aria-labelledby="completionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="completionModalLabel">Selamat!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <h4 class="text-success">🎉 Anda telah menyelesaikan semua materi Frontend! 🎉</h4>
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
            q2: 'c',
            q3: 'b',
            q4: 'a',
            q5: 'a'
        };

        let score = 0;

        for (const [question, answer] of Object.entries(correctAnswers)) {
            const options = document.getElementsByName(question);

            options.forEach(option => {
                const label = document.querySelector(`label[for="${option.id}"]`);
                label.style.color = ''; // Reset warna

                if (option.checked) {
                    if (option.value === answer) {
                        label.style.color = 'green'; // Benar
                        score++;
                    } else {
                        label.style.color = 'red'; // Salah
                    }
                }
            });
        }

        const resultDiv = document.getElementById('result');
        const resultMessage = document.getElementById('result-message');
        const nextButton = document.getElementById('next-button');

        resultDiv.classList.remove('hidden');

        if (score >= 4) {
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
