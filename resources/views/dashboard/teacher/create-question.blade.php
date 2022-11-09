@extends('layouts.teacher')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
@endsection

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid pt-4 pb-3 px-5">
    <div class="d-flex align-items-center">
      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary rounded-pill" style="padding: 5px"><i class="uil uil-arrow-left fs-5"></i></a>
      <span class="navbar-brand fw-800 fs-3 text-color ms-3">Buat Soal</span>
    </div>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 mt-3">
    <div class="row my-4 position-relative" id="listQuestion">
      <div class="col-9" id="question">
        <div class="card p-4 shadow-sm border-0">
          <form action="{{ route('save-question') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-auto">
                <p>{{ $number }}.</p>
              </div>
              <div class="col focus">
                <div>
                  <textarea name="question" class="summernote"></textarea>
                </div>
                <div class="my-4" id="listOption">
                  <ol class="ps-4 list-option">
                    <!--  -->
                    <li>
                      <div class="d-flex">
                        <div class="col input-option">
                          <input type="text" name="option_1" id="input-option-a" value="" class="form-control option ms-1 my-1" accept="" required/>
                          <math-field onchange="mathEdit('a')" id="mathField-a" virtual-keyboard-mode="manual" class="border-bottom" style="display: none"></math-field>
                        </div>
                        <div class="col-auto d-flex align-items-center px-3 gap-3">
                          <div>
                            <input type="radio" name="true_option" value="A" id="option-a" required/>
                            <label for="option-a" class="fs-3 pointer"><i class="uil uil-check"></i></label>
                          </div>
                          <i class="uil uil-image-plus second-color pointer fs-5 toogleImage" onclick="toogleImage(this)" data-bs-toggle="tooltip" data-bs-title="Tambah Gambar"></i>
                          <i class="uil uil-calculator-alt second-color pointer fs-5" onclick="mathField(this)" data-bs-toggle="tooltip" data-bs-title="Math Fields"></i>
                          <i class="uil uil-repeat second-color pointer fs-5" onclick="resetOption(this)" data-bs-toggle="tooltip" data-bs-title="Reset"></i>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <div class="col input-option">
                          <input type="text" name="option_2" id="input-option-b" value="" class="form-control option ms-1 my-1" accept="" required/>
                          <math-field onchange="mathEdit('b')" id="mathField-b" virtual-keyboard-mode="manual" class="border-bottom" style="display: none"></math-field>
                        </div>
                        <div class="col-auto d-flex align-items-center px-3 gap-3">
                          <div>
                            <input type="radio" name="true_option" value="B" id="option-b" required/>
                            <label for="option-b" class="fs-3 pointer"><i class="uil uil-check"></i></label>
                          </div>
                          <i class="uil uil-image-plus second-color pointer fs-5 toogleImage" onclick="toogleImage(this)" data-bs-toggle="tooltip" data-bs-title="Tambah Gambar"></i>
                          <i class="uil uil-calculator-alt second-color pointer fs-5" onclick="mathField(this)" data-bs-toggle="tooltip" data-bs-title="Math Fields"></i>
                          <i class="uil uil-repeat second-color pointer fs-5" onclick="resetOption(this)" data-bs-toggle="tooltip" data-bs-title="Reset"></i>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <div class="col input-option">
                          <input type="text" name="option_3" id="input-option-c" value="" class="form-control option ms-1 my-1" accept="" required/>
                          <math-field onchange="mathEdit('c')" id="mathField-c" virtual-keyboard-mode="manual" class="border-bottom" style="display: none"></math-field>
                        </div>
                        <div class="col-auto d-flex align-items-center px-3 gap-3">
                          <div>
                            <input type="radio" name="true_option" value="C" id="option-c" required/>
                            <label for="option-c" class="fs-3 pointer"><i class="uil uil-check"></i></label>
                          </div>
                          <i class="uil uil-image-plus second-color pointer fs-5 toogleImage" onclick="toogleImage(this)" data-bs-toggle="tooltip" data-bs-title="Tambah Gambar"></i>
                          <i class="uil uil-calculator-alt second-color pointer fs-5" onclick="mathField(this)" data-bs-toggle="tooltip" data-bs-title="Math Fields"></i>
                          <i class="uil uil-repeat second-color pointer fs-5" onclick="resetOption(this)" data-bs-toggle="tooltip" data-bs-title="Reset"></i>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <div class="col input-option">
                          <input type="text" name="option_4" id="input-option-d" value="" class="form-control option ms-1 my-1" accept="" required/>
                          <math-field onchange="mathEdit('d')" id="mathField-d" virtual-keyboard-mode="manual" class="border-bottom" style="display: none"></math-field>
                        </div>
                        <div class="col-auto d-flex align-items-center px-3 gap-3">
                          <div>
                            <input type="radio" name="true_option" value="D" id="option-d" required/>
                            <label for="option-d" class="fs-3 pointer"><i class="uil uil-check"></i></label>
                          </div>
                          <i class="uil uil-image-plus second-color pointer fs-5 toogleImage" onclick="toogleImage(this)" data-bs-toggle="tooltip" data-bs-title="Tambah Gambar"></i>
                          <i class="uil uil-calculator-alt second-color pointer fs-5" onclick="mathField(this)" data-bs-toggle="tooltip" data-bs-title="Math Fields"></i>
                          <i class="uil uil-repeat second-color pointer fs-5" onclick="resetOption(this)" data-bs-toggle="tooltip" data-bs-title="Reset"></i>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <div class="col input-option">
                          <input type="text" name="option_5" id="input-option-e" value="" class="form-control option ms-1 my-1" accept="" required/>
                          <math-field onchange="mathEdit('e')" id="mathField-e" virtual-keyboard-mode="manual" class="border-bottom" style="display: none"></math-field>
                        </div>
                        <div class="col-auto d-flex align-items-center px-3 gap-3">
                          <div>
                            <input type="radio" name="true_option" value="E" id="option-e" required/>
                            <label for="option-e" class="fs-3 pointer"><i class="uil uil-check"></i></label>
                          </div>
                          <i class="uil uil-image-plus second-color pointer fs-5 toogleImage" onclick="toogleImage(this)" data-bs-toggle="tooltip" data-bs-title="Tambah Gambar"></i>
                          <i class="uil uil-calculator-alt second-color pointer fs-5" onclick="mathField(this)" data-bs-toggle="tooltip" data-bs-title="Math Fields"></i>
                          <i class="uil uil-repeat second-color pointer fs-5" onclick="resetOption(this)" data-bs-toggle="tooltip" data-bs-title="Reset"></i>
                        </div>
                      </div>
                    </li>
                    <!--  -->
                  </ol>
                </div>
                <!-- <span class="pointer btn-add-option second-color" onclick="addOption()"><i class="uil uil-plus"></i> Tambah Opsi</span> -->
              </div>
              <input type="hidden" name="path" value="{{ Request::segment(3) }}">
              <input type="hidden" name="number" value="{{ Request::segment(4) }}">
              <div class="d-flex justify-content-between mt-3">
                <div>
                  <button type="submit" class="btn bg-white text-black-50 fw-700 border border-1 px-3 py-1 rounded-pill bg-second-hover">
                    Selanjutnya
                  </button>
                  <!-- <button type="button" class="btn bg-white border-1 text-black-50 fw-700 border px-3 py-1 rounded-pill bg-second-hover" data-bs-toggle="modal" data-bs-target="#modalAddMath">
                    Tambah Math Field
                  </button> -->
                </div>
                <div>
                  <button type="submit" class="btn px-3 py-1 bg-second text-light bg-second-hover rounded-pill">
                    Selesai
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-3">
        <div class="answer-tab">
          <div class="border border-2 p-3 rounded-3">
            <span class="text-black-50">List nomor:</span>
            <div class="row gap-2 p-3">
              <a href="1" id="num-1" class="col-auto d-flex align-items-center justify-content-center border border-1 py-1 rounded-2">
                1
              </a>
              @foreach($list_question as $key => $item)
              <a href="{{ $key + 2 }}" id="num-{{ $key + 2 }}" class="col-auto d-flex align-items-center justify-content-center border border-1 py-1 rounded-2">
                {{ $key + 2 }}
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

  <!-- Modal -->
  <div class="modal fade" id="modalAddMath" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah soal Matematika</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <math-field id="formula" virtual-keyboard-mode="manual" class="border-bottom"></math-field>
          <p class="text-secondary mt-3">Gunakan <span class="second-color">\ ;</span> untuk spasi lebar, <span class="second-color">\ :</span> untuk spasi normal, <span class="second-color">\ ,</span> untuk spasi kecil, lalu enter.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-white text-black-50 fw-700 border border-1 px-3 py-1 rounded-pill bg-second-hover" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="button" onclick="saveAddMath()" class="btn px-3 py-1 bg-second text-light bg-second-hover rounded-pill" data-bs-dismiss="modal">
            Selesai
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('js/tooltips.js') }}"></script>
<script src="https://unpkg.com/mathlive"></script>
<script src="{{ asset('js/mathJs.js') }}"></script>
<script>
  $(document).ready(function() {
    let mathField = function(context) {
      let ui = $.summernote.ui;

      // create button
      let button = ui.button({
        contents: '<i class="uil uil-calculator-alt"></i> Math Field',
        tooltip: 'Math Field',
        click: function() {
          // invoke insertText method with 'hello' on editor module.
          $("#modalAddMath").modal('show');
        }
      });

      return button.render(); // return button as jquery object
    }
    let resetButton = function(context) {
      let ui = $.summernote.ui;

      // create button
      let button = ui.button({
        contents: 'Hapus Semua',
        tooltip: 'Hapus Semua',
        click: function() {
          // invoke insertText method with 'hello' on editor module.
          $('.summernote').summernote('reset');
        }
      });

      return button.render(); // return button as jquery object
    }

    $(".summernote").summernote({
      toolbar: [
        // [groupName, [list of button]]
        ["style", ["bold", "italic", "underline", "clear"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["insert", ["link", "picture", "video"]],
        ["table", ["table"]],
        ['mathField', ['mathField']],
        ['resetButton', ['resetButton']],
      ],
      placeholder: "Tulis disini",
      tabsize: 2,
      height: 130,
      buttons: {
        mathField: mathField,
        resetButton: resetButton,
      }
    });
  });

  $( "#num-{{ Request::segment(4) }}" ).addClass( "active" );
</script>
@endsection