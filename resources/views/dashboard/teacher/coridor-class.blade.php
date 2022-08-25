@extends('layouts.teacher')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <span class="navbar-brand fw-800 fs-4 text-black-50">Kelas</span>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row gy-4">
      <div class="col-12 mb-2">
        <a href="#" class="btn px-5 shadow-sm btn-add-question pt-3" data-bs-toggle="modal" data-bs-target="#addClass">
          <div class="">
            <i class="uil uil-plus fs-1 text-secondary"></i>
            <p class="mt-3 text-secondary">Buat Kelas</p>
          </div>
        </a>
      </div>
      @foreach ($class as $item)
      <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-12">
        <a href="{{ url('teacher/class', $item->classroom ) }}" class="card p-4 card-class align-items-end flex-row border-0 shadow-sm rounded-4">
          <div>
            <div>
              <p class="m-0 mt-3 fw-800 second-color fs-4 ">{{ $item->subjects }}</p>
            </div>
            <div class="d-flex align-items-center mt-3">
              <p class="m-0 fw-800 second-color fs-5 ">ID : {{ $item->classroom }}</p>
              <button class="fs-4 text-black-50 border-0 bg-white ms-2 btn-copy" data-clipboard-text="{{ $item->classroom }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Salin">
                <i class="uil uil-copy"></i>
              </button>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="modal" tabindex="-1" id="addClass">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ url('add-class') }}" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Tambah Kelas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <label for="inputName" class="form-label">Nama</label>
              <input type="text" class="form-control" name="subjects" id="inputName" placeholder="Nama kelas">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn border rounded-pill" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn bg-second bg-second-hover text-light rounded-pill">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/tooltips.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  var clipboard = new ClipboardJS('.btn-copy');
  clipboard.on('success', function(e) {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: 'Berhasil di salin'
    })
    e.clearSelection();
  });
</script>
@endsection