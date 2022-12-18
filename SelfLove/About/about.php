<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ABOUT PAGE</title>
</head>
<body>
<?php 
    session_start();
    if(empty($_SESSION['id'])) {
      session_destroy();
      header("location:../halaman/login.php");
    }
    
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SELF <span style="color: brown"> LOVE </span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Orthers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../view/pengantar.php">Pengantar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../view/penerapan.php">Penerapan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../view/contoh.php">Contoh</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../view/manfaat.php">Manfaat</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="row text-drak mt-4">
        <div class="col-sm-4 g-4">
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Pengantar Self Love</h5>
              <p class="card-text">Self love artinya mencintai diri sendiri, tetapi bukan berarti memenuhi diri dengan segala keinginan.</p>
              <a href="\pengantar" class="btn btn-primary d-block">Lihat Lebih Lengkap</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </div>
        </div>
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Contoh Self Love</h5>
              <p class="card-text">Bersyukur atas Segala Hal yang Sudah Dimiliki
                Bersyukur menjadi salah satu cara untuk mencintai.</p>
              <a href="\contoh" class="btn btn-primary d-block">Lihat Lebih Lengkap</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </div>
        </div>
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Cara Menerapkan Self Love</h5>
              <p class="card-text">Mengenali Diri 
                Langkah pertama yang harus dilakukan adalah mengenali diri sendiri.</p>
              <a href="\penerapan" class="btn btn-primary d-block">Lihat Lebih Lengkap</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </div>
        </div>
        <div class="col-sm-4 g-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center"> Manfaat Self Love Untuk Kesehatan Mental</h5>
              <p class="card-text"> Mendapatkan kepuasan hidup
                Saat benar-benar menerapkan self-love, Anda akan menerima diri sendiri apa adanya.</p>
              <a href="\manfaat" class="btn btn-primary d-block">Lihat Lebih Lengkap</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </div>
        </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</php> 