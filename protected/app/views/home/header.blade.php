<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>A.L.I.M (Aplikasi Laporan Ibadah Mingguan)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
{{HTML::style('assets/home/css/bootstrap.min.css')}}
{{HTML::style('assets/home/css/fancybox/jquery.fancybox.css')}}
{{HTML::style('assets/home/css/jcarousel.css')}}
{{HTML::style('assets/home/css/flexslider.css')}}
{{HTML::style('assets/home/js/owl-carousel/owl.carousel.css')}}
{{HTML::style('assets/home/css/style.css')}}

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}"><img src="assets/home/img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{URL::to('home')}}">Home</a></li> 
						<li><a href="{{URL::to('about')}}">About Us</a></li>
						<li><a href="{{URL::to('news')}}">Kegiatan</a></li>
                        <li><a href="{{URL::to('grafik')}}">Grafik</a></li>
                        <li><a href="{{URL::to('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	
@yield('content')	

	<footer>
	<div class="container">
		<div class="row">

			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>PKS Kecamatan Pinang</strong><br>
					Jl. H. R. Rasuna Said, Kelurahan Kunciran Jaya<br>
					 Kode Pos : 15144</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> kec.pinang@tangerangkota.go.id
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Arise 2015 All right reserved. By Ayu Dian Prasetiati. 2011_31_129. Skripsi. 2015.</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/pages/PKS-Pinang-Tangerang/550454218299471" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/PKSKotaTng" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{HTML::script('assets/home/js/jquery.js')}}
{{HTML::script('assets/home/js/jquery.easing.1.3.js')}}
{{HTML::script('assets/home/js/bootstrap.min.js')}}
{{HTML::script('assets/home/js/jquery.fancybox.pack.js')}}
{{HTML::script('assets/home/js/jquery.fancybox-media.js')}}
{{HTML::script('assets/home/js/portfolio/jquery.quicksand.js')}}
{{HTML::script('assets/home/js/portfolio/setting.js')}}
{{HTML::script('assets/home/js/jquery.flexslider.js')}}
{{HTML::script('assets/home/js/animate.js')}}
{{HTML::script('assets/home/js/custom.js')}}
{{HTML::script('assets/home/js/owl-carousel/owl.carousel.js')}}

</body>
</html>