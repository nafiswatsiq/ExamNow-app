@extends('layouts.teacher')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.css" />
@endsection

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid py-2 px-5">
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-outline-secondary rounded-pill" style="padding: 5px;"><i class="uil uil-arrow-left fs-5"></i></a>
      <span class="navbar-brand fw-800 fs-4 text-black-50 ms-3">Detail Ujian</span>
    </div>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3 pb-5">
    <form action="./create-question-details.html" method="post" class="row">
      <div class="col-6">
        <div class="bg-white px-3 py-4 border shadow-sm rounded-3">
          <h5 class="second-color fw-800">Detail Ujian</h5>
          <div class="row mt-3 gy-3">
            <div class="col-12">
              <label for="" class="form-label fw-700">Jenis ujian/Mata pelajaran<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Biologi" required>
            </div>
            <div class="col-12">
              <label for="" class="form-label fw-700">Kelas<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="" placeholder="XII-MIPA" required>
            </div>
            <div class="col-12">
              <label for="" class="form-label fw-700">Guru/Pengajar<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="" placeholder="Ir. Joko Widodo" required>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-6">
                  <label for="" class="form-label fw-700">Tipe soal</label>
                  <select class="form-select" id="" placeholder="" required>
                    <option value="">Urut</option>
                    <option value="">Acak</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="" class="form-label fw-700">Tampilkan Nilai?</label>
                  <select class="form-select" id="" placeholder="" required>
                    <option value="">Ya</option>
                    <option value="">Tidak</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class=" bg-white px-3 py-4 border shadow-sm rounded-3">
          <h5 class="second-color fw-800">Waktu Ujian</h5>
          <div class="row mt-3 gy-3">
            <div class="col-12">
              <label for="" class="form-label fw-700">Durasi waktu ujian<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="number" class="form-control" placeholder="120" aria-label="" aria-describedby="basic-addon2" required>
                <span class="input-group-text" id="basic-addon2">Menit</span>
              </div>
            </div>
            <div class="col-12">
              <label for="" class="form-label fw-700">Ujian dimulai<span class="text-danger">*</span></label>
              <input type="time" data-field="time" class="form-control" id="" placeholder="waktu mulai" required>
            </div>
            <div class="col-12">
              <label for="" class="form-label fw-700">Ujian berakhir<span class="text-danger">*</span></label>
              <input type="time" data-field="time" class="form-control" id="" placeholder="waktu selesai" required>
            </div>
            <div class="col-12">
              <label for="" class="form-label fw-700">Tanggal ujian<span class="text-danger">*</span></label>
              <input type="date" data-field="date" class="form-control" id="" placeholder="tanggal" required>
              <div id="dtBox"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-4 bg-white px-3 py-4 border shadow-sm rounded-3">
        <div class="row">
          <div class="col-6">
            <h5 class="second-color fw-800">Peraturan</h5>
            <textarea class="summernote"></textarea>
          </div>
          <div class="col-6">
            <h5 class="second-color fw-800">Tata Tertib</h5>
            <textarea class="summernote"></textarea>
          </div>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center mt-4">
        <button type="submit" class="btn bg-second bg-second-hover white-color white-hover rounded-pill" id="next-btn">
          Selanjutnya <i class="uil uil-angle-right-b"></i>
        </button>
      </div>
    </form>
  </div>
</section>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/datetimepicker@latest/dist/DateTimePicker.min.js"></script>

<script>
  $(document).ready(function() {
    $("#dtBox").DateTimePicker();
  });
</script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['para', ['ul', 'ol']],
      ],
      placeholder: 'Tulis disini',
      tabsize: 2,
      height: 130
    });
  });
</script>
@endsection