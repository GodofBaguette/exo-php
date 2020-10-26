<?php 
setcookie('pseudo', 'Nicolas', time() + 365*24*3600, null, null, false, true); 
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true);
// pseudo = nom du cooki
// M@teo21 = valeur du cookie
// time() + 365*24*3600 = signifie temps actuel + 1 an avant expiration
// httponly = derniere valeur true
// pour modifier un cookie il suffit de refaire un setcookie engardant le même nom ex : 'pseudo'
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>
</body>
</html>