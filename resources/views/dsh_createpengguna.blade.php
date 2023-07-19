<html>
    <head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"type="text/javascript"></script>
    <link href="fontawesome-free-6.2.1-web/css/all.min.css" rel="stylesheet " >
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">Perpustakaan Konoha</a>
    
   
      <ul class="nav justify-content-end nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">Log Out</a>
        </li>
        
      </ul>
   
  </div>
</nav>
<div class="container text-Left">
  <div class="row">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-2">
  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboard"><i class="fa-sharp fa-solid fa-gauge"></i> Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboard_pengguna"><i class="fa-sharp fa-solid fa-users"></i> Data Pengguna</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboard_buku"><i class="fa-solid fa-book"></i> Data Buku</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboard_transaksi"><i class="fa-solid fa-right-left"></i> Transaksi</a><hr class="bg-secondary">
  </li>
    </div>

    <div class="col -10">
    <form method="post" action="/create_pengguna">
            {{csrf_field()}}
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Nama Pengguna</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengguna">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" name="un" class="form-control" id="exampleFormControlInput1" placeholder="Username">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="pw" class="form-control" id="exampleFormControlInput1" placeholder="Password">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Salatiga">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
            <input type="text" name="telepon" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : 08893193819">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Role</label>
            <input type="text" name="role" class="form-control" id="exampleFormControlInput1" placeholder="Petugas/Anggota">
            </div>
            <div class="d-grid gap-2 d-md-block">
            <input type="submit" value="Tambah User" type="button" class="btn btn-primary"></input>
            <a href ="/dashboard_pengguna" class="btn btn-secondary" type="button">cancel</a>
            </div>
        </form>
    </div>
    <div class="col-10">
   
    </div>
  </div>
</div>
 
    </body>
</html>