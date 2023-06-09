<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
        h2{
            text-align: center;
        }
        .ctn{
            width: 700px;
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
    <br><h2>Input Data Siswa</h2>
    <div class="ctn">
        <form id="form_siswa" action="proses_input.php" method="post">
            <div class="form-group">
                <label class="uk" for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis">
            </div>
            <div class="form-group">
                <label class="uk" for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label class="uk" for="tgl">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl" id="tgl">
            </div>
            <div class="form-group">
                <label class="uk" for="gender">Jenis Kelamin</label>
                <select class="form-control" id="gender" name="gender">
                    <option value=""></option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div class="form-group">
                <label class="uk" for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                    <option value=""></option>
                    <option value="10 IPA 1">10 IPA 1</option>
                    <option value="10 IPA 2">10 IPA 2</option>
                    <option value="10 IPS 1">10 IPS 1</option>
                    <option value="10 IPS 2">10 IPS 2</option>
                    <option value="11 IPA 1">11 IPA 1</option>
                    <option value="11 IPA 2">11 IPA 2</option>
                    <option value="11 IPS 1">11 IPS 1</option>
                    <option value="11 IPS 2">11 IPS 2</option>
                    <option value="12 IPA 1">12 IPA 1</option>
                    <option value="12 IPA 2">12 IPA 2</option>
                    <option value="12 IPS 1">12 IPS 1</option>
                    <option value="12 IPS 2">12 IPS 2</option>
                </select>
            </div>
            <div class="form-group">
                <label class="uk" for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value=""></option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
            </div>
            <div class="form-group">
                <label class="uk" for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>
            <div class="form-group">
                <label class="uk" for="goldar">Golongan Darah</label>
                <select class="form-control" id="goldar" name="goldar">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary ut" name="input">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
