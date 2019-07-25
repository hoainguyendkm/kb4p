
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mag - Video &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/owl.carousel.min.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        @include('public.module.menu')
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Travel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        {{-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Feature</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Archive by Category “TRAVEL”</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
					@yield('content')
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                                <!-- Twitter -->
                                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                                <!-- YouTube -->
                                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                                <!-- Google -->
                                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        @include('public.module.doituong')

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        @include('public.module.mucdich')

                        <!-- Sidebar Widget -->
                        @include('public.module.dangkymoi')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('public.module.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets/public/js/jquery/jquery-2.2.4.min.js')}}"></script>
    
    <!-- Popper js -->
    <script src="{{asset('assets/public/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/public/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets/public/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/public/js/active.js')}}"></script>


</body>

</html>