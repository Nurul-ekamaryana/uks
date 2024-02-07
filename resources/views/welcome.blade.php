<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/heartbeat.png')}}">
  <link rel="icon" type="image/png" href="{{url('assets/img/heartbeat.png')}}">
  <title>UKS SMKN1SUBANG</title>
<style>

.user-image {
    width: 40px; /* Adjust the width as needed */
    height: 40px; /* Adjust the height as needed */
    border-radius: 50%; /* For a circular image, adjust the border-radius accordingly */
    object-fit: cover; /* Ensures the image covers the entire container */
    margin-right: 2px; /* Add margin to separate the image from text */
}


    .user-profile-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            background-color: #333; /* Set your desired background color */
            padding: 10px;
            border-radius: 5px;
        }

        .user-profile i {
            margin-right: 10px;
            color: aliceblue;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            color: #fff; /* Set your desired text color */
            font-weight: bold;
        }

        .user-role {
            color: #ddd; /* Set a slightly lighter text color for role */
            font-size: 0.9em;
        }
</style>
  

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5mQxh9eDYj9VaakoYf0MOb41ONWZB/p5oKIC6Rupp/ztc+uyy9q6b16N3upKJ" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-b4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8jFC+wIf5XpMlAAQFAI2Ax3C5Y5VR0DA" crossorigin="anonymous"></script>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet">
</head>


<body class="bg-black">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html" target="_blank">
        <img src="{{url('assets/img/NESAS.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Unit Kesehatan SMEA</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{url('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
                  {{-- @if (Auth::user()->role == 'admin') --}}
        <li class="nav-item">
          <a class="nav-link " href="{{url('siswa')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Siswa</span>
          </a>
        </li>
        {{-- @endif --}}
        <li class="nav-item">
          <a class="nav-link" href="{{url('obat')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Obat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('record')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Medical Record</span>
          </a>
        </li>
          {{-- @if (Auth::user()->role == 'admin') --}}
          <li class="nav-item">
          <a class="nav-link" href="{{url('user')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">users</span>
          </a>
        </li>
        {{-- @endif --}}
        <li class="nav-item">
          <a class="nav-link" href="{{url('log')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">History</span>
          </a>
        </li>
      </ul>
    </div>
    </div>   
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>

  <br>
  <br>
  <div>
    <button class="btn btn-warning btn-sm mb-0 w-100" onclick="showLogoutConfirmation()">Logout</button>
  </div>
  </aside>
  <main class="main-content position-relative border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
        </div>
      </div>
      <div class="user-profile-container">
        <div class="bg-black p-3 rounded d-flex align-items-center">
          <img src="{{url('assets/img/Cuplikan layar 2023-12-01 114258.png')}}" alt="User Image" class="user-image">
          <span class="user-info ms-2">
                {{-- <span class="user-name text-white">{{ Auth::user()->name }}</span>
                <span class="user-role text-gray">{{ Auth::user()->role }}</span> --}}
            </span>
        </div>
    </div>    
        
    </nav>
       @yield('isi')
       @yield('chart')
  </main>
  <div class="modal" id="logoutConfirmationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin keluar?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-warning" href="{{ url('logout') }}">Ya, Keluar</a>
            </div>
        </div>
    </div>
</div>


<script>
  function showLogoutConfirmation() {
      var logoutConfirmationModal = new bootstrap.Modal(document.getElementById('logoutConfirmationModal'));
      logoutConfirmationModal.show();
  }
</script>


  <!-- Your JavaScript includes here -->
  <script src="{{url('assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Get all navigation links
    var navLinks = document.querySelectorAll('.nav-link');

    // Add click event listener to each navigation link
    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        // Remove "active-nav" class from all navigation links
        navLinks.forEach(function (navLink) {
          navLink.classList.remove('active-nav');
        });

        // Add "active-nav" class to the clicked navigation link
        link.classList.add('active-nav');
      });
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Get the select element and options
        var select = $('#id_siswa');
        var options = select.find('option');

        // Get the search input element
        var searchInput = $('#searchInput');

        // Add input event listener to the search input
        searchInput.on('input', function () {
            var searchQuery = $(this).val().toLowerCase();

            // Filter options based on the search query
            var filteredOptions = options.filter(function () {
                var optionText = $(this).text().toLowerCase();
                return optionText.indexOf(searchQuery) > -1;
            });

            // Update the select element with filtered options
            select.html(filteredOptions);
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get the select element and options
        var select = $('#kelas');
        var options = select.find('option');

        // Get the search input element
        var searchInput = $('#searchInputt');

        // Add input event listener to the search input
        searchInput.on('input', function () {
            var searchQuery = $(this).val().toLowerCase();

            // Filter options based on the search query
            var filteredOptions = options.filter(function () {
                var optionText = $(this).text().toLowerCase();
                return optionText.indexOf(searchQuery) > -1;
            });

            // Update the select element with filtered options
            select.html(filteredOptions);
        });
    });
</script>


  <script>
    // Your other JavaScript code here
  </script>
</body>
</html>
