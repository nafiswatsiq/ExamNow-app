@extends('layouts.exam-app')

@section('content')
<section class="first-section welcome-page">
  <div class="container py-5">
    <div class="text-center my-1">
      <p class="fs-1 fw-800 second-color">Yeay!!!</p>
      <p class="fs-2 fw-800 second-color">Kamu telah menyelesaikan ujian</p>
    </div>
    <div class="row justify-content-center my-5">
      <!-- <div class="col-4">
        <img src="../assets/image/yeay.png" alt="">
      </div> -->
      <div class="col-auto d-flex align-items-center">
        <div class="card text-center shadow rounded-4">
          <div class="border-bottom px-3 py-2">
            <span class="text-black-50 fw-700">Kamu mendapatkan skor</span>
          </div>
          <div class="py-3">
            <h1 class="fw-900 second-color">100</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
      <a href="./index.html" class="btn border btn-previous-exam rounded-pill bg-gradient text-light px-3 py-2 fw-800" id="prev-btn">
        Kembali ke Dashboard
      </a>
    </div>
  </div>
</section>
@endsection