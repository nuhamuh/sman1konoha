<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 KONOHA</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #068e7b;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-primary text-bg-dark bg-black fix-tops">
      <div class="container">
        <a class="navbar-brand fw-bold" style="color: aquamarine;" href="home.php">SMAN 1 KONOHA</a>
        <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold" aria-current="page" href="input.php" >Input</a>
        <li class="nav-item dropdown">
                <a class="nav-link fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Siswa
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item dropend">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                      Kelas 10
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="10ipa1.php">10 IPA 1</a></li>
                      <li><a class="dropdown-item" href="10ipa2.php">10 IPA 2</a></li>
                      <li><a class="dropdown-item" href="10ips1.php">10 IPS 1</a></li>
                      <li><a class="dropdown-item" href="10ips2.php">10 IPS 2</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropend">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                      Kelas 11
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="11ipa1.php">11 IPA 1</a></li>
                      <li><a class="dropdown-item" href="11ipa2.php">11 IPA 2</a></li>
                      <li><a class="dropdown-item" href="11ipa1.php">11 IPS 1</a></li>
                      <li><a class="dropdown-item" href="11ips2.php">11 IPS 2</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropend">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                      Kelas 12
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="12ipa1.php">12 IPA 1</a></li>
                      <li><a class="dropdown-item" href="12ipa2.php">12 IPA 2</a></li>
                      <li><a class="dropdown-item" href="12ips1.php">12 IPS 1</a></li>
                      <li><a class="dropdown-item" href="12ips2.php">12 IPS 2</a></li>
                    </ul>
                  </li>
                </ul>
            </li>
        <a class="nav-link fw-bold" href="logout.php">Logout</a>
        </nav>
      </div>
    </header>
</body>
</html>