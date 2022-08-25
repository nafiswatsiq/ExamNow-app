<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
  @yield('style')

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="dahsboard">
  <div class="sidebar p-4">
    <div class="d-grid">
      <p onclick="location.href='/'" class="fw-800 fs-3 white-color pointer">ExamNow</p>
      <div class="row mt-2">
        <div class="avatar rounded-3 col-auto p-0 ms-3">
          <img src="{{ auth()->user()->getFirstMediaUrl('avatar', 'thumb') }}" onError="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=fff&color=43a1ff&length=1'" class="rounded-3" width="100px" alt="">
        </div>
        <div class="col">
          <p class="fw-700 white-color fs-5 mb-0">{{ auth()->user()->name }}</p>
          <span class="white-color fs-6">Siswa</span>
        </div>
      </div>
      <div class="py-5 border-bottom">
        <div>
          <a href="{{ route('student.home') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center {{ Route::current()->getName() == 'student.home' ? 'active' : '' }}">
            <i class="uil uil-dashboard me-2 fs-4"></i> Dashboard
          </a>
        </div>
        <div class="mt-4">
          <a href="{{ route('student.coridor-class') }}" class="fw-500 fs-6 fw-semibold d-flex align-items-center {{ Route::current()->getName() == 'student.coridor-class' ? 'active' : '' }}">
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
        <form action="{{ url('logout') }}" method="post">
          @csrf
          <button type="submit" class="fw-500 fs-6 fw-semibold d-flex align-items-center border-0 bg-second text-light p-0"><i class="uil uil-signout me-2"></i> Keluar</button>
        </form>
      </div>
    </div>
  </div>
  <div class="content">

    @yield('content')

  </div>

  @include('sweetalert::alert')
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  @yield('js')
</body>

</html>