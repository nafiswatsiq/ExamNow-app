@extends('layouts.teacher')

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <span class="navbar-brand fw-800 fs-4 text-black-50">Dashboard</span>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row">
      <div class="col-auto">
        <div class="card px-5 py-3 border-0 shadow-sm rounded-4">
          <p class="text-secondary fw-700 m-0">Kelas</p>
          <div>
            <span class="m-0 fw-800 second-color fs-3">{{ $data->classroom->name }}</span>
            <button class="fs-3 text-black-50 border-0 bg-white ms-2 btn-copy" data-clipboard-text="{{ $data->classroom->name }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Salin">
              <i class="uil uil-copy"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <div class="card px-5 py-3 border-0 shadow-sm rounded-4">
          <p class="text-secondary fw-700 m-0">Id Kelas</p>
          <div>
            <span class="m-0 fw-800 second-color fs-3">{{ $data->classroom->classroom }}</span>
            <button class="fs-3 text-black-50 border-0 bg-white ms-2 btn-copy" data-clipboard-text="{{ $data->classroom->classroom }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Salin">
              <i class="uil uil-copy"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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