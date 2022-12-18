<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PENERAPAN PAGE</title>
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
                <a class="nav-link" href="../About/about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Orthers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="pengantar.php">Pengantar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="penerapan.php">Penerapan</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="contoh.php">Contoh</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="manfaat.php">Manfaat</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../user.php">My Profil</a></li>
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
      <div class="container-fluid bg-drak mt-4" styel="height: 100vh">
        <div class="card mb-3">
          <img src="../Assets/penerapan.jpeg" class="card-img-top" alt="...">
          <div class="section-subtitle">
            <h2 class="card-title">Cara Menerapkan Self Love</h2>
            <p class="card-text">
              <p> Self-love adalah sebuah fondasi yang memungkinkan kita untuk bersikap tegas, menjalin hubungan yang sehat dengan orang lain, mengejar minat dan mimpi, serta merasa bangga kepada diri sendiri. Oleh karena itu, penting untuk mengelola self-love dengan baik. <br>
                Tak hanya bermanfaat untuk membuat Anda merasa tenang dalam menjalani hidup, self-love juga memiliki berbagai manfaat bagi kesehatan fisik maupun mental, di antaranya:</p>
                <p>
                1. Mendapatkan kepuasan hidup<br>
                Saat benar-benar menerapkan self-love, Anda akan menerima diri sendiri apa adanya. Hal ini termasuk menerima semua kondisi dalam hidup, baik suka maupun duka, dan bertanggung jawab atas segala tindakan yang dilakukan. Semuanya tentu memengaruhi kepuasan dalam hidup karena Anda punya kontrol atas diri sendiri.<br>
                </p><p>
                2. Membiasakan diri untuk hidup sehat<br>
                Dalam mencintai diri sendiri, Anda tentunya ingin memberikan yang terbaik bagi diri sendiri, termasuk dalam hal menjaga kesehatan tubuh.
                
                Dengan adanya self-love, Anda akan termotivasi untuk hidup lebih sehat, misalnya dengan lebih banyak mengonsumsi makanan bergizi, mencukupi waktu istirahat, dan berolahraga secara rutin.</p><p>
                
                3. Meningkatkan self-esteem<br>
                Self-esteem memainkan peranan yang sangat penting dalam kesehatan mental. Self-esteem adalah cara seseorang memandang dan menerima dirinya sendiri, serta merasa percaya diri. Jika self-love dikelola dengan baik, self-esteem pun akan meningkat.<br>
                Tak hanya itu, dengan mencintai diri sendiri, Anda juga akan lebih mudah mengatasi stres dan tegar dalam menghadapi permasalahan hidup.</p>
              </p>
            <p class="card-text"><small class="text-muted">CINTAI DIRIMU SENDIRI. <br>Cukup untuk mengambil tindakan yang di perlukan untuk kebahagian anda. :)</small></p>
          </div>
        </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</php> 