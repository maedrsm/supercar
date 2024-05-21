<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Événements </title>
	<link rel="stylesheet" href="style/evenement.css">

	<link rel="stylesheet" type="text/css" href="style/header_css.css">
	<link rel="stylesheet" type="text/css" href="style/footer_css.css">

</head>
<body>
	
	<!-- Header de la page -->

	<header>
    <div class="container">
        <div class="navbar">
        <a href="../index.html">
            <img src="images/logo.png" alt="SuperCar logo" class="logo">
        </a>        
		<nav>
        <ul>
		<li><a href="supercar_voiture.php">Nos voitures</a></li>
				<li><a href="supercar_essai.php">Essai</a></li>
				<li><a href="supercar_evenement.php">Évènements</a></li>
				<li><a href="supercar_contact.php"> Contactez-nous</a></li>
        </ul>
        </nav>
        <a href="supercar_connexion.html"><img src="images/icon.png" class="menu-icon"></a>
        </div>
    </div>
    </header>
	
<?php

session_start();

include("bdconnect.php");

$requete = "SELECT idevenement, image, titre, description_event FROM evenement";
$result = $bdd->query($requete);

echo '<h2>Liste des evenements  disponibles</h2>';

if ($result->num_rows > 0) {
    $count = 0;
	while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<div> <img class='image-event' src='" . $row['image'] . "' ></div>";
        echo "<div>";
        echo "<div class='card-block'>";
        echo "<h4 class='card-title'>" . $row['titre'] . "</h4>";
        echo "<p class='description'>" . $row['description_event'] . "</p>";
        echo "<a href='evenement_infos.php?idevenement={$row['idevenement']}'>";
        echo "<button class='button'> En savoir plus </button>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    }

mysqli_free_result($result);
mysqli_close($bdd);

?>


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
</html>
