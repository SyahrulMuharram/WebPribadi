<!DOCTYPE html>
<html>
<head>
	<title>Guest Book</title>
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
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li class="active"><a href="guest book.php">GUEST BOOK</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Guest Book</p>	
		</div>	
	</section>
	
	<!-- guest book -->
	<section class="buku tamu">
		<div class="container">
		<center>
		<h3>Guest Book</h3>
		<form action="tampilkomentar.php"method="POST">
		<table border="0">
 		 <h3>We Really Need Your Comments and Suggestions
			 to Improve the Quality of Our Site</h3>
 		 </div>
  		<tr>
		<td>Your Name</td>
		<td>:</td>
		<td><input type="text" name="nama" size="20"></td>
		</tr>
  		<tr>
		<td>Your Email</td>
		<td>:</td>
		<td><input type="text" name="email" size: 40></td>
		</tr>
		<tr>
		<td>Your Comments</td>
		<td>:</td>
		<td><textarea rows="4" cols="50" name="komentar"></textarea></td>
		</tr>
		<tr>
		<td colspan="3"><input type="submit" value="Send"> <input type="reset" value="Cancel">
		</tr>
 		</div>
 		</center>
 	</section>
		</table>
		</form>
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
</table>
</form>
</body>
</html>