<?php
    require './Models/connexions.php';
    require './Models/deconnexion.php';


    function inscriptionPage() {
        if (isset($_SESSION['client'])) {
            header("Location: index.php?action=acceuil");
            exit;
        }
        $messageErreur = "";
        require './Views/inscription.php';
    }

    function inscrire($connect) {
        $inscrire = inscription($connect); //model gerant l'inscription
        if (isset($inscrire['erreur'])) { // gestion des erreur s'ils existent
            $messageErreur = $inscrire['message'];
            require './Views/inscription.php';
            exit;
        }
        // Si non aller a la page d'acceuil
        //Demarrer une session
        //session_start();
        $_SESSION['client'] = $inscrire['user'];
        $estInscrit = true;
        require './Views/acceuil.php';
        exit;
    }

    function pageconnexion() {
        if (isset($_SESSION['client'])) {
            header("Location: index.php?action=acceuil");
            exit;
        }
        $messageErreur = "";
        require './views/pageconnexion.php';
    }

    function connexion($connect){
        $connexion = connexionClient($connect);
        if (isset($connexion['erreur'])) {
            $messageErreur = $connexion['message'];
            require './views/pageconnexion.php';
            exit;
        }
        $_SESSION['client'] = $connexion['client'];
        header("Location: index.php?action=acceuil");
    }
    

