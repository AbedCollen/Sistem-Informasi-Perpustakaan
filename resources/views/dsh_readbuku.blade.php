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
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 ">
    <ul class="nav flex-column ml-3 mb-2 ">
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
      <br>
    <a class="btn btn-primary" href="/tambahbuku" role="button"><i class="fa-solid fa-plus"></i> Tambah Buku</a>

   

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
                <th>Id Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tanggal Masuk</th>
                <th>Action</th>
            </tr>
            @foreach($buku as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->judul }}</td> 
                <td>{{ $b->pengarang }}</td> 
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->tanggal_masuk }}</td>
                
                <td><button type="button" class="btn btn-success "><a href="/update/{{ $b->id }}"><i class="fa-solid fa-pen-to-square text-white"></i></a></button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-sharp fa-solid fa-trash text-white"></i></button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h5>Apakah anda yakin ingin menghapus data ini?</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <a href="/delete/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
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