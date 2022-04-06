<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact</title>
	<link rel="stylesheet" href="css/contact.css">
	<script src="https://kit.fontawesome.com/6c23492044.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <img src="img/logo.png" alt="">
        <nav>
            <a href="index.php">Home</a>
            <a href="usp.php">Over ons</a>
            <a href="wachttijd.php">Wachttijden</a>
            <a href="contacten/contact.php">Contact</a>
        </nav>
    </header>
 <main>
   <div class="hero">
	<form>
		<div class="row">
			<div class="input-groep">
				<input type="text" id="name" required>
			<label for="name"><i class="fas fa-user"></i>Name</label> 
			</div>
			<div class="input-groep">
				<input type="text" id="number" required>
			<label for="name"><i class="fas fa-phone-square-alt"></i>Phone number</label>
			</div> 
		</div>

		<div class="input-groep">
			<input type="text" id="email" required>
		    <label for="name"><I class="fas fa-envelope"></I>E-mail</label>
		</div>
		<div class="input-groep">
			<textarea name="message" rows="8" required></textarea>
		<label for="message"><i class="fas fa-comments"></i>Message</label> 
		</div>
		<button id="button"><i class="fas fa-paper-plane"></i>Send</button>
	</form>
   </div>

  </main>
  <footer class="footer-distributed">

	<div class="footer-left">

		<img src="..logo.png/" alt="">

		<p class="footer-links">
			<a href="#" class="link-1">Home</a>
			
			<a href="#" class="link-2">Unique selling points</a>
		
			<a href="../over ons/over ons.html">Wachttijd</a>
								
			<a href="../contacten/contact.html" class="link-4">Contact</a>
		</p>

		<p class="footer-bedrijf-naam">Andalucia © 2021</p>
	</div>

	<!-- <div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>Edisonstraat 25,</span>4816 AS Breda</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>Tel: (076) 886 3829</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="info@andalucia.nl">info@andalucia.nl</a></p>
		</div>

	</div> -->

	<div class="footer-right">

		<p class="footer-bedrijf-over ons">
			<span>SuperCoaster</span>
			Beste en snelste achtbaan in heel Nederland
		</p>

		<!-- <div class="footer-icons">
			<a target="_blank" href="https://www.facebook.com/Lunchroom-Innovation-917059418396388"><i class="fab fa-facebook-f"></i></a>
			<a target="_blank" href="https://instagram.com/la_kouzina"><i class="fab fa-instagram"></i></a>
		</div> -->
</footer>
</body>
</html>