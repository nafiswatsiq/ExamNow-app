@extends('layouts.teacher')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-outline-secondary rounded-pill" style="padding: 5px;"><i class="uil uil-arrow-left fs-5"></i></a>
      <span class="navbar-brand fw-800 fs-4 text-black-50 ms-3">Ujian</span>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
      <!-- <a href="" class="bg-gradient px-3 py-2 fw-bold text-light rounded-3">Buat Soal <i class="uil uil-plus"></i></a> -->
    </div>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row">
      <div class="col-12">
        <a href="" class="btn px-5 shadow-sm btn-add-question pt-3">
          <div class="">
            <i class="uil uil-plus fs-1 text-secondary"></i>
            <p class="mt-3 text-secondary">Buat Soal</p>
          </div>
        </a>
      </div>
      <div class="col-12 my-5">
        <div class="d-flex justify-content-between my-2">
          <p class="fw-700 fs-5 second-color">Soal Lainya</p>
          <div class="d-flex gap-2">
            <div>
              <input class="form-control" type="text" placeholder="Cari" aria-label="default input example">
            </div>
            <div>
              <button class="btn bg-second text-light bg-second-hover"><i class="uil uil-search"></i></button>
            </div>
          </div>
        </div>
        <div class="row gy-4">
          <!--  -->
          <div class="col-xl-4 col-lg-6">
            <a href="#" class="card py-2 px-4 text-decoration-none shadow-sm border-0 list-question" data-bs-toggle="tooltip" data-bs-placement="top" title="Ilmu Bahasa Indonesia">
              <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 fw-700 main-color text-truncate">Matematika</p>
                <div>
                  <span class="text-black-50 fw-700">Date:</span>
                  <p class="text-black-50 fw-700">24/11/2022</p>
                </div>
              </div>
              <ul>
                <li class="text-black-50">Kelas 3 SD</li>
                <li class="text-black-50">50 Soal</li>
              </ul>
            </a>
          </div>
          <!--  -->
          <div class="col-xl-4 col-lg-6">
            <a href="#" class="card py-2 px-4 text-decoration-none shadow-sm border-0 list-question" data-bs-toggle="tooltip" data-bs-placement="top" title="Ilmu Bahasa Indonesia">
              <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 fw-700 main-color text-truncate">Ilmu Kanuragan</p>
                <div>
                  <span class="text-black-50 fw-700">Date:</span>
                  <p class="text-black-50 fw-700">24/11/2022</p>
                </div>
              </div>
              <ul>
                <li class="text-black-50">Kelas 3 SD</li>
                <li class="text-black-50">50 Soal</li>
              </ul>
            </a>
          </div>
          <div class="col-xl-4 col-lg-6">
            <a href="#" class="card py-2 px-4 text-decoration-none shadow-sm border-0 list-question" data-bs-toggle="tooltip" data-bs-placement="top" title="Ilmu Bahasa Indonesia">
              <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 fw-700 main-color text-truncate">Biologi</p>
                <div>
                  <span class="text-black-50 fw-700">Date:</span>
                  <p class="text-black-50 fw-700">24/11/2022</p>
                </div>
              </div>
              <ul>
                <li class="text-black-50">Kelas 3 SD</li>
                <li class="text-black-50">50 Soal</li>
              </ul>
            </a>
          </div>
          <div class="col-xl-4 col-lg-6">
            <a href="#" class="card py-2 px-4 text-decoration-none shadow-sm border-0 list-question" data-bs-toggle="tooltip" data-bs-placement="top" title="Ilmu Bahasa Indonesia">
              <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 fw-700 main-color text-truncate">Ilmu Bahasa Indonesia</p>
                <div>
                  <span class="text-black-50 fw-700">Date:</span>
                  <p class="text-black-50 fw-700">24/11/2022</p>
                </div>
              </div>
              <ul>
                <li class="text-black-50">Kelas 3 SD</li>
                <li class="text-black-50">50 Soal</li>
              </ul>
            </a>
          </div>
          <!--  -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
  <script src="{{ asset('js/tooltips.js') }}"></script>
@endsection