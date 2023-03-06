<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jbox.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loaders.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css"') }}>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/common/images/logo.png') }}">
    <!-- Title -->
    <title>KASPA :: Enhancing Agricultural Productivity and Sustainability</title>
</head>

<body class="body-bg-f8faff">
<!-- Start Preloader Area -->
<div class="preloader">
    <img src="assets/common/images/logo.png" alt="main-logo">
</div>
<!-- End Preloader Area -->

<!-- Start Account Area -->
<div class="account-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="account-content">
                    <div class="account-header">
                        <a href="index.html">
                            <img src="assets/common/images/logo.png" alt="main-logo">
                        </a>
                        <h3>Welcome to KASPA</h3>
                    </div>

                    <form class="account-wrap" action="{{ route('dashboard') }}">
                        <div class="form-group mb-24 icon">
                            <input type="email" class="form-control" placeholder="Email" value="kaspa@verdant.ng">
                            <img src="assets/images/icon/sms.svg" alt="sms">
                        </div>
                        <div class="form-group mb-24 icon">
                            <input type="password" class="form-control" placeholder="Password" value="password">
                            <img src="assets/images/icon/key.svg" alt="key">
                        </div>
                        <div class="form-group mb-24">
                            <a href="#" class="forgot">Forgot Password?</a>
                        </div>
                        <div class="form-group mb-24">
                            <button type="submit" class="default-btn">Log In</button>
                        </div>

                    </form>

                    <ul class="account-social-link">
                        <li>
                            <a href="https://www.google.com/" target="_blank">
                                <i class='bx bxl-google' ></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Account Area -->

<!-- Start Template Sidebar Area -->
<div class="template-sidebar-area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <a href="index.html">
                <img src="assets/images/main-logo.svg" alt="main-logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                <li>
                    <a class="default-btn btn active" target="_blank" href="#">
                        Buy Now
                    </a>
                </li>
                <li>
                    <a class="default-btn btn" target="_blank" href="https://themeforest.net/user/envytheme/portfolio">
                        Our Portfolio
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Template Sidebar Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Min JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/geticons.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/jbox.all.min.js') }}"></script>
<script src="{{ asset('assets/js/editor.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
