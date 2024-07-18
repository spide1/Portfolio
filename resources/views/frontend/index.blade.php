@include('frontend.header')
<!-- Slider Section -->
<section class="slider-section" style="background-image: url(assets/images/main-slider/pattern-1.png)" id="home">
		<div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide">
				<div class="auto-container">
					<div class="row clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-5 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="assets/images/main-slider/content-image.png" alt="" />
								</div>
							</div>
						</div>
						
						<!-- Content Column -->
                         @foreach($homeData as $data)
						<div class="content-column col-lg-7 col-md-12 col-sm-12">
							<div class="inner-column">
								<h2>{{ $data->heading }}</h2>
								<div class="text">{{ $data->sub_heading }}</div>
                                <div >{{ $data->description }}</div>
								<div class="btns-box">
									<a href="appointment.html" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Make Appointment</span>
											<span class="text-two">Make Appointment</span>
										</span>
									</a>
									<a href="about.html" class="theme-btn btn-style-three">
										<span class="btn-wrap">
											<span class="text-one">Learn More</span>
											<span class="text-two">Learn More</span>
										</span>
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			
			
			
			
			
		</div>
	</section>
	<!-- End Slider Section -->
	
	<!-- Call To Action Section -->
    <section class="call-to-action-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="appointment"><span class="icon flaticon-telephone"></span>Call For An Appointment</div>
					<a class="phone" href="tel:+1-800-123-4567">+1 (800) 123-4567</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Services Section -->
    <section class="services-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-doctor"></span>
						</div>
						<h4><a href="intensive-care.html">Heart surgery</a></h4>
						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-medical-team"></span>
						</div>
						<h4><a href="intensive-care.html">Valve prolapse</a></h4>
						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-stethoscope"></span>
						</div>
						<h4><a href="intensive-care.html">Emergency Cases</a></h4>
						<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- About Section -->
    <section class="about-section" id="about">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">About Merit</div>
							<h2 class="sec-title_heading">Great passion for healing</h2>
							<div class="sec-title_text">
								<p>Some up and coming trends are healthcare consolidation for independent healthcare centers that see a cut in unforeseen payouts. High deductible health plans are also expected to transpire along with a growth of independent practices.</p>
								<p>High deductible health plans are also expected to transpire along with a growth of independent practices.</p>
							</div>
						</div>
						
						<div class="row clearfix">
							<div class="column col-lg-5 col-md-6 col-sm-12">
								<ul class="list-style">
									<li>Professional Team</li>
									<li>Emergency Cases</li>
									<li>Expert Doctors</li>
								</ul>
							</div>
							<div class="column col-lg-5 col-md-6 col-sm-12">
								<ul class="list-style">
									<li>Modern Clinic</li>
									<li>24/7 Help Center </li>
								</ul>
							</div>
						</div>
						<div class="button-box">
							<a href="about.html" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">More About Us</span>
									<span class="text-two">More About Us</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-image" style="background-image: url(assets/images/resource/tablet.png)"></div>
						<div class="image" data-tilt data-tilt-max="3">
							<img src="assets/images/resource/cardialogy.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Help Section -->
	<section class="help-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">About Merit</div>
							<h2 class="sec-title_heading">Find the care you need</h2>
							<div class="sec-title_text">Replenish him third creature and meat blessed void a fruit gathered.</div>
						</div>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="help">For Help?</div>
						<div class="search-box">
							<form method="post" action="https://html.themerange.net/merit/merit/contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Find the care you need" required>
									<button type="submit"><span class="icon fa fa-search"></span>&ensp; Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Help Section -->
	
	<!-- Video Section -->
	<section class="video-section" style="background-image: url(assets/images/background/1.jpg)">
		<div class="auto-container">
			<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
			<h4>Watch Our Video</h4>
		</div>
	</section>
	<!-- End Video Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two" id="services">
		<div class="section-text variable-text"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">Our Services</div>
							<h2 class="sec-title_heading">We provide quality <br> healthcare services</h2>
							<div class="sec-title_text">Credibly innovate granular internal or “organic“ sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.</div>
						</div>
						
						<a href="about.html" class="theme-btn btn-style-one">
							<span class="btn-wrap">
								<span class="text-one">View All Services</span>
								<span class="text-two">View All Services</span>
							</span>
						</a>
						
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!-- Service Block Two -->
							<div class="service-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="number-box">
										<div class="number">01</div>
									</div>
									<h4><a href="#">Physical therapy</a></h4>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
								</div>
							</div>
							
							<!-- Service Block Two -->
							<div class="service-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="number-box">
										<div class="number">02</div>
									</div>
									<h4><a href="#">Pediatric Services</a></h4>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
								</div>
							</div>
							
							<!-- Service Block Two -->
							<div class="service-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="number-box">
										<div class="number">03</div>
									</div>
									<h4><a href="#">Diagnostic Center</a></h4>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
								</div>
							</div>
							
							<!-- Service Block Two -->
							<div class="service-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="number-box">
										<div class="number">04</div>
									</div>
									<h4><a href="#">Healthcare Center</a></h4>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Team Section -->
	<section class="team-section" id="team">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">doctors</div>
				<h2 class="sec-title_heading">Meet our experts doctors</h2>
				<div class="sec-title_text">Replenish him third creature and meat blessed void a fruit gathered.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="assets/images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Juan Annato</a></h4>
									<div class="designation">Dental Specialist</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="assets/images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jonathon Deo</a></h4>
									<div class="designation">Cardiologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="assets/images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jaffrin Skote</a></h4>
									<div class="designation">Gastroenterologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="button-box text-center">
				<a href="doctors.html" class="theme-btn btn-style-one">
					<span class="btn-wrap">
						<span class="text-one">View All Doctors</span>
						<span class="text-two">View All Doctors</span>
					</span>
				</a>
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Appointment Section -->
	<section class="appointment-section" style="background-image: url(assets/images/background/5.jpg)">
		<div class="auto-container">
			<div class="inner-container">
				<div class="appointment-box">
					<!-- Sec Title -->
					<div class="sec-title centered">
						<div class="title">Book Now</div>
						<h2>Make An Appointment</h2>
					</div>
					
					<!-- Appointment Form -->
					<div class="appointment-form">
					
						<!-- Appointment Form -->
						<form method="post" action="https://html.themerange.net/merit/merit/blog.html">
							<div class="row clearfix">
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="username" placeholder="Patient Name*" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="phone" placeholder="Phone Number*" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="email" name="email" placeholder="Email Address" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<select class="custom-select-box">
										<option>Department</option>
										<option>Department 01</option>
										<option>Department 02</option>
										<option>Department 03</option>
										<option>Department 04</option>
									</select>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<select class="custom-select-box">
										<option>Doctor</option>
										<option>Doctor 01</option>
										<option>Doctor 02</option>
										<option>Doctor 03</option>
										<option>Doctor 04</option>
									</select>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" class="datepicker" name="date" placeholder="Booking Date" required="">
									<span class="icon far fa-calendar-check"></span>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea class="" name="message" placeholder="Shortly describe the deases"></textarea>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
									<button type="submit" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Get Appointment</span>
											<span class="text-two">Get Appointment</span>
										</span>
									</button>
								</div>
								
							</div>
						</form>
							
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment Section -->

    <!-- Contact One -->
	<section class="contact-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">CONTACT INFO</div>
				<h2 class="sec-title_heading">Get in touch!</h2>
				<div class="sec-title_text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore <br> magna aliqua. Ut enim ad minim.</div>
			</div>
			<div class="row clearfix">
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon flaticon-placeholder"></span>
						<h4 class="contact-info-block_heading">Clinic Address</h4>
						<div class="contact-info-block_text">80 Broklyn Golden Street, New York, USA.</div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon flaticon-send-mail"></span>
						<h4 class="contact-info-block_heading">Email</h4>
						<div class="contact-info-block_text"><a href="mailto:needhelp@company.com">needhelp@company.com</a><br> <a href="mailto:info@company.com">info@company.com</a></div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon flaticon-clock"></span>
						<h4 class="contact-info-block_heading">Office Time</h4>
						<div class="contact-info-block_text">Mon - Sat 8:00 - 6:30, <br> Sunday - CLOSED</div>
					</div>
				</div>
				
				<!-- Contact Info Block -->
				<div class="contact-info-block col-lg-3 col-md-6 col-sm-12">
					<div class="contact-info-block_inner">
						<span class="contact-info-block_icon flaticon-telephone"></span>
						<h4 class="contact-info-block_heading">Phone</h4>
						<div class="contact-info-block_text"><a href="tel:+734-697-2907">(734) 697-2907</a><br> <a href="tel:+843-971-1906">(843) 971-1906</a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact One -->

    
    <!-- Map One -->
	<section class="map-one">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
	</section>
	<!-- End Map One -->
	
	<section class="contact-form-one" id="contact">
		<div class="auto-container">
			<div class="inner-container" style="background-image:url(assets/images/background/pattern-32.png)">
				
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">CONTACT US</div>
					<h2 class="sec-title_heading">Have questions? <br> Get in touch!</h2>
				</div>
				
				<!-- Default Form -->
				<div class="default-form contact-form">
					<form method="post" action="https://html.themerange.net/merit/merit/sendemail.php" >
                    <!-- <form action="" id='contact-form'> -->
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Name" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="email" placeholder="Email" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Phone" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="department" placeholder="Department" required="">
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<!-- Button Box -->
								<div class="button-box">
									<button class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">get in touch</span>
											<span class="text-two">get in touch</span>
										</span>
									</button>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<div class="check-box">
									<input type="checkbox" name="remember-password" id="type-1">
									<label for="type-1">I agree that my submitted data is collected and stored.</label>
								</div>
							</div>
							
						</div>
					</form>
				</div>
				<!-- End Default Form -->
				
			</div>
		</div>
	</section>
	<!-- End Contact Form One -->

     @include('frontend.footer')
	
