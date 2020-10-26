<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p>
        <a href="formulaire.php?nom=Nico&amp;prenom=frey&amp;">Dis-moi bonjour</a>
    </p>

    <form action="formulaire.php" method="POST"> <!-- method GET = met les info dans l'url ou POST = invisible et plus de donné a envoyé -->
        <p></p><label>Prénom : </label><input type="text" name="prenom"></label></p>
        <p><input type="submit"></p>

        <p></p><label>Etes-vous végétarien ? </label><input type="checkbox" name="vegetarien"></label></p>
        <p><input type="submit"></p>
    </form>
</body>
</html>