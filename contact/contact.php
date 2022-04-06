<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact</title>
  	<link rel="stylesheet" href="contact.css">
	<script src="https://kit.fontawesome.com/6c23492044.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <img src="../img/logo.png" alt="">
        <nav>
            <a href="index.php">Home</a>
            <a href="usp.php">Over ons</a>
            <a href="wachttijd.php">Wachttijden</a>
            <a href="contact/contact.php">Contact</a>
        </nav>
    </header>
 <main>
   <div class="hero">
	<form action="../backend/backendController.php" method="post">
		<div class="row">
			<div class="input-groep">
			<input type="text" id="naam" name="naam" required>
			<label for="naam"><i class="fas fa-user"></i>Naam</label> 
			</div>
			<div class="input-groep">
			<input type="text" id="nummer" name="nummer" required>
			<label for="name"><i class="fas fa-phone-square-alt"></i>Telefoon Nummer</label>
			</div> 
		</div>

		<div class="input-groep">
			<input type="text" id="email" name="email" required>
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
</body>
</html>