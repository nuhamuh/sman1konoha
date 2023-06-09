<?php
session_start();
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Query hapus data
    $query = "DELETE FROM t_siswa WHERE NIS='$id'";
    $result = $conn->query($query);
    
    if($result){
        // Jika data berhasil dihapus, redirect ke halaman sebelumnya
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Terjadi kesalahan saat menghapus data.";
    }
}

$conn->close();
?>
