<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="dahsboard">
  <div class="sidebar p-4">
    <div class="d-grid">
      <p class="fw-800 fs-3 white-color">ExamNow</p>
      <div class="row mt-2">
        <div class="avatar rounded-3 col-auto p-0 ms-3">
          <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" alt="">
        </div>
        <div class="col">
          <p class="fw-700 white-color fs-5 mb-0">Nafis watsiq</p>
          <span class="white-color fs-6">Siswa</span>
        </div>
      </div>
      <div class="py-5 border-bottom">
        <div>
          <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center active">
            <i class="uil uil-dashboard me-2 fs-4"></i> Dashboard
          </a>
        </div>
        <div class="mt-4">
          <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center">
            <i class="uil uil-estate me-2 fs-4"></i> Kelas
          </a>
        </div>
        <div class="mt-4">
          <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center">
            <i class="uil uil-clipboard-alt me-2 fs-4"></i> Ujian
          </a>
        </div>
      </div>
      <div class="border-bottom pt-4 pb-5">
        <p class="fs-5 text-light fw-800">Akun</p>
        <div class="">
          <div>
            <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center">
              <i class="uil uil-user me-2"></i> Profil
            </a>
          </div>
          <div class="mt-3">
            <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center">
              <i class="uil uil-estate me-2"></i> Kelas
            </a>
          </div>
          <div class="mt-3">
            <a href="#" class="fw-500 fs-6 fw-semibold d-flex align-items-center">
              <i class="uil uil-clipboard-alt me-2"></i> Ujian
            </a>
          </div>
        </div>
      </div>
      <div class="my-3">
        <a href="#" class="fw-500 fs-6 fw-semibold text-light d-flex align-items-center">
          <i class="uil uil-signout me-2"></i> Keluar
        </a>
      </div>
    </div>
  </div>
  <div class="content">
    <nav class="navbar navbar-expand-lg" id="header">
      <div class="container-fluid py-2 px-5">
        <span class="navbar-brand fw-800 fs-4 text-black-50">Dashboard</span>
      </div>
    </nav>

    <section>
      <div class="container-fluid px-5 my-3">
        p
      </div>
    </section>
  </div>

  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>