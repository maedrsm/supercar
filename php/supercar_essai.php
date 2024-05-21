<!DOCTYPE html>
<html lang="fr">
<head>
	  <title> Supercar - Demande d'Essai </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/essaie_style.css">
    <link rel="stylesheet" type="text/css" href="style\header_css.css">
    <link rel="stylesheet" type="text/css" href="style\footer_css.css">
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


  <div class="container_essai">
    <div class="title"> Periode d'essai</div>
    <div class="content">

      <form id="demande_essai" method="post" action="demande_essai.php">
        <div class="user-details">
          <div class="input-box">
            <input type="text" class="input-field" name="nom" placeholder="Nom" required>
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="prenom" placeholder="Prénom" required>
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="nom_utilisateur" placeholder="Nom d'utilisateur" required>
          </div>

          <div class="input-box">
            <input type="mail" class="input-field" name="adresse_mail_client" placeholder="Adresse mail" required>
          </div>

          <div class="input-box">
            <input type="text" class="input-field" name="adresse_physique_client" placeholder="Adresse physique" required>
          </div>

          <div class="input-box">
            <input type="text" class="input-field" id="telephone" name="telephone" placeholder="Numéro de téléphone" required>
          </div>

          <div class="input-box">
            <select id="marque" class="select-field" name="marque" onchange="updateCarModels()">
              <option class="select-field" value="">Choisir une marque</option>
              <option class="select-field" value="Tesla">Telsa</option>
              <option class="select-field" value="BMW">BMW</option>
              <option class="select-field" value="Mercedes">Mercedes</option>
            </select>
          </div>

          <div class="input-box">
            <select class="select-field" id="modele" name="modele">
              <option value="" >Choisir un modele</option>
            </select>
          </div>

          <div class="text-box">
            <p class="title1"> Début de l'essai </p>
          </div>

          <div class="text-box">
              <p class="title1"> Fin de l'essai </p>
          </div>

          <div class="date-box">
            <input class="date-field" type="date" name="date_debut_essai" value="2023-04-10" required>
          </div>

          <div class="date-box">
            <input class="date-field" type="date" name="date_fin_essai" value="2023-04-17" required>
          </div>

          <div class="date-box">
            <input class="date-field" type="time" name="heure_debut_essai" value="10:00" required>
          </div>

          <div class="date-box">
            <input class="date-field" type="time" name="heure_fin_essai" value="15:00" required>
          </div>

        <div class="input-box">
          <button type="submit" class="button"> Enregistrer </button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script>
    const carModels = {
      Tesla: ["Model S", "Model X", "Rav4"],
      BMW: ["M5 Décapotable", "M5", "M4", "I8", "X5 M Sport", "M2 Coupe"],
      Mercedes: ["Benz AMG C63", "Benz C300", "Benz Classe C", "Benz GLA", "Benz SL"]
    };

    function updateCarModels() {
      const brandSelect = document.getElementById("marque");
      const modelSelect = document.getElementById("modele");
      const selectedBrand = brandSelect.value;

      // Clear existing options
      modelSelect.innerHTML = '<option value="">Select a car model</option>';

      // Add new options based on selected brand
      if (selectedBrand) {
        carModels[selectedBrand].forEach((model) => {
          const option = document.createElement("option");
          option.value = model;
          option.text = model;
          modelSelect.add(option);
        });
      }
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
</html>
