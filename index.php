


<!DOCTYPE html>
<?php
$epreuve_id = 24;        // <= Mettre ici l'id de l'epreuve
require_once '../../include/haut.php';



// Requête SQL 
$sql = "INSERT INTO epreuve VALUES (NULL, 'Nom de l\'épreuve', '{ctf:jenesuispasunflag}', 'divers/ctffacile', 10)";

?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTF Facile</title>
  <style>
    
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: white; 
      position: relative;
      overflow: hidden; 
    }

    h1, p {
      text-align: center;
      color: black; 
    }

    
    a {
      display: inline-block;
      text-decoration: none;
      color: white; 
      background-color: white; 
      border: 1px solid white; 
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      position: absolute; 
    }

    
    a:hover {
      color: black; 
      background-color: lightgray; 
      border-color: gray; 
    }
  </style>
</head>
<body>


  <h2>CTF Facile</h2>
  <p>Connectez-vous pour accéder à votre tableau de bord.</p>
  <a href="loginlogin.php" id="randomButton">Se connecter</a>

  <script>
    // Fonction qui permet de trouvé un lutin
    document.addEventListener("DOMContentLoaded", function () {
      const button = document.getElementById("randomButton");
      const bodyWidth = document.body.clientWidth;
      const bodyHeight = document.body.clientHeight;

      // Une fois le lutin trouvé le magicien le capture
      const randomX = Math.floor(Math.random() * (bodyWidth - button.offsetWidth));
      const randomY = Math.floor(Math.random() * (bodyHeight - button.offsetHeight));

      // Une fois le lutin capturé, on le place en prison
      button.style.left = `${randomX}px`;
      button.style.top = `${randomY}px`;

      // Une fois le lutin en prison il nous donne un indice pour la suite : Le nombre 24 est la solution
    });


  </script>
</body>
</html>