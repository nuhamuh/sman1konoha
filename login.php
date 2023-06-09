<?php
require_once('koneksi.php');

session_start();
if (isset($_SESSION['username'])) {
  header("Location: home.php");
  exit();
}
?>


    <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    // Cek username dan password di database
    $query = "SELECT * FROM t_login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
  
    if ($result->num_rows > 0) {
        // Login berhasil, redirect ke halaman home.php
        $_SESSION['username'] = $username; // Set session username
        header("Location: home.php");
        exit();
    } else {
        // Username atau password salah, tampilkan notifikasi
        $errorMessage = "Username atau password salah!";
    }
    
  }
  ?>

</body>
</html>