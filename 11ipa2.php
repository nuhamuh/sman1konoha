<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        table {
            
            width: 100%;
            border: 1px solid black;
        }
        h2{
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
            border: 5px solid black;
        }
        .ctn{
            width: 1100px;
            margin: auto;
        }
        tr {
            background-color: #f2f2f2;
            border: 5px solid black;
        }
    </style>
</head>
<body>
  <?php include 'header.php'; ?>
    <br><h2>Data Siswa Kelas 11 IPA 2</h2><br>
    <div class="ctn" >
    <table>
        <tr>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Goldar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM t_siswa where kelas='11 IPA 2'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['NIS']."</td>
                        <td>".$row['nama_lengkap']."</td>
                        <td>".$row['tgl_lahir']."</td>
                        <td>".$row['jenis_kelamin']."</td>
                        <td>".$row['kelas']."</td>
                        <td>".$row['jurusan']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['goldar']."</td>
                        <td>
                            <a href='edit.php?id=".$row['NIS']."' class='btn btn-secondary'>
                                <i class='fas fa-marker'></i>
                            </a>
                            <a href='hapus.php?id=".$row['NIS']."' class='btn btn-danger' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">
                                <i class='far fa-trash-alt'></i>
                            </a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr class='text-center'>
                    <td colspan='9' class='text-center'>Belum ada data yang dimasukkan.</td>
                </tr>";
        }

        $conn->close();
        ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>