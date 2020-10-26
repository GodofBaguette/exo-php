<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
</head>
<body>
    <?php include 'template/navigBar.php'; ?>
    <!-- incorporer la navBar permettant au client de retourner sur la page d'acceuil -->
    <p>Bonjour tu t'appelle <?php echo htmlspecialchars($_SESSION['name'])?> et ton address mail est le <?php echo htmlspecialchars($_SESSION['email'])?>.</p>
    <!-- message de succes ou d'erreur -->
</body>
</html>