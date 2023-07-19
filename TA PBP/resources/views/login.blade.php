<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"type="text/javascript"></script>
    <link href="fontawesome-free-6.2.1-web/css/all.min.css" rel="stylesheet " >
    <title>Login - PERPUSTAKAAN</title>
    
</head>
<body>
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: "arial", heletica, sans-serif;
            font-size: 12px;
            background: #2980b9 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
            -webkit-animation: 10s linear 0s normal none infinite animate;
            -moz-animation: 10s linear 0s normal none infinite animate;
            -ms-animation: 10s linear 0s normal none infinite animate;
            -o-animation: 10s linear 0s normal none infinite animate;
            animation: 10s linear 0s normal none infinite animate;

        }

        @-webkit-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-moz-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-ms-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @-o-keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }

        @keyframes animate {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 500px 0;
            }
        }
    </style>

<div class="container text-left">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
    <br><br>
            <h2 class="text-center"><b>LOGIN ADMIN</b><br>PERPUSTAKAAN</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label class="text-white">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div><br>
                <div class="form-group">
                    <label class="text-white">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div><br>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="register"class="text-white">Register</a> sekarang!</p>
            </form>
        </div>
   
    <div class="col">
      
    </div>
  </div>
</div>

    
</body>
</html>