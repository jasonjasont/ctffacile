<?php
// Vérifie si le cookie "role" est défini et si l'utilisateur est admin
if (!isset($_COOKIE['role']) || $_COOKIE['role'] !== 'admin') {
    http_response_code(403); // Accès refusé
    echo "Accès refusé. Vous devez être admin.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
  <h1>Bienvenue dans la zone admin</h1>
  <p>Félicitations, vous avez trouvé la faille et accédé à la page admin !</p>
  <p>Flag : CTF{jenesuispasunflag}</p>
</body>
</html>