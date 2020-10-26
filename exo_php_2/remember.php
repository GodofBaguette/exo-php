<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titre = "get data"    
    ?>
    <title><?php echo $titre; ?></title>

    <?php 
    function changeName(){ 
        if($_SESSION['ma_verite'] === false){
            return $_SESSION['nom'] = 'Bernard';
        };
    };
    changeName();
    
    ?>

</head>
<body>

    <?php echo 'Salutation ' . $_SESSION['nom'] . ' petits scarabée deviendra grands .';?>
    <!-- afficher la phrase suivante : salutation ${nom} , petits scarabée deviendra ...  -->
    
</body>
</html>