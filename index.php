<?php
    require 'connect.php';
    require './Controlleurs/connexionControlleur.php';

    // Routeur de l'application : Pour rediriger vers le controlleur specifique a effectue l'action
    if (isset($_GET['action'])) {
        
        $action = $_GET['action'];
        if ($action == "inscription") {
        
            inscrire($conn);
        } else if ($action == "seconnecter") {
            pageconnexion();
        } 
          if($action== "connecter"){
             connexion($conn);
        }
            

    } else {
        inscriptionPage();
    }
    