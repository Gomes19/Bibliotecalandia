<!DOCTYPE html>
<html lang="en">


 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PAP 2022</title>
        <meta name="description" content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
        <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
        <meta name="author" content="Iqonic Design">
        <meta name="DC.title" content="Qompac UI Responsive Bootstrap 5 Admin Dashboard Template">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}">
        
        <link rel="stylesheet" href="{{asset('assets/vendor/sheperd/dist/css/sheperd.css')}}">
        
        <!-- Flatpickr css -->
        <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.css')}}">
        
        
        
        
        
        
        
        
        <!-- qompac-ui Design System Css -->
        <link rel="stylesheet" href="{{asset('assets/css/qompac-ui.min.css')}}">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.min.css')}}">
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}">
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" >
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}">
        
        <link rel="stylesheet" href="{{asset('assets/vendor/swiperSlider/swiper-bundle.min.css')}}">
        
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">    </head>
    



</head>
<body class="">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body ">
          <img src="{{ asset('images/logo.png') }}" alt="logo">
        </div>
    </div>
    </div>
    <!-- loader END -->
    
    @include('layouts.admin.nav')
    
    <main class="main-content">
    @include('layouts.admin.header')
    
         @yield('conteudo')
         
    @include('layouts.admin.footer')



@stack('graficos')
</body>

</html>
