<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  
  @yield('style')

  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg nav-page-exam" id="header">
    <div class="container py-1">
      <span class="navbar-brand fw-700 fs-4 main-color">ExamNow</span>
      <div class="nav-toggler d-block d-lg-none">
        <i class="uil uil-bars fs-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
      </div>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <div class="d-flex flex-wrap gap-2 align-items-md-center">
          <span class="fw-700 text-black-50">Hai <span class="second-color">Nafis watsiq!</span></span>
          <img src="https://ui-avatars.com/api/?name=Nafis&background=43a1ff&color=ffffff&length=1&size=30" class="rounded-pill" alt="" />
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
  <div class="timer-exam border border-2 rounded-2" id="draggable">
    <span class="fw-700" timer="7200" remaining-time="" id="timer">00:00:00</span>
  </div>
  <div class="btn-chage-theme py-2" id="theme-btn">
    <i class="uil uil-moon change-theme" id="theme-button"></i>
  </div>

  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @yield('js')
</body>

</html>