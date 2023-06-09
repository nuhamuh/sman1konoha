<?php
session_start();
include 'koneksi.php';

if(isset($_POST['edit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl'];
    $jenis_kelamin = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $goldar = $_POST['goldar'];
    
    // Query update data siswa
    $query = "UPDATE t_siswa SET nama_lengkap='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', kelas='$kelas', jurusan='$jurusan', alamat='$alamat', goldar='$goldar' WHERE NIS='$nis'";
    
    if($conn->query($query) === TRUE){
        $_SESSION['success_message'] = "Data siswa berhasil diperbarui.";
    }else{
        $_SESSION['error_message'] = "Terjadi kesalahan: " .mysqli_errno($conn);
    }
    
    $conn->close();
}

// Redirect ke halaman kelas yang sesuai
if (isset($_POST['edit']) && $_SESSION['success_message']) {
    $kelas = $_POST['kelas'];
    if ($kelas == '10 IPA 1') {
        header("Location: 10ipa1.php");
        exit();
    } elseif ($kelas == '10 IPA 2') {
        header("Location: 10ipa2.php");
        exit();
    } elseif ($kelas == '10 IPS 1') {
        header("Location: 10ips1.php");
        exit();
    } elseif ($kelas == '10 IPS 2') {
        header("Location: 10ips2.php");
        exit();
    } elseif ($kelas == '11 IPA 1') {
        header("Location: 11ipa1.php");
        exit();
    } elseif ($kelas == '11 IPA 2') {
        header("Location: 11ipa2.php");
        exit();
    } elseif ($kelas == '11 IPS 1') {
        header("Location: 11ips1.php");
        exit();
    } elseif ($kelas == '11 IPS 2') {
        header("Location: 11ips2.php");
        exit();
    } elseif ($kelas == '12 IPA 1') {
        header("Location: 12ipa1.php");
        exit();
    } elseif ($kelas == '12 IPA 2') {
        header("Location: 12ipa2.php");
        exit();
    } elseif ($kelas == '12 IPS 1') {
        header("Location: 12ips1.php");
        exit();
    } else {
        header("Location: 12ips2.php");
        exit();
    }
} else {
    echo "Halaman tidak valid";
}
?>
