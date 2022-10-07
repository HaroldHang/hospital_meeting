<?php
    require './Models/connexions.php';
    require './Models/deconnexion.php';


    function inscriptionPage() {
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
        session_start();
        $_SESSION['user'] = $inscrire['user'];
        require './Views/acceuil.php';
        exit;
    }

    function pageconnexion() {
        $messageErreur = "";
        require './views/pageconnexion.php';
    }

   function connexion($connect){
        $connexion = connexionClient($connect);
        if (isset($connexion['erreur'])) {
            $messageErreur = $connexion['message'];
            require './views/acceuil.php';
        }
    }
    

