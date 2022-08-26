@extends('layouts.app')

@section('content')
  
<section>
  <div class="register-as mt-5 mt-md-0">
    <div class="row">
      <div class="col-3 d-flex align-items-center justify-content-center left-bg p-0 d-none d-md-block">
        <img src="{{ asset('image/bg-register-as.jpg') }}" height="100%" alt="">
      </div>
      <div class="col-md-9 col-12 d-flex align-items-center justify-content-center">
        <div class="card p-5 shadow-sm border-0 rounded-3 bg-thrid">
          <div>
            <p class="second-color fw-800 fs-3">Daftar sebagai</p>
          </div>
          <div class="row px-3 gy-3">
            <div class="col-lg-4 col-md-6 col-12">
              <a href="{{ Route('as-teacher') }}" class="card p-4 shadow-sm rounded-4 btn-card">
                <div class="d-flex justify-content-center">
                  <i class="uil uil-house-user icon"></i>
                </div>
                <p class="text-black-50 fw-800 fs-5 text-center m-0 mt-3">Sekolah</p>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
              <a href="{{ Route('as-student') }}" class="card p-4 shadow-sm rounded-4 btn-card">
                <div class="d-flex justify-content-center">
                  <i class="uil uil-users-alt icon"></i>
                </div>
                <p class="text-black-50 fw-800 fs-5 text-center m-0 mt-3">Siswa</p>
              </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
              <a href="{{ Route('as-personal') }}" class="card p-4 shadow-sm rounded-4 btn-card">
                <div class="d-flex justify-content-center">
                  <i class="uil uil-user icon"></i>
                </div>
                <p class="text-black-50 fw-800 fs-5 text-center m-0 mt-3">Personal</p>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection