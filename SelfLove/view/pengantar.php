<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PENGANTAR PAGE</title>
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
          <img src="../Assets/pengantar.jpeg" class="card-img-top" alt="...">
          <div class="section-subtitle">
            <h2 class="card-title"><h1 style="font-family:verdana;">Pengantar Self Love</h1></h2>
            <p class="card-text">???Self love artinya mencintai diri sendiri, tetapi bukan berarti memenuhi diri dengan segala keinginan. Self love mengharuskan kita untuk memperlakukan dan menerima diri sendiri dengan baik dan apa adanya. Selain itu juga merupakan aspek penting dari kesehatan mental.<br> Saat self love diterapkan, kita akan merasa lebih mudah untuk berpikir positif, termasuk saat marah, kecewa, atau sedih, karena hal tersebut adalah bentuk dari penerimaan diri.???
              <p>
              Universitas Ahmad Dahlan (UAD) melalui unit konseling mahasiswa bidang pengembangan karier dan kesejahteraan mahasiswa Biro Kemahasiswaan dan Alumni (Bimawa) UAD mengadakan talkshow dengan tema ???Self Love??? yang tayang secara langsung di kanal YouTube BIMAWA UAD Jogja pada 10 Maret 2022. Hadir sebagai pembicara Nila Zaimatus Septiana, M. Pd. yang juga sebagai dosen IAIN Kediri. <br>
              <p>
              Menurut Nila, tujuan dari self love adalah bukan hanya membahagiakan diri sendiri tetapi juga harus toleran terhadap orang lain. Kebahagiaan dan kesejahteraan kita yang bisa mengubah diri dengan tidak mengorbankan orang lain, cara mencintai diri sendiri tanpa mengorbankan orang lain. 
              <p>
              Lebih lanjut ia memaparkan alasan sulit untuk mencintai diri sendiri yakni kurang bisa menerima diri apa adanya, kurang bersyukur, kurang bisa mencintai diri sendiri, juga kurang bisa mengevaluasi diri sendiri. Cara agar bisa memaafkan diri sendiri antara lain menyadari apa yang terjadi di dalam diri kita, menyadari perasaan yang muncul, serta bisa memvalidasi perasaan dan pikiran.<br>
              <p>
              ???Perlu teman dan pendamping ketika mengalami kegagalan agar bisa membuat suasana menjadi kondusif. Pilihlah orang terdekat yang paham akan diri kita yang bisa memberi solusi,??? ucapnya.</p>
              <p>
              Self love sangat penting karena bisa membuat diri kita menjadi lebih baik. Dari segi sosial, hindari teman yang berpotensi sebagai toksik, berani untuk berkata tidak dengan cara yang baik dan tidak menyinggung perasaan orang lain, dan menghindari hal yang membuat mental menjadi down.<p>Self love bukan hanya mengagung-agungkan diri sendiri, tetapi harus seimbang antara diri sendiri dan orang lain. Penting sekali ketika kita melakukan sesuatu dengan memperhatikan manfaat bagi orang lain. Bedakan antara self love, self narsis, dan self first. Kita harus benar-benar hati-hati ketika akan melakukan sesuatu. Harus mengetahui dampak bagi diri sendiri dan orang lain.</p>
              <p>
              ???Saat ini marak di kalangan anak muda mengenai self healing dan self love padahal kedua hal itu sangat berbeda. Perlu dipahami bahwa healing adalah proses penyembuhan setelah mengalami trauma yang berat. Jangan dikit-dikit healing dan ujung-ujungnya malah membuat sengsara,???
              pungkas Nila. <br> </p>
              <p>
              Terakhir Nila menyampaikan cara melakukan self love, yakni dengan melakukan tindakan. <br> Contohnya luangkan secara rutin waktu selama tiga puluh menit untuk mind fullness dan relaksasi. Melakukan hal yang membuat bahagia seperti olahraga, yoga, banyak bersyukur dengan membuat jurnal harian, juga apresiasi diri dengan tidak merugikan diri sendiri. Intinya, banyak cara yang bisa dilakukan untuk self love yang mudah dan bermanfaat.</p>
            <p class="card-text"><small class="text-muted">Jatuh cinta dengan merawat diri sendiri :)</small></p>
          </div>
        </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</php> 