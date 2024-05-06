<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <title>Register Form</title>
    <meta charset="utf-8" />
    <meta name="description" content="
          />
    <meta name=" keywords" content="
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                        <form class="form w-100" wire:submit.prevent="Logincheck">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Register Form
                                </h1>
                            </div>
                            <div class="fv-row mb-8" id="senderdiv">
                                <!--begin::Email-->
                                <input type="text" placeholder="Company Name" id="cname"
                                    class="form-control bg-transparent" />
                               
                                <div class="invalid-feedbac" style="color: red" id="e_cname"></div>
                                   
                                <br>
                                <input type="text" placeholder="User Full Name" id="uname"
                                    class="form-control bg-transparent" />
                               
                                <div class="invalid-feedbac" style="color: red" id="e_uname"></div>
                                   
                                <br>

                                <input type="text" placeholder="Mobile Number" id="contactno"
                                    class="form-control bg-transparent" />
                                    <div class="invalid-feedbac" style="color: red" id="e_contactno"></div>
                                <br>
                                <input type="text" placeholder="Email id" id="emailid"
                                    class="form-control bg-transparent" />
                                    <div class="invalid-feedbac" style="color: red" id="e_emailid"></div>
                                <br>
                                <input type="password" placeholder="Password" id="password"
                                    class="form-control bg-transparent" />
                                    <div class="invalid-feedbac" style="color: red" id="e_password"></div>

                                <br>
                                <div class="d-grid mb-10">
                                    <button type="button" id="register" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">
                                            Register </span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                        <!--end::Indicator progress--> </button>
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-8" data-kt-password-meter="true" id="verifier" style="display: none">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control bg-transparent" id="Codec" type="password"
                                            placeholder="OTP" maxlength="6" />
                                        @error('upassw')
                                        <div class="invalid-feedbac" style="color: red" id="error_username">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="button" id="login" onclick="Verifier()" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">
                                            Verify</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                        <!--end::Indicator progress--> </button>
                                </div>
                            </div>
                            <div id="recaptcha-container"></div>
                        </form>
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                        @endif
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
    @livewireScripts
</body>
<!--end::Body-->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>
    
    const firebaseConfig = {
              apiKey: "AIzaSyBGTTX0whNb7sb1OzZMlkfluXKoGhMAWXU",
              authDomain: "payjet-19c58.firebaseapp.com",
              projectId: "payjet-19c58",
              storageBucket: "payjet-19c58.appspot.com",
              messagingSenderId: "102439053122",
              appId: "1:102439053122:web:29099b78cbafcc1c7ccadb",
              measurementId: "G-JJHJMB58DR"
            };

    firebase.initializeApp(firebaseConfig);
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
        "recaptcha-container", {
            size: "invisible",
            callback: function (response) {
                phoneAuth();
            }
        }
    );
    // function phoneAuth(){
    //     var numbers=document.getElementById("mobileno").value;
    //     firebase.auth().signInWithPhoneNumber(numbers,
    //     window.recaptchaVerifier
    //     ).then(function(confirmationResult){
    //         window.confirmationResult=confirmationResult;
    //         coderresult=confirmationResult;
    //         alert("Message Sent Please Check Your Mobile....!")
    //         document.getElementById('senderdiv').style.display='none';
    //         document.getElementById('verifier').style.display='block';
    //     }).catch(function(error){
    //         alert(error.message)
    //     })
    // }
    function Verifier(){
            var verificationcode=document.getElementById("Codec").value;
            coderresult.confirm(verificationcode).then(function(){
                alert("OTP Vertified")
                adduser();
                
                // window.location.href = "http://localhost:8000/registerform/"+verificationcode
            }).catch(function(){
                alert("In Valide OTP")
            })
        }
        function adduser(){
            $.ajax({
                url: "adduser",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    companyname: $('#cname').val(),
                    usermobile: $('#contactno').val(),
                    eamil: $('#emailid').val(),
                    password: $('#password').val(),
                   
                    uname: $('#uname').val(),
                    
                },
                success: function (response) {
                    $('#e_cname').text("");
                    $('#e_emailid').text("");
                    $('#e_password').text("");
                    $('#e_contactno').text("");
                    $('#e_uname').text("");
                    if (response.status == "0") {
                        $.each(response.message, function (index, value) {
                            if (index == "companyname") {
                                $('#e_cname').text(value);
                            }

                            if (index == "eamil") {
                                $('#e_emailid').text(value);
                            }

                            if (index == "password") {
                                $('#e_password').text(value);
                            }

                            if (index == "usermobile") {
                                $('#e_contactno').text(value);
                            }
                            if (index == "uname") {
                                $('#e_uname').text(value);
                            }


                        });
                    } else if (response.status == "sendotp") {
                        // for new user
                        
                        adduser();
                        // var numbers = $('#contactno').val();
                        // var numbers = "+91" + numbers;
                        //  alert(numbers);
                        // // return false
                        // firebase.auth().signInWithPhoneNumber(numbers,
                        //     window.recaptchaVerifier
                        // ).then(function (confirmationResult) {
                        //     window.confirmationResult = confirmationResult;
                        //     coderresult = confirmationResult;
                        //     alert("Message Sent Please Check Your Mobile....!")
                        //     document.getElementById('senderdiv').style.display =
                        //         'none';
                        //     document.getElementById('verifier').style.display =
                        //         'block';
                        // }).catch(function (error) {
                        //     alert(error.message)
                        // })



                    } else if (response.status == "2") {
                        // already registered
                        // var numbers = $('#mobileno').val();
                        // var numbers = "+91" + numbers;
                        // //  alert(numbers);
                        // // return false
                        // firebase.auth().signInWithPhoneNumber(numbers,
                        //     window.recaptchaVerifier
                        // ).then(function (confirmationResult) {
                        //     window.confirmationResult = confirmationResult;
                        //     coderresult = confirmationResult;
                        //     alert("Message Sent Please Check Your Mobile....!")
                        //     document.getElementById('senderdiv').style.display =
                        //         'none';
                        //     document.getElementById('verifier').style.display =
                        //         'block';
                        // }).catch(function (error) {
                        //     alert(error.message)
                        // })
                    }else if(response.status=="success"){
                        window.location.href = "dashboard";
                        // window.location.href="dashboard";

                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    event.preventDefault();
                }
            }); //end ajax
        }
    //  
</script>
<script>
    $(document).ready(function () {
        $('#register').click(function (e) {
            e.preventDefault();
           
            $.ajax({
                url: "registercheck",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    companyname: $('#cname').val(),
                    usermobile: $('#contactno').val(),
                    eamil: $('#emailid').val(),
                    password: $('#password').val(),
                },
                success: function (response) {
                    $('#e_cname').text("");
                    $('#e_emailid').text("");
                    $('#e_password').text("");
                    $('#e_contactno').text("");
                    if (response.status == "0") {
                        $.each(response.message, function (index, value) {
                            if (index == "companyname") {
                                $('#e_cname').text(value);
                            }

                            if (index == "eamil") {
                                $('#e_emailid').text(value);
                            }

                            if (index == "password") {
                                $('#e_password').text(value);
                            }

                            if (index == "usermobile") {
                                $('#e_contactno').text(value);
                            }


                        });
                    } else if (response.status == "sendotp") {
                        // for new user
                        adduser();


                        // var numbers = $('#contactno').val();
                        // var numbers = "+91" + numbers;
                        //  alert(numbers);
                        // // return false
                        // firebase.auth().signInWithPhoneNumber(numbers,
                        //     window.recaptchaVerifier
                        // ).then(function (confirmationResult) {
                        //     window.confirmationResult = confirmationResult;
                        //     coderresult = confirmationResult;
                        //     alert("Message Sent Please Check Your Mobile....!")
                        //     document.getElementById('senderdiv').style.display =
                        //         'none';
                        //     document.getElementById('verifier').style.display =
                        //         'block';
                        // }).catch(function (error) {
                        //     alert(error.message)
                        // })
                    } else if (response.status == "2") {
                        // already registered
                        // var numbers = $('#mobileno').val();
                        // var numbers = "+91" + numbers;
                        // //  alert(numbers);
                        // // return false
                        // firebase.auth().signInWithPhoneNumber(numbers,
                        //     window.recaptchaVerifier
                        // ).then(function (confirmationResult) {
                        //     window.confirmationResult = confirmationResult;
                        //     coderresult = confirmationResult;
                        //     alert("Message Sent Please Check Your Mobile....!")
                        //     document.getElementById('senderdiv').style.display =
                        //         'none';
                        //     document.getElementById('verifier').style.display =
                        //         'block';
                        // }).catch(function (error) {
                        //     alert(error.message)
                        // })
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    event.preventDefault();
                }
            }); //end ajax
        });
    });
</script>
</html>