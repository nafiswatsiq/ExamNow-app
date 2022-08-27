@extends('layouts.teacher')

@section('style')
    <link rel="stylesheet" href="{{ asset('vendors/data-table/dataTables.bootstrap5.min.css') }}">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg" id="header">
  <div class="container-fluid pt-4 pb-3 px-5">
    <div class="d-flex align-items-center">
      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary rounded-pill" style="padding: 5px;"><i class="uil uil-arrow-left fs-5"></i></a>
      <span class="navbar-brand fw-800 fs-3 text-color ms-3">Kelas {{ $classroom->subjects }}</span>
    </div>
  </div>
</nav>

<section>
  <div class="container-fluid px-5 my-3">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-auto">
            <button class="btn px-5 shadow-sm btn-add-question pt-3" data-bs-toggle="modal" data-bs-target="#addStudent">
              <div class="">
                <i class="uil uil-plus fs-1 text-secondary"></i>
                <p class="mt-3 text-secondary">Tambah Murid</p>
              </div>
            </button>
          </div>
          <div class="col ms-3">
            <table>
              <tr>
                <td>Kelas</td>
                <td>:<span class="mx-2 fw-700">{{ $classroom->subjects }}</span></td>
              </tr>
              <tr>
                <td>Siswa</td>
                <td>:<span class="mx-2 fw-700">{{ $classroom->user->where('role', 'student')->count() }}</span></td>
              </tr>
              <tr>
                <td>ID Kelas</td>
                <td>:<span class="mx-2 fw-700">{{ $classroom->classroom }}</span></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-12 my-5">
        <div class="bg-white p-3 rounded-4 shadow">
          <table id="listStudent" class="table table-hover list-exam" style="width:100%">
              <thead class="table-light">
                  <tr>
                      <th scope="col" style="width: 50px">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col" style="width: 200px">Option</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($classroom->user->where('role', 'student') as $key => $item)
                  <tr>
                      <th scope="row">{{ $key++ }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                      <td>
                        <button class="btn bg-second bg-second-hover text-light rounded-pill py-1" data-bs-toggle="modal" data-bs-target="#editStudent">
                          <i class="uil uil-edit"></i> edit
                        </button>
                        <button class="btn bg-danger text-light rounded-pill py-1"><i class="uil uil-edit"></i> Hapus</button>
                      </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Option</th>
                  </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal" tabindex="-1" id="addStudent">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Murid</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="inputStudent">
            <div class="row">
              <div class="col-6">
                <label for="inputName" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name[]" id="inputName" placeholder="Nama">
              </div>
              <div class="col-6">
                <label for="inputGender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="gender[]" aria-label="Default select example">
                  <option selected>Pilih Gender</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>
          </div>
  
          <button type="button" class="btn border rounded-pill mt-3" id="addOtherStudent">Tambah lainya</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn border rounded-pill" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn bg-second bg-second-hover text-light rounded-pill">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="editStudent">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title">Edit Murid</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="inputStudent">
            <div class="row">
              <div class="col-6">
                <label for="inputName" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name[]" id="inputName" placeholder="Nama">
              </div>
              <div class="col-6">
                <label for="inputGender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="gender[]" aria-label="Default select example">
                  <option selected>Pilih Gender</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
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
  <script src="{{ asset('vendors/data-table/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/data-table/dataTables.bootstrap5.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('#listStudent').DataTable();
    });
  </script>
  <script>
    $('#addOtherStudent').click(function() {
      $( "#inputStudent" ).append(`
            <div class="row mt-2">
              <div class="col-6">
                <label for="inputName" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name[]" id="inputName" placeholder="Nama">
              </div>
              <div class="col-6">
                <label for="inputGender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="gender[]" aria-label="Default select example">
                  <option selected>Pilih Gender</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>
      `);
    });
  </script>
@endsection