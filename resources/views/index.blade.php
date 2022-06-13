<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manyatta.css')}}">

</head>
<body>
 <!--header starts-->

	<header>

		<a href="#"  class="logo"><img src="images/model logo.png"><p>Manyatta agency</p></a>

		<nav class="navbar">
			<a class="active" href="#home">home</a>
			<a href="#models">models</a>
			<a href="#about">about</a>
			<a href="#review">review</a>
			<a href="#contact_us">contact us</a>
		</nav>

		<!-- <div class="icons">
			<i class="fas fa-bars" id="menu-bars"></i>
			<i class="fas fa-search" id="search-icon"></i>
			<a href="#" class="fas fa-heart"></a>
			<a href="#" class="fas fa-shopping-cart"></a>
		</div> -->

	</header>


 <!--header ends-->

 <!--search form starts-->
 <form action="" method="post" id="search-form">
 	<input type="search" placeholder="search here..." id="search-box" name="">
 	<label for="search-box" class="fas fa-search"></label>
 	<i class="fas fa-times" id="close"></i>
 </form>
 <!--search form ends-->


 <<!--home section starts-->
<section class="home" id="home">
	<div class=" swiper mySwipper home-slider ">
		<div class="swiper-wrapper wrapper">
			<div class="swiper-slide slide ">
				<div class="content">
					<span>Fashion And Modelling</span>
					<h3>Manyatta Agency</h3>
					<p> Welcome To Manyatta Agency, a home to Fashion, Modelling and Videography.  <p>
					<a href="#" class="btn">Contact Us</a>
				</div>
				<div class="image">
					<img src="images/model2.jpg" alt="image">
				</div>
			</div>

			</div>
		    <div class="swiper-pagination"></div>

	</div>

</section>
 <!--home section ends-->

 <!--dishes section begins-->
<section class="dishes" id="models">

	<h3 class="sub-heading">our models</h3>
	<h1 class="heading">popular models</h1>


</section>

 <!--dishes section ends-->

  <!--about section starts-->
<section class="about" id="about">

	<h3 class="sub-heading">about us</h3>
	<h1 class="heading">why choose us</h1>

	<div class="row">

		<div class="image">
			<img style="border-radius: 5px;" src="{{asset('images/model1.jpg')}}" alt="image">
		</div>

			<div class="content">
				<h3>Best Modelling agency in the city</h3>
				<p>Here at Manyatta we identify talents, nurture them with the best skills interms of fashion, modelling and life skills in general. we work and develop our models from scratch to sky </p>
				<p>we're so determined with our team to achieve the great from this fiels. welcome all </p>

			 <div class="icons-container">
				<div class="icons">
					<i class="fas fa-shipping-fast"></i>
					<span>Try us Today</span>
			     </div>

				<div class="icons">
					<i class="fas fa-dollar-sign"></i>
					<span>View Models</span>
				</div>

				<div class="icons">
					<i class="fas fa-headset"></i>
					<span>24/7 services</span>
				</div>
				<a href="#" class="btn">Contact us</a>
			 </div>
		  </div>
	</div>
</section>
 <!--about section ends-->

 <!--menu section starts-->

<!--review section ends-->


<!--order section starts-->
<section class="order" id="contact_us">
<h3 class="sub-heading">Contact us</h3>
<h1 class="heading">contact us today to get intouch with our models</h1>

<form action="" method="post">
   <div class="inputBox">
	<div class="input">
		<span>name</span>
		<input type="text" placeholder="Enter your name" >
	</div>
	<div class="input">
		<span>number</span>
		<input type="number" placeholder="Enter your number" >
	</div>


	<div class="input">
		<span>your address</span>
		<textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
	</div>
	<div class="input">
		<span>your message</span>
		<textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
	</div>
  </div>
  <input type="submit" value="Submit" name="" class="btn">

</form>
</section>
<!--order section ends-->

<!--footer section starts-->
<section class="footer" id="footer">
	<div class="box-container">
		<div class="box">
			<h3>locations</h3>
			<a href="#">nairobi</a>
			<a href="#">mombasa</a>
			<a href="#">kisumu</a>
			<a href="#">nakuru</a>
			<a href="#">kakamega</a>
		</div>
		<div class="box">
			<h3>quick links</h3>
			<a href="#">home</a>
			<a href="#">models</a>
			<a href="#">about</a>
			<a href="#">contact us</a>
			<a href="#">order</a>
		</div>
		<div class="box">
			<h3>contact info</h3>
			<a href="#">+2547 121 356 43</a>
			<a href="#">+2547 128 639 95</a>
			<a href="#">+2547 121 058 43</a>
			<a href="#">alvinellavu@gmail.com</a>
			<a href="#">agandagracious@gmail.com</a>
		</div>

		<div class="box">
			<h3>follow us</h3>
			<a href="#">facebook</a>
			<a href="#">instagram</a>
			<a href="#">linkedln</a>
			<a href="#">twitter</a>

		</div>

	</div>
	<div class="credit">copyright @ {{now()->format('Y')}}</div> by <span>Alvine Llavu</span></div>
</section>


<!--footer section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>
</body>
</html>
