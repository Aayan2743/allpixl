<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <link href="images/favicon.svg" rel="icon"/>
        <meta name="title" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content=""/>
        <meta property="og:type" content=""/>
        <meta property="og:url" content=""/>
        <link rel="canonical" href=""/>
        <meta property="og:image" content=""/>
        <meta property="og:title" content=""/>
        <meta property="fb:admins" content=""/>
        <meta name="twitter:card" content="">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">
        <link href="images/favicon.svg" rel="icon"/>
        <title>Login</title>
        <meta name="description" content="#">
        <meta name="author" content="#">
        <!-- Web Fonts============================================= -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <!-- Stylesheet============================================= -->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendor-bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendor-font-awesome.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carasouel.css')}}"/>
        <link rel="stylesheet" href="{{asset('vendor/navbar.scss')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/stylesheet1.css')}}"/>
        <link id="color-switcher" type="text/css" rel="stylesheet" href="#"/>
        <!---custome css file-->
        <link href="{{asset('vendor/menu.css')}}" rel="stylesheet">
        <!--bootsrtap css-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <!--bootsrtap icon -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!---cdn fafa-icon-->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          
    </head>
    <style>
        .btn-danger:hover{
            background-color: #FF7A2F !important;
            color: #ffffff !important;

        }
    </style>
    <body style="background-color: #FF7A2F;">
        <!-- Document Wrapper============================================= -->
        <!-- ----body content start-- -->
        <div id="content mt-5">
            <div class="container py-2 mt-5">
                <div class="row">
                    <div class="col-md-6 mt-2 py-2">
                        <img src="images/login.svg" width="100%" height="100%">
                    </div>
                    <div class="col-md-6 mt-5 py-5">
                     @livewire('Loginuser')
                    </div>  
                    <div class="div">
                     
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- Script -->
        <script src="{{asset('vendor/js/vendor.js')}}"></script>
        <script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('vendor/js/switcher.min.js')}}"></script>
        <script src="{{asset('vendor/js/theme.js')}}"></script>
       
    </body>
</html>