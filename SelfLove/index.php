<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME PAGE</title>
</head>
<body>
    <?php 
    session_start();
    if(empty($_SESSION['id'])) {
      session_destroy();
      header("location:halaman/login.php");
    }
    
    
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-drak">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SELF <span style="color: brown"> LOVE </span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About/about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Orthers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="view/pengantar.php">Pengantar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="view/penerapan.php">Penerapan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="view/contoh.php">Contoh</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="view/manfaat.php">Manfaat</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="user.php">My Profil</a></li>
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>

      <div class="container-fluid bg-light text-drak" styel="height: 100vh">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Assets/Self love 1.jpeg" class="d-block w-100" alt="self love image 1" style="height: 400px">
              <div class="carousel-caption">
                <h5><span style="color: rgb(13, 12, 12)">Pentingnya SELF LOVE</h5></span>
                <p> <span style="color: rgb(13, 12, 12)">Kepercayaan diri adalah salah satu kunci seseorang dapat tampil maksimal dalam segala hal yang dilakukannya.</span> </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Assets/Self love 2.jpeg" class="d-block w-100" alt="self love image 2" style="height: 400px">
              <div class="carousel-caption">
                <h5><span style="color: rgb(13, 12, 12)">Berikan Rasa Cinta</span></h5>
                <p> <span style="color: rgb(13, 12, 12)">Salah satu cara untuk menanamkan self love pada anak adalah dengan memberikan banyak perasaan cinta agar anak tahu jika orangtuanya selalu ada untuknya.</span></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Assets/Self love 3.jpeg" class="d-block w-100" alt="self love image 3" style="height: 400px">
              <div class="carousel-caption">
                <h5><span style="color: rgb(13, 12, 12)">Kenapa sih harus self love?</span></h5>
                <p><span style="color: rgb(13, 12, 12)">Saat makin mencintai diri sendiri, kita akan lebih peka dengan semua hal yang kita rasakan. Hal ini pun membantu kita untuk lebih menghargai hidup.</span></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="row text-center align-items-center mt-2">
          <div class="col-12">
            <img src ="Assets/profil.png" alt="self love" style="width : 100px ;height : 150px;">
            <h2>SELF LOVE</h2>
            <i> Mengenal <span style="color: brown"> SELF LOVE </span></i>
          </div>
        </div>
        <div class="container-fluid bg-drak mt-4" styel="height: 100vh">
          <div class="col-sm-15 g-5">
            <div class="card">
          <div class="card text-center">
              <div class="card-header">
                WARNING!!!
              </div>
              <div class="card-body">
                <h5 class="card-title">ABOUT</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="About/about.php" class="btn btn-primary">Go To ABOUT</a>
              </div>
              <div class="card-footer text-muted">
                
                
              </div>
            </div>
      
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</php> 