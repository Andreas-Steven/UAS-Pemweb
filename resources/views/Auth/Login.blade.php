@extends('Index-Auth')

@section('title', 'KIBAR-Login')

@section('content')    
    <body class="text-center" style="background-color: #333;">
        <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto" >
                <div class="inner">
                  <h3 class="masthead-brand top-left" style="color: #00cc99; margin-right:70px;">KIBAR</h3>
                  <nav class="nav nav-masthead justify-content-center top-right">
                      <a class="nav-link" style="color: #00cc99" href="{{ url('/')}}">Home</a>
                      <a class="nav-link active" style="color: #00cc99" href="{{ url('/Login') }}">Login</a>
                      <a class="nav-link" style="color: #00cc99" href="{{ url('/Register') }}">Register</a>
                  </nav>
                </div>
            </header>
            <main role="main" class="inner cover" style="color: #00cc99;">
              <h1 class="cover-heading" style="color: #00cc99"><strong>Login</strong></h1>
              <p class="lead">
                <div class="row">
                  <div class="lead col-6">
                    <form method="post" action=" {{ route('login')}} ">
                    @csrf
                      <div class="lead form-group">
                        <label for="username">Username</label>
                        <input type="text" class="lead form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" name="username">
                        @if ($errors->has('username'))
                          <div class="lead invalid-feedback">
                            {{ $errors->first('username') }}
                          </div>
                        @endif
                      </div>

                      <div class="lead form-group">
                        <label for="password">Password</label>
                        <input type="password" class="lead form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password">
                        @if ($errors->has('password'))
                          <div class="lead invalid-feedback">
                            {{ $errors->first('password') }}
                          </div>
                        @endif
                        <br>
                      </div>
                      @if (session('status'))
                        <div class="lead lert alert-danger">
                          {{ session('status') }}
                        </div>
                      @endif
                      <button type="submit" class="lead btn btn-primary">Submit</button>
                    </form>
                  </div>
              </p>
            </main>
            <footer class="mastfoot mt-auto">
              <div class="inner">
                <a href="{{ url('/Register') }}" class="btn btn-lg btn-secondary" style="background-color: #00cc99; border-color: #00cc99; color: #ffffff">Don't have an account? Click here to join KIBAR.</a>
              </div>
            </footer>
          </div>

    </body>
@stop
