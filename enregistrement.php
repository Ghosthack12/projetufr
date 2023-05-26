<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$date_naissance=$_POST['date_naissance'];
$date_admission=$_POST['date_admission'];
$genre=$_POST['genre'];
$personne_a_prevenir=$_POST['personne_a_prevenir'];

require'connexion.php';

$stmt = "INSERT INTO `user`(`nom`, `prénoms`, `email`, `date de naissance`, `date d'admission`, `genre`, `personne à prévenir`) VALUES ('$nom', '$prenom', '$email', '$date_naissance', '$date_admission', '$genre', '$personne_a_prevenir')";
if ($connexion->query($stmt)===TRUE) {
    echo "Données enregistrées avec succès!";
} else {
    echo "Erreur lors de l'enregistrement des données: " . $stmt->error;
}

?>