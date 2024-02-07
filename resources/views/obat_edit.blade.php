@extends('welcome')
@section('isi')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 style="color: white;">Edit Data Obat</h2>
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
                  <h6 class="mb-0">Isi Data Obat</h6>
                </div>
                
                <div class="col-6 text-end">
                    <form action ="{{ route('obat.update', $oM->id) }}"  method="POST">
                    @csrf
                    @method('PUT')
                  <input class="btn bg-gradient-dark mb-0" type="submit" name="submit" value="Edit"></input>
                  <a class="btn bg-gradient-primary mb-0" href="{{route('obat.index')}}"></i>&nbsp;&nbsp; Kembali</a>
                </div>
              </div>
            </div>

            <div class="card-body p-3">
              <div class="row">

                <div class="col-md-6 mb-md-0 mb-4">
                  <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                  name="name" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{ $oM->name}}">
                  @error('name')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
                <div class="col-md-6 mb-md-0 mb-4">
                  <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                  name="jenis_obat" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$oM->jenis_obat}}">
                  @error('jenis_obat')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
              
                <hr>

                <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="ket" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{ $oM->ket}}" >
                    @error('ket')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
                  {{-- <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="jenis_obat" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$oM->jenis_obat}}">
                    @error('jenis_obat')
                    <p>{{ $message }}</p>
                    @enderror
                  </div> --}}
                {{-- <div class="col-md-6 mb-md-0 mb-4">
                  <section class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="">{{ $sM->kelas }}</option>
                        <p>Selected Value (sM): {{ $sM->kelas }}</p>
                        <p>Old Value (from old('kelas')): {{ old('kelas') }}
                
                        @foreach(['10RPL1', '10RPL2', '11RPL1', '11RPL2', '12RPL1', '12RPL2',
                            '10TKJ1', '10TKJ2', '11TKJ1', '11TKJ2', '12TKJ1', '12TKJ2',
                            '10BDP1', '10BDP2', '10BDP3', '10BDP4', '10BDP5', '11BDP1', '11BDP2', '11BDP3', '11BDP4', '11BDP5', '12BDP1', '12BDP2', '12BDP3', '12BDP4', '12BDP5',
                            '10DG1','10DG2','11DG1','11DG2','12DG1','12DG2',
                            '10TL1','11TL1','12TL1',
                            '10TB1','11TB1','12TB1',
                            '10TBSM1','10TBSM2','11TBSM1','11TBSM2','12TBSM1','12TBSM2',
                            '10TPM1','10TPM2','11TPM1','11TPM2','12TPM1','12TPM2',
                            '10OTKP1', '10OTKP2', '10OTKP3', '10OTKP4','11OTKP1', '11OTKP2', '11OTKP3', '11OTKP4','12OTKP1', '12OTKP2', '12OTKP3', '12OTKP4',
                            '10AKL1','10AKL2','10AKL3', '11AKL1','11AKL2','11AKL3', '12AKL1','12AKL2','12AKL3'] as $kelas)
                            <option value="{{ $kelas }}" @if($kelas === $sM->kelas) selected @endif>{{ $kelas }}</option>
                        @endforeach
                    </select>
                </section>
                
                </div>
                 --}}
          </div>
        </div>
      </div><form>

    </div>
  </div>
</section>
@endsection
