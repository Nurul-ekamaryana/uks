@extends('welcome')
@section('isi')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 style="color: white;">Cari</h2>
      </div>
      
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card mt-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                
                <div class="col-6 text-end">
                    <form action="{{route('record.pertanggal', ['tgl_awal' => '2023-01-01', 'tgl_akhir' => '2023-12-31']) }}" method="GET">
                        {{-- <div class="form-group">
                            <label>Tanggal Awal</label>
                            <input name="tgl_awal" type="date" class="form-control" style="border: 1px solid rgb(88, 88, 88);">
                            @error('tgl_awal')
                            <p>{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="col-md-12 mb-md-0 mb-4">
                          <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                          name="tgl_awal" type="date" style="border: 1px solid rgb(156, 154, 154);" >
                          @error('tgl_awal')
                          <p>{{ $message }}</p>
                          @enderror
                        </div>
                        <hr>
                        <div class="col-md-12 mb-md-0 mb-4">
                          <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                          name="tgl_akhir" type="date" style="border: 1px solid rgb(156, 154, 154);" >
                          @error('tgl_akhir')
                          <p>{{ $message }}</p>
                          @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input name="tgl_akhir" type="date" class="form-control" style="border: 1px solid rgb(88, 88, 88);">
                            @error('tgl_akhir')
                            <p>{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <h8>*Tanggal Akhir tidak masuk data</h8>                        <hr>

                        <button type="submit" class="btn btn-success">Tampilkan Data</button>
                      </form>
    </div>
    </div>
    </div>
</section>
@endsection
