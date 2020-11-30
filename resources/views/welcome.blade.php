<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       <link rel="stylesheet" href="{{url('/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
     <link rel="stylesheet" href="css/fontawesome-all.css">
      <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{url('/')}}/css/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.min.css">
     <link rel="stylesheet" href="{{url('/')}}/css/slick.css">
     <link rel="stylesheet" href="{{url('/')}}/css/slick-theme.css">
       @yield('style')
    </head>
    <body>
       
            <div class="content">
                         @yield('main')

           

             
            </div>

@yield('script')

             <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>

     <script src="js/owl.carousel.min.js"></script>
    </body>
</html>
