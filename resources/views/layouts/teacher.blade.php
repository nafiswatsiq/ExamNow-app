<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    @yield('style')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body class="dahsboard teacher">
    <div class="sidebar p-4">
      <div class="d-grid">
        <!-- <p class="fw-800 fs-3 second-color">ExamNow</p> -->
        <!-- <div class="row mt-2">
          <div class="avatar rounded-3 col-auto p-0 ms-3">
            <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" alt="">
          </div>
          <div class="col">
            <p class="fw-700 text-black-50 fs-5 mb-0">SMPN 100 JAKARTA</p>
            <span class="second-color fs-6 fw-semibold">Guru</span>
          </div>
        </div> -->
        <div>
          <div class=" d-flex justify-content-center">
            <img src="https://ui-avatars.com/api/?name=SMPN 100 JAKARTA&background=random&color=fff&length=1" class="rounded-3" width="100px" alt="">
          </div>
          <p class="fw-800 second-color fs-5 mb-0 mt-3">SMPN 100 JAKARTA</p>
        </div>
        <div class="py-5 border-bottom">
          <div>
            <a href="{{ route('teacher.home') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center py-1 {{ Route::current()->getName() == 'teacher.home' ? 'active' : '' }}">
              <i class="uil uil-estate me-2 fs-4"></i> Home
            </a>
          </div>
          <div class="mt-4">
            <a href="{{ route('teacher.coridor-class') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center py-1 {{ Route::current()->getName() == 'teacher.coridor-class' ? 'active' : '' }}">
              <i class="uil uil-notebooks me-2 fs-4"></i> Kelas
            </a>
          </div>
          <div class="mt-4">
            <a href="{{ route('teacher.exam') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center py-1 {{ Route::current()->getName() == 'teacher.exam' ? 'active' : '' }}">
              <i class="uil uil-clipboard-alt me-2 fs-4"></i> Ujian
            </a>
          </div>
          <div class="mt-4">
            <a href="{{ route('teacher.teacher') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center py-1 {{ Route::current()->getName() == 'teacher.teacher' ? 'active' : '' }}">
              <i class="uil uil-book-reader me-2 fs-4"></i> Guru
            </a>
          </div>
        </div>
        <div class="border-bottom pt-4 pb-5">
          <p class="fs-5 text-body fw-800">Akun</p>
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
      
      @yield('content')

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    @yield('js')
  </body>
</html>