<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  </head>

  <header>
  <nav>
    <a href=""><img class="logo" src="Logo.png" alt="Logo" ></a>
    <ul>
           <li><a href="#formul">Inscription</a></li>
           <li><a href="#">Liste des apprenants</a></li>
    </ul>
  </nav>
 </header>

  <body>
    <div id="formul" class="container">
      <form method="POST" action="enregistrement.php" >
        <h2 >Formulaire d'inscription</h2>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
        <label for="prenom">Prénoms :</label>
        <input type="text" name="prenom" required>
        <label for="email">Email :</label>
        <input type="email" name="email" required>
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" name="date_naissance" required>
        <label for="date_admission">Date d'admission :</label>
        <input type="date" name="date_admission" required>
        <label for="genre">Genre :</label>
        <select name="genre">
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
          <option value="autre">Autre</option>
        </select>
        <label for="personne_a_prevenir">Personne à prévenir :</label>
        <input type="text" name="personne_a_prevenir" required>
        <button data-label="Register" class="rainbow-hover">
        <span class="sp">S'enregistrer</span>
        </button>

      </form>
    </div>
  </body>

  <footer>
  <div id="contacts" class="footer-container">
    <div class="contact-info">
      <p>Email: contact@ujkz.bf Téléphone: +226 25 30 70 64 / 65 Adresse: 03 BP 7021 Ouagadougou 03 </p>
    </div>
  </div>
  </div>
  <div class="footer-bottom">
    <p class="copyright">
      Copyright © Université Joseph KI-ZERBO 2020 - Tous droits réservés. Powered by DSI
    </p>
</footer>

 
</html>
