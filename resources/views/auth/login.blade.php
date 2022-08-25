@extends('layouts.app')

@section('style')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.css" />
@endsection

@section('content')
<section id="auth">
  <div class="container-fluid auth-wrapper">
    <div class="row">
      <div class="col-12" id="page-login">
        <div class="right-login d-flex justify-content-center align-items-md-center ">
          <div class="box-login px-2">
            <div class="row bg-white px-4 py-4 rounded-4 shadow-sm border">
              <div class="col-12 mt-3 mt-md-0">
                <p class="text-center fw-800 fs-2 second-color">Login</p>
                <p class="text-danger form-text">{{ session('error') }}</p>
                <form action="{{ url('login') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-body fw-semibold">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" autofocus>
                    @error('email')
                      <p class="text-danger form-text">Masukan email dengan benar</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-body fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
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

@endsection

@section('js')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.js"></script>

<script>
  $(document).ready(function() {
    $("#dtBox").DateTimePicker();
  });
</script>
@endsection