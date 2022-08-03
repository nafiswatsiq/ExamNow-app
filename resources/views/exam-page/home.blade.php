@extends('layouts.exam-app')

@section('content')
<section class="first-section welcome-page">
  <div class="container py-5">
    <div class="row flex-lg-row flex-column-reverse">
      <div class="col-lg-8 col-12 mt-5 mt-lg-0">
        <div class="text-center my-1">
          <span class="fs-50 fw-800 second-color">Siap Untuk Ujian?</span>
        </div>
        <div class="alert">
          <span class="second-color fw-800">Peraturan!</span>
          <ol class="ps-3">
            <li>Lorem ipsum dolor sit.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, delectus?</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
          </ol>
          <span class="second-color fw-800">Tata tertib</span>
          <ol class="ps-3">
            <li>terdapat 20 soal</li>
            <li>benar +4, salah -5</li>
            <li>dibolehkan menyontek</li>
            <li>silahkan bekerjasama dengan temanmu</li>
          </ol>
        </div>
        <div class="d-md-flex d-grid gap-2 mt-5 justify-content-center">
          <a href="{{ url('exam','ujicoba') }}" class="btn border fw-700 text-black-50 rounded-pill px-5">Uji Coba</a>
          <a href="{{ url('exam','ujian') }}" class="btn bg-second bg-second-hover white-color white-hover fw-700 rounded-pill">Mulai ujian Sekarang <i class="uil uil-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="card p-3 card-bio-exam shadow shadow-sm">
          <div class="d-flex justify-content-center align-items-center">
            <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" class="profile" alt="">
          </div>
          <div class="mt-5 py-4">
            <table class="fw-700 text-black-50">
              <tr>
                <td>Nama</td>
                <td>: nafis watsiq a</td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td>: 40B</td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td>: Teknik Kedokteran</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection