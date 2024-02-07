<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/heartbeat.png')}}">
  <link rel="icon" type="image/png" href="{{url('assets/img/heartbeat.png')}}">
  <title>UKS SMKN1SUBANG</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet">
</head>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
               <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " >
              UKS Smk Negri 1 Subang            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" >
                    <i class="fa fa-char-pie opacity-6 text-dark me-1"></i>
                    
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" >
                    <i class="fa fa-usr opacity-6 text-dark me-1"></i>
                    
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" >
                    <i class="fas fa-uer-circle opacity-6 text-dark me-1"></i>
                    
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" >
                    <i class="fas fa-ke opacity-6 text-dark me-1"></i>
                    
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                 <a href="https://www.instagram.com/officialsmkn1subang/" class="btn btn-sm mb-0 me-1 btn-primary">About Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                  <form action="{{ route('login.action') }}" method="POST">
                  @csrf
                <div class="card-header pb-0 text-start border-radius-lg">
                  <h4 class="font-weight-bolder ">Sign In</h4>
                  <p class="mb-0">Enter your Username and password to login</p>
                
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input name="username" type="username" class="form-control form-control-lg" placeholder="username" aria-label="username">
                    </div>
                    <div class="mb-3 position-relative">
                      <input name="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" id="passwordInput">
                      <span toggle="#passwordInput" class="fa fa-fw fa-eye field-icon toggle-password position-absolute end-5 top-50 translate-middle-y"></span>
                  </div>  
                  @if(session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                  @endif
                  @if($errors->any())
                  @foreach($errors->all() as $err)
                  <p class="alert alert-denger">{{ $err }}</p>
                  @endforeach
                  @endif                
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">LOGIN</button>
                    </div>
                  </form>
                </div>
            </div>
              </div>
            </div>
               </form>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
               style="background-image: url('assets/img/unnamed.jpg');
                       background-size: cover;">
                {{-- <span class="mask bg-gradient-info opacity-6"></span> --}}
                {{-- <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{url('assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var showPasswordCheckbox = document.getElementById('showPassword');
      var passwordInput = document.getElementById('yourPasswordInputId'); // Replace 'yourPasswordInputId' with the actual ID of your password input field
  
      if (showPasswordCheckbox && passwordInput) {
        showPasswordCheckbox.addEventListener('change', function () {
          if (showPasswordCheckbox.checked) {
            passwordInput.type = 'text';
          } else {
            passwordInput.type = 'password';
          }
        });
      }
    });
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var passwordInput = document.getElementById('passwordInput');
        var togglePassword = document.querySelector('.toggle-password');

        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function () {
                var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
        }
    });
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>