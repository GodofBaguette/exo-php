<?php 
        if(isset($_POST['name']) AND isset($_POST['email']))
            {
                session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                header('Location: ../message.php');
                exit();
            }
        else {
                echo 'Pas de nom ou d\'email défini !';
        };
    ?>


