@extends('layouts.student')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid pt-4 pb-3 px-5">
    <span class="navbar-brand fw-800 fs-3 text-color">Kelas
      @isset($class)
        {{ $class->subjects }}
      @endisset
    </span>
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
      @if (isset($class))
          
      @else
      <div class="col-12">
        <p class="fw-semibold">Kamu belum mengikuti kelas</p>
        <button type="button" class="btn px-5 shadow-sm btn-add-question pt-3 bg-light" data-bs-toggle="modal" data-bs-target="#joinClass">
          <div class="">
            <i class="uil uil-plus fs-1 text-secondary"></i>
            <p class="mt-3 text-secondary">Ikuti Kelas</p>
          </div>
        </button>
      </div>

      <div class="modal" tabindex="-1" id="joinClass">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="{{ url('join-class') }}" method="post">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title">Ikuti Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <label for="inputName" class="form-label">ID Kelas</label>
                    <input type="number" class="form-control" name="id_class" id="inputName" placeholder="84474236" required>
                  </div>
                </div>
              </div>
              <div class="modal-footer pb-0">
                <button type="button" class="btn border rounded-pill" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn bg-second bg-second-hover text-light rounded-pill">Ikuti</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endif

    </div>
  </div>
</section>
@endsection