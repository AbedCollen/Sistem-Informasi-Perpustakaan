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
      <br>
   


<br><br>
    <nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex"  action="" method="get">
      <input class="form-control me-2" name="keyword"  placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>

</nav>
    
        <table class="table table-info">
        <tr>
                <th>ID Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Balik</th>
                
            </tr>
            @foreach($transaksi as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->nama }}</td> 
                <td>{{ $t->pinjam }}</td> 
                <td>{{ $t->balik }}</td>
              
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-10">
   
    </div>
  </div>
</div>
        
    </body>
</html>
