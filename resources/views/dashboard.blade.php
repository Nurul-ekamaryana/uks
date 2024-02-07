@extends('welcome')

@section('chart')
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}  
@endsection
@section('isi')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-sm-7">
          <h3 style="color: white;">Dashboard Pages</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- Include Chart.js -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold"> Smkn 1 subang</p>
                  <h5 class="font-weight-bolder">
                   Jumlah siswa
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">
                       {{$totalSiswa}}
                    </span>
                    orang
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="fa-solid fa-users-gear" aria-hidden="true"></i>
                  <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Obat uks</p>
                  <h5 class="font-weight-bolder">
                 Kesedian Obat
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">{{$totalObat}}</span>
                    pcs
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <i class="fas fa-plus text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Petugas uks</p>
                  <h5 class="font-weight-bolder">
                  Jumlah Petugas
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">
                      {{$totalUser}}
                    </span>
                    orang
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="fas fa-user text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Medical record</p>
                  <h5 class="font-weight-bolder">
                   Record siswa smea
                  </h5>
                  <p class="mb-0">
                    <span class="text-success text-sm font-weight-bolder">{{$totalRecord}}</span> 
                    orang
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> 
                               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  

  <!-- Main content -->
  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
       
      </div>
      </div>
      </div>
<div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      {!! $chart->container() !!}
    </div>
  </div>
<div class="col-lg-5">
  <div class="card card-carousel overflow-hidden h-100 p-0">
    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
      <div class="carousel-inner border-radius-lg h-100">
        <div class="carousel-item h-100 active" style="background-image: url('./assets/img/9pola.jpg');
              background-size: cover;">
          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class=" bg-white text-center border-radius-md mb-3">
              {{-- <i class="ni ni-camera-compact text-dark opacity-10"></i> --}}
            </div>
            {{-- <h5 style="color: black">Cuci Tangan Minimal 5x Sehari</h5>
            <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p> --}}
          </div>
        </div>
        <div class="carousel-item h-100" style="background-image: url('./assets/img/19_Januari_01.png');
                    background-size: cover;">
          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class=" bg-white text-center border-radius-md mb-3">
              {{-- <i class="ni ni-bulb-61 text-dark opacity-10"></i> --}}
            </div>
            {{-- <h5 class="text-white mb-1">Faster way to create web pages</h5>
            <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p> --}}
          </div>
        </div>
        <div class="carousel-item h-100" style="background-image: url('./assets/img/makan.png');
               background-size: cover;">
          <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class=" bg-white text-center border-radius-md mb-3">
              {{-- <i class="ni ni-trophy text-dark opacity-10"></i> --}}
            </div>
            {{-- <h5 class="text-white mb-1">Share with us your design tips!</h5>
            <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p> --}}
          </div>
        </div>
      </div>
      <button class="carousel-control-prev w-5 me-3 "  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
</div>
@endsection