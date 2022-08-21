@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')
<section id="section-home">
  <div class="container mt-md-0 mt-4">
    <div class="row flex-md-row flex-column-reverse justify-content-evenly align-items-md-center align-items-end home-wrap">
      <div class="col-md-6 col-12">
        <p data-aos="fade-right" data-aos-duration="500" class="fs-4 main-color fw-semibold z-2">ExamNow</p>
        <p data-aos="fade-right" data-aos-duration="800" class="fw-800 fs-50 second-color z-2">Aplikasi Ujian online gratis berbasis web</p>
        <p data-aos="fade-right" data-aos-duration="900" class="text-muted fs-6 z-2">Aplikasi Ujian online untuk membuat soal serta tersedia berbagai soal seperti Try Out, SBMPTN, UAS, UTS, dan lain-lain</p>
        @if (empty(auth()->user()->name))
        <div class="d-flex gap-4">
          <a data-aos="fade-right" data-aos-duration="1000" href="{{ url('register') }}" class="btn bg-gradient fw-bold px-4 fs-5 rounded-pill white-color white-hover z-2">Daftar <i class="uil uil-arrow-circle-right fs-5"></i></a>
          <a data-aos="fade-right" data-aos-duration="1200" href="{{ url('login') }}" class="btn second-color fw-bold px-4 fs-5 rounded-pill border-second border-second-hover z-2">Masuk</a>
        </div>
        @endif
      </div>
      <div class="col-md-6 col-12 mt-4 mt-md-0">
        <div class="img-home" data-aos="fade-left" data-aos-duration="1000">
          <img src="{{ asset('image/home-bg.png') }}" alt="home-bg" width="100%">
        </div>
      </div>
    </div>
  </div>
</section>
<div class="custom-shape-divider-bottom-1657246973">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
  </svg>
</div>

<section>
  <div class="container mt-3 mb-5">
    <!-- <h2 class="fw-800 second-color">Jumlah soal</h2> -->
    <div class="row py-5 gy-3">
      <div class="col-md-4 col-12 text-center" data-aos="fade-up" data-aos-duration="500">
        <p class="second-color fw-900 fs-55 counter" data-target="2"></p>
        <span class="fs-5 fw-700 text-black-50">Sekolah/Universitas</span>
      </div>
      <div class="col-md-4 col-12 text-center" data-aos="fade-up" data-aos-duration="500">
        <p class="second-color fw-900 fs-55 counter" data-target="10"></p>
        <span class="fs-5 fw-700 text-black-50">Soal</span>
      </div>
      <div class="col-md-4 col-12 text-center" data-aos="fade-up" data-aos-duration="500">
        <p class="second-color fw-900 fs-55 counter" data-target="50"></p>
        <span class="fs-5 fw-700 text-black-50">Siswa/Pelajar</span>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container my-5">
    <h2 class="fw-800 second-color">Macam macam soal</h2>
    <div class="row my-4">
      <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="500">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-4 p-3">
              <img src="{{ asset('image/sbmptn.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title main-color fw-700">Soal SBMPTN</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="900">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-4 p-3">
              <img src="{{ asset('image/tryout.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title main-color fw-700">Soal TRY OUT</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="1200">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-4 p-3">
              <img src="{{ asset('image/uas-uts.png') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="card-title main-color fw-700">Soal UAS/UTS</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container p-md-5 p-2">
    <!-- Swiper -->
    <div class="swiper mySwiper rounded-3 sponsor-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://dummyimage.com/800x200/d1d1d1/ffffff.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/800x200/d1d1d1/ffffff.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://dummyimage.com/800x200/d1d1d1/ffffff.jpg" alt="">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section>
  <div class="container my-5">
    <h2 class="fw-800 second-color text-center">Sponsor</h2>
    <div class="row gy-4 mt-4 justify-content-center">
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
      <div class="col-lg-2 col-md-3 col-4">
        <img src="https://dummyimage.com/300x300/d1d1d1/ffffff.jpg" class="rounded-4" width="100%" alt="">
      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
<script src="{{ asset('js/counter.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  AOS.init();
</script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });
</script>
@endsection