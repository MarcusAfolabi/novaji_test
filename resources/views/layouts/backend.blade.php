 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="UTF-8">
     <meta name="description" content="Ecommerce Platform">
     <meta name="keywords" content="Ecommerce Platform">

     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Novaji Introserve Admin </title>
     <link rel="stylesheet" href="{{ asset('back/vendors/feather/feather.css') }}">
     <link rel="stylesheet" href="{{ asset('back/vendors/mdi/css/materialdesignicons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('back/vendors/typicons/typicons.css') }}">
     <link rel="stylesheet" href="{{ asset('back/vendors/simple-line-icons/css/simple-line-icons.css') }}">
     <link rel="stylesheet" href="{{ asset('back/vendors/css/vendor.bundle.base.css') }}">

     <link rel="stylesheet" href="{{ asset('back/css/vertical-layout-light/style.css') }}">
     <link rel="shortcut icon" href="{{ asset('back/images/favicon.png') }}" />
 </head>

 <body>
     <div class="container-scroller">
         <div class="container-fluid page-body-wrapper full-page-wrapper">
             <div class="content-wrapper d-flex align-items-center auth px-0">
                 <div class="row w-100 mx-0">
                     <div class="col-lg-4 mx-auto">
                         <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                             <div class="mb-2">
                                 <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                     <i class="ti-facebook me-2"></i>Connect using facebook
                                 </button>
                             </div>
                             <h4>Or continue with</h4>
                             <x-validation-errors class="mb-4" />

                             @if (session('status'))
                             <div class="mb-4 font-medium text-sm text-green-600">
                                 {{ session('status') }}
                             </div>
                             @endif

                             @yield('main')


                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="{{ asset('back/vendors/js/vendor.bundle.base.js') }}"></script>
     <script src="{{ asset('back/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
     <script src="{{ asset('back/js/off-canvas.js') }}"></script>
     <script src="{{ asset('back/js/hoverable-collapse.js') }}"></script>
     <script src="{{ asset('back/js/template.js') }}"></script>
     <script src="{{ asset('back/js/settings.js') }}"></script>
     <script src="{{ asset('back/js/todolist.js') }}"></script>
 </body>

 </html>