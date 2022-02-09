<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">iBio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Siswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('list_siswa')}}">Lihat Data</a></li>
                  <li><a class="dropdown-item" href="{{ route('add_siswa')}}">Tambah Siswa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            @include('layout.menulog')
          </div>
        </div>
      </nav>

      <div class="m-4 p-5">
        <h1 class="display-4">Tambah Siswa</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <form class="row g-3"method="post" action="/store_siswa">
            @csrf
            @method('post')
   <div class="col-12">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
  </div>
  <div class="col-md-6">
    <label for="tempat" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat">
  </div>
  <div class="col-md-6">
    <label for="tanggal" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl">
  </div>
  <div class="col-12">
    <label for="hobi" class="form-label">Hobi</label>
    <input type="text" class="form-control" placeholder="Hobi" name="hobi">
  </div>
  <div class="col-md-6">
    <label for="jk" class="form-label">Jenis Kelamin</label>
    <select class="form-select" name="jk">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="agama" class="form-label">Agama</label>
    <select class="form-select" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Budha">Budha</option>
      <option value="katolik">Katolik</option>
      <option value="Atheis">Atheis</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Telepon</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Telepon" name=" telepon">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Email" name="email">
  </div>

  <div class="col-12" >
    <button type="submit" class="btn btn-primary"> Tambah</button>
  </div>
</form>
<script>
    $(document).ready(function(){
        $('#tabel_siswa').DataTable();
    });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
