<?php

$connexion=mysqli_connect("localhost","root","","ufrkizerbo");
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}
?>

