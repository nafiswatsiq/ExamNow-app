@extends('layouts.student')

@section('content')

<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <span class="navbar-brand fw-800 fs-4 text-black-50">Latihan</span>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="d-flex align-items-start">
      <div class="nav flex-column nav-pills me-5 pe-5 border-end" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a href="#" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">SBMPTN</a>
        <a href="#" class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">TryOut</a>
        <a href="#" class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">UAS</a>
        <a href="#" class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">UTS</a>
        <a href="#" class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ulangan Harian</a>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
          A
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
          B
        </div>
        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
          C
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
          D
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
          E
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('js')

@endsection