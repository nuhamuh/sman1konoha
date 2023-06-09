<?php
session_start();
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Query ambil data siswa berdasarkan ID
    $query = "SELECT * FROM t_siswa WHERE NIS='$id'";
    $result = $conn->query($query);
    
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $NIS = $row['NIS'];
        $nama = $row['nama_lengkap'];
        $tgl_lahir = $row['tgl_lahir'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $kelas = $row['kelas'];
        $jurusan = $row['jurusan'];
        $alamat = $row['alamat'];
        $goldar = $row['goldar'];
    }else{
        echo "Data siswa tidak ditemukan.";
        exit();
    }
}else{
    echo "ID siswa tidak diberikan.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
        h2{
            text-align: center;
        }
        .ctn{
            width: 800px;
            margin: auto;
        }
        .uk {
            margin: 10px auto auto 10px;
        }
        .ut {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <br><h2>Edit Data Siswa</h2>
    <div class="ctn">
        <form id="form_mahasiswa" action="proses_edit.php?kelas=<?php echo $kelas; ?>" method="post">
            <fieldset>
                <div class="form-group">
                    <label class="uk" for="nis">NIS</label>
                    <input type="text" class="form-control" name="nis" id="nis" value="<?php echo $NIS ?>">
                </div>
                <div class="form-group">
                    <label class="uk" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama ?>">
                </div>
                <div class="form-group">
                    <label class="uk" for="tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl" id="tgl" value="<?php echo $tgl_lahir ?>">
                </div>
                <div class="form-group">
                    <label class="uk" for="gender">Jenis Kelamin</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value=""></option>
                        <option value="L" <?php if($jenis_kelamin == 'L') echo 'selected'; ?>>L</option>
                        <option value="P" <?php if($jenis_kelamin == 'P') echo 'selected'; ?>>P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="uk" for="kelas">Kelas</label>
                    <select class="form-control" id="kelas" name="kelas">
                        <option value=""></option>
                        <option value="10 IPA 1" <?php if($kelas == '10 IPA 1') echo 'selected'; ?>>10 IPA 1</option>
                        <option value="10 IPA 2" <?php if($kelas == '10 IPA 2') echo 'selected'; ?>>10 IPA 2</option>
                        <option value="10 IPS 1" <?php if($kelas == '10 IPS 1') echo 'selected'; ?>>10 IPS 1</option>
                        <option value="10 IPS 2" <?php if($kelas == '10 IPS 2') echo 'selected'; ?>>10 IPS 2</option>
                        <option value="11 IPA 1" <?php if($kelas == '11 IPA 1') echo 'selected'; ?>>11 IPA 1</option>
                        <option value="11 IPA 2" <?php if($kelas == '11 IPA 2') echo 'selected'; ?>>11 IPA 2</option>
                        <option value="11 IPS 1" <?php if($kelas == '11 IPS 1') echo 'selected'; ?>>11 IPS 1</option>
                        <option value="11 IPS 2" <?php if($kelas == '11 IPS 2') echo 'selected'; ?>>11 IPS 2</option>
                        <option value="12 IPA 1" <?php if($kelas == '12 IPA 1') echo 'selected'; ?>>12 IPA 1</option>
                        <option value="12 IPA 2" <?php if($kelas == '12 IPA 2') echo 'selected'; ?>>12 IPA 2</option>
                        <option value="12 IPS 1" <?php if($kelas == '12 IPS 1') echo 'selected'; ?>>12 IPS 1</option>
                        <option value="12 IPS 2" <?php if($kelas == '12 IPS 2') echo 'selected'; ?>>12 IPS 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="uk" for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value=""></option>
                        <option value="IPA" <?php if($jurusan == 'IPA') echo 'selected'; ?>>IPA</option>
                        <option value="IPS" <?php if($jurusan == 'IPS') echo 'selected'; ?>>IPS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="uk" for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat ?>">
                </div>
                <div class="form-group">
                    <label class="uk" for="goldar">Golongan Darah</label>
                    <select class="form-control" id="goldar" name="goldar">
                        <option value=""></option>
                        <option value="A" <?php if($goldar == 'A') echo 'selected'; ?>>A</option>
                        <option value="B" <?php if($goldar == 'B') echo 'selected'; ?>>B</option>
                        <option value="AB" <?php if($goldar == 'AB') echo 'selected'; ?>>AB</option>
                        <option value="O" <?php if($goldar == 'O') echo 'selected'; ?>>O</option>
                    </select>
                </div>
            </fieldset>
            <p>
                <input type="submit" class="btn btn-primary ut" name="edit" value="Update Data">
            </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
