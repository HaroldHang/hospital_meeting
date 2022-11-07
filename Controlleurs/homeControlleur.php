<?php

    //require './Models/services.php';

    function acceuil($conn) {
        if (isset($_SESSION['client'])) {
            $services = getServices($conn);
            require './Views/acceuil.php';
        }
        else {
            header("Location: index");
        }
    }

    function acceuilMed($conn, $view) {
        if (isset($_SESSION['medecin'])) {
            $services = getServices($conn);
            $service = getService($conn, $_SESSION['medecin']['id_specialite']);
            $currentView = $view;
            require './Views/medecin.php';
        }
        else {
            header("Location: medecin");
        }
    }

    function deconnecter () {
        session_unset();
        session_destroy();
        header("Location: connexion");
    }