<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inspire</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('layout/img/favicon.ico')}}">
    <script src="https://kit.fontawesome.com/3523f05d7f.js" crossorigin="anonymous"></script>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('layout/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/style.css')}}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('layout/img/logo/logo2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('informacion.index')}}"><img src="{{asset('layout/img/logo/logo4.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" ><a href="{{route('informacion.index')}}">Inicio</a></li>
                                            <li><a href="{{route('publicacion.index')}}">Publicaciones</a></li>
                                            <li><a href="{{route('informacion.courses')}}">Tipos de Arte</a></li>
                                            <li><a href="{{route('informacion.about')}}">Sobre el Blog</a></li>
                                            <li><a href="{{route('informacion.contact')}}">Servicios</a></li>
                                           
                                            @if (Route::has('login'))
                                                
                                                @auth
                                                    <li class="button-header"><a href="http://inspire.test/user/profile" class="btn btn3">Perfil</a></li> 
                                                    <li class="button-header margin-left">
                                                        <a href="{{route('logout')}}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
                                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                          
                                                @else
                                                    <li class="button-header"><a href="{{ route('login') }}" class="btn btn3">Iniciar Sesión</a></li>

                                                    @if (Route::has('register'))
                                                        <li class="button-header margin-left "><a href="{{ route('register') }}" class="btn">Entrar</a></li>
                                                    @endif
                                                @endauth
                                                
                                            @endif
                                            <!-- Button -->
                                            
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <main>
        
        {{ $slot }}
        
    </main>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="{{asset('layout/img/logo/logo3.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>De parte de toda la comunidad de "Bloggers", esperamos que te haya gustado el contenido de la página y esperamos que puedas ser parte de ella. Apoyanos compartiendo y siguiendo el blog. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Redes Sociales</h4>
                                <ul>
                                    <li><a href="#">Instagram: inspire_official</a></li>
                                    <li><a href="#">Facebook: inspire_official </a></li>
                                    <li><a href="#">TikTok: @dalia.p.r</a></li>
                                    <li><a href="#">Instagram: dal_pr03</a></li>
                                    <li><a href="#">Instagram: alex_zm14</a></li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>PayPal</h4>
                                <p>Puedes apoyarnos con donaciones de Paypal en el siguiente botón :D </p>
                                <form action="https://www.paypal.com/donate" method="post" target="_top">
                                <input type="hidden" name="hosted_button_id" value="F8ULB7MXFPLGG" />
                                <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donar con el botón PayPal" />
                                <img alt="" border="0" src="https://www.paypal.com/es_MX/i/scr/pixel.gif" width="1" height="1" />
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta plantilla esta diseñada con <i class="fa fa-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Inspire Art Blog</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{asset('layout/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('layout/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('layout/js/popper.min.js')}}"></script>
<script src="{{asset('layout/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('layout/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('layout/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('layout/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('layout/js/wow.min.js')}}"></script>
<script src="{{asset('layout/js/animated.headline.js')}}"></script>
<script src="{{asset('layout/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('layout/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('layout/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('layout/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('layout/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('layout/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('layout/js/waypoints.min.js')}}"></script>
<script src="{{asset('layout/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('layout/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('layout/js/contact.js')}}"></script>
<script src="{{asset('layout/js/jquery.form.js')}}"></script>
<script src="{{asset('layout/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('layout/js/mail-script.js')}}"></script>
<script src="{{asset('layout/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('layout/js/plugins.js')}}"></script>
<script src="{{asset('layout/js/main.js')}}"></script>

</body>
</html>