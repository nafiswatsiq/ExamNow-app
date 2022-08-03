@extends('layouts.app')

@section('style')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.css" />
@endsection

@section('content')
<section id="auth">
  <div class="container-fluid auth-wrapper">
    <div class="row">
      <div class="col-md-6 col-12 d-none d-md-block" id="page-register">
        <div class="right-login d-flex justify-content-center align-items-md-center">
          <div class="box-login">
            <div class="row">
              <div class="col-12 mt-5 mt-md-0">
                <p class="text-center fw-800 text-light fs-2">Register</p>
                <form class="register">
                  <div class="row gy-2">
                    <div class="col-lg-6 col-12">
                      <label for="exampleInputEmail1" class="form-label text-light">Nama</label>
                      <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-lg-6 col-12">
                      <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-lg-6 col-12">
                      <label for="exampleInputEmail1" class="form-label text-light">Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-lg-6 col-12">
                      <label for="exampleInputEmail1" class="form-label text-light">Tanggal Lahir</label>
                      <input type="text" data-field="date" readonly class="form-control">
                    </div>
                  </div>
                  <div id="dtBox"></div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn bg-main bg-second-hover white-color white-hover fw-bold mt-4 rounded-pill" style="width: 80%">Daftar</button>
                  </div>
                </form>
                <div class="d-flex justify-content-between mt-2">
                  <a href="#" id="login-btn" class="text-light text-decoration-none">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12 d-none d-md-block" id="page-login">
        <div class="right-login d-flex justify-content-center align-items-md-center ">
          <div class="box-login bordfer bg-white px-4 py-3 rounded-4">
            <div class="row">
              <div class="col-12 mt-5 mt-md-0">
                <p class="text-center fw-800 fs-2 second-color">Login</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-body fw-semibold">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-secondary">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-body fw-semibold">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-secondary" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn bg-main bg-second-hover white-color white-hover fw-bold rounded-pill" style="width: 100%">Login</button>
                </form>
                <div class="d-flex justify-content-between mt-4">
                  <a href="#" id="register-btn" class="text-secondary text-decoration-none">Register</a>
                  <a href="#" class="text-secondary text-decoration-none">Forgot password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="d-none d-md-block">
  <div id="login-section" class="login-section d-flex justify-content-center align-items-md-center {{ Route::current()->getName() == 'login' ? 'right' : 'left' }}">
    <img id="image-auth" class="animate__animated" src="{{ asset('image/login.PNG') }}" width="100%" alt="">
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.js"></script>

<script>
  $("#register-btn").click(function() {
    $("#login-section").addClass("left");
    $("#login-section").removeClass("right");
    $("#image-auth").attr( "src", "{{ asset('image/register.PNG') }}" );
  });
  $("#login-btn").click(function() {
    $("#login-section").addClass("right");
    $("#login-section").removeClass("left");
    $("#image-auth").attr( "src", "{{ asset('image/login.PNG') }}" );
  });

  const mediaQuery = window.matchMedia('(max-width: 600px)')
  if (mediaQuery.matches) {
    $("#page-register").removeClass("d-none");

    $("#register-btn").click(function() {
      $("#page-register").removeClass("d-none");
      $("#page-login").addClass("d-none");
    });

    $("#login-btn").click(function() {
      $("#page-register").addClass("d-none");
      $("#page-login").removeClass("d-none");
    });
  }
</script>
<script>
  $(document).ready(function() {
    $("#dtBox").DateTimePicker();
  });
</script>
@endsection