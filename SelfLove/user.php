<!doctype php>
<php lang="en">
  <head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

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
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    <div class="container mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    <?php 
                    
              
                    session_start();
                    
                    ?>

                    
               
                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">User</span>
                        <h5 class="mt-2 mb-0"><?php echo  $_SESSION["username"]   ;   ?></h5>
                        <span>Member</span>
                        
                        <div class="px-4 mt-1">
                            <p class="fonts"><?php echo  $_SESSION["deskripsi"]   ;   ?> </p>
                        
                        </div>
                        
                        
                        <div class="buttons">
                            <a href="editUsers/edit.php"><button class="btn btn-outline-primary px-4">Edit</button></a>
                            
                            <a href="editUsers/hapusUser.php"><button class=" btn btn-outline-danger px-4 ms-3">Delete</button></a>
                            <a href="editUsers/logOutProses.php"> <button class="btn btn-danger px-4 ms-3">Log Out</button></a>
                           
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</php>