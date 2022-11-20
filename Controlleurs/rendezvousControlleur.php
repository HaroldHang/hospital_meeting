<?php   
    require './Models/rendezvous.php';
    //require './Models/deconnexion.php';

    function fetchRendezvous($connect, $dateStart, $dateEnd, $id, $api) {
        $result = getRendezVous($connect, $dateStart, $dateEnd, $id, $api);
        if ($api) {
            echo json_encode($result);
        } else {
            header("Location: index.php?action=services");
        }
    }
    
    function insertRendezvous($connect, $api=false) {
        $result = insertRdv($connect, $api); 
        //var_dump($result);
        //echo "okay";
        if ($api) {
            echo json_encode($result);
        } else {
            header("Location: index.php?action=services");
        }
        
    }

    function paiement($connect, $api=false) {
        $result = fairePaiement($connect, $api); 
        
        if ($api) {
            echo json_encode($result);
            exit;
        } else {
            header("Location: index.php?action=services");
        }
    }
    
    function fetchPaiement($connect, $dateStart, $id, $api) {
        $result = getPaiement($connect, $dateStart, $id, $api);
        if ($api) {
            echo json_encode($result);
        } else {
            header("Location: tableau-de-bord?view=paiements");
        }
    }