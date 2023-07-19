<html>
    <head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"type="text/javascript"></script>
    <link href="fontawesome-free-6.2.1-web/css/all.min.css" rel="stylesheet " >
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboarduser">Perpustakaan Konoha</a>
    
   
      <ul class="nav justify-content-end nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login_user">Log Out</a>
        </li>
        
      </ul>
   
  </div>
</nav>



  <div class="container text-Left">
  <div class="row">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-2">
   
  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboarduser"><i class="fa-sharp fa-solid fa-gauge"></i> Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="dashboard_transaksi_user"><i class="fa-sharp fa-solid fa-users"></i> Transaksi</a><hr class="bg-secondary">
  </li>

  <li class="nav-item">
    <a class="nav-link text-white" href="/dashboard_buku_user"><i class="fa-solid fa-book"></i> Cari Buku</a><hr class="bg-secondary">
  </li>
 
    </div>
    <div class="col -10">
    <div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title">Selamat datang {{Auth::user()->name}} di Perpustakaan Konoha</h5>
    <img src="{{ asset('perpus1.JFIF') }}"><br><br>
    <a href="/dashboard_transaksi_user" class="btn btn-primary">Transaksi</a><br><br>
    <a href="/dashboard_buku_user" class="btn btn-primary">Cari Buku</a><br><br>
    
  </div>
  <div class="card-footer text-muted">
    5 days ago
  </div>
</div>
    </div>
    <div class="col-10">
       
    </div>
  </div>
</div>
    </body>
</html>