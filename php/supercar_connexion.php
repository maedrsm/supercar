<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<head>
	<title> Supercar - Connexion </title>
	<link rel="stylesheet" type="text/css" href="style\connexion_style.css">
	<link rel="stylesheet" type="text/css" href="style\header_css.css">
	<link rel="stylesheet" type="text/css" href="style\footer_css.css">
</head>
<body>

	<!-- Header de la page -->

	<header>
		<div class="container">
			<div class="navbar">
				<a href="supercar_accueil.html">
					<img src="images/logo.png" alt="SuperCar logo" class="logo">
				</a>			
			<nav>
			<ul>
                <li><a href="supercar_voiture.php">Nos voitures</a></li>
				<li><a href="supercar_essai.html">Essai</a></li>
				<li><a href="supercar_evenement.php">Évènements</a></li>
				<li><a href="supercar_contact.html"> Contactez-nous</a></li>
			</ul>
			</nav>
			<a href="supercar_connexion.html"><img src="images/icon.png" class="menu-icon"></a>
			</div>
		</div>
		</header>


	<!-- Formulaire de Connexion -->
	<div class="espace-connexion">
		<div class="espace-formulaire" id="container">
            <div class="bouton-switch">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()"  >Connexion</button>
				<button type="button" class="toggle-btn" onclick="register()">Inscription </button>
			</div>
			<form id="login"class="input-group" method="request" action="login.php">
				<input type="text" class="input-field" name="nom_utilisateur" placeholder="Nom d'utilisateur" required>
				<input type="password" class="input-field" name="mot_de_passe" placeholder="Mot de passe" required>
				<br><br><br>
				<button type="submit" class="submit-btn">Se Connecter</button>

				<form action="logout.php">
					<button type="submit" class="logout-btn">Se Deconnecter</button>
				</form>

			</form>


			
	<!-- Formulaire d'Inscription -->

			<form id="register"class="input-group" method="post" action="register.php">
				<input type="text" class="input-field" name="nom" placeholder="Nom" required>
				<input type="text" class="input-field" name="prenom" placeholder="Prénom" required>
				<input type="text" class="input-field" name="nom_utilisateur" placeholder="Nom d'utilisateur" required>
				<input type="email" class="input-field" name="adresse_mail_client" placeholder="Adresse e-mail" required>
				<input type="tel" class="input-field" name="telephone" placeholder="Numéro de téléphone" required>
				<input type="password" class="input-field" name="mot_de_passe" placeholder="Mot de passe" required>			
				
				<input type="checkbox" class="choix">
				<span class="conditions"> J'accepte les <a class="termes" href="Conditions_d'utilisations.html">termes et conditions d'utilisation</a> </span>
				<button type="submit" class="submit-btn">S'inscrire</button>
			</form>
        </div>
	</div>


	<!-- Transition entre les deux formulaires -->

	<script>
	
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
	  
		function register() {
		  x.style.left = "-400px";
		  y.style.left = "50px";
		  z.style.left = "110px";
		}
	  
		function login() {
		  x.style.left = "50px";
		  y.style.left = "450px";
		  z.style.left = "0";
		}
	  </script>


 <!--Partie du footer-->
  
 <footer class="footer-distributed">
  
	<div class="footer-left">
	  <a href="supercar_accueil.html">
		<h3>SUPER<span>CAR</span></h3>
	  </a>
  
		<p class="footer-links">
			<a href="supercar_voiture.php"> Nos voitures </a>
			|
			<a href="supercar_essai.html"> Essai </a>
			|
			<a href="supercar_evenement.php"> Évènements </a>
			|
			<a href="supercar_contact.html"> Contactez-nous </a>
		</p>
  
		<p class="footer-company-name">Copyright © 2023 <strong>SUPERCAR</strong> Tous droits réservés </p>
	</div>
  
	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			<img src="logos/localisation.png">
			<p><span>MCCI Business School,</span>
				Ebene, Mauritius</p>
		</div><br>
  
		<div>
			<i class="fa fa-phone"></i>
			<img src="logos/whatsapp.png">
			<p>+230 1234 5678</p>
		</div><br>
  
		<div>
			<i class="fa fa-envelope"></i>
			<img src="logos/logo_mail.png">
			<p><a href="mailto:supercar2023@gmail.com">supercar2023@gmail.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>Notre Equipe</span>
			Ce projet <strong>SUPERCAR</strong> à été réalisé par Maeva Dorasamy,
			Jade Bissessur et Elisee L'aiguille. Classe de BTS SIO 2022-24
		</p>
	</div>
  </footer>
  

</body>

</body>
</html>

