<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="description" content="
          />
    <meta name="keywords" content="
        
        " />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical"
        href="https://preview.keenthemes.comhttps://preview.keenthemes.com/metronic8/demo3/authentication/layouts/corporate/sign-up.html" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="https://preview.keenthemes.com/metronic8/demo3/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo3/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />

        @livewireStyles
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
  
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
 
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Form-->
                        <livewire:login-component/>
                        <!--end::Form-->
                    </div>

               
                    <!--end::Wrapper-->
                </div>
             
            </div>
            <!--end::Body-->
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(https://preview.keenthemes.com/metronic8/demo3/assets/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <!--begin::Image-->
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="assets/media/lng.png" alt="" />
                    <!--end::Image-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    {{-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--begin::Javascript-->
    <script src="{{asset('own/login.js')}}"></script> --}}
    {{-- <script>
            var hostUrl = "https://preview.keenthemes.com/metronic8/demo3/assets/";        </script>
                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="https://preview.keenthemes.com/metronic8/demo3/assets/plugins/global/plugins.bundle.js"></script>
                            <script src="https://preview.keenthemes.com/metronic8/demo3/assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="https://preview.keenthemes.com/metronic8/demo3/assets/js/custom/authentication/sign-up/general.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript--> --}}

        <script> 
    $(document).ready(function() { 
        function disableBack() { 
            window.history.forward() 
        } 
        window.onload = disableBack(); 
        window.onpageshow = function(e) { 
            if (e.persisted) 
                disableBack(); 
        } 
    }); 
</script> 


                @livewireScripts
</body>
<!--end::Body-->

</html>