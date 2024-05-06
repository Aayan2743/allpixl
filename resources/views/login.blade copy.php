

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.3
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head>
        <title>Login</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="https://preview.keenthemes.comhttps://preview.keenthemes.com/metronic8/demo3/authentication/layouts/corporate/sign-up.html"/>
        <!-- <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo3/assets/media/logos/favicon.ico"/> -->

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="https://preview.keenthemes.com/metronic8/demo3/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="https://preview.keenthemes.com/metronic8/demo3/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--begin::Google tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-37564768-1');
</script>
<!--end::Google tag-->        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="auth-bg" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
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
<!--end::Theme mode setup on page load-->
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Main-->
	<!--begin::Root-->
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
<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="https://preview.keenthemes.com/metronic8/demo3/authentication/layouts/corporate/sign-in.html" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bolder mb-3">
      Login 
        </h1>
        <!--end::Title-->


    </div>
    <!--begin::Heading-->




    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="User Name"  name="uname" id="uname" autocomplete="off" class="form-control bg-transparent"/> 
        <div class="invalid-feedbac"  style="color: red"  id="error_username">
        </div>
        <!--end::Email-->
    </div>

    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">    
                <input class="form-control bg-transparent" type="password" placeholder="Password" name="upassword" id="upassword" autocomplete="off"/>

                <div class="invalid-feedbac" style="color: red"  id="error_password">
                   
                  </div>
                {{-- <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="ki-duotone ki-eye-slash fs-2"></i>                    <i class="ki-duotone ki-eye fs-2 d-none"></i>                </span> --}}
            </div>
            <!--end::Input wrapper-->

            <!--begin::Meter-->
            {{-- <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div> --}}
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->


        <!--end::Hint-->
    </div>
    <!--end::Input group--->


    <!--begin::Accept-->
    {{-- <div class="fv-row mb-8">
        <label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toc" value="1"/>
            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                I Accept the <a href="" class="ms-1 link-primary">Terms</a>
            </span>
        </label>
    </div> --}}
    <!--end::Accept-->

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="button" id="login"  class="btn btn-primary">
            
<!--begin::Indicator label-->
<span class="indicator-label">
    Login</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->        </button>
    </div>
    <!--end::Submit button-->
   
    <!--begin::Sign up-->
    {{-- <div class="text-gray-500 text-center fw-semibold fs-6">
    Don't Have Account?

        <a href="signup.html" class="link-primary fw-semibold">
            Sign Up
        </a>
    </div> --}}
    <!--end::Sign up-->
</form>
<!--end::Form--> 

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Form-->       

        <!--begin::Footer-->  
        {{-- <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
            <!--begin::Languages-->
            <div class="me-10">             
                <!--begin::Toggle-->
                <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img  data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/united-states.svg" alt=""/>
                    
                    <span data-kt-element="current-lang-name" class="me-1">English</span>

                    <span class="d-flex flex-center rotate-180">
                        <i class="ki-duotone ki-down fs-5 text-muted m-0"></i>                    </span>
                </button>
                <!--end::Toggle-->

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/united-states.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">English</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/spain.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Spanish</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/germany.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">German</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/japan.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Japanese</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="https://preview.keenthemes.com/metronic8/demo3/assets/media/flags/france.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">French</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                    </div>
                <!--end::Menu-->           
            </div>
            <!--end::Languages--> 

            <!--begin::Links-->
            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                <a href="" target="_blank">Terms</a>

                <a href="" target="_blank">Plans</a>
                
                <a href="" target="_blank">Contact Us</a>
            </div>
            <!--end::Links-->
        </div> --}}
        <!--end::Footer-->
    </div>
    <!--end::Body-->
    
    <!--begin::Aside-->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(https://preview.keenthemes.com/metronic8/demo3/assets/media/misc/auth-bg.png)">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">          
     

            <!--begin::Image-->                
            <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/media/lng.png" alt=""/>                 
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



<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <!--begin::Javascript-->
        <script src="{{asset('own/login.js')}}"></script>
       
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
    </body>
    <!--end::Body-->
</html>