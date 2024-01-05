<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .nav-link {
            color :black;
        }

        .carol {
            width:100%;
            height:400px;
        }
        .logo {
            width:10%;
            margin-left:auto;
            margin-right:auto;
        }
        .card-baru {
            border:none;
        }
        .text-footer{
            font-weight:bold;
            margin-bottom:5%;
            font-size:2.5vw;
            color : white;
        }
        .info {
            color:white;
        }
    </style>
  </head>
  <body>
    
    <!-- awal nav -->
    <nav class="navbar bg-success-subtle fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./gambar/pmb.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      SMK Putra Mandiri Bangsa
    </a>

    <ul class="nav mx-auto nav-underline">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#jurusan">Kompetensi Keahlian</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#kegiatan">Kegiatan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#kontak">Kontak kami</a>
  </li>
</ul>
  </div>
</nav>
    <!-- akhir nav -->
    <!-- awal carousel -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./gambar/gedung1.jpg" class="d-block carol" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./gambar/gedung2.jpg" class="d-block carol" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./gambar/gedung3.jpg" class="d-block carol" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- akhir carousel -->
    <!-- awal jurusan -->
    <h5 id="jurusan" class="text text-center mt-4 mb-4">Kompetensi Keahlian</h5>

    <div class="card-group">

    <div class="card card-baru m-2" style="width: 18rem;">
    <img src="./gambar/tkj.png" class="card-img-top logo" alt="...">
    <div class="card-body">
        <p class="card-text text-center">Teknik Komputer dan Jaringan</p>
    </div>
    </div>

    <div class="card card-baru m-2" style="width: 18rem;">
    <img src="./gambar/tkj.png" class="card-img-top logo" alt="...">
    <div class="card-body">
        <p class="card-text text-center">Teknik Komputer dan Jaringan</p>
    </div>
    </div>

    <div class="card card-baru m-2" style="width: 18rem;">
    <img src="./gambar/tkj.png" class="card-img-top logo" alt="...">
    <div class="card-body">
        <p class="card-text text-center">Teknik Komputer dan Jaringan</p>
    </div>
    </div>

    <div class="card card-baru m-2" style="width: 18rem;">
    <img src="./gambar/tkj.png" class="card-img-top logo" alt="...">
    <div class="card-body">
        <p class="card-text text-center">Teknik Komputer dan Jaringan</p>
    </div>
    </div>

    
    </div>
    <!-- akhir jurusan -->
    <hr>
    <!-- awal kegiatan -->
    <h5 id="kegiatan" class="text text-center mt-4 mb-4">Kegiatan</h5>
    
    <div class="card-group">

    <div class="card m-2" style="width: 18rem;">
  <img src="./gambar/makankerupuk.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lomba makan kerupuk HUT RI 78</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card m-2" style="width: 18rem;">
  <img src="./gambar/balapkarung.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lomba karung racing HUT RI 78</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card m-2" style="width: 18rem;">
  <img src="./gambar/futsal.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lomba futsal</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    
    </div>

    <!-- akhir kegiatan -->
    <!-- kontak kami -->
    <div id="kontak" class="card bg-secondary">
    <div class="text text-footer mx-auto">
        Kontak Kami
    </div>

    <div class="card-body">
        <div class="info">
        <h5>Lokasi : </h5>
        <p>Kp. Lembur Situ, Cimande Hilir, Caringin - Bogor</p>
        </div>

        <div class="info">
        <h5>Email : </h5>
        <p>smkpmb@gmail.com</p>
        </div>

        <div class="info">
        <h5>Call : </h5>
        <p>122345678</p>
        </div>
    </div>
    </div>
    <!-- akhir kontak kami -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>