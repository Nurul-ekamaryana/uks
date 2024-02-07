@extends('welcome')
@section('isi')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 style="color: white;">Data Siswa sakit</h2>
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
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Data Siswa sakit</h6>
                </div>
                
                <div class="col-6 text-end">
                        <form method="POST" action="{{ route('record.update', $record->id) }}">
                    @csrf
                    @method('PUT')
                  <input class="btn bg-gradient-dark mb-0" type="submit"></input>
                  <a class="btn bg-gradient-primary mb-0" href="{{url('record')}}"></i>&nbsp;&nbsp; Kembali</a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
                <div class="row">
  
                <div class="col-md-6 mb-md-0 mb-4">
                   
                  <section class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search by name">
    
                    <select name="id_siswa" id="id_siswa" class="form-control">
                            <option value="">- pilih siswa -</option>

                                            @foreach ($siswa as $d)
                                <?php
                                if ($d->id == $record->id_siswa):
                                    $selected = "selected";
                                else:
                                $selected = "";
                                endif;
                                ?>   
                                   <option {{ $selected }} value="{{ $d->id}}">
                                    {{$d->name}} - {{$d->kelas}}
                                </option>                       
                            @endforeach   
                        </select>                
                    </section>
                </div>
                {{-- <div class="col-md-6 mb-md-0 mb-4">
                    <section class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <select name="id_obat" id="id_obat" class="form-control">
                            <option value="">- pilih obat -</option>
                            @foreach ($obat as $d)
                            <?php
                            if ($d->id == $record->id_obat):
                                $selected = "selected";
                            else:
                            $selected = "";
                            endif;
                            ?>   
                               <option {{ $selected }} value="{{ $d->id}}">
                                {{$d->name}} - {{$d->ket}}
                            </option>                       
                        @endforeach
                        </select>                
                    </section>
                </div> --}}
       
        
                <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="keluhan" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$record->keluhan}}">
                    @error('keluhan')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
                    
                {{-- <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="dosis" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$record->dosis}}" placeholder="3x1">
                    @error('dosis')
                    <p>{{ $message }}</p>
                    @enderror
                  </div> --}}
      <hr>
                  {{-- <div class="col-md-6 mb-md-0 mb-4">
                    <section class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <select name="status" class="form-control" style="border: 1px solid rgb(88, 88, 88)">
                            <option value="sembuh" @if($record->status === 'sembuh') selected @endif>sembuh</option>
                            <option value="belum diperiksa" @if($record->status === 'belum diperiksa') selected @endif>belum diperiksa</option>
                        </select>
                        @error('status')
                            <p>{{ $message }}</p>
                        @enderror
                    </section>
                </div> --}}
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
