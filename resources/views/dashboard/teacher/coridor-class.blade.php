@extends('layouts.teacher')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <span class="navbar-brand fw-800 fs-4 text-black-50">Kelas</span>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row">
      <div class="col-12 mb-4">
        <a href="{{ route('teacher.create-question-detail') }}" class="btn px-5 shadow-sm btn-add-question pt-3">
          <div class="">
            <i class="uil uil-plus fs-1 text-secondary"></i>
            <p class="mt-3 text-secondary">Buat Kelas</p>
          </div>
        </a>
      </div>
      <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-12">
        <a href="{{ url('teacher/class', 'XII MIPA 1') }}" class="card p-4 card-class align-items-end flex-row border-0 shadow-sm rounded-4">
          <p class="m-0 mt-3 fw-800 second-color fs-4 ">XII-MIPA 1</p>
        </a>
      </div>
      <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-12">
        <a href="{{ url('teacher/class', 'XII MIPA 2') }}" class="card p-4 card-class align-items-end flex-row border-0 shadow-sm rounded-4">
          <p class="m-0 mt-3 fw-800 second-color fs-4 ">XII-MIPA 2</p>
        </a>
      </div>
      <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-12">
        <a href="{{ url('teacher/class', 'XII MIPA 3') }}" class="card p-4 card-class align-items-end flex-row border-0 shadow-sm rounded-4">
          <p class="m-0 mt-3 fw-800 second-color fs-4 ">XII-MIPA 3</p>
        </a>
      </div>

    </div>
  </div>
</section>
@endsection