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

		<a href="{{url('/')}}"  class="logo"><img src="images/model logo.png"><p>TMA agency</p></a>

		<nav class="navbar">
			<a class="active" href="{{ url('/')}}">home</a>
			<a href="{{url('models')}}">models</a>
			<a href="#about">about</a>
			<a href="#review">review</a>
			<a href="#contact_us">contact us</a>
		</nav>

       <!-- <a href="#"><i class="fas fa-bars"></i></a> -->

	     <div class="icons">
			<i class="fas fa-bars" id="menu-bars"></i>
			<i class="fas fa-search" id="search-icon"></i>
		</div>

	</header>
 <!--header ends-->

    <!--search form starts-->
    <form action="" method="post" id="search-form">
        <input type="search" placeholder="search here..." id="search-box" name="">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--search form ends-->

 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>
 </body>
 </html>
