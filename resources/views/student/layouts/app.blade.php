<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>DUMATHS | @yield('title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('assets/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- BASE CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icon_fonts/css/all_icons.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
    </div>

    <header class="header fadeInDown">
		<div id="logo">
			<a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li id="login">
                @auth('student')
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @else
                <a href="{{ route('loginpage') }}" class="login">Login</a>

                @endauth
               </li>
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="#0">Buy this template</a></li>
			<li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>
			<li>
				<div class="hamburger hamburger--spin">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</li>
		</ul>
		<!-- /top_menu -->
    </header>
    <!-- /header -->

	<div id="main_menu">
		<div class="container">
		<nav class="version_2">
				<div class="row">
					<div class="col-md-3">
						<h3>Home</h3>
						<ul>
							<li><a href="index.html">Home version 1</a></li>
							<li><a href="index-2.html">Home version 2</a></li>
							<li><a href="index-3.html">Home version 3</a></li>
							<li><a href="index-4.html">Home version 4</a></li>
							<li><a href="index-5.html">With Cookie bar (EU law)</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Courses</h3>
						<ul>
							<li><a href="courses-grid.html">Courses grid</a></li>
							<li><a href="courses-grid-sidebar.html">Courses grid sidebar</a></li>
							<li><a href="courses-list.html">Courses list</a></li>
							<li><a href="courses-list-sidebar.html">Courses list sidebar</a></li>
							<li><a href="course-detail.html">Course detail</a></li>
							<li><a href="course-detail-2.html">Course detail (working form)</a></li>
							<li><a href="admission.html">Admission wizard</a></li>
							<li><a href="teacher-detail.html">Teacher detail</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Pages</h3>
						<ul>
							<li><a href="#0">Menu 1</a><span class="badge_info">New</span></li>
							<li><a href="about.html">About</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="{{ url('/loginpage') }}">Login</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="404.html">404 page</a></li>
							<li><a href="agenda-calendar.html">Agenda Calendar</a></li>
							<li><a href="faq.html">Faq</a></li>
							<li><a href="help.html">Help</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>Extra pages</h3>
						<ul>
							<li><a href="media-gallery.html">Media gallery</a></li>
							<li><a href="cart-1.html">Cart page 1</a></li>
							<li><a href="cart-2.html">Cart page 2</a></li>
							<li><a href="cart-3.html">Cart page 3</a></li>
							<li><a href="pricing-tables.html">Responsive pricing tables</a></li>
							<li><a href="coming_soon/index.html">Coming soon</a></li>
							<li><a href="icon-pack-1.html">Icon pack 1</a></li>
							<li><a href="icon-pack-2.html">Icon pack 2</a></li>
							<li><a href="icon-pack-3.html">Icon pack 3</a></li>
							<li><a href="icon-pack-4.html">Icon pack 4</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</nav>
			<div class="follow_us">
				<ul>
					<li>Follow us</li>
					<li><a href="#0"><i class="ti-facebook"></i></a></li>
					<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
					<li><a href="#0"><i class="ti-google"></i></a></li>
					<li><a href="#0"><i class="ti-pinterest"></i></a></li>
					<li><a href="#0"><i class="ti-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main_menu -->
@yield('content')

@foreach($errors as $error)
{{ $error }}
@endforeach
<footer>
    <div class="container margin_120_95">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="{{ asset('assets/img/logo.png') }}" width="149" height="42" data-retina="true" alt=""></p>
                <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#0"><i class="ti-google"></i></a></li>
                        <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="#0">Admission</a></li>
                    <li><a href="#0">About</a></li>
                    <li><a href="#0">Login</a></li>
                    <li><a href="#0">Register</a></li>
                    <li><a href="#0">News &amp; Events</a></li>
                    <li><a href="#0">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                    <li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@udema.com</a></li>
                </ul>
                <div id="newsletter">
                <h6>Newsletter</h6>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                    <div class="form-group">
                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                        <input type="submit" value="Submit" id="submit-newsletter">
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2017 Udema</div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->

	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_search"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->

	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/common_scripts.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	<script src="{{asset('assets/assets/validate.js') }}"></script>
	  @toastr_render
@yield('js')
</body>
</html>
