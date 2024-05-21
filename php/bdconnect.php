<?php

$host = "mysql-mae.alwaysdata.net";
$login = "mae_user_bdd";
$password = 'maBDDSIO';
$bdname = "mae_supercar_bdd";

$bdd = mysqli_connect($host, $login, $password, $bdname);

if (!$bdd) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
if ($bdd)

{
    echo "Connexion reussie a MYSQL";
}

else

    {
        echo "Connexion non-reussite";
    }

mysqli_set_charset($bdd,"utf8");
?>