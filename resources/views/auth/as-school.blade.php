@extends('layouts.app')

@section('content')
<section>
  <div class="register d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="mb-3">
        <a href="{{ url()->previous() }}">
          <i class="uil uil-arrow-left shadow-sm border rounded-pill fs-3 px-1 text-secondary"></i>
        </a>
        <span class="fw-800 second-color fs-3 ms-2">Daftar sebagai Sekolah</span>
      </div>
      <div class="card p-5 bg-thrid border-0 shadow-sm">
        <form onSubmit="return checkPassword(this)" action="{{ url('register-school') }}" method="post">
          @csrf
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
                  <label for="name" class="form-label fw-800 text-secondary">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ old('name') }}">
                </div>
                <div class="col-6 mb-3">
                  <label for="email" class="form-label fw-800 text-secondary">Email</label>
                  <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                  @error('email')
                      <p class="text-danger form-text m-0">Email sudah terdaftar</p>
                  @enderror
                </div>
                <div class="col-6 mb-3">
                  <label for="password" class="form-label fw-800 text-secondary">Kata sandi</label>
                  <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">password min 8 karakter</div>
                  @error('password')
                      <p class="text-danger form-text m-0">password min 8 karakter / password tidak sama</p>
                  @enderror
                </div>
                <div class="col-6 mb-3">
                  <label for="repassword" class="form-label fw-800 text-secondary">Ulangi kata sandi</label>
                  <div class="input-group">
                    <input type="password" name="confirm_password" class="form-control border-end-0" id="repassword" aria-describedby="emailHelp">
                    <span class="input-group-text bg-white" id="basic-addon2"><i class="uil uil-check" id="match"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
              <button type="button" class="btn btn-outline-secondary fw-800 rounded-pill px-4 mx-2">Kembali</button>
              <button type="submit" class="btn bg-second bg-second-hover text-light fw-800 rounded-pill px-4 mx-2">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script src="{{ asset('js/upload-img.js') }}"></script>
<script>
$("input[name='password'], input[name='confirm_password']").on('keyup', function () {
    if ($("input[name='password']").val() == ''){
        $('#match').hide();
    }else if($("input[name='confirm_password']").val() == ''){
        $('#match').hide();
    }else if($("input[name='password']").val() == $("input[name='confirm_password']").val()){
        $( "#match" ).show().removeClass( "uil-times no_match" ).addClass( "uil-check match" );
    }else {
        $( "#match" ).show().removeClass( "uil-check match" ).addClass( "uil-times no_match" );
    }
});
</script>
@endsection