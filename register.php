<?php
session_start();
include 'assets/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $email = $_POST['email'];

    // Simpan data ke database
    $sql = "INSERT INTO users (username, password, email, created_at) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        $_SESSION['registered'] = true; // Tandai user telah mendaftar
        echo "<script>alert('Pendaftaran berhasil! Silakan login.');</script>";
        header("Location: login.php");
        exit;
    } else {
        echo "<script>alert('Pendaftaran gagal. Silakan coba lagi.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>
</body>
</html>
