@extends('welcome')
@section('isi')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-7">
          <h3 style="color: white;">Siswa Pages</h3>
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
            <h6 class="text-uppercase  text-sm font-weight-bolder" style="color: rgb(56, 56, 56)">Siswa SMKN 1 SUBANG</h6>
            <a href="{{ route('siswa.create') }}" class="btn btn-outline-primary btn-sm mb-0">Tambah Siswa</a>
            
          </div>
          <br>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table id="myTable" class="display">
                <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NIS</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-3">Kelas</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-3">Aksi</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @if (count($productsM) > 0) --}}
                    @foreach ($sM as $siswa)
                    <tr>
                      <td class=" text-secondary text-sm font-weight-bolder opacity-14">{{ $siswa->nis }}</td>
                      <td class=" text-secondary text-sm font-weight-bolder opacity-14">{{ $siswa->name }}</td>
                      <td class=" text-secondary text-sm font-weight-bolder opacity-14">{{ $siswa->kelas }}</td>
                
                      <td>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-outline-success btn-xm mb-0">
                                <i class="fas fa-edit"></i>
                            </a>
                    
                            @csrf
                            @method('DELETE')
                    
                            <button type="submit" class="btn btn-outline-warning btn-xm mb-0" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    
                    </tr>                @endforeach

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



