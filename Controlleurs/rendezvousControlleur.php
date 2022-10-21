<?php   
    require './Models/rendezvous.php';
    //require './Models/deconnexion.php';

    function fetchRendezvous($connect, $dateStart, $dateEnd, $api) {
        $result = getRendezVous($connect, $dateStart, $dateEnd, $api);
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