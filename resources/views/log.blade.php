@extends('welcome')
@section('isi')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-7">
          <h3 style="color: white;">log Pages</h3>
        </div>
      </div>
    </div>
  </section>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />

  @if($message = Session::get('success'))
  <div id="successMessage" class="alert alert-success">
    {{ $message }}
  </div>
@endif

{{-- <script>
  // Wait for the document to be fully loaded
  document.addEventListener("DOMContentLoaded", function() {
      // Find the success message element by its ID
      var successMessage = document.getElementById("successMessage");
  
      // Check if the success message element exists
      if (successMessage) {
          // Set a timeout to hide the message after 5 seconds (you can adjust the duration)
          setTimeout(function() {
              successMessage.style.display = "none";
          }, 5000); // 5000 milliseconds = 5 seconds
      }
  });
  </script> --}}
  

  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between align-items-center">
            <h6 class="text-uppercase  text-sm font-weight-bolder" style="color: rgb(56, 56, 56)">Data history uks</h6>
            {{-- <a href="{{ route('obat.create') }}" class="btn btn-outline-primary btn-sm mb-0">Tambah Siswa</a> --}}
          </div>
          <br>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table id="myTable" class="display">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama</th>
                      
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Username</th>
                      
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-3">Keterangan</th>
                      @if (Auth::user()->role == 'admin')
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-3">Role</th>
                      @endif
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-3">Tanggal</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @if (count($productsM) > 0) --}}
                    @foreach ($oM as $siswa)
                    <tr>
                        <td>{{ $siswa->name }}</td>
                                    <td>{{ $siswa->username }}</td>
                                    <td>{{ $siswa->activity }}</td>
                                    @if (Auth::user()->role == 'admin')
                                    <td>{{ $siswa->role }}</td>
                                    @endif
                                    <td>{{ $siswa->created_at }}</td>
                                </tr>
                                @endforeach
                  </tbody>
                </table>
                <script
                src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
                crossorigin="anonymous"></script>    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                  <script>
                     let table = new DataTable('#myTable');
                  </script>
              </div>
            </div>
          </div>
        </div>
      </div>

  </main>

@endsection



