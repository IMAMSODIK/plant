<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('dashboard_assets/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard_assets/assets/images/favicon.png') }}" type="image/x-icon">
    <title>Login</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/responsive.css') }}">

    <style>
        .show-hide {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            user-select: none;
        }

        .show-hide span::before {
            content: '👁️';
        }

        .show-hide span.hide::before {
            content: 'hide';
        }
    </style>
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center"
                    src="{{ asset('dashboard_assets/assets/images/login/2.jpg') }}" alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div class="text-center mb-3">
                            <a class="logo d-inline-block" href="index.html">
                                <img class="img-fluid for-dark"
                                    src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" width="150px"
                                    alt="loginpage">
                                <img class="img-fluid for-light"
                                    src="{{ asset('dashboard_assets/assets/images/logo/logo_dark.png') }}"
                                    width="150px" alt="loginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form id="loginForm" class="theme-form">
                                <h4>Login</h4>
                                <p>Enter your Email and Password to continue</p>

                                <!-- error badge -->
                                <div id="errorMessage" class="mb-2"></div>

                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" type="email" name="email" required
                                        placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" class="form-control" type="password" name="password"
                                            required placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>


                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="/sign-up">Create Account</a></p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('dashboard_assets/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/config.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/script.js') }}"></script>

        <script>
            $(document).ready(function() {
                $("#loginForm").on("submit", function(e) {
                    e.preventDefault();

                    $.ajax({
                        url: "{{ url('/login') }}",
                        type: "POST",
                        data: $(this).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(res) {
                            window.location.href = "/dashboard";
                        },
                        error: function(xhr) {
                            $("#errorMessage").html(`
                              <span class="badge bg-danger">
                                  Invalid username or password
                              </span>
                          `);
                        }
                    });
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const toggle = document.querySelector(".show-hide");
                const input = document.getElementById("password");

                toggle.addEventListener("click", function() {
                    if (input.type === "password") {
                        input.type = "text";
                        this.querySelector("span").classList.add("hide");
                    } else {
                        input.type = "password";
                        this.querySelector("span").classList.remove("hide");
                    }
                });
            });
        </script>
    </div>
</body>

</html>
