<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Login Admin</title>
     <!-- plugins:css -->
     <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
     <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
     <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
     <link rel="stylesheet" href="{{asset('images/favicon.png')}}">
</head>

<body>
     <div class="container-scroller">
          <div class="container-fluid page-body-wrapper full-page-wrapper">
               <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                         <div class="col-lg-4 mx-auto">
                              @if (session('error'))
                              <div class="alert alert-danger">
                                   <b>Opps!</b> {{ session('error') }}
                              </div>
                              @endif
                              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                   <div class="brand-logo">
                                        <img src="../../images/logo.svg" alt="logo">
                                   </div>
                                   <h4>Hello! let's get started</h4>
                                   <h6 class="fw-light">Sign in to continue.</h6>
                                   <form action="{{ route('loginAction') }}" method="post" class="pt-3"> @csrf
                                        <div class="form-group">
                                             <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                             <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required="">
                                        </div>
                                        <div class="mt-3">
                                             <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                        </div>
                                        <div class="my-2 d-flex justify-content-between align-items-center">
                                             <div class="form-check">
                                                  <label class="form-check-label text-muted">
                                                       <input type="checkbox" class="form-check-input">
                                                       Keep me signed in
                                                  </label>
                                             </div>
                                             <a href="#" class="auth-link text-black">Forgot password?</a>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- content-wrapper ends -->
          </div>
          <!-- page-body-wrapper ends -->
     </div>
     <!-- container-scroller -->
     <!-- plugins:js -->
     <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="{{asset('js/off-canvas.js')}}"></script>
     <script src="{{asset('js/hoverable-collapse.js')}}"></script>
     <script src="{{asset('js/template.js')}}"></script>
     <script src="{{asset('js/settings.js')}}"></script>
     <script src="{{asset('js/todolist.js')}}"></script>

     <!-- endinject -->
</body>

</html>