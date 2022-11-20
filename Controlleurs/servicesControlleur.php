<?php
    require './Models/services.php';
    function pageService ($conn, $id = null) { 
        $service = getService($conn, $id);
        $services = getServices($conn);
        require './views/_services.php';
    }

    function insertExamen($conn, $api) {
        $result = createExam($conn, $api);
        echo json_encode($result);
    }

    function fetchExam($conn, $api) {
        $result = getExam($conn, $api);
        if ($api) {
            echo json_encode($result); 
        }
    }

    function terminExam($conn, $api) {
       $result = finishExam($conn, $api);
       if ($api) {
        echo json_encode($result);
       } 
    }