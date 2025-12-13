<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Dashboard | User</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- App favicon -->
      <link rel="shortcut icon" href="favicon.png">
      <!-- plugin css -->
      <link href="{{ asset('admin-assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
      <!-- preloader css -->
      <link rel="stylesheet" href="{{ asset('admin-assets/css/preloader.min.css') }}" type="text/css" />
      <!-- Bootstrap Css -->
      <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{ asset('admin-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://unpkg.com/feather-icons"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   </head>
   <header id="page-topbar">
      <div class="navbar-header">
         <div class="d-flex">
            <!-- LOGO -->
            
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- App Search-->
            
         </div>
         <div class="d-flex">
            <div class="mt-3  d-sm-inline-block">
               <div id="google_translate_element"></div>
            </div>
            
            <div class="dropdown d-inline-block">
               <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img class="rounded-circle header-profile-user" src="{{ asset('admin-assets/images/users/avatar-1.png') }}"
                  alt="Header Avatar">
               <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->fullname}}</span>
               <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
               </button>
               <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a class="dropdown-item" href="profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                  <div class="dropdown-divider"></div>
                  {{-- <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a> --}}
               </div>
            </div>
         </div>
      </div>
      <div class="vertical-menu">
         <div data-simplebar class="h-100">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu">Menu</li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">New Package</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('manage.packages') }}">
                            <i data-feather="users"></i>
                            <span data-key="t-dashboard">Manager Packages</span>
                        </a>
                    </li>
                  <li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i data-feather="log-out"></i>
                         <span data-key="t-logout">Logout</span>
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </header>
   {{-- <script>
      document.querySelector('a[href="{{ route('logout') }}"]').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('logout-form').submit();
      });
  </script> --}}
   <body data-sidebar-size="lg" data-layout-mode="light" data-topbar="light" data-sidebar="light">


      @yield('content')
      






   
      <!-- FOOTER -->
      <footer class="footer">
         <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <script>document.write(new Date().getFullYear())</script> © Admin Panel
               <div class="col-sm-6">
                  <div class="text-sm-end d-none d-sm-block">
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript">
         function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
         }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <!-- Right bar overlay-->
      <div class="rightbar-overlay"></div>
       <!-- JAVASCRIPT -->
        <script>
            feather.replace()
        </script>
        <script src=" {{asset('admin-assets/libs/jquery/jquery.min.js')}} "></script>
        <script src=" {{asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
        <script src="{{asset('admin-assets/libs/metismenu/metisMenu.min.js')}} "></script>
        <script src="{{asset('admin-assets/libs/simplebar/simplebar.min.js')}} "></script>
        <script src="{{asset('admin-assets/libs/node-waves/waves.min.js')}} "></script>


        
        <!-- Plugins js-->
        <script src="{{asset('admin-assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}} "></script>
        <script src="{{asset('admin-assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}} "></script>
        <!-- dashboard init -->
        <script src="{{asset('admin-assets/js/pages/dashboard.init.js')}} "></script>
        <script src="{{asset('admin-assets/js/app.js')}} "></script>
   </body>
</html>