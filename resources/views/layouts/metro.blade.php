<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Metro Laravel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />


  <!-- Stylesheets -->
    {{ Html::style('style/bootstrap.css') }}
    {{ Html::style('style/font-awesome.css') }}
    {{ Html::style('style/prettyPhoto.css') }}
  <!-- Parallax slider -->
    {{ Html::style('style/slider.css') }}
  <!-- Flexslider -->
      {{ Html::style('style/flexslider.css') }}
      {{ Html::style('style/style.css') }}

  <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
      {{ Html::style('style/blue.css') }}
      {{ Html::style('style/bootstrap-responsive.css') }}

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
      {{ Html::script('js/html5shim.js') }} 
  <![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="logo">
          <h1><a href="{{ url('/home') }}">Metro <span class="color">Lavarel</span></a></h1>
          <div class="hmeta">Responsive Metro Styled Site</div>
        </div>
      </div>
      <div class="span6">
        <div class="form">
          <form method="get" id="searchform" action="#" class="form-search" />
            <input type="text" value="" name="s" id="s" class="input-medium" />
            <button type="submit" class="btn">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Navigation bar starts -->
          <div class="navbar">
           <div class="navbar-inner">
             <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span>Menu</span>
               </a>
               <div class="nav-collapse collapse">
                 <ul class="nav">
                   <li><a href="{{ url('/home') }}">Home</a></li>
                   <!-- Refer Bootstrap navbar doc -->
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintain <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/categories') }}">商品分类</a></li>
                        <li><a href="{{ url('/transmmits') }}">转运仓库</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="{{ url('/home') }}">Register</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                      </ul>
                   </li>                   

                   <li><a href="service.html">Service</a></li>
                   <li><a href="contactus.html">Contact</a></li>
                 </ul>
                 
                 <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                 
                 
               </div>
              </div>
           </div>
         </div>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

<!-- Slider starts -->
    
    @yield('slider')
   
<!-- Slider Ends -->
    
        @yield('login')


    <!-- Hero Unit -->

        @yield('hero')
        
        @yield('newcontent')

    <!-- Hero Ends -->      

        @yield('servicethree')
    

<div class="border"></div>


<!-- Color blocks starts -->

    @yield('colorblocks')

<!-- Color blocks ends -->


  </div>
</div>


<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="span4">
          <div class="fwidget">

            <div class="col-l">
              <h6>Downlaods</h6>
              <ul>
                <li><a href="#">Condimentum</a></li>
              </ul>
            </div>

            <div class="col-r">
              <h6>Support</h6>
              <ul>
                <li><a href="#">Condimentum</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Categories</h6>
            <ul>
              <li><a href="#">Condimentum - Condimentum gravida</a></li>
            </ul>
          </div>
        </div>

        <div class="span4">
          <div class="fwidget">
            <h6>Recent Posts</h6>
            <ul>
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="span12">
          <div class="copy">
            <h6>Metro <span class="color">Mania</span></h6>
            <p>Copyright &copy; <a href="#">Metro Laravel</a> - <a href="{{ url('/home') }}">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 

<!-- JS -->
      {{ Html::script('js/jquery.js') }}
      {{ Html::script('js/bootstrap.js') }}
      {{ Html::script('js/jquery.isotope.js') }} <!-- Isotope for gallery -->
      {{ Html::script('js/jquery.prettyPhoto.js') }} <!-- prettyPhoto for images -->
      {{ Html::script('js/jquery.cslider.js') }} <!-- Parallax slider -->
      {{ Html::script('js/modernizr.custom.28468.js') }}
      {{ Html::script('js/filter.js') }} <!-- Filter for support page -->
      {{ Html::script('js/cycle.js') }} <!-- Cycle slider -->
      {{ Html::script('js/jquery.flexslider-min.js') }} <!-- Flex slider -->
      {{ Html::script('js/easing.js') }} <!-- Easing -->
      {{ Html::script('js/custom.js') }} 
</body>
</html>