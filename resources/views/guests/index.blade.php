<!DOCTYPE HTML>

<html>
	<head>
		<title>Orzoqni Al Hayat | Home </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" />
    {{-- Logo  --}}
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
      <a href="{{route('index')}}">Home</a>
				<a href="{{route('login')}}">Login</a>
				<a href="{{route('register')}}">Sign Up</a>
			<a href="{{route('contact-Us.index')}}">Contact Us</a>
        
			</header>

	

		<!-- Banner -->
			<section id="banner" style="background-image: url('img/banner.jpg')">
				<div class="inner">
					<header>
						<h1>Orzoqni Al Hayat</h1>
						<p>Save your life and others lives.<br>Book your appointement easily.</p>
					</header>
					{{-- <a href="{{route('login')}}" class="button big scrolly" style="background-color: ">Login</a>
					<a href="{{route('register')}}" class="button big scrolly">Sign Up</a> --}}
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="img/pic01.png" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Who Are We?</h3>
										<p style="color: black">This platform is a general prototype for an appointment booking & blood donation announcements system.</p>
										<p style="color: black">The main reason to create this initial demo was because of noticing how much Moroccans need: 
											a platform where they can find donators or be donators, 
											managing booking appointments, 
											a trusted resources for medical information and guides, 
											and rising awareness of blood donation importance</p>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Why Is It Important To Donate?</h3>
									<p>Donating to charity is a major mood-booster. The knowledge that you’re helping others is hugely empowering and, in turn, can make you feel happier and more fulfilled. Research has identified a link between making a donation to charity and increased activity in the area of the brain that registers pleasure - proving that as the old adage goes, it really is far better to give than to receive.</p>
									<p>Donating to urgent cases is a major life-saver, you save lives and make families happy to have their patient family-member by their sides again.</p>
									<a href="#" class="button">Besides, Who Knows?! May Be It Will Save Yours Too!</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="img/pic02.png" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>What Services Do We Provide So Far?</h2>
								<p style="color: brown">Let's have a look, a curious one!</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="img/pic03.png" alt="" width="400" height="auto" />
									</div>
									<a href="#" class="button" style="background-color: black">Blood Donation Announes Platform</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="img/pic05.jpg" alt="" width="400" height="auto" />
									</div>
									<a href="#" class="button" style="background-color: black">News Feed</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="img/pic04.webp" alt="" width="400" height="auto" />
									</div>
									<a href="#" class="button" style="background-color: black">Booking Appointment</a>
								</div>
							</div>
						</div>
					</section>

			</div>

		

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/2ndMain.js"></script>

	</body>
</html>
         
  