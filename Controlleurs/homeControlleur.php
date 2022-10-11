<?php


    function acceuil() {
        if (isset($_SESSION['client'])) {
            require './Views/acceuil.php';
        }
        else {
            header("Location: ./index");
        }
    }

    function deconnecter () {
        session_unset();
        session_destroy();
        header("Location: ./index.php?action=seconnecter");
    }