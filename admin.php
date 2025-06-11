<?php

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
  <script>//Le flag est dans une langue inconue, si vous voulez un indice, chercher dans la 1ère page</script>
  <p>PkvfXwY6GCLSPlroXU5ja3Tna3Zfa3TsXkvfX30=</p>
</body>
</html>