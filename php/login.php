<?php

include("bdconnect.php");
session_start();

$nom_utilisateur = $_REQUEST["nom_utilisateur"];
$mot_de_passe = $_REQUEST["mot_de_passe"];

// Use prepared statements to prevent SQL injection
$requete = "SELECT nom_utilisateur, mot_de_passe FROM inscription WHERE nom_utilisateur=? AND mot_de_passe=?";
$stmt = mysqli_prepare($bdd, $requete);
mysqli_stmt_bind_param($stmt, "ss", $nom_utilisateur, $mot_de_passe);
mysqli_stmt_execute($stmt);

// Fetch the result
mysqli_stmt_store_result($stmt);
$num = mysqli_stmt_num_rows($stmt);

// Check if the username and password exist
if ($num == 1) {
    $_SESSION["nom_utilisateur"] = $nom_utilisateur; // Store the username in the session variable

    echo '<script>alert("Bonjour ' . $nom_utilisateur . ' !")</script>';
    header("Refresh: 0; URL='supercar_accueil.html'");

} else {
    echo '<script>alert("Le nom d\'utilisateur ou le mot de passe est incorrect.")</script>';
    header("Refresh: 0; URL='supercar_connexion.html'");
}

// Free the prepared statement
mysqli_stmt_free_result($stmt);

?>
