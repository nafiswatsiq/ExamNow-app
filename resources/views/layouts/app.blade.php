<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  @yield('style')

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="header">
    <div class="container py-1">
      <a class="navbar-brand fw-700 fs-4" href="{{ url('/') }}">ExamNow</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-item">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex flex-wrap gap-2 align-items-center">
          @auth
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-800 text-light m-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url(auth()->user()->role) }}"><i class="uil uil-apps me-2"></i> Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="{{ url('logout') }}" method="post" class="m-0">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="uil uil-signout me-2"></i> Keluar</a></button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          @else
            @if (Route::current()->getName() == 'login')
            <a href="{{ url('register') }}" class="btn fw-semibold text-light rounded-pill"><i class="uil uil-user"></i> Daftar</a>
            @elseif(Route::current()->getName() == 'register')
            <a href="{{ url('login') }}" class="btn fw-semibold text-light rounded-pill"><i class="uil uil-sign-out-alt"></i> Masuk</a>
            @else
            <a href="{{ url('register') }}" class="btn fw-semibold text-light rounded-pill"><i class="uil uil-user"></i> Daftar</a>
            <a href="{{ url('login') }}" class="btn fw-semibold text-light rounded-pill"><i class="uil uil-sign-out-alt"></i> Masuk</a>
            @endif
          @endauth
        </div>
      </div>
    </div>
  </nav>
  
  @yield('content')

  <footer class="{{ Route::current()->getName() == 'login' ? 'd-none' : (Route::current()->getName() == 'register' ? 'd-none' : (Route::current()->getName() == 'register-as' ? 'd-none' : '')) }}">
    <div class="container pb-4 pt-5 ">
      <div class="row border-bottom py-3">
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Syarat dan Ketentuan</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Kebijakan Privasi</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Bantuan</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Hubungi kami</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Kritik & saran</a>
      </div>
      <div class="d-flex flex-md-row flex-column-reverse justify-content-between pt-3 gap-2">
        <p class="col-auto text-black-50 fw-semibold">Copyright &copy; nw.project 2022 | All right reserved</p>
        <div class="col-auto">
          <div class="row">
            <div class="col-auto">
              <a href="#" class="text-black-50 text-decoration-none fw-semibold text-hover"><i class="uil uil-facebook"></i> Facebook</a>
            </div>
            <div class="col-auto">
              <a href="#" class="text-black-50 text-decoration-none fw-semibold text-hover"><i class="uil uil-instagram"></i> Instagram</a>
            </div>
            <div class="col-auto">
              <a href="#" class="text-black-50 text-decoration-none fw-semibold text-hover"><i class="uil uil-github-alt"></i> Github</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scroll__icon"></i>
  </a>

  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @yield('js')
</body>

</html>