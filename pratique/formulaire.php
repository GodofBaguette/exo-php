<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 
        if(isset($_GET['nom']) AND isset($_GET['prenom']))
            {
                echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
            } //isset permet de vérifier si la variable existe
        else {
                echo 'Pas de nom ou de prénom défini !';
        };
    ?>

    <p>Bonjour <?php echo htmlspecialchars($_POST['prenom']);?></p>
    <!-- htmlspecialchars() protege l'espace ecriture des code html -->

    <?php
        if(isset($_POST['vegetarien']))
        {
            echo '<p>Vous êtes donc végétarien</p>';
        } else {
            echo '<p>Vous n\'êtes pas végétarien</p>';
        }
    ?>

</body>
</html>