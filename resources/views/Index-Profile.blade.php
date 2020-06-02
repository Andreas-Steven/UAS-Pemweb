<!DOCTYPE html>
<html>
    <head>
        
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('/css/Menu_Profile.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/Ubah.css') }}" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       

        <!-- Styles -->
        <style>
          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }
          .full-height {
              height: 100vh;
          }
          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }
          .position-ref {
              position: relative;
          }
          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }
          .content {
              text-align: center;
          }
          .title {
              font-size: 84px;
          }
          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }
          .m-b-md {
              margin-bottom: 30px;
          }
        </style>

        <!--NAVBAR-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light " >
            <a class="navbar-brand" href="#">KIBAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item flex-row-reverse">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                </ul>
                <div style="text-align:right">
                    <form class="form-inline my-2 my-lg-0"; action="/home/search" method="GET">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" value="{{ old('search') }}" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="SEARCH">Search</button>
                    </form>
                </div>
                <div class="top-right links">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </nav>

        <!--NAVBAR-->
    </head>

  {{--<header>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid" width="100%">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Home.php">Home</a></li>
        <li class="active"><a href="Menu_Profile.php">Profile</a></li>
        <li><a href="Login.php">LOGOUT</a></li>
      </ul>
    </div>
  </nav>
  </header>--}}

    <body id="BG">
          
      @yield('content')
      
    </body>
</html>

