<?php
session_start();
$_SESSION['nom'] = "Nicolas"; //affecter a la variable nom votre prenom
$_SESSION['team'] = ["benoit","mathilde","stephanie"];
$_SESSION['metier'] = [
            "benoit" => "dev",
            "mathilde" => "UI/UX",
            "stephanie" => "product owner"
        ];
$_SESSION['ma_verite'] = true;
$_SESSION['calcul'] = 555 + 5;

            
            
            
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titre = "exo php les bases 2eme partie"    
    ?>
    <title><?php echo $titre; ?></title>
    
</head>
<body>

    <?php echo 'Bonjour à tous, je m\'appelle ' . $_SESSION['nom'];?>
<!-- afficher la phrase suivante : bonjour a tous, je m'appelle ...${nom} -->



    <?php print_r($_SESSION['metier']);?>

<!-- faire a tableau afficher les valeur de l'array $team -->

<h1>la team</h1>
<p>composition</p>

<?php print_r($_SESSION['metier']);?>
<!-- faire un template d'afficher suivante : 
benoit notre dev
mathilde notre UI/UX
stephanie notre product owner 
DON'T HARDCODE
-->

<ul>la team again</ul>
<?php
foreach($_SESSION['metier'] as $cle=>$valeur)
    {
    echo $cle.' : '.$valeur.'<br>';
    }
?>

<!-- faire de meme mais avec un liste a puce 
DON'T HARDCODE
 -->

 <?php 
 
 if ($_SESSION['ma_verite'] === true){
    echo 'vrai';
 }else{
     echo 'faux';
 };
 
 ?>

<!-- faire un condition de comparaison sur $ma_verite
si true 
faire afficher <h1>vraix</h1>
sinon afficher <h1>faux</h1> -->


<?php 
 
 if ($_SESSION['calcul'] < 45 && $calcul > 15){
    echo '<h1>all good </h1>';
 } elseif($_SESSION['calcul'] < 15) {
     echo '<h1>not so good </h1>';
 } else {
     echo '<h1>too high </h1>';
 };
 
 ?>


<!-- faire un condition de comparaison sur $calcul
si le resultat entre 15 et 45 
<h1>all good <h1>
si le resultat est inferieur a 15
<H1>not so good <h1>
sinon 
<h1>too high<H1>
-->



<nav><a href="remember.php">remember</a></nav>  
    <!--ici liens vers la page remember -->


</body>
</html>