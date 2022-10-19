<!DOCTYPE html>
<html>
<head>
	<title>Home Web</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>	
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.instagram.com/syahrul.mhrrm/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.facebook.com/k.olay251/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/syahrull_20"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>

	<header>
		<div class="container">
			<ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="guest book.php">GUEST BOOK</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2><marquee>WELCOME TO MY WEBSITE</marquee></h2>
	</section>
	
	<!-- footer -->
	<footer>
	<div class="container">
		<small>Copyright &copy; 2021 - Syahrul. All Rights Reserved.</small>	
	</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>