<!--Main Footer-->
<footer class="main-footer style-two" style="background-image: url(assets/images/background/pattern-31.png)">
		<!-- Vector One -->
		<span class="footer-vector_one">
			<img src="assets/images/resource/footer-vector-1.png" alt="" />
		</span>
		<!-- Vector Two -->
		<span class="footer-vector_two">
			<img src="assets/images/resource/footer-vector-2.png" alt="" />
		</span>
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="main-footer_widgets">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
							@foreach($footer as $item)
                            <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="main-footer_logo">
                                    	<a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
                                    </div>
                                    <div class="main-footer_text">{{$item->additionl1}}</div>
									<!-- Social Box -->
									<ul class="footer-social_box">
										<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
										<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
										<li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
										<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
									</ul>
								</div>
							</div>
							@endforeach
							{{-- <!--Footer Column-->
                            <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Service</h4>
									<ul class="main-footer_list">
										<li><a href="#">Emergency</a></li>
										<li><a href="#">Psychotherapy</a></li>
										<li><a href="#">Hourly Care</a></li>
										<li><a href="#">Respite Home</a></li>
										<li><a href="#">Advanced Care</a></li>
										<li><a href="#">Laboratory</a></li>
									</ul>
								</div>
							</div> --}}
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							{{-- <!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
									<h4 class="main-footer_title">Newsletter</h4>
									<div class="newsletter-text">To receive email releases, simply provide us with your email address below.</div>
									<!-- Subscribe Form -->
									<div class="subscribe-form style-two">
										<form method="post" action="https://html.themerange.net/merit/merit/contact.html">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Your Email Address" required>
												<button type="submit" class="theme-btn fa-solid fa-paper-plane fa-fw"></button>
											</div>
										</form>
									</div>
								</div>
							</div>
							 --}}
							<!--Footer Column-->

                            @foreach ($headers as $header)
							<div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h4 class="main-footer_title">Contact Info</h4>
									<ul class="main-footer_contact-list style-two">
										<li><span class="icon fa-solid fa-phone fa-fw"></span>{{$header->sub_location}}</li>
										<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:{{$header->email}}">{{$header->email}}</a></li>
										<li><span class="icon fa-solid fa-clock fa-fw"></span>{{$header->open_date}} <br> {{$header->close_date}}</li>
									</ul>
									
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="main-footer_bottom">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="footer_copyright">Copyright 2024 Ecotence All Rights Reserved</div>
					<!-- Scroll To Top -->
					<div class="footer-scroll_top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
				</div>
			</div>
			
		</div>
	</footer>
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa fa-solid fa-xmark fa-fw"></span></button>
		<form method="post" action="https://html.themerange.net/merit/merit/blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
	<div class="color-trigger">
		<i class="fa-solid fa-gear fa-fw"></i>
	</div>
	<div class="color-palate-inner">
		<div class="color-palate-head">
			<h6>Choose Options</h6>
		</div>
		
		<!-- Demos Carousel -->
		<div class="demos-carousel">
			<div class="demos-title">Demo's Layouts</div>
			<ul class="single-item-carousel owl-carousel owl-theme demos-list">
				<li data-text="Home General"><a href="index.html"><img src="assets/images/demos/1.jpg" alt=""></a></li>
				<li data-text="Home Clinic"><a href="index-2.html"><img src="assets/images/demos/2.jpg" alt=""></a></li>
				<li data-text="Home Dentist"><a href="index-3.html"><img src="assets/images/demos/3.jpg" alt=""></a></li>
				<li data-text="Home Cardiology"><a href="index-4.html"><img src="assets/images/demos/4.jpg" alt=""></a></li>
				<li data-text="Home Surgery"><a href="index-5.html"><img src="assets/images/demos/5.jpg" alt=""></a></li>
				<li data-text="Home Veterinary"><a href="index-6.html"><img src="assets/images/demos/6.jpg" alt=""></a></li>
				<li data-text="Home Veterinary"><a href="index-7.html"><img src="assets/images/demos/7.jpg" alt=""></a></li>
			</ul>
		</div>
		
		<!-- Colors -->
		<div class="various-color clearfix">
			<div class="colors-list">
				<span class="palate default-color active" data-theme-file="assets/css/color-themes/default-color.css"></span>
				<span class="palate green-color" data-theme-file="assets/css/color-themes/green-color.css"></span>
				<span class="palate olive-color" data-theme-file="assets/css/color-themes/blue-color.css"></span>
				<span class="palate orange-color" data-theme-file="assets/css/color-themes/orange-color.css"></span>
				<span class="palate purple-color" data-theme-file="assets/css/color-themes/purple-color.css"></span>
				<span class="palate teal-color" data-theme-file="assets/css/color-themes/teal-color.css"></span>
				<span class="palate brown-color" data-theme-file="assets/css/color-themes/brown-color.css"></span>
				<span class="palate yellow-color" data-theme-file="assets/css/color-themes/yellow-color.css"></span>
			</div>
		</div>
				
		<h6>RTL Version</h6>
		<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
		<h6>Boxed Version</h6>
		<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
		<h6>Want Sticky Header</h6>
		<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
		<h6>Dark Verion</h6>
		<ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>
		
		<div class="purchase-box">
			You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.
			<a href="#" class="theme-btn btn-style-two">
				<span class="btn-wrap">
					<span class="text-one">buy now</span>
					<span class="text-two">buy now</span>
				</span>
			</a>
		</div>
		
	</div>
</div>
<!-- End Color Palate / Color Switcher -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/typeit.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/pagenav.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/color-settings.js"></script>


</body>
