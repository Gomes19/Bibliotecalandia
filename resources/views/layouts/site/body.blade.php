<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="" />
    <meta name="description" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:image" content="https://makaanlelo.com/tf_products_007/bookland/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>PAP 2022</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icons/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body class="layout-v2  " >


  
    @include('layouts.site.header')

        @yield('conteudo')
    

    @include('layouts.site.footer')
      <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('estado.aprovacao'))
    <script>
        Swal.fire(
            'A sua requisição para alocar a tua biblioteca neste sistema está sendo analisada!',
            '',
            'info'
        )
    </script>
@endif
@if (session('editada'))
<script>
    Swal.fire(
        'Categoria editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('editada_f'))
<script>
Swal.fire(
    'ERro ao editar Categoria!',
    '',
    'error'
)
</script>
@endif

@if (session('status'))
<script>
    Swal.fire(
        'Categoria Ativado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao cadastrar Categoria!',
    '',
    'success'
)
</script>
@endif        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('eliminada'))
    <script>
        Swal.fire(
            'Categoria Eliminado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('editada'))
<script>
    Swal.fire(
        'Categoria editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('editada_f'))
<script>
Swal.fire(
    'ERro ao editar Categoria!',
    '',
    'error'
)
</script>
@endif

@if (session('status'))
<script>
    Swal.fire(
        'Categoria Ativado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao cadastrar Categoria!',
    '',
    'succddess'
)
</script>
@endif      
    <!-- Smartsupp Live Chat script -->
  </body>
</html>
</body>
</html>

