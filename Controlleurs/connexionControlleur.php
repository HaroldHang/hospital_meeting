<?php
    require './Models/connexions.php';
    require './Models/deconnexion.php';

    
    function inscriptionPage() {
        if (isset($_SESSION['client'])) {
            header("Location: acceuil");
            exit;
        } else if (isset($_SESSION['medecin'])) {
            header("Location: tableau-de-bord/rendezvous");
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
        //$estInscrit = true;
        $services = getServices($connect);
        require './Views/acceuil.php';
        exit;
    }

    function pageconnexion($conn) {
        if (isset($_SESSION['client'])) {
            header("Location: acceuil");
            exit;
        }
        $messageErreur = "";
        $services = getServices($conn);
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
        header("Location: acceuil");
    }
    
    function pageConnMed($conn) {
        if (isset($_SESSION['medecin'])) {
            header("Location: tableau-de-bord?view=rendezvous");
            exit;
        }
        $messageErreur = "";
        $services = getServices($conn);
        require './views/pageconnexion.php';
        exit;
    }

    function connexionMed($connect) {
        $connMed = medConnexion($connect);
        if (isset($connMed['erreur'])) {
            $messageErreur = $connMed['message'];
            $services = getServices($connect);
            require './views/pageconnexion.php';
            exit;
        }
        $_SESSION['medecin'] = $connMed['medecin'];
        header("Location: tableau-de-bord?view=rendezvous");
        //echo "Okay";
    }

