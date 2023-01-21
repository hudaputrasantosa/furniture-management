<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Dashboard</title>
     <!-- plugins:css -->
     <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
     <link rel="stylesheet" href="{{asset('js/select.dataTables.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
     <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
     <link rel="stylesheet" href="{{ asset('jquery/jquery-3.6.3.min.js') }}">
</head>

<body>
     <div class="container-scroller">

          <!-- partial:partials/_navbar.html -->
          <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                    <div class="me-3">
                         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                              <span class="icon-menu"></span>
                         </button>
                    </div>
                    <div>
                         <a class="navbar-brand brand-logo" href="#">
                              <img src="{{asset('images/furnitura-side.svg')}}" alt="logo" />
                         </a>
                         <a class="navbar-brand brand-logo-mini" href="#">
                              <img src="{{asset('images/furnitura-logo.svg')}}" alt="logo" />
                         </a>
                    </div>
               </div>
               <div class="navbar-menu-wrapper d-flex align-items-top">
                    <ul class="navbar-nav">
                         <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                              <h2 class="welcome-text">Selamat Datang di Dashboard Panel, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h2>
                         </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                      
                         <li class="nav-item d-none d-lg-block">
                              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                                   <span class="input-group-addon input-group-prepend border-right">
                                        <span class="icon-calendar input-group-text calendar-icon"></span>
                                   </span>
                                   <input type="text" class="form-control">
                              </div>
                         </li>
                         <li class="nav-item">
                              <form class="search-form" action="#">
                                   <i class="icon-search"></i>
                                   <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                              </form>
                         </li>
                     
                         <li class="nav-item dropdown">
                              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                   <i class="icon-bell"></i>
                                   <span class="count"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                                   <a class="dropdown-item py-3">
                                        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                                        <span class="badge badge-pill badge-primary float-right">View all</span>
                                   </a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <img src="{{asset('images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow py-2">
                                             <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                             <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow py-2">
                                             <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                             <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow py-2">
                                             <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                             <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                                        </div>
                                   </a>
                              </div>
                         </li>
                         <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                   <img class="img-xs rounded-circle" src="{{ asset('images/faces/face8.jpg') }}" alt="Profile image"> </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                   <div class="dropdown-header text-center">
                                        <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                                        <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                                   </div>
                                   <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                                   <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                                   <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                                   <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                                   <a class="dropdown-item" href="{{ route('logoutAction')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                         <span class="mdi mdi-menu"></span>
                    </button>
               </div>
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">


               <!-- partial -->
               <!-- partial:partials/_sidebar.html -->
               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                         <li class="nav-item">
                              <a class="nav-link" href="index.html">
                                   <i class="mdi mdi-grid-large menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>
                         </li>
                         <li class="nav-item nav-category">Ketersediaan Barang</li>
                         <li class="nav-item">
                              <a href="{{ route('barang') }}" class="nav-link">
                                   <i class="menu-icon mdi mdi-floor-plan"></i>
                                   <span class="menu-title">Barang</span>                     
                              </a>
                              <li class="nav-item">
                                   <a class="nav-link" data-bs-toggle="collapse" href="#ui-b" aria-expanded="false" aria-controls="ui-basic">
                                        <i class="menu-icon mdi mdi-floor-plan"></i>
                                        <span class="menu-title">Pemesanan</span>                     
                                   </a>                        
                              </li>
                              <li class="nav-item">
                                   {{-- <a href="{{ route('penjualan') }}">Jual</a> --}}
                                   <a href="{{ route('penjualan') }}" class="nav-link">
                                        <i class="menu-icon mdi mdi-floor-plan"></i>
                                        <span class="menu-title">Penjualan</span>                     
                                   </a>                        
                              </li>                        
                         </li>
                         <li class="nav-item nav-category">Pengelolaan Barang</li>
                         <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                   <i class="menu-icon mdi mdi-floor-plan"></i>
                                   <span class="menu-title">Pembelian</span>                     
                              </a>
                              <li class="nav-item">
                                   <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                        <i class="menu-icon mdi mdi-floor-plan"></i>
                                        <span class="menu-title">Supplier</span>                     
                                   </a>                        
                              </li>                       
                         </li>
                         <li class="nav-item nav-category">Pengelolaan User</li>
                         <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                   <i class="menu-icon mdi mdi-floor-plan"></i>
                                   <span class="menu-title">User Admin</span>                     
                              </a>                
                         </li>
                    </ul>
               </nav>
               <!-- partial -->
               <div class="main-panel">
                    <div class="content-wrapper">
                         <div class="row">
                              <div class="col-sm-12">
                                   <div class="home-tab">
                                        @yield('main-content')
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
                              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
                         </div>
                    </footer>
                    <!-- partial -->
               </div>
               <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
     </div>
     <!-- container-scroller -->

     <!-- plugins:js -->
     <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
     <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
     <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
     <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
     <script src="{{asset('js/off-canvas.js')}}"></script>
     <script src="{{asset('js/hoverable-collapse.js')}}"></script>
     <script src="{{asset('js/template.js')}}"></script>
     <script src="{{asset('js/settings.js')}}"></script>
     <script src="{{asset('js/todolist.js')}}"></script>
     <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
     <script src="{{asset('js/dashboard.js')}}"></script>
     <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>

</body>

</html>