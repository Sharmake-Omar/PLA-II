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
</body>
</html>