<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CONTOH PAGE</title>
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
          <img src="../Assets/contoh.jpeg" class="card-img-top" alt="...">
          <div class="section-subtitle">
            <h2 class="card-title">Contoh Self Love</h2>
            <p class="card-text">
              <p>1. Bersyukur atas Segala Hal yang Sudah Dimiliki<br>
              Bersyukur menjadi salah satu cara untuk mencintai diri sendiri. Pasalnya dengan bersyukur terhadap segala hal yang sudah Anda miliki, berarti Anda menerima segala macam kekurangan dan juga kelebihan yang ada pada diri Anda sendiri. Ingatlah, bahwa dengan bersyukur berarti Anda tidak boleh membandingkan diri Anda dengan orang lain. Selain akan membuat kepercayaan diri Anda menurun, Anda juga tidak akan mampu untuk dapat berkembang dan memperbaiki diri.</p>
              <p>
              2. Memberikan Self Reward<br>
              Memberikan self reward dapat menjadi salah satu alternatif bagi Anda untuk mencintai diri sendiri. Self reward setiap orang tentu berbeda-beda. Melalui aktivitas self reward Anda dapat melakukan self love dengan memberikan hadiah bagi diri Anda sebagai bentuk apresiasi diri atas pencapaian yang telah diraih. Sebagai contoh, belilah sesuatu yang sangat Anda inginkan atau pergilah ke suatu tempat dan lakukanlah aktivitas yang belum pernah Anda lakukan sebelumnya. Hal tersebut akan sangat menyenangkan dan berguna bagi Anda karena dapat memberikan sebuah sudut pandang yang baru dalam menghadapi sesuatu. </p>
              <p>
              3. Awali Hari dengan Berpikir positif<br>
              Selain bersyukur dan memberikan self reward pada diri Anda sendiri, membiasakan diri untuk selalu berpikir positif dalam menghadapi berbagai permasalahan yang muncul dalam kehidupan juga merupakan salah satu self love sederhana yang bisa Anda terapkan. Awali pagi Anda dengan semangat, berdoa, berolahraga, dan juga menyantap makanan yang sehat dan bergizi sehingga Anda dapat menjadi lebih fokus dalam menjalani kegiatan sepanjang hari. <br> Ciptakan suasana hati dan pikiran yang sehat, jauhkan diri dari rasa cemas dan gelisah. Pilihlah lingkungan gaul yang tidak toxic sehingga akan membantu Anda untuk memaknai hidup dengan lebih positif.</p>
              <p>
              4. Buat Perencanaan Diri<br>
              Membuat perencanaan diri merupakan salah satu self love yang bisa Anda lakukan. Perencanaan dengan tujuan yang jelas akan sangat membantu Anda untuk menghadapi dinamisnya kehidupan dengan lebih kuat dan siap. Anda dapat membekali diri dengan membuat daily activity, perencanaan keuangan, menyusun jenjang karir, dan lain sebagainya. Hal ini akan sangat berguna dan membantu Anda untuk lebih fokus memperbaiki dan mengembangkan diri Anda agar menjadi pribadi yang lebih optimal dan percaya diri.</p>
            <p class="card-text"><small class="text-muted">Jatuh cinta dengan merawat diri sendiri :)</small></p>
          </div>
        </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</php> 