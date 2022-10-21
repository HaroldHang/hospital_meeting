<?php
    // Routeur de l'application. Redirige vers l'action specifique a effectuer
    require 'connect.php';
    require './Controlleurs/connexionControlleur.php';
    require './Controlleurs/homeControlleur.php';
    require './Controlleurs/servicesControlleur.php';
    require './Controlleurs/rendezvousControlleur.php';

    // Routeur de l'application : Pour rediriger vers le controlleur specifique a effectue l'action
    if (isset($_GET['action'])) {
        
        $action = $_GET['action'];
        if ($action == "inscription") {
        
            inscrire($conn);
        } else if ($action == "seconnecter") {
            pageconnexion();
        } else if($action== "connecter"){
                connexion($conn);
        } else if ($action == "acceuil") {
            acceuil();
        } else if ($action == "deconnecter") {
        
            deconnecter();
        } else if ($action == "services") {
            pageService();
        } else if ($action == "rendezvous") {
            
            if (isset($_GET['dateStart']) && isset($_GET['dateEnd'])) {
                fetchRendezvous($conn, $_GET['dateStart'], $_GET['dateEnd'], false);
            } else if (isset($_GET['api'])) {
                fetchRendezvous($conn, null, null, true);
            }
        } else if ($action == "rendezvous/create") {
            $api = false;
            if (isset($_REQUEST['api'])) {
                $api = true;
            } 
            insertRendezvous($conn, $api);
        } 
        

    } else {
        inscriptionPage();
    }
    