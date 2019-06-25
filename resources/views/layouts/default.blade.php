<!DOCTYPE html>
<html lang="en">
	<head>
    <title>Avtar Services - Website Development Company | Laravel | Cakephp | Wordpress | Joomla</title>
    <meta name="keywords" content="PHP, Laravel, Cakephp, Wordpress, Joomla">
    <meta name="description" content="Website Development Company">
    <meta name="avtarservices" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Avtar Services">

	<!-- Favicon -->
    <link href="assets/images/favicon.png" rel="shortcut icon">

    <!--<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">-->

	<!-- CSS -->
	{{ Html::style('assets/plugins/bootstrap/bootstrap.css') }}
	{{ Html::style('assets/plugins/owl-carousel/owl_002.css') }}
	{{ Html::style('assets/plugins/owl-carousel/owl.css') }}
	{{ Html::style('assets/plugins/magnific-popup/magnific-popup.css') }}
	{{ Html::style('assets/css/app.css') }}
	{{ Html::style('assets/css/responsive.css') }}


	<!-- Fonts/Icons -->
	{{ Html::style('assets/plugins/font-awesome/css/all.css') }}
	{{ Html::style('assets/plugins/themify/themify-icons.css') }}
	        
    <style id="jarallax-clip-1">#jarallax-container-1 {
      clip: rect(0px, 1349px, 486px, 0px);
      clip: rect(0px, 1349px, 486px, 0px);
    }
    </style>

    {{ Html::script("assets/js/common.js") }}
    {{ Html::script("assets/js/util.js") }}

  </head>
	<body data-preloader="2" class="loaded">
		
		<header>
			<!-- navbar -->
			<nav class="navbar navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="assets/images/logo.png" alt="Avtar Services">
					</a>
					<ul class="nav">
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{ url('/') }}">Home</a>
						</li>
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{ url('about-us') }}">About Us</a>
						</li>
            			<li class="nav-item nav-megadropdown">
							<a class="nav-link" href="#">Services</a>
							<div class="mega-menu">
								<div class="row">
									<div class="col-12 col-lg-3">
										<ul class="list-dash">
<li style="margin-bottom:25px;"><a href="{{ url('php-development') }}" style="border-bottom: solid; border-width: 2px; color:#000; margin-bottom:10px; font-weight:bold;">PHP Development</a></li>
<li><a href="{{ url('php-development#full-stack-developer') }}">Full Stack Development</a></li>
<li><a href="{{ url('php-development#web-application-development') }}">Web Application Development</a></li>
<li><a href="{{ url('php-development#cms-joomla-wordpress') }}">CMS Development</a></li>
<li><a href="{{ url('php-development#frontend-development') }}">Frontend Development</a></li>
<li><a href="{{ url('php-development#web-application-security') }}">Web Application Security</a></li>
										</ul>
									</div>
                  					<div class="col-12 col-lg-3">
										<ul class="list-dash">
<li style="margin-bottom:25px;"><a href="{{ url('ecommerce-development') }}" style=" border-bottom: solid; border-width: 2px; color:#000; margin-bottom:10px; font-weight:bold;">ECommerce Development</a></li>
<li><a href="{{ url('ecommerce-development#woocommerce') }}">WooCommerce</a></li>
<li><a href="{{ url('ecommerce-development#custom-eCommerce-development') }}">Custom ECommerce Development</a></li>
<li><a href="{{ url('ecommerce-development#b2c') }}">B2C Marketplaces</a></li>
<li><a href="{{ url('ecommerce-development#b2b') }}">B2B Trade Products</a></li>
										</ul>
									</div>
									<div class="col-12 col-lg-3">
										<ul class="list-dash">
<li style="margin-bottom:25px;"><a href="{{ url('web-design') }}" style="border-bottom: solid; border-width: 2px; color:#000; margin-bottom:10px;  font-weight:bold;">Web Design</a></li>
<li><a href="{{ url('web-design#responsive-website-design') }}">Responsive Website Design</a></li>
<li><a href="{{ url('web-design#custom-web-template') }}">Custom Web Template</a></li>
<li><a href="{{ url('web-design#theming-and-integration') }}">Theming and Integration</a></li>
<li><a href="{{ url('web-design#logo-design') }}">Logo Design</a></li>
<li><a href="{{ url('web-design#email-template') }}">Email Templates</a></li>
										</ul>
									</div>
									<div class="col-12 col-lg-3">
										<ul class="list-dash">
<li style="margin-bottom:25px;"><a href="{{ url('graphic-design') }}" style="border-bottom: solid; border-width: 2px; color:#000; margin-bottom:10px;  font-weight:bold;">Graphics Design</a></li>
<li><a href="{{ url('graphic-design#brand-identity') }}">Brand Identity</a></li>
<li><a href="{{ url('graphic-design#promotional-design') }}">Promotional Design</a></li>
<li><a href="{{ url('graphic-design#ads-designing') }}">Ads Designing</a></li>
<li><a href="{{ url('graphic-design#graphic-design') }}">Graphic Designing</a></li>
<li><a href="{{ url('graphic-design#infographics') }}">Infographics</a></li>
<li><a href="{{ url('graphic-design#powerpoint-presentation') }}">Powerpoint Presentation</a></li>
										</ul>
									</div>
									<!-- Mega menu column 4 -->
									
								</div><!-- end row -->
							</div>
						</li>
    			        <li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a>
				        	<ul class="dropdown-menu">
								<li><a href="{{ url('portfolio') }}">PHP</a></li>
								<li><a href="{{ url('portfolio-graphic') }}">Graphic Design</a></li>
							</ul>
						</li>
						<li class="nav-item nav-dropdown">
							<a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
						</li>
					</ul><!-- end nav -->

					<!-- Nav Toggle button -->
					<button class="nav-toggle-btn">
			            <span class="lines"></span>
			        </button>

				</div><!-- end container -->
			</nav><!-- end navbar -->

		</header>


	<!-- Start info box -->
    	@yield('content')
	<!-- End of info box -->

<div class="testimonial-grid bg-dark-lighter">
    <div class="testimonial-grid-box">
        <div class="padding-30">
        	<h6 class="heading-uppercase" style="color:#fff !important;">Contact Info</h6>
            <div class="divider-width-30px">
            	<hr class="bg-white-05">
            </div>
            <ul class="list-unstyled" style="color:#fff !important;">
                <li style="color:#fff !important;">Avtar Services, Sector 49b, Chandigarh</li>
                <li>parminder.php@gmail.com</li>
                <li>+(91) 8968465576</li>
            </ul>
        </div>
    </div>
   <div class="testimonial-grid-box">
        <div class="padding-30">
        	<h6 class="heading-uppercase" style="color:#fff !important;">Contact Info</h6>
            <div class="divider-width-30px">
            	<hr class="bg-white-05">
            </div>
            <ul class="list-unstyled" style="color:#fff !important;">
                <li style="color:#fff !important;">Avtar Services, Sector 49b, Chandigarh</li>
                <li>parminder.php@gmail.com</li>
                <li>+(91) 8968465576</li>
            </ul>
        </div>
    </div>
    <div class="testimonial-grid-box">
        <div class="padding-30">
        	<h6 class="heading-uppercase" style="color:#fff !important;">Contact Info</h6>
            <div class="divider-width-30px">
            	<hr class="bg-white-05">
            </div>
            <ul class="list-unstyled" style="color:#fff !important;">
                <li style="color:#fff !important;">Avtar Services, Sector 49b, Chandigarh</li>
                <li>parminder.php@gmail.com</li>
                <li>+(91) 8968465576</li>
            </ul>
        </div>
    </div>
</div>
        
<footer>
    <div class="footer bg-dark">
        <div class="container">
            <div class="row col-spacing-20">
                <div class="col-12 col-md-6 col-lg-3">
					<a href="{{ url('php-development') }}"><h6 class="heading-uppercase">PHP Development</h6></a>
                    <ul class="list-dash">
<li><a href="{{ url('php-development#full-stack-developer') }}">Full Stack Development</a></li>
<li><a href="{{ url('php-development#web-application-development') }}">Web Application Development</a></li>
<li><a href="{{ url('php-development#cms-joomla-wordpress') }}">CMS Development</a></li>
<li><a href="{{ url('php-development#frontend-development') }}">Frontend Development</a></li>
<li><a href="{{ url('php-development#web-application-security') }}">Web Application Security</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ url('ecommerce-development') }}"><h6 class="heading-uppercase">ECommerce Development</h6></a>
                    <ul class="list-dash">                                            
<li><a href="{{ url('ecommerce-development#woocommerce') }}">WooCommerce</a></li>
<li><a href="{{ url('ecommerce-development#custom-eCommerce-development') }}">Custom ECommerce Development</a></li>
<li><a href="{{ url('ecommerce-development#b2c') }}">B2C Marketplaces</a></li>
<li><a href="{{ url('ecommerce-development#b2b') }}">B2B Trade Products</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ url('web-design') }}"><h6 class="heading-uppercase">Web Design</h6></a>
                    <ul class="list-dash">
<li><a href="{{ url('web-design#responsive-website-design') }}">Responsive Website Design</a></li>
<li><a href="{{ url('web-design#custom-web-template') }}">Custom Web Template</a></li>
<li><a href="{{ url('web-design#theming-and-integration') }}">Theming and Integration</a></li>
<li><a href="{{ url('web-design#logo-design') }}">Logo Design</a></li>
<li><a href="{{ url('web-design#email-template') }}">Email Templates</a></li>
					</ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="{{ url('graphic-design') }}"><h6 class="heading-uppercase">Graphics Design</h6></a>
                    <ul class="list-dash">
<li><a href="{{ url('graphic-design#brand-identity') }}">Brand Identity</a></li>
<li><a href="{{ url('graphic-design#promotional-design') }}">Promotional Design</a></li>
<li><a href="{{ url('graphic-design#ads-designing') }}">Ads Designing</a></li>
<li><a href="{{ url('graphic-design#graphic-design') }}">Graphic Designing</a></li>
<li><a href="{{ url('graphic-design#infographics') }}">Infographics</a></li>
<li><a href="{{ url('graphic-design#powerpoint-presentation') }}">Powerpoint Presentation</a></li>
                	</ul>
                </div>
            </div>

            <hr class="margin-top-50 margin-bottom-30">

            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <p>© 2019 Avtar Services, All Rights Reserved.</p>
                </div>
                
                <!--<div class="col-12 col-md-6 text-center text-md-right">
                    <ul class="list-horizontal-unstyled">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>-->
            </div>
        </div><!-- end container -->
    </div><!-- end footer -->
</footer>

		<!-- ***** JAVASCRIPTS ***** -->
		<!-- Libraries -->
		{{ Html::script("assets/plugins/jquery_002.js") }}
		{{ Html::script("assets/plugins/bootstrap/popper.js") }}

		<!-- Plugins -->
		{{ Html::script("assets/plugins/bootstrap/bootstrap.js") }}
		{{ Html::script("assets/plugins/appear.js") }}
		{{ Html::script("assets/plugins/easing.js") }}
		{{ Html::script("assets/plugins/retina.js") }}
		{{ Html::script("assets/plugins/countdown.js") }}
		{{ Html::script("assets/plugins/imagesloaded.js") }}
		{{ Html::script("assets/plugins/isotope.js") }}
		{{ Html::script("assets/plugins/jarallax/jarallax.js") }}
		{{ Html::script("assets/plugins/jarallax/jarallax-video.js") }}
		{{ Html::script("assets/plugins/magnific-popup/magnific-popup.js") }}
		{{ Html::script("assets/plugins/owl-carousel/owl.js") }}
		{{ Html::script("assets/plugins/gmaps.js") }}

		<!-- Scripts -->
    	{{ Html::script("assets/js/jquery.js") }}
		{{ Html::script("assets/js/functions.js") }}
		
		{{ Html::script("assets/plugins/particles/particles.js") }}
		{{ Html::script("assets/plugins/particles/app.js") }}
    
<div class="preloader preloader-2"><div>
<svg class="loader-circular" viewBox="25 25 50 50">
<circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
</svg>
</div>
</div>


<script>
    (function () {
        var options = {
            whatsapp: "+91 9501141343", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>


<script type="text/javascript">
(function(w,d){
  w.HelpCrunch=function(){w.HelpCrunch.q.push(arguments)};w.HelpCrunch.q=[];
  function r(){var s=document.createElement('script');s.async=1;s.type='text/javascript';s.src='https://widget.helpcrunch.com/';(d.body||d.head).appendChild(s);}
  if(w.attachEvent){w.attachEvent('onload',r)}else{w.addEventListener('load',r,false)}
})(window, document)
</script>

<script type="text/javascript">
  HelpCrunch('init', 'avtarservices', {
    applicationId: 1,
    applicationSecret: 'N2YCrMKGApi3/SNvpxAUoJ9jFyjUV+1MbRg6mwpZl8DcPDiaFCUU/RBouhOTP4vzRqPNlqGh97eaPaJMGrH4qw=='
  });

  HelpCrunch('showChatWidget');
</script>


</body>
</html>