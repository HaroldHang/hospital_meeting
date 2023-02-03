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

    function terminExam($conn, $api = false) {
       $result = finishExam($conn, $api);
       if ($api) {
        echo json_encode($result);
       } else {
        header("Location: tableau-de-bord?view=examens");
        
       } 
    }

    function downloadExam($conn, $examName) {
        $filePath = "./ressources/storage/$examName";
        if (file_exists($filePath)) {
            //echo $filePath;
            //print_r(pathinfo($filePath));
            //exit;
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: inline; filename="' . basename($filePath). '"');
            //header('Expires: 0');
            //header('Cache-Control: must-revalidate');
            //header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));
            flush();
            readfile($filePath, true);
            
            exit;
        } else {
            echo " no";
            exit;
        }
    }