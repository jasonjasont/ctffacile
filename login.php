<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification basique des identifiants
    if ($username === 'user' && $password === 'password') {
        // Définir un cookie pour l'utilisateur
        setcookie('role', 'user', time() + 3600, '/'); // Cookie vulnérable
        header('Location: dashboard.php'); // Redirection vers le tableau de bord
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
</head>
<body>
  <h1>Page de connexion</h1>
  <?php if (isset($error)) : ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>
  <form action="login.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Se connecter</button>
  </form>
</body>
</html>