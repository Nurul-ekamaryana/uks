@extends('welcome')
@section('isi')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h2 style="color: white;">Data</h2>
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
                  <h6 class="mb-0">Data</h6>
                </div>
                
                <div class="col-6 text-end">
                        <form method="POST" action="{{ route('user.change', $userM->id) }}">
                    @csrf
                    @method('PUT')
                  <input class="btn bg-gradient-dark mb-0" type="submit"></input>
                  <a class="btn bg-gradient-primary mb-0" href="{{url('user')}}"></i>&nbsp;&nbsp; Kembali</a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
                <div class="row">
  
        
                <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="username" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$userM->username}}" readonly>
                    @error('username')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
                    
                <div class="col-md-6 mb-md-0 mb-4">
                    <input class="card card-body border form-control card-plain border-radius-lg d-flex align-items-center flex-row" 
                    name="name" type="text" style="border: 1px solid rgb(156, 154, 154);" value="{{$userM->name}}" placeholder="Nurul Eka">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
      <hr>

      <div class="col-md-6 mb-md-0 mb-4">
        <input name="password_new" type="text" class="form-control" style="border: 1px solid rgb(88, 88, 88);" >
        @error('password_new')
         <p>{{ $message }}</p>
        @enderror
      </div>
      <div class="col-md-6 mb-md-0 mb-4">
        <input name="password_confirm" type="text" class="form-control" style="border: 1px solid rgb(88, 88, 88);" >
        @error('password_confirm')
         <p>{{ $message }}</p>
        @enderror
      </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
