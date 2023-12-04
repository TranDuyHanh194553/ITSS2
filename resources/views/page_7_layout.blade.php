<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!-- <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="public/frontend/images/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<!-- <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul> -->
							</div>
							
							<div class="btn-group">
								<!-- <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul> -->
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa"></i><h3> Trang chủ <h3></a></li>
								<li><a href="#"><i class="fa"></i> <h3> Đề xuất <h3></a></li>
								<li><a href="checkout.html"><i class="fa"></i> <h3> Tìm kiếm <h3></a></li>
								<li><a href="cart.html"><i class="fa"></i> <h3> Chat <h3></a></li>
								<li><a href="login.html"><i class="fa"></i> <h3> Hoạt động <h3></a></li>
								<!-- user login dropdown start-->
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">
										<img alt="" src="public/backend/images/2.png">
										<span class="username"> Admin </span>
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu extended logout">
										<li><a href="#"><i class=" fa fa-suitcase"></i> Profile</a></li>
										<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
										<li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
									</ul>
								</li>
        <!-- user login dropdown end -->
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<!-- <li><a href="{{URL::to('/trang-chu')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li>  -->
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  -->
								<li></a>Trang Đề Xuất</li>
								<!-- <li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
						<!-- <div class="mainmenu text-right">
							<ul class="kkk">
								<li></a>Trang Đề Xuất</li>
 							</ul>	
						<div> -->
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<!-- <input type="text" placeholder="Search"/> -->
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
							<div class="col-sm-4">
									<img src="public/frontend/images/girl1.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="public/frontend/images/pricing.png"  class="pricing" alt="" /> -->
								</div>
								<div class="col-sm-8">
									<!-- <h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2> -->
									<p> Tên: </p>
									<p> Tuổi: </p>
									<p> Địa chỉ: </p>
									<p> Quan tâm: </p>
									<button type="button" class="btn btn-default get">🤍</button>
									<button type="button" class="btn btn-default get">💬</button>
								</div>
								
							</div>

							<div class="item">
							<div class="col-sm-4">
									<img src="public/frontend/images/girl1.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="public/frontend/images/pricing.png"  class="pricing" alt="" /> -->
								</div>
								<div class="col-sm-8">
									<!-- <h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2> -->
									<p> Tên: </p>
									<p> Tuổi: </p>
									<p> Địa chỉ: </p>
									<p> Quan tâm: </p>
									<button type="button" class="btn btn-default get">🤍</button>
									<button type="button" class="btn btn-default get">💬</button>
								</div>
								
							</div>

							<div class="item">
							<div class="col-sm-4">
									<img src="public/frontend/images/girl1.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="public/frontend/images/pricing.png"  class="pricing" alt="" /> -->
								</div>
								<div class="col-sm-8">
									<!-- <h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2> -->
									<p> Tên: </p>
									<p> Tuổi: </p>
									<p> Địa chỉ: </p>
									<p> Quan tâm: </p>
									<button type="button" class="btn btn-default get">🤍</button>
									<button type="button" class="btn btn-default get">💬</button>
								</div>
								
							</div>
							<!-- <div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div> -->
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				
				<div class="col-sm-12 padding-right">
				
				@yield('content')	

				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->					
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Bản quyền thuộc về nhóm De-to</p>
					<p class="pull-right">Liên hệ <span><a target="_blank" href="http://www.youtube.com">deto123@gmail.com</a></span> | 0123456789</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>