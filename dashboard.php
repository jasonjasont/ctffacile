<?php
// Vérifie si le cookie "role" est défini
if (!isset($_COOKIE['role']) || $_COOKIE['role'] !== 'user') {
    header('Location: login.php'); // Redirection si non connecté
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord</title>
</head>
<body>
  <h1>Bienvenue sur votre tableau de bord utilisateur</h1>
  <p>Vous êtes connecté en tant qu'utilisateur normal.</p>
  <p>Astuce : Les cookies contiennent des informations intéressantes...</p>
  <a href="admin.php">Zone admin (réservée)</a>
</body>
</html>
