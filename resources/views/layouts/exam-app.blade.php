<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  {!! SEO::generate() !!}
  <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  
  @yield('style')

  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg nav-page-exam" id="header">
    <div class="container py-1">
      <span class="navbar-brand fw-700 fs-4 main-color">ExamNow</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <div class="d-flex flex-wrap align-items-center">
          <span class="fw-700 text-black-50">Hai <span class="second-color">Nafis watsiq!</span></span>
          <i class="uil uil-angle-down fs-4"></i>
          <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" class="rounded-pill ms-2" alt="" />
        </div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <div class="d-flex flex-wrap gap-2 align-items-md-center d-lg-block d-none">
          <span class="fw-700 text-black-50">Hai <span class="second-color">Nafis watsiq!</span></span>
          <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" class="rounded-pill" alt="" />
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer>
    <div class="container pb-4 pt-5">
      <div class="row border-bottom py-3">
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Syarat dan Ketentuan</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Kebijakan Privasi</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Bantuan</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Hubungi kami</a>
        <a href="#" class="col-auto text-black-50 text-decoration-none fw-semibold text-hover">Kritik & saran</a>
      </div>
      <div class="d-flex flex-md-row flex-column-reverse justify-content-between pt-3 gap-2">
        <p class="col-auto text-black-50 fw-semibold">
          Copyright &copy; nw.project 2022 | All right reserved
        </p>
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

  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @yield('js')
</body>

</html>