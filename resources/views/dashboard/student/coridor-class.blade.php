@extends('layouts.student')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <span class="navbar-brand fw-800 fs-4 text-black-50">Kelas {{ $class->subjects }}</span>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row gy-4">

      {{-- <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-12">
        <a href="" class="card p-4 card-class align-items-end flex-row border shadow-sm rounded-4">
          <div>
            <div>
              <p class="m-0 mt-3 fw-800 second-color fs-4 ">Bahasa Indonesia</p>
            </div>
          </div>
        </a>
      </div> --}}

    </div>
  </div>
</section>
@endsection