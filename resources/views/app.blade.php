
<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KwitaraCars - Bootstrap Cars Dealer Template </title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" /><!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css" /><!-- Icons -->
  <link rel="stylesheet" href="{{asset('fonts/themify-icons/themify-icons.css')}}" type="text/css" /><!-- Icons -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css" /><!-- Owl Carousal -->
  <link rel="stylesheet" href="{{asset('css/price-range.css')}}" type="text/css" /><!-- Owl Carousal -->

  <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" /><!-- Style -->    
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" /><!-- Responsive -->  
  <link rel="stylesheet" href="{{asset('css/colors.css')}}" type="text/css" /><!-- color -->   

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="{{asset('js/rs-plugin/css/settings.css')}}">

</head>
<body>
  <!-- /.preloader -->
  <div id="preloader"></div>
  <div class="theme-layout" id="app">

        <header class="simple-header for-sticky ">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>yourcompnay@email.com</li>
                        <li><i class="fa fa-mobile"></i>+1 333 44 555 / +1 333 44 500</li>
                    </ul>
                    <div class="choose-language">
                        <a href="#" title="">FR</a>
                        <a href="#" title="">DE</a>
                        <a href="#" title="">EN</a>
                        <a href="#" title="">jp</a>
                    </div>
                </div>
            </div><!-- Top bar -->
            <div class="menu">
                <div class="container">
                    <div class="logo">        
                                   <router-link to="/">
                                       <i class="fa fa-get-pocket"></i>
                                       <span>KwitaraCars</span>
                                       <strong>Rent Cars</strong>
                                   </router-link>
                    </div><!-- LOGO -->
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <h1 class="nocontent outline">--- Main Navigation ---</h1>
                        <ul>
                            <li><router-link to="/">HOME</router-link></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">VEHICLES</a>
                                <ul>
                                    <li><router-link :to="{name: 'vehicles'}"> Cars </router-link></li>
                                    <li><router-link :to="{name: 'companies'}"> Companies </router-link></li>                  
                                </ul>
                            </li>

                            <li><router-link :to="{name: 'contact'}">CONTACT US</router-link></li>
                            <li><router-link :to="{name: 'about'}">ABOUT US</router-link></li>
                            <li class="btn"><router-link :to="{name: 'login'}"><span><i class="fa fa-user"></i>Login /  Signup</span></router-link></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header> 

    <router-view></router-view>
  </div>

  
        <footer>
            <section class="top-line">
                <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->   
                <div class="container">
                    <div class="row">   

                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> Places</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                                <form>
                                    <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved 2016 <a href="#" title="">KimaroTec</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">VEHICULS</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

  <script src="/js/app.js"></script> 
  <!-- Script -->
  <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script><!-- Modernizer -->
  <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script><!-- Jquery -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script><!-- Bootstrap -->
  <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script><!-- Owl Carousal -->
  <script type="text/javascript" src="{{asset('js/html5lightbox.js')}}"></script><!-- HTML -->
  <script type="text/javascript" src="{{asset('js/scrolly.js')}}"></script><!-- Parallax -->
  <script type="text/javascript" src="{{asset('js/price-range.js')}}"></script><!-- Parallax -->
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script><!-- Script -->

</body>
</html>
