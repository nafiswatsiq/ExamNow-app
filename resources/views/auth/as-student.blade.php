@extends('layouts.app')

@section('content')
<section>
  <div class="register d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="mb-3">
        <a href="{{ url()->previous() }}">
          <i class="uil uil-arrow-left shadow-sm border rounded-pill fs-3 px-1 text-secondary"></i>
        </a>
        <span class="fw-800 second-color fs-3 ms-2">Daftar sebagai siswa</span>
      </div>
      <div class="card p-5 bg-thrid border-0 shadow-sm">
        <div class="row">
          <div class="col-auto">
            <div class="card p-3">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('image/dummy-image-square.jpg') }}" alt="" class="rounded-3 dummy-img-upload" />
                <div id="profile">
                  <div class="dashes"></div>
                  <label>
                    <span class="border bg-white rounded-3 px-3 py-2 fw-600 cursor-pointer">
                      <i class="uil uil-pen"></i> Unggah</span>
                  </label>
                </div>
                <input type="file" id="mediaFile" accept="image/png, image/jpeg" />
              </div>
              <div class="card-body">
                <p class="card-text text-center text__color fs-7">Ukuran 300 x 300 piksel</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Kata sandi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Ulangi kata sandi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Ulangi kata sandi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Ulangi kata sandi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label fw-800 text-secondary">Ulangi kata sandi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-center mt-3">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary fw-800 rounded-pill px-4 mx-2">Kembali</a>
            <button class="btn bg-second bg-second-hover text-light fw-800 rounded-pill px-4 mx-2">Daftar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script src="{{ asset('js/upload-img.js') }}"></script>
@endsection