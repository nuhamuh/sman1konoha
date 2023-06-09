<?php
//Memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])){


    // membuat variabel untuk menampung data dari form
    $NIS = $_POST['nis'];
    $nama_lengkap = $_POST['nama'];
    $tgl_lahir = $_POST['tgl'];
    $jenis_kelamin = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $goldar = $_POST['goldar'];

    //jalankan query INSERT untuk mnambah data ke database
    $query = "insert into t_siswa values ('$NIS', '$nama_lengkap', '$tgl_lahir', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$goldar')";
    $result = mysqli_query($conn, $query);

    //periksa query apakah ada error
    if(!$result){
        die("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    }
    $conn->close();
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "Halaman tidak valid";
}

// melakukan reidrect (mnegalihkan) ke halaman viewdosen.php
?>