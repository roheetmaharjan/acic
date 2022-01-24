<?php include('include/header.php'); ?>
<!-- ========================= BANNER ========================= -->
<?php include('components/text-slider.php'); ?>

<a class="smoothScroll hero-scroll-drop" href="#box-with-bg-img">
	<span class="hero-scroll-drop-text">Start Here</span>
	<span class="arrow down"></span>
</a>

<!-- ========================= SECTION CONTENT ========================= -->

<!-- ========== SECTION Program ================= -->
<section id="" class="section-padding course-program">
	<div class="container">
		<div class="course-program-wrp">
			<div class="course-program-img-wrp">
				<figure class="course-program-img">
					<img src="./assets/img/program-img.jpg" alt="">
				</figure>
			</div>
			<div class="course-program-search-box">
				<h4>Find Your Program</h4>
				<p>There’s a parth for everyone. Explore yours.</p>
				<ul class="course-program-select-nav">
					<li><a href="#">Business</a></li>
					<li><a href="#">Leadership & Management</a></li>
					<li><a href="#">Child Care</a></li>
					<li><a href="#">Aged Care</a></li>
					<li><a href="#">Comunity Services</a></li>
					<li><a href="#">Mental Health</a></li>
					<li><a href="#">Disibality</a></li>
				</ul>
				<form action="">
					<div class="form-box">
						<input type="text" class="form-control form-control-lg" placeholder="Search...">
						<a href="#" class="btn btn-danger">Search</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- ========== SECTION CAMPUS ================= -->
<section id="box-with-bg-img" class="section-padding box-with-bg-img-wrp pt-0">
	<div class="container">
		<h1 class="section-title">Our Campuses</h1>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<a href="#">
					<div class="box-with-bg-img">
						<figure>
							<img src="./assets/img/parramatta.jpg" alt="">
						</figure>
						<div class="box-with-bg-img-title">
							<h4>Parramatta Campus</h4>
							<p>Suite 1, Level 2, 17-21 Macquarie St, Parramatta, New South Wales 2150</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-12 col-md-6">
				<a href="#">
					<div class="box-with-bg-img">
						<figure>
							<img src="./assets/img/darwin-campus.jpg" alt="">
						</figure>
						<div class="box-with-bg-img-title">
							<h4>Darwin Campuse</h4>
							<p>43 Cavenagh Street, Darwin Northern Territory 0800</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="campus-btn-wrp">
			<a href="#" class="btn btn-danger">Explore Courses</a>
			<a href="#" class="btn btn-danger">Download Brochure</a>
		</div>
	</div>
</section>
<!-- ========== SECTION TESTIMONIAL ================= -->
<section id="testimonial" class="section-padding testimonial">
	<div class="container">
		<div class="owl-carousel owl-theme testimonial-slider">
			<div class="testimonial-item">
				<div class="testimonial-content">
					<img src="./assets/img/testi-quote.png" alt="" class="testimonial-quote-icon">
					<h5>I’m so grateful for the scholarship and for ACIC in general. Everyone is so supportive and accepting. It really feels like another home to me.</h5>
					<div class="testimonial-name">Sumi Yadav</div>
					<div class="testimonial-designation">Leadership & Management</div>
				</div>
				<div class="testimonial-image-wrp">
					<figure>
						<img src="./assets/img/testimonial.jpg" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== SECTION NEWS AND EVENTS ================= -->
<section id="news" class="section-padding news">
	<div class="container">
		<div class="clearfix">
			<h1 class="section-title section-title-with-bg float-left text-left"> <span>College</span> <br> <span>News & Events</span></h1>
			<a href="news.php" class="btn btn-danger float-right">View all news & Events</a>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-7">
				<div class="news-block news-block-with-text-overlay">
					<figure>
						<img src="./assets/img/news1.jpg" alt="">
					</figure>
					<div class="box-with-bg-img-title">
						<div class="event-date">News - 8 Oct 2021</div>
						<h4>Outstanding A Level Result for 2021, Read our full Result Exclusive</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="news-block">
					<figure>
						<img src="./assets/img/news2.jpg" alt="">
					</figure>
					<div class="box-with-bg-img-title">
						<div class="event-date">Events - 15 Sep 2021</div>
						<h4>ACIC TikTok CookOff</h4>
					</div>
				</div>
				<div class="news-block">
					<figure>
						<img src="./assets/img/news3.jpg" alt="">
					</figure>
					<div class="box-with-bg-img-title">
						<div class="event-date">Events - 15 Sep 2021</div>
						<h4>ACIC TikTok CookOff</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<?php include('include/footer.php'); ?>